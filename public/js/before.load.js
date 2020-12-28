var $ = jQuery.noConflict();
var navigationStyle;
$(document).ready(function($) {
    "use strict";
    var base_url = window.location.origin;

    var host = window.location.host;

    var pathArray = window.location.pathname.split( '/' );

    console.log(base_url);
    console.log(host);
    console.log(pathArray);
    var $body = $('body');

    if( $body.hasClass('navigation-top-header') ) {
        $( ".main-navigation.navigation-top-header" ).load( base_url+"/external/_navigation.html" );
		navigationStyle = "topHeader";
    }
    else if( $body.hasClass('navigation-off-canvas') ) {
        $( ".main-navigation.navigation-off-canvas" ).load( base_url+"/external/_navigation.html" );
		navigationStyle = "offCanvas";
    }
    mobileNavigation();
});

$(window).resize(function(){
    mobileNavigation();
});

// Navigation on small screen ------------------------------------------------------------------------------------------

function mobileNavigation(){

    var base_url = window.location.origin;
    if( $(window).width() < 979 ){
        //$(".main-navigation.navigation-top-header").remove();
        $(".main-navigation.navigation-top-header").css("display","none");
        $(".toggle-navigation").css("display","inline-block");
        $(".main-navigation.navigation-off-canvas").load(base_url+"/external/_navigation.html");
        $("body").removeClass("navigation-top-header");
        $("body").addClass("navigation-off-canvas");
    }
	else {
		if( navigationStyle == "topHeader" ){
			$( ".main-navigation.navigation-top-header" ).load(base_url+ "/external/_navigation.html" );
			$("body").removeClass("navigation-off-canvas");
			$("body").addClass("navigation-top-header");
			$(".main-navigation.navigation-top-header").css("display","inline-block");
			$(".toggle-navigation").css("display","none");
		}else {
			$( ".main-navigation.navigation-off-canvas" ).load(base_url+ "/external/_navigation.html" );
		}
	}
}

// Toggle off canvas navigation ----------------------------------------------------------------------------------------

$('.header .toggle-navigation').on( "click", function() {
	console.log("click");
	$('#outer-wrapper').toggleClass('show-nav');
});

$('#page-content').on( "click", function() {
	if( $('body').hasClass('navigation-off-canvas') ){
		$('#outer-wrapper').removeClass('show-nav');
	}
});
