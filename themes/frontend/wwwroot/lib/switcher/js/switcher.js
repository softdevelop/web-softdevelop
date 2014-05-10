(function($) {

    /** @namespace Settings */
    var setup = {

        /** Allowed urls */
        allowed: [
            'localhost/',
            'demo.freshface.net/file/',
            'codeblog.cz/'
        ],

        /** Base color */
        colors: [
            '00c492',
            '50bfd6"',
            'fa565a"',
            'ffcd32"',
            '777b80"',
            '00a963"',
            '08b6ff"',
            'fe4445"',
            'ff9d1d"'
        ],

        /** Boxed layout background */
        backgrounds: [
            {
                preview: 'url(lib/switcher/img/boxed/01.gif)',
                full: 'url(lib/switcher/img/boxed/01.png) fixed'
            },
            {
                preview: 'url(lib/switcher/img/boxed/02.gif)',
                full: 'url(lib/switcher/img/boxed/02.png) fixed'
            },
            {
                preview: 'url(lib/switcher/img/boxed/03.gif)',
                full: 'url(lib/switcher/img/boxed/03.png) fixed'
            },
            {
                preview: 'url(lib/switcher/img/boxed/04.gif)',
                full: 'url(lib/switcher/img/boxed/04.png) fixed'
            },
            {
                preview: 'url(lib/switcher/img/boxed/05.gif)',
                full: 'url(lib/switcher/img/boxed/05.png) fixed'
            },
            {
                preview: 'url(lib/switcher/img/boxed/06.gif)',
                full: 'url(lib/switcher/img/boxed/06.png) fixed'
            },
            {
                preview: 'url(lib/switcher/img/boxed/07.gif)',
                full: 'url(lib/switcher/img/boxed/07.png) fixed'
            },
            {
                preview: 'url(lib/switcher/img/boxed/08.gif)',
                full: 'url(lib/switcher/img/boxed/08.png) fixed'
            },
            {
                preview: 'url(lib/switcher/img/boxed/09.gif)',
                full: 'url(lib/switcher/img/boxed/09.jpg) fixed'
            }
        ]
    };

    // Check whether to enable switcher
    var allowed = (function() {
        for (var n = 0; n < setup.allowed.length; n++)
            if (location.href.indexOf(setup.allowed[n]) != -1)
                return true;
        return false;
    })();
    if (!allowed)
        return;

    // Wait for DOM
    $(function() {

        /** Render switcher */
        function render() {
            $('body').prepend([
                '<div id="switcher">',
                    '<h2>',
                        'Style switcher',
                        '<a class="open">',
                            '<i class="icon-cog"></i>',
                        '</a>',
                    '</h2>',
                    '<ul>',

                        // Colors
                        '<li class="header">',
                            'Base color',
                        '</li>',
                        '<li class="palette colors">',
                            (function() {
                                var colors = [];
                                for (var n = 0; n < setup.colors.length; n++)
                                    colors.push([
                                        '<a',
                                            'data-preview="#' + setup.colors[n] + '"',
                                            'data-value="' + setup.colors[n] + '"',
                                        '></a>'
                                    ].join(' '));
                                return colors.join(' ');
                            })(),
                        '</li>',

                        // Layout
                        '<li class="header">',
                            'Layout type',
                        '</li>',
                        '<li class="switch layout">',
                            '<a data-value="false">',
                                'Full width',
                            '</a>',
                            '<a data-value="true">',
                                'Boxed',
                            '</a>',
                        '</li>',

                        // Backgrounds
                        '<li class="header boxed">',
                            'Backgrounds',
                        '</li>',
                        '<li',
                            'class="palette boxed"',
                            'data-css="background"',
                            'data-element="body"',
                        '>',
                            (function() {
                                var backgrounds = [];
                                for (var n = 0; n < setup.backgrounds.length; n++)
                                    backgrounds.push([
                                        '<a',
                                            'data-preview="' + setup.backgrounds[n].preview + '"',
                                            'data-value="' + setup.backgrounds[n].full + '"',
                                        '></a>'
                                    ].join(' '));
                                return backgrounds.join(' ');
                            })(),
                        '</li>',

                        // Menu position
                        '<li class="header">',
                            'Menu position',
                        '</li>',
                        '<li class="switch menu">',
                            '<a data-value="left">',
                                'Left',
                            '</a>',
                            '<a data-value="right">',
                                'Right',
                            '</a>',
                        '</li>',

                        // Animations
                        '<li class="header">',
                            'Animations',
                        '</li>',
                        '<li class="switch animations">',
                            '<a data-value="true">',
                                'On',
                            '</a>',
                            '<a data-value="false">',
                                'Off',
                            '</a>',
                        '</li>',

                        // Reset
                        '<li class="header">',
                            'Reset to default settings',
                        '</li>',
                        '<li class="list">',
                            '<a class="reset">',
                                'Reset',
                            '</a>',
                        '</li>',
                    '</ul>',
                '</div>'
            ].join(' '));
            return $('#switcher');
        }

        /** @namespace Cookies */
        var cookies = {

            /**
             * Set cookie value
             *
             * @param {String} name         Cookie name
             * @param {String} value        Cookie value
             * @param {Number} [expiration] Number of days after which the cookie expires
             */
            set: function(name, value, expiration) {
                var date = new Date();
                date.setDate(date.getDate() + expiration);
                expiration = !expiration ? '' : ';expires=' + date.toUTCString();
                document.cookie = name + '=' + escape(value) + expiration;
            },

            /**
             * Get cookie value
             *
             * @param   {String} name Cookie name
             *
             * @returns {String}      Cookie value
             */
            get: function(name) {
                if (document.cookie.length) {
                    var start = document.cookie.indexOf(name + '=');
                    if (start != -1) {
                        start += name.length + 1;
                        end = document.cookie.indexOf(';', start);
                        if (end == -1)
                            end = document.cookie.length;
                        return unescape(document.cookie.substring(start, end));
                    }
                }
                return null;
            },

            /**
             * Test if cookies are enabled
             *
             * @returns {Boolean}
             */
            enabled: function() {
                cookies.set('cookies_test', 'test');
                return !!cookies.get('cookies_test');
            }
        };

        /** Save settings */
        function save() {
            if (window.JSON && cookies.enabled())
                cookies.set('centy_switcher', JSON.stringify({
                    open: $('> ul', $switcher).is(':visible'),
                    color: $('.colors .active').index(),
                    layout: String($('.layout .active', $switcher).data('value')),
                    boxed: $('.boxed .active', $switcher).index(),
                    menu: String($('.menu .active', $switcher).data('value')),
                    animations: !$.fx.off
                }));
        }

        // Load settings
        function load() {
            if (window.JSON && cookies.enabled()) {
                var $layout = $('#layout').addClass('stop');
                var options = cookies.get('centy_switcher');
                if (options)
                    reset(JSON.parse(options));
                $layout.removeClass('stop');
            }
        }

        /** Reset settings */
        function reset(options) {
            options = $.extend({
                open: false,
                color: 0,
                layout: 'false',
                boxed: 0,
                menu: 'left',
                animations: true
            }, options || {});
            $('.colors [data-value]:eq(' + options.color + ')', $switcher)
                .add('.layout [data-value="' + options.layout + '"]', $switcher)
                .add('.boxed [data-value]:eq(' + options.boxed + ')', $switcher)
                .add('.menu [data-value="' + options.menu + '"]', $switcher)
                .add('.animations [data-value="' + options.animations + '"]', $switcher)
                .trigger('click');
            if (options.open && !$('> ul', $switcher).is(':visible'))
                $('h2 .open', $switcher).trigger('click');
            save();
        }

        // Preload images
        function preload() {
            var $preload = $('<div />');
            $('.palette.boxed a', $switcher).each(function() {
                $preload = $preload.append('<div style="background: ' + $(this).data('preview') + '" />');
            });
            $preload
                .hide()
                .appendTo('body');
        }

        /** Load style */
        var style = (function() {
            var counter = 0;
            return function(id, href) {
                var $old = $('#' + id);
                var $new = $('#' + id + '_color');
                counter++;
                $switcher.addClass('loading');
                if ($new.length) {
                    $old.remove();
                    $new.attr('id', id);
                }
                $('<link />')
                    .attr({
                        id: id + '_color',
                        href: href,
                        rel: 'stylesheet'
                    })
                    .appendTo('body');
                var $test = $('<img />');
                $test
                    .appendTo('body')
                    .on('error', function() {
                        $test.remove();
                        if (!--counter)
                            $switcher.removeClass('loading');
                    })
                    .attr('src', href);
            };
        })();

        /** Switch color */
        function color(event, value) {
            if (value == setup.colors[0]) {
                style('css_main', 'css/main.css');
                style('css_switch', 'lib/switcher/css/switcher.css');
            }
            else {
                style('css_main', 'css/main.php?color=' + value);
                style('css_switch', 'lib/switcher/css/switcher.php?color=' + value);
            }
            save();
        }

        /** Init UI */
        function ui() {

            // Toggle switcher
            $('h2 .open', $switcher).on('click', function() {
                $switcher
                    .toggleClass('open')
                    .find('ul')
                    ['slide' + ($switcher.is('.open') ? 'Down' : 'Up')](350, save);
            });

            // Structure
            var $switcher = $('#switcher');
            $('.palette a', $switcher).each(function() {
                var $item = $(this);
                var $pattern = $('<span class="pattern" />')
                    .css('background', $item.data('preview'))
                    .appendTo($item);
                if ($item.parent().is('.colors'))
                    $pattern.append('<span class="shade" />');
            });

            // Items
            $('.palette, .switch', $switcher).each(function() {
                if (!$('.active', this).length)
                    $('> a:eq(0)', this).addClass('active');
            });
            $switcher.on('click', '.palette > a, .switch > a', function() {
                var $item = $(this);
                var active = $item.is('.active');
                $item
                    .addClass('active')
                    .siblings()
                    .removeClass('active');
                if (!active)
                    $item
                        .parent()
                        .trigger('switch', $item.data('value'));
            });

            // CSS
            $switcher.on('click', '.palette[data-css][data-element] a[data-value]', function() {
                var $item = $(this);
                var $container = $item.parent();
                $($container.data('element')).css($container.data('css'), $item.data('value'));
            });
        }

        /** Toggle slider animations */
        function slider(enabled) {
            var $slider = $('#slider');
            if ($slider.length) {
                $('.caption', $slider).each(function() {
                    var $caption = $(this);
                    if (enabled) {
                        if ($caption.data('bak_speed') !== undefined)
                            $caption
                                .data('speed', $caption.data('bak_speed'))
                                .data('start', $caption.data('bak_start'))
                                .attr('class', $caption.data('bak_class'));
                    }
                    else {
                        if ($caption.data('bak_speed') === undefined)
                            $caption
                                .data('bak_speed', $caption.data('speed'))
                                .data('bak_start', $caption.data('start'))
                                .data('bak_class', $caption.attr('class'));
                        $caption
                            .data('speed', 0)
                            .data('start', 0)
                            .addClass('randomrotate');
                    }
                });
                $slider.trigger('init');
            }
        }

        /** Initialization */
        function init() {

            // Switch color
            var $palette = $('.palette.colors', $switcher).on('switch', color);

            // Layout
            var timeout = null;
            var $layout = $('.layout', $switcher).on('switch', function(event, value) {
                clearTimeout(timeout);
                var $layout = $('#layout');
                $layout.addClass('animate');
                $('body').attr('data-boxed', value);
                timeout = (function() {
                    return setTimeout(function() {
                        $layout.removeClass('animate');
                    }, 500);
                })();
                $('.boxed', $switcher)['slide' + (value ? 'Down' : 'Up')](350);
                save();
            });

            // Backgrounds
            $('.boxed', $switcher).on('switch', save);

            // Menu position
            $('.menu', $switcher).on('switch', function() {
                var $header = $('#header .wrapper');
                $header
                    .children()
                    .last()
                    .detach()
                    .prependTo($header);
                save();
            });

            // Animations
            $('.animations', $switcher).on('switch', function(event, enabled) {
                slider(enabled);
                $('body').toggleClass('stop', !enabled);
                $.fx.off = !enabled;
                save();
            });

            // Reset
            $('.reset', $switcher).on('click', reset);
        }

        /** Show switcher */
        function show() {
            $('link[href*="main.css"]').attr('id', 'css_main');
            $('link[href*="switcher.css"]').attr('id', 'css_switch');
            var value = $('body').data('boxed');
            $('.layout [data-value="' + value + '"]', $switcher).trigger('click');
            setTimeout(function() {
                $switcher
                    .css('opacity', 0)
                    .css('visibility', 'visible')
                    .fadeTo(350, 1);
            }, 350);
        }

        // Initialization
        var $switcher = render();
        window.switcher = function() {
            ui();
            init();
            load();
            preload();
            show();
        };
    });
})(jQuery);