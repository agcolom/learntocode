/**
 * Bootstrap Replacement - Navbar & Dropdown functionality
 * Replaces Bootstrap 3.x navbar collapse and dropdown components
 * Works with jQuery 3.7.1+
 */

(function($) {
    'use strict';

    // Navbar collapse toggle (mobile hamburger menu)
    $(document).on('click', '[data-toggle="collapse"]', function(e) {
        e.preventDefault();
        var target = $(this).data('target');
        var $target = $(target);

        if ($target.length) {
            $target.toggleClass('in');
            $(this).attr('aria-expanded', $target.hasClass('in'));
        }
    });

    // Dropdown toggle
    $(document).on('click', '[data-toggle="dropdown"]', function(e) {
        e.preventDefault();
        e.stopPropagation();

        var $parent = $(this).parent();
        var isOpen = $parent.hasClass('open');

        // Close all other dropdowns
        $('.dropdown').removeClass('open');

        // Toggle this dropdown
        if (!isOpen) {
            $parent.addClass('open');
            $(this).attr('aria-expanded', 'true');
        } else {
            $parent.removeClass('open');
            $(this).attr('aria-expanded', 'false');
        }
    });

    // Close dropdowns when clicking outside
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.dropdown').length) {
            $('.dropdown').removeClass('open');
            $('[data-toggle="dropdown"]').attr('aria-expanded', 'false');
        }
    });

    // Close mobile menu when clicking outside
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.navbar').length) {
            $('.navbar-collapse').removeClass('in');
            $('[data-toggle="collapse"]').attr('aria-expanded', 'false');
        }
    });

    // Prevent dropdown from closing when clicking inside
    $(document).on('click', '.dropdown-menu', function(e) {
        e.stopPropagation();
    });

    // Close dropdown when clicking a link inside it
    $(document).on('click', '.dropdown-menu a', function(e) {
        var $dropdown = $(this).closest('.dropdown');
        $dropdown.removeClass('open');
        $dropdown.find('[data-toggle="dropdown"]').attr('aria-expanded', 'false');
    });

    // Handle window resize - close mobile menu if window is expanded
    $(window).on('resize', function() {
        if ($(window).width() > 768) {
            $('.navbar-collapse').removeClass('in');
            $('[data-toggle="collapse"]').attr('aria-expanded', 'false');
        }
    });

    // Scrollspy - highlights navigation based on scroll position
    $.fn.scrollspy = function(options) {
        var defaults = {
            target: '',
            offset: 0
        };
        var settings = $.extend({}, defaults, options);

        if (!settings.target) return this;

        var $target = $(settings.target);
        var $nav = $target.find('li > a');

        return this.each(function() {
            var $spy = $(this);

            function process() {
                var scrollTop = $spy.scrollTop() + settings.offset;
                var maxScroll = $spy.height();
                var $active;

                // Find which section is currently in view
                $nav.each(function() {
                    var $this = $(this);
                    var href = $this.attr('href');

                    if (!href || href.charAt(0) !== '#') return;

                    var $section = $(href);
                    if (!$section.length) return;

                    var top = $section.offset().top;
                    var bottom = top + $section.outerHeight();

                    if (scrollTop >= top && scrollTop < bottom) {
                        $active = $this;
                    }
                });

                // Update active state
                $nav.parent().removeClass('active');
                if ($active) {
                    $active.parent().addClass('active');
                }
            }

            // Run on scroll
            $spy.on('scroll', process);
            $(window).on('scroll', process);

            // Run initially
            process();
        });
    };

    // Affix - makes elements stick to viewport when scrolling
    $.fn.affix = function(options) {
        var defaults = {
            offset: {
                top: 0,
                bottom: 0
            }
        };
        var settings = $.extend(true, {}, defaults, options);

        return this.each(function() {
            var $element = $(this);
            var $window = $(window);
            var affixed = null;
            var originalPosition = $element.css('position');
            var originalTop = $element.css('top');
            var originalWidth = null;
            var originalLeft = null;
            var elementOffsetTop = $element.offset().top;

            function checkPosition() {
                var scrollTop = $window.scrollTop();
                var offsetTop = typeof settings.offset.top === 'function'
                    ? settings.offset.top()
                    : settings.offset.top;
                var offsetBottom = typeof settings.offset.bottom === 'function'
                    ? settings.offset.bottom()
                    : settings.offset.bottom;

                if (scrollTop > elementOffsetTop - offsetTop && affixed !== 'top') {
                    // Store original dimensions and position before affixing
                    if (originalWidth === null) {
                        originalWidth = $element.outerWidth();
                        originalLeft = $element.offset().left;
                    }

                    // Affix to top
                    affixed = 'top';
                    $element.css({
                        position: 'fixed',
                        top: offsetTop + 'px',
                        width: originalWidth + 'px',
                        left: originalLeft + 'px'
                    }).addClass('affix').removeClass('affix-top affix-bottom');
                } else if (scrollTop <= elementOffsetTop - offsetTop && affixed !== null) {
                    // Return to normal position
                    affixed = null;
                    $element.css({
                        position: originalPosition,
                        top: originalTop,
                        width: '',
                        left: ''
                    }).addClass('affix-top').removeClass('affix affix-bottom');
                }
            }

            // Recalculate dimensions on window resize
            $window.on('resize', function() {
                if (affixed === 'top') {
                    affixed = null;
                    originalWidth = null;
                    originalLeft = null;
                }
                checkPosition();
            });

            $window.on('scroll', checkPosition);

            // Initial check
            checkPosition();
        });
    };

})(jQuery);
