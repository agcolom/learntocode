/**
 * Bootstrap Replacement - Tab functionality
 * Replaces Bootstrap 3.x tab component
 * Works with jQuery 3.7.1+
 */

(function($) {
    'use strict';

    // Tab show method (mimics Bootstrap's .tab('show'))
    $.fn.tab = function(action) {
        if (action === 'show') {
            return this.each(function() {
                var $this = $(this);
                var target = $this.attr('href');

                if (!target || target === '#') return;

                // Find the tab parent structure
                var $tabList = $this.closest('ul');
                var $tabContent = $tabList.siblings('.tab-content').first();

                if (!$tabContent.length) {
                    // Try to find tab-content after the parent
                    $tabContent = $tabList.parent().next('.tab-content');
                }

                // Remove active class from all tabs in this group
                $tabList.find('li').removeClass('active');

                // Add active class to clicked tab's parent li
                $this.parent('li').addClass('active');

                // Hide all tab panes in this group
                $tabContent.find('.tab-pane').removeClass('active in');

                // Show the target tab pane
                var $targetPane = $(target);
                $targetPane.addClass('active in');
            });
        }
        return this;
    };

    // Handle tab clicks via data-toggle="tab"
    $(document).on('click', '[data-toggle="tab"]', function(e) {
        e.preventDefault();
        $(this).tab('show');
    });

    // Handle direct clicks on tab links (for programmatic usage)
    $(document).on('click', 'ul.nav-tabs a', function(e) {
        var href = $(this).attr('href');
        if (href && href !== '#' && !$(this).attr('data-toggle')) {
            e.preventDefault();
            $(this).tab('show');
        }
    });

})(jQuery);
