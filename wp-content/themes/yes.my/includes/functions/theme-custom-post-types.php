<?php 
    require_once(THEME_FUNCTIONS_PATH.'/custom-post-types-class/class-custom-post-types.php');

    if (!function_exists('register_custom_post_types')) {
        function register_custom_post_types() {
            // $arr_idd_countries  = [
            //     "Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antigua & Barbuda", "Argentina", "Armenia", "Aruba", "Ascension Island", "Australia", "Austria",  "Azerbaijan", 
            //     "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia Herzegovina", "Bostwana", "Brazil", "British Virgin Islands", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", 
            //     "Cambodia", "Cameroon", "Canada", "Canada - Northwest", "Cape Verde Island", "Cayman Island", "Central African Republic", "Chad", "Chile", "Chile Easter Island", "China", "Colombia", "Comoros", "Congo", "Congo Demoratic Rep. (formerly Zaire)", "Cook Island", "Costa Rica", "Croatia", "Cuba", "Cuba-Guantanamo", "Cyprus", "Czech Republic", 
            //     "Denmark", "Diego Garcia", "Djibouti", "Dominica", "Dominica Republic", 
            //     "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", 
            //     "Falkland Islands", "Faroe Islands", "Fiji Islands", "Finland", "France", "French Guiana", "French Polynesia (Tahiti)", 
            //     "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guatemala", "Guinea - Bissau", "Guinea Republic", "Guyana", 
            //     "Haiti", "Honduras", "Hong Kong", "Hungary", 
            //     "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Ireland - Special Service", "Israel", "Italy", "Ivory Coast", 
            //     "Jamaica", "Japan", "Jordan", 
            //     "Kazakhstan", "Kenya", "Kiribati Republic", "Korea North", "Korea South", "Kuwait", "Kyrgyzstan", 
            //     "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", 
            //     "Macau", "Macedonia", "Madagascar", "Malawi", "Maldives", "Mali", "Malta", "Marianas Islands", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Myanmar", 
            //     "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue Island", "Norfolk Island", "Norway", "Norway - Special Service", 
            //     "Oman", 
            //     "Pakistan", "Palau", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Puerto Rico", 
            //     "Qatar", 
            //     "Reunion Island", "Romania", "Russian Federation", "Rwanda", 
            //     "San Marino", "Sao Tome & Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "St. Helena", "St. Kitts & Nevis", "St. Lucia", "St. Pierre & Miquelon", "St. Vincent & the Grenadines", "Sudan", "Surinam", "Swaziland", "Sweden", "Switzerland", "Syria", 
            //     "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tokelau Island", "Tonga Island", "Trinidad & Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks & Caicos Island", "Tuvalu", 
            //     "US Virgin Islands", "USA - Alaska", "USA - Call 1800, 1855, 1866, 1877, 1883, 1888", "USA - Guam", "USA - Hawaii", "USA - Mainland", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United Kingdom - Premium Number", "Uruguay", "Uzbekistan", 
            //     "Vanuatu", "Venezuela", "Vietnam", "Wallis & Futuna", "Western Samoa", 
            //     "Yemen", 
            //     "Zambia", "Zimbabwe"
            // ];
            $custom_post_types  = new Yesmy_custom_post_types_config();

            $custom_posts_args  = [
                [
                    'name'          => 'Media Centre', 
                    'singular_name' => 'Media Centre', 
                    'slug'          => 'media-centre', 
                    'menu_icon'     => 'dashicons-media-document', 
                    'supports'      => ['title', 'editor'], 
                    'reg_taxonomy'  => ['Kuala Lumpur', 'Kuantan', 'Las Vegas', 'Penang', 'Petaling Jaya', 'Shah Alam', 'Skudai'], 
                    'reg_tags'      => null, 
                    'rewrite'       => 'media-centre-category', 
                    'category_names'=> ['plural' => 'Locations', 'singular' => 'Location'], 
                    'tag_names'     => null 
                ], 
                [
                    'name'          => 'Yes.my Openings', 
                    'singular_name' => 'Openings', 
                    'slug'          => 'openings', 
                    'menu_icon'     => 'dashicons-groups', 
                    'supports'      => ['title'], 
                    'reg_taxonomy'  => ['Customer Centre', 'Data Centre Management', 'IT', 'IT Infrastructure Operations', 'Interaction Centre', 'Training Team'], 
                    'reg_tags'      => ['Central Region', 'Johor', 'Kedah', 'Kelantan', 'Kuala Lumpur', 'Kuantan', 'Melaka', 'Negeri Sembilan', 'Pahang', 'Penang', 'Perak', 'Perlis', 'Sabah', 'Sarawak', 'Selangor', 'Sentul Office', 'Terengganu'], 
                    'rewrite'       => 'opening-category', 
                    'category_names'=> ['plural' => 'Divisions', 'singular' => 'Division'], 
                    'tag_names'     => ['plural' => 'Locations', 'singular' => 'Location'] 
                ], 
                [
                    'name'          => 'IDD Rates', 
                    'singular_name' => 'IDD Rate', 
                    'slug'          => 'idd-rates', 
                    'menu_icon'     => 'dashicons-airplane', 
                    'supports'      => ['title', 'editor', 'thumbnail'], 
                    'reg_taxonomy'  => ['Uncategorized'], 
                    'reg_tags'      => null, 
                    'rewrite'       => 'rates-category', 
                    'category_names'=> ['plural' => 'Locations', 'singular' => 'Location'], 
                    'tag_names'     => null 
                ], 
                [
                    'name'          => 'Deals', 
                    'singular_name' => 'Deal', 
                    'slug'          => 'deals', 
                    'menu_icon'     => 'dashicons-money', 
                    'supports'      => ['title', 'editor'], 
                    'reg_taxonomy'  => ['Uncategorized', 'Featured', 'Travel', 'Shopping', 'Food', 'Lifestyle', 'Entertainment', 'Service', 'Health', 'Fashion'], 
                    'reg_tags'      => ['Johor', 'Kedah', 'Kelantan', 'Melaka', 'Negeri Sembilan', 'Penang', 'Pahang', 'Perak', 'Perlis', 'Sabah', 'Sarawak', 'Selangor', 'Terengganu', 'Wilayah Persekutuan', 'Kuala Lumpur', 'Singapore'], 
                    'rewrite'       => 'rates-category', 
                    'category_names'=> null, 
                    'tag_names'     => ['plural' => 'Regions', 'singular' => 'Region'] 
                ], 
                [
                    'name'          => 'Supported Devices', 
                    'singular_name' => 'Supported Device', 
                    'slug'          => 'supported-device', 
                    'menu_icon'     => 'dashicons-smartphone', 
                    'supports'      => ['title', 'thumbnail'], 
                    'reg_taxonomy'  => ['Uncategorized', 'Yes', 'Alcatel', 'Black Shark', 'Google', 'Huawei', 'Leagoo', 'Nokia', 'Oppo', 'Samsung', 'Realme', 'Sony', 'Xiaomi', 'Vivo'], 
                    'reg_tags'      => ['Data Only', 'Data + Voice over LTE'], 
                    'rewrite'       => 'rates-category', 
                    'category_names'=> ['plural' => 'Brands', 'singular' => 'Brand'], 
                    'tag_names'     => ['plural' => 'Supports', 'singular' => 'Support'] 
                ] 
            ];

            $custom_post_types->register_post_types($custom_posts_args);
        }

        add_action('init', 'register_custom_post_types');
    }
?>