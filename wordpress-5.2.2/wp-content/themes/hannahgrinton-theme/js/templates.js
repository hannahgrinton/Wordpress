/* global hannahgrintonthemeScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for custom templates
 */

(function( $ ) {
    //controls the navigation of the projects page tabs
    $(".project__navigation__link").click(function() {
        var id = $(this).data("value");
        $(".project__navigation__link").removeClass("project__navigation__link--current");
        $(this).addClass("project__navigation__link--current");
        $(".project__content__section").css("display", "none");
        $(id).css("display", "flex");
    });
    //controls the navigation of the experience page tabs
    $(".experience__navigation__link").click(function() {
        var id = $(this).data("value");
        $(".experience__navigation__link").removeClass("experience__navigation__link--current");
        $(this).addClass("experience__navigation__link--current");
        $(".experience__content__section").css("display", "none");
        $(id).css("display", "flex");
    });
    //slide toggle for the about page
    $(".about-link").click(function() {
        var id = $(this).data("value");
        console.log(id);
        $(id).slideToggle("slow");
        var icon = id + "-icon";
        if ($(icon).hasClass("fa-chevron-down")) {
            $(icon).removeClass("fa-chevron-down");
            $(icon).addClass("fa-chevron-up");
        } else {
            $(icon).removeClass("fa-chevron-up");
            $(icon).addClass("fa-chevron-down");
        }
        
    });

})( jQuery );