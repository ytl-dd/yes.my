/* 
    JavaScript Name : Yes.my
    Created on      : March     15, 2021, 06:44:07 PM
    Last edited on  : March     29, 2021, 06:44:07 PM
    Author          : AL Latif Mohamad [YTL]
*/

$(document).ready(function () {
    $(window).on('scroll', function () {
        checkScreenScroll();
    })
    $('.navMobile-toggler').on('click', function () {
        toggleNavMobile();
    })
});

/**
 * @name        checkScreenScroll
 * @function
 * @description 
 *              Function to process page scrolling. Triggered by onScroll
 */
 function checkScreenScroll () {
    var posWindow   = $(window).scrollTop();
    var widthWindow = $(window).width();

    if (posWindow > 0) {
        $('body').addClass('on-scroll');
    } else {
        $('body').removeClass('on-scroll');
    }

    // $('body').removeClass('show-navMobile');

    
    // var posWindow   = $( window ).scrollTop();
    // var widthWindow = $( window ).width();
    
    // if( posWindow > 0 && ( $( '.layer-page' ).hasClass( 'full_width' ) || widthWindow <= 768 ) ) {
    //     $( '.layer-page' ).addClass( 'menu_fixed' );
    // } else {
    //     $( '.layer-page' ).removeClass( 'menu_fixed' );
    // }
    
    // if( posWindow > 100 ) {
    //     $( '.panel-gototop' ).fadeIn( 'fast' );
    // } else {
    //     $( '.panel-gototop' ).fadeOut( 'slow' );
    // }
    
    // updateSkeletonHeight();
}

/**
 * @name        toggleNavMobile
 * @function
 * @description 
 *              Toggle the mobile navigation
 */
function toggleNavMobile () {
    $('body').toggleClass('show-navMobile');
}

/**
 * @name        toggleSearch
 * @function
 * @description 
 *              Toggle the search navigation
 */
function toggleSearch () {
    $('body').toggleClass('show-search');
}