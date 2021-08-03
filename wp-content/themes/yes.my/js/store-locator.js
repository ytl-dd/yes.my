(function($) {
    $(function() {
        /* Common settings */

        var $map = $('#storeMap'),
            $autocompleter = $('#storeAutocomplete'),
            $autocompleteTrigger = $('#toggleAutocomplete'),
            $infobox = $('#storeInfobox'),
            $mobileInfobox = $('#storeMobileInfobox'),
            $geolocationTrigger = $('#toggleGeolocation'),
            $statusMessage = $('#statusMessage'),
            $statusMessageBody = $('#statusMessageBody'),
            $statusMessageCloser = $('#statusMessageCloser'),

            defaultLatLng = { lat: 4.210484, lng: 101.975766 },
            messages = {
                cantLocateUser: 'We’re having trouble locating you. Try using our search and filter functions instead.',
                notAllowedLocation: 'Please enable the location service on your device.',
                generalError: 'We’ve encountered an error. Please try again later.'
            },

            imageUserPin = '../images/icons/icon-pin-location-red.png',
            imageStorePin = '../images/icons/icon-pin-location.png';

        /* Global variables */

        var outletTypeValues = [],
            serviceList = [],
            stateList = [],
            queryStrProps,
            animator;

        /* Setup media query watcher */

        var $mobileMq = $('#store-locator-mobile-mq'),
            mobileMq = false;

        $(window)
            .on('resize.storeMobileMq', function() {
                mobileMq = $mobileMq.css('font-family').indexOf('true') > -1;
            })
            .triggerHandler('resize.storeMobileMq');

        /* Setup data loading functions */

        var dataLoader = {
            init: function() {
                var self = this,
                    $outletTypes = $('.js-outlet-type');

                /* Don't process outlet types that have incomplete metadata */
                $outletTypes.each(function() {
                    if(typeof $(this).data('url') !== 'string' || $(this).val() === '') {
                        $outletTypes = $outletTypes.not(this);
                    }
                });

                self.total = $outletTypes.length;
                self.count = 0;

                $outletTypes.each(function() {
                    self.load($(this));
                });
            },

            load: function($input) {
                var self = this;

                $.ajax({
                    type: 'GET',
                    url: $input.data('url'),
                    dataType: 'xml',
                    success: function(data) {
                        prepData(data, $input);
                        self.count++;
                        if(self.count >= self.total) {
                            initPage();
                        }
                    },
                    error: function(d) {
                        console.log(d);
                    }
                });
            }
        };

        /* Setup XML preparation function */

        var xmlData = {/*
            Sample data structure.

            'Selangor': {
                'yesStore': [{
                    'shopName': 'Yes Kiosk Batu Pahat Mall',
                    'shopAddress': 'Yes Kiosk Batu Pahat Mall, GK22A &amp; GK22B, Batu Pahat Mall Jalan Kluang.',
                    'shopOpHour': 'Opens 10am - 10pm daily.',
                    'shopService': [
                        'Postpaid Activations',
                        'Prepaid Activations',
                        'Postpaid Bill Payment',
                        'Prepaid Top up',
                        'Prepaid reload card',
                        'Yes Device Sales only',
                        'Auto Debit Application (online)',
                        'Change of customer details',
                        'Yes Device Trouble shots',
                        'Yes Device Configuration',
                        'Faulty Device Replacement (Yes Device only)',
                        'Service Query',
                        'Termination'
                    ],
                    'shopLat': '1.863852',
                    'shopLng': '102.962634',
                    'latLng': new google.maps.LatLng('1.863852', '102.962634')
                }]
            }
        */};

        function prepData(data, $input) {
            var obj = {};

            $(data).find('state').each(function() {
                var stateName = $(this).attr('stateName'),
                    stateObj = xmlData[stateName];

                if(!stateObj) {
                    xmlData[stateName] = stateObj = {};
                }

                var outletObj = stateObj[$input.val()];

                if(!outletObj) {
                    stateObj[$input.val()] = outletObj = [];
                }

                if(stateList.indexOf(stateName) < 0) {
                    stateList.push(stateName);
                }

                $(this).find('shop').each(function() {
                    outletObj.push(prepShopData($(this)));
                });
            });

            xmlData[$input.val()] = obj;
        }

        function prepShopData($shop) {
            var shopObj = {};

            $shop.children().each(function() {
                switch(this.tagName) {
                    case 'shopLat':
                    case 'shopLng':
                        shopObj[this.tagName] = $(this).text().trim();

                        if(shopObj.shopLat && shopObj.shopLat !== '0'
                        && shopObj.shopLng && shopObj.shopLng !== '0') {
                            shopObj.latLng = new google.maps.LatLng(shopObj.shopLat, shopObj.shopLng);
                        }
                    break;

                    case 'shopService':
                        var serviceArr = [];

                        $(this).find('serviceList').each(function() {
                            var serviceListText = $(this).text().trim();

                            if(!serviceListText) {
                                return;
                            }

                            serviceArr.push(serviceListText);

                            if(serviceList.indexOf(serviceListText) < 0) {
                                serviceList.push(serviceListText);
                            }
                        });

                        shopObj[this.tagName] = serviceArr;
                    break;

                    default:
                        shopObj[this.tagName] = $(this).text().trim();
                    break;
                }
            });

            return shopObj;
        }

        /* Prepare Map functions */

        var map = {
            $el: $map,

            storeMarkers: [],
            markerClickers: [],

            init: function() {
                var self = this;

                self.instance = new google.maps.Map(self.$el[0], {
                    center: defaultLatLng,
                    // zoom: 18
                    zoom: 8,
                    scrollwheel: false
                });
            },

            setMainMarker: function(latLng, title) {
                var self = this;

                self.clearMainMarker();

                /*self.mainMarker = new google.maps.Marker({
                    position: latLng,
                    map: self.instance,
                    title: title,
                    icon: imageUserPin
                });*/

                self.instance.setCenter(latLng);

                if(self.instance.getZoom() < 14) {
                    self.instance.setZoom(14);
                }

                /*self.mainMarkerClicker = google.maps.event.addListener(self.mainMarker, 'click', function() {
                    self.instance.setCenter(self.mainMarker.getPosition());
                });*/
            },

            clearMainMarker: function() {
                var self = this;

                if(self.mainMarkerClicker) {
                    google.maps.event.removeListener(self.mainMarkerClicker);
                    self.mainMarkerClicker = undefined;
                }

                if(self.mainMarker) {
                    self.mainMarker.setMap(null);
                    self.mainMarker = undefined;
                }
            },

            findStores: function(center, distance) {
                var self = this;

                if(self.storeMarkers.length) {
                    self.clearStores();
                }

                statusMessage.close();
                infobox.hideBox();
                storeFilter.filterStores(center, distance);
                self.addStores(storeFilter.result);

                if(storeFilter.result.length) {
                    $('#noStores').hide();
                    $('#storeList').show().html(strBuilder.makeStoreListStr(storeFilter.result));
                    heightSync.watch('storeList', $('#storeList').find('.store-details-hdr'));
                    heightSync.sync();

                    if(storeFilter.result.length === 1) {
                        infobox.showBox(0, self.storeMarkers[0]);
                    } else if(storeFilter.result.length > 50) {
                        var markersInterval;

                        $(window).one('done', function() {
                            self.fitMarkersInView((center) ? 'includeMarker' : undefined);
                            clearInterval(markersInterval);
                        });

                        setTimeout(function() {
                            self.fitMarkersInView((center) ? 'includeMarker' : undefined);

                            markersInterval = setInterval(function() {
                                self.fitMarkersInView((center) ? 'includeMarker' : undefined);
                            }, 2000);
                        }, 250);
                    } else {
                        self.fitMarkersInView((center) ? 'includeMarker' : undefined);
                    }
                } else {
                    $('#noStores').show();
                    $('#storeList').hide().empty();
                }
            },

            addStores: function(storesArr) {
                var self = this;

                cancelAnimationFrame(animator);
                $(window).trigger('done');

                if(storesArr.length > 50) {
                    var subStoresArr,
                        i = 0,
                        draw = function() {
                            var subStoresArr = storesArr.slice(i,i+4);

                            for(j = 0; j < subStoresArr.length; j++) {
                                self.addStoreMarker(subStoresArr[j]);
                            }

                            i+=4;

                            if(i >= storesArr.length) {
                                $(window).trigger('done');
                            } else {
                                animator = requestAnimationFrame(draw);
                            }
                        };

                    draw();
                } else {
                    for(var i = 0; i < storesArr.length; i++) {
                        self.addStoreMarker(storesArr[i]);
                    }
                }
            },

            addStoreMarker: function(storeObj) {
                if(!storeObj.latLng) return;

                var self = this,
                    marker = new google.maps.Marker({
                        position: storeObj.latLng,
                        map: self.instance,
                        title: storeObj.shopName,
                        icon: imageStorePin
                    });

                self.storeMarkers.push(marker);

                self.markerClickers.push(
                    google.maps.event.addListener(marker, 'click', function() {
                        infobox.showBox(storeObj, marker);
                    })
                );
            },

            clearStores: function() {
                var self = this;

                while(self.markerClickers.length) {
                    google.maps.event.removeListener(self.markerClickers.pop());
                }

                while(self.storeMarkers.length) {
                    self.storeMarkers.pop().setMap(null);
                }
            },

            fitMarkersInView: function(includeMarker) {
                var self = this,
                    bounds = new google.maps.LatLngBounds();

                for(var i = 0; i < self.storeMarkers.length; i++) {
                    bounds.extend(self.storeMarkers[i].getPosition());
                }

                if(self.mainMarker && includeMarker) {
                    bounds.extend(self.mainMarker.getPosition());
                }

                self.instance.fitBounds(bounds);
            }
        };

        /* Prepare store filter functions */

        var storeFilter = {
            result: [],

            state: undefined,
            outletType: undefined,
            service: undefined,
            distance: undefined,

            filterStores: function(center, distance) {
                var self = this,
                    _result = [],
                    i;

                self.updateCriteria(distance);

                $.each(xmlData, function(stateName, outletTypeObj) {
                    if(!self.state || self.state === 'all' || self.state === stateName) {
                        $.each(outletTypeObj, function(outletType, stores) {
                            if(!self.outletType || self.outletType === 'all' || self.outletType === outletType) {
                                for(i = 0; i < stores.length; i++) {
                                    if(self.isMatchingCriteria(center, stores[i])) {
                                        _result.push(stores[i]);
                                    }
                                }
                            }
                        });
                    }
                });

                _result.sort(ascendingDistance);

                self.result = _result;
            },

            updateCriteria: function(distance) {
                var self = this;

                self.state = $('.js-state:checked').val();
                self.outletType = $('.js-outlet-type:checked').val();
                self.service = $('.js-service:checked').val();
                self.distance = distance;
            },

            clearCriteria: function() {
                $('#storeFilters').find('input[value="all"]').prop('checked', true);
            },

            isMatchingCriteria: function(center, storeObj) {
                var self = this;

                return self.hasLatLng(storeObj)
                    && self.isWithinDistance(center, storeObj)
                    && self.isMatchingService(storeObj);
            },

            hasLatLng: function(storeObj) {
                return storeObj.latLng;
            },

            isWithinDistance: function(center, storeObj) {
                var self = this;

                if(typeof center === 'undefined' || typeof self.distance === 'undefined') {
                    return true;
                } else {
                    storeObj.distance = distHaversine(center, storeObj.latLng);
                    return storeObj.distance < self.distance;
                }
            },

            isMatchingService: function(storeObj) {
                var self = this;

                if(!self.service || self.service === 'all') {
                    return true;
                } else {
                    return storeObj.shopService.indexOf(self.service) > -1;
                }
            }
        };

        /* Prepare store details population functions */

        var strBuilder = {
            markups: {
                details: [
                    '<div class="store-detail-header">',
                        '{{name}}',
                    '</div>',
                    '<div class="store-detail-section">',
                        '{{address}}',
                    '</div>',
                    '<div class="store-detail-section small-text">',
                        '<i>',
                            '{{opHour}}',
                        '</i>',
                    '</div>',
                    '<div class="store-detail-section uppercase">',
                        'Products &amp; Services',
                    '</div>',
                    '<div class="store-detail-section">',
                        '{{serviceList}}',
                        /*<ul>
                            <li>Smartphones</li>
                            <li>YesPlan + SIM Replacement</li>
                            <li>24-hour Payment Kiosk</li>
                            <li>Bill Payment</li>
                            <li>Credit Card Payment</li>
                            <li>Installment Plan</li>
                        </ul>*/
                    '</div>'
                ],
                infoboxAction: [
                    '<a href="', '{{getDirection}}', '" target="_blank" class="infobox-action">Get Directions</a>'
                ],
                detailsActions: [
                    '<div class="store-detail-section">',
                        '<a href="', '{{getDirection}}', '" target="_blank" class="store-link store-get-direction-link">Get Direction</a>',
                    '</div>'
                ],
                store: [
                    '<div class="store-hdr">',
                        '<div class="store-details-hdr">',
                            '{{storeDetails}}',
                        '</div>',
                        '{{storeDetailsAction}}',
                    '</div>'
                ],
                radio: [
                    '<input type="radio" id="', '{{id}}', '" name="', '{{name}}', '" value="', '{{value}}', '" class="', '{{cssClass}}', '" />',
                    '<label for="', '{{id}}', '">',
                       '<span class="box"></span> ',
                       '<div class="desc-hdr">', '{{label}}', '</div>',
                    '</label>'
                ]
            },

            makeStoreListStr: function(stores) {
                var self = this,
                    str = '';

                for(var i = 0; i < stores.length; i++) {
                    str += self.makeStoreStr(stores[i]);
                }

                return str;
            },

            makeStoreStr: function(storeObj) {
                var self = this,
                    storeMarkup = self.markups.store.slice(0),
                    actionsMarkup = self.markups.detailsActions.slice(0);


                replaceStr(storeMarkup, '{{storeDetails}}', self.makeDetailsStr(storeObj));
                if(storeObj.shopLat === '0' || storeObj.shopLng === '0') {
                    actionsMarkup = [];
                } else {
                    replaceStr(actionsMarkup, '{{getDirection}}', self.makeDirectionsUrl(storeObj));
                }
                replaceStr(storeMarkup, '{{storeDetailsAction}}', actionsMarkup.join(''));

                return storeMarkup.join('');
            },

            makeDetailsStr: function(storeObj) {
                var self = this,
                    params = {
                        name: storeObj.shopName,
                        address: storeObj.shopAddress,
                        opHour: storeObj.shopOpHour,
                        serviceList: self.makeServiceListStr(storeObj.shopService),
                    },
                    detailsMarkup = self.markups.details.slice(0);
                
                $.each(params, function(key, val) {
                    replaceStr(detailsMarkup, '{{' + key + '}}', val);
                });

                return detailsMarkup.join('');
            },

            makeInfoboxActionsStr: function(storeObj) {
                var self = this,
                    actionsMarkup = self.markups.infoboxAction.slice(0);

                replaceStr(actionsMarkup, '{{getDirection}}', self.makeDirectionsUrl(storeObj));

                return actionsMarkup.join('');
            },

            makeDirectionsUrl: function(storeObj) {
                var from, to;

                if(map.mainMarker) {
                    from = {
                        lat: map.mainMarker.getPosition().lat(),
                        lng: map.mainMarker.getPosition().lng()
                    };
                }

                to = {
                    lat: storeObj.shopLat,
                    lng: storeObj.shopLng
                };

                if(from) {
                    return [
                        'https://maps.google.com?',
                        'saddr=', from.lat, ',', from.lng,
                        '&daddr=', to.lat, ',', to.lng,
                    ].join('');
                } else {
                    return [
                        'https://maps.google.com?',
                        'daddr=', to.lat, ',', to.lng,
                    ].join('');
                }
            },

            makeServiceListStr: function(serviceArr) {
				if(serviceArr != undefined){
                var listStr = ['<ul>', 1, '</ul>'];

                listStr[1] = '';
                for(var i = 0; i < serviceArr.length; i++) {
                    listStr[1] += '<li>' + serviceArr[i] + '</li>';
                }

                return listStr.join('');
				}
            },

            makeRadioStr: function(params) {
                var radioMarkup = this.markups.radio.slice(0);

                $.each(params, function(key, val) {
                    replaceStr(radioMarkup, '{{' + key + '}}', val);
                });

                return radioMarkup.join('');
            }
        };

        /* Prepare Infobox functions */

        var infobox = {
            $el: $infobox,
            $mobileEl: $mobileInfobox,

            init: function() {
                var self = this;

                self.instance = new InfoBox({
                    content: self.$el[0],
                    pixelOffset: new google.maps.Size(45,-125),
                    closeBoxURL: ''
                });

                $('.infobox-closer').on('click', function(e) {
                    e.preventDefault();
                    self.hideBox();
                });
            },

            showBox: function(storeObj, markerObj) {
                var self = this;

                self.updateDetails(storeObj);
                self.$el.addClass('is-active');
                self.$mobileEl.addClass('is-active');
                self.instance.open(map.instance, markerObj);
                map.instance.setCenter(markerObj.getPosition());
                if(!mobileMq) {
                    map.instance.panBy(100, 75);
                }
            },

            hideBox: function() {
                var self = this;

                self.$el.removeClass('is-active');
                self.$mobileEl.removeClass('is-active');
                self.instance.close();
            },

            updateDetails: function(storeObj) {
                var self = this;

                /*
                 * Need to refer to the self cached $element or else the
                 * details will not properly update.
                 *
                 * I suspect that Google Maps attaches/detaches the infobox
                 * when it's opened/closed in the map, thus if you try to
                 * select the required element when the infobox is closed,
                 * you will end up not selecting the one that's been detached
                 * by Google Maps.
                 *
                 * The self cached $element circumvents this issue.
                 */
                self.$el.add(self.$mobileEl).find('.infobox-store-details').html(
                    strBuilder.makeDetailsStr(storeObj)
                );

                self.$el.add(self.$mobileEl).find('.infobox-actions').html(
                    strBuilder.makeInfoboxActionsStr(storeObj)
                );
            }
        };

        /* Prepare Autocompleter functions */

        var autocompleter = {
            $el: $autocompleter,
            $trigger: $autocompleteTrigger,

            init: function() {
                var self = this;

                self.$el = $autocompleter;

                self.instance = new google.maps.places.Autocomplete(self.$el[0], {
                    componentRestrictions: {country: 'my'}
                });

                google.maps.event.addListener(self.instance, 'place_changed', function() {
                    var placeObj = self.instance.getPlace();

                    map.setMainMarker(placeObj.geometry.location, placeObj.name);
                    storeFilter.clearCriteria();
                    map.findStores(map.mainMarker.getPosition(), 5);
                });

                self.$trigger.on('click', function(e) {
                    var placeObj = self.instance.getPlace();

                    if(!placeObj) {
                        self.$el.focus();
                    } else {
                        map.setMainMarker(placeObj.geometry.location, placeObj.name);
                        storeFilter.clearCriteria();
                        map.findStores(map.mainMarker.getPosition(), 5);
                    }
                });
            }
        };

        /* Prepare Geolocator functions */

        var geolocator = {
            $trigger: $geolocationTrigger,

            init: function() {
                var self = this;

                self.$trigger.on('click', function(e) {
                    e.preventDefault();
                    self.watch();
                });

            },

            watch: function() {
                var self = this;

                if(self.instance) {
                    return;
                }

                self.$trigger.addClass('is-running');
                statusMessage.close();

                self.instance = navigator.geolocation.watchPosition(
                    /* Geolocation is successful */
                    function(position) {
                        self.stop();

                        map.setMainMarker(
                            new google.maps.LatLng(
                                position.coords.latitude,
                                position.coords.longitude
                            ),
                            'Your current location'
                        );
                        
                        storeFilter.clearCriteria();
                        map.findStores(map.mainMarker.getPosition(), 5);
                    },
                    /* Geolocation has failed */
                    function(error) {
                        self.stop();

                        switch(error.code) {
                            case error.TIMEOUT:
                                statusMessage.open('cantLocateUser');
                            break;
                            
                            default:
                                statusMessage.open('notAllowedLocation');
                            break;
                        }
                    },
                    /* Geolocation settings */
                    {
                        enableHighAccuracy: true,
                        maximumAge: 30000,
                        timeout: 15000
                    }
                );

                /**
                 * For cases like Firefox where if user chooses to temporarily deny
                 * permission to their location (by choosing "Not Now"), the geolocation
                 * function will NOT trigger any callback.
                 *
                 * This timeout is to make sure that something WILL happen after a
                 * specific amount of time, and we will be assuming that the geolocation
                 * has failed.
                 **/
                self.timer = setTimeout(function() {
                    self.stop();
                    statusMessage.open('notAllowedLocation');
                }, 20000);
            },

            stop: function() {
                var self = this;

                self.$trigger.removeClass('is-running');
                navigator.geolocation.clearWatch(self.instance);
                self.instance = undefined;
                clearTimeout(self.timer);
                self.timer = undefined;
            }
        };

        /* Prepare status message functions */

        var statusMessage = {
            $el: $statusMessage,
            $body: $statusMessageBody,
            $closer: $statusMessageCloser,
            messages: messages,

            init: function() {
                var self = this;

                self.$closer.on('click', function(e) {
                    e.preventDefault();
                    self.close();
                });
            },

            open: function(key) {
                var self = this;
                self.$body.html(messages[key]);
                self.$el.slideDown(250);
            },

            close: function() {
                this.$el.slideUp(250);
            }
        };

        /* Height sync functions */

        var heightSync = {
            targets: {},

            init: function() {
                var self = this;

                $(window)
                    .on('resize.heightSync', function() {
                        self.sync();
                    })
                    .triggerHandler('resize.heightSync');
            },

            watch: function(key, $el) {
                this.targets[key] = $el;
            },

            unwatch: function(key) {
                delete this.targets[key];
            },

            sync: function() {
                var self = this;

                $.each(self.targets, function(key, $el) {
                    self.syncGroup($el);
                });
            },

            syncGroup: function($el) {
                var total = $el.length;
                if(total > 50) return;

                var self = this,
                    leftOffset = -9999,
                    row = [];

                $el.each(function(index) {
                    var targetLeftOffset = $(this).offset().left;

                    if(targetLeftOffset > leftOffset) {
                        row.push(this);
                    } else {
                        self.syncRow(row);
                        row = [this];
                    }
                    
                    leftOffset = targetLeftOffset;

                    if(index >= total-1) {
                        self.syncRow(row);
                    }
                });
            },

            syncRow: function(elArr) {
                var maxHeight = [];

                $(elArr).each(function() {
                    $(this).height('');
                    maxHeight.push($(this).outerHeight());
                });

                maxHeight = Math.max.apply(null, maxHeight);

                $(elArr).height(maxHeight);
            }
        };

        /* Initialise the page through the data loader */

        dataLoader.init();

        function initPage() {
            queryStrProps = queryStr();

            populateFilterInput();
            $('#totalStores').text(getTotalStores());

            $('#showAllStores').on('click', function(e) {
                storeFilter.clearCriteria();
                map.findStores();
                hideStoreFilters();
            });

            map.init();
            infobox.init();
            autocompleter.init();
            geolocator.init();
            statusMessage.init();
            heightSync.init();

            if(queryStrProps.outlet) {
                $('.js-outlet-type[value="' + queryStrProps.outlet + '"]').prop('checked', true);
                map.findStores();
            } else {
                geolocator.watch();
            }
        }

        /*
         * Instead of manually setting the input in the HTML markup,
         * dynamically populate the input based on the XML data. This
         * saves us the hassle of updating these values in two separate
         * places, and also flushes out human error because if there are
         * mistakes, they will appear in the final markup.
         */
        function populateFilterInput() {
            var serviceRadioStr = '',
                i;

            for(i = 0; i < serviceList.length; i++) {
                serviceRadioStr += strBuilder.makeRadioStr({
                    id: 'service' + (i+1),
                    name: 'service',
                    cssClass: 'js-service',
                    value: serviceList[i],
                    label: serviceList[i]
                });
            }

            $('#serviceInputHdr').append(serviceRadioStr);

            var stateRadioStr = '';

            for(i = 0; i < stateList.length; i++) {
                stateRadioStr += strBuilder.makeRadioStr({
                    id: 'state' + (i+1),
                    name: 'state',
                    cssClass: 'js-state',
                    value: stateList[i],
                    label: stateList[i]
                });
            }

            $('#stateInputHdr').append(stateRadioStr);

            $('#storeFilters').find('input[type="radio"]').on('change', function(e) {
                map.clearMainMarker();
                map.findStores();
                hideStoreFilters();
            });
        }

        function getTotalStores() {
            var count = 0;

            $.each(xmlData, function(stateName, outletTypeObj) {
                $.each(outletTypeObj, function(outletType, stores) {
                    count += stores.length;
                });
            });

            return count;
        }

        /* Filter toggles */

        $('.filter-types').each(function() {
            var $filters = $(this).find('.filter-type');

            $filters.each(function(index) {
                $(this).find('.filter-type-trigger').on('click', function(e) {
                    e.preventDefault();

                    if($filters.eq(index).hasClass('is-active')) {
                        $filters.eq(index).removeClass('is-active');
                        $filters.eq(index).find('.filter-type-content-hdr').slideUp(250);
                    } else {
                        $filters.removeClass('is-active').eq(index).addClass('is-active');
                        $filters.not('.is-active').find('.filter-type-content-hdr').slideUp(250);
                        $filters.filter('.is-active').find('.filter-type-content-hdr').slideDown(250);
                    }
                });
            });
        });

        /* Filter for mobile view */

        var animationend = 'animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd';

        $('#toggleFilters').on('click', function(e) {
            e.preventDefault();
            $('#storeFilters').addClass('is-active');
            $('body').addClass('filters-is-shown');
        });

        $('#storeFilters').find('.filter-closer').on('click', hideStoreFilters);

        function hideStoreFilters(e) {
            if(e) {
                e.preventDefault();
            }

            if($('#storeFilters').hasClass('is-active')) {
                $('#storeFilters')
                    .on(animationend, function() {
                        $('#storeFilters')
                            .off(animationend)
                            .removeClass('is-active is-hiding');
                    })
                    .addClass('is-hiding');

                $('body').removeClass('filters-is-shown');
            }
        }

        /* Utility functions */
        
        /* Function to get the distance between two sets of Google LatLng objects. */
        function distHaversine(p1, p2) {
            var R = 6371; // earth's mean radius in km
            var dLat  = rad(p2.lat() - p1.lat());
            var dLong = rad(p2.lng() - p1.lng());

            var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
                  Math.cos(rad(p1.lat())) * Math.cos(rad(p2.lat())) * Math.sin(dLong/2) * Math.sin(dLong/2);
            var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
            var d = R * c;

            return d.toFixed(3);
        }

        /* Convert unit to radian */
        function rad(x) {
            return x*Math.PI/180;
        }

        function ascendingDistance(a, b) {
            var distA = a.distance,
                distB = b.distance;

            // if(distA === 'nope') distA = 9999999;
            // if(distB === 'nope') distB = 9999999;
            return (distA - distB);
        }

        function replaceStr(targetArr, targetStr, replaceStr) {
            while(targetArr.indexOf(targetStr) > -1) {
                targetArr[targetArr.indexOf(targetStr)] = replaceStr;
            }
        }

        function queryStr() {
            var search = window.location.search;

            if(search.charAt(0) === '?') {
                search = search.substr(1);
            }

            var splitSearch = search.split('&'),
                searchProps = {};

            $.each(splitSearch, function(index, keyValStr) {
                var splitKeyValStr = keyValStr.split('=');

                searchProps[splitKeyValStr[0]] = splitKeyValStr[1];
            });

            return searchProps;
        }
    });
})(jQuery);