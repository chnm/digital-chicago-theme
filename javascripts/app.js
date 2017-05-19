if (!Omeka) {
    var Omeka = {};
}

(function($) {
    // Skip to content
    Omeka.skipNav = function() {
        $("#skipnav").click(function() {
            $("#content").focus()
        });
    };

    // Show advanced options for site-wide search.
    Omeka.showAdvancedForm = function () {
        var advanced_form = $('#advanced-form');
        var show_advanced = '<a href="#" class="show-advanced button">Advanced Search</a>';
        var search_submit = $('#search-form button');

        // Set up classes and DOM elements jQuery will use.
        if (advanced_form.length > 0) {
            $('#search-container').addClass('with-advanced');
            advanced_form.addClass('closed').before(show_advanced);
        }

        $('.show-advanced').click(function(e) {
            e.preventDefault();
            advanced_form.toggleClass('open').toggleClass('closed');
        });
    };

    $(document).ready(function () {
        $('.omeka-media').on('error', function () {
            if (this.networkState === HTMLMediaElement.NETWORK_NO_SOURCE ||
                this.networkState === HTMLMediaElement.NETWORK_EMPTY
            ) {
                $(this).replaceWith(this.innerHTML);
            }
        });
    });
})(jQuery);

