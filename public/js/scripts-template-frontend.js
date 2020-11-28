(function ($) {
    $(document).on("click", "#menu_right_toggle,#menu_right_toggle_1", function () {
        $("#right_menu").addClass("open");
    });

    $(document).on("click", "#close_right_menu", function () {
        $("#right_menu").removeClass("open");
    });
})(jQuery);
