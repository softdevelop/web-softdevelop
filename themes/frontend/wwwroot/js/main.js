(function($) {

    // Wait for DOM to load
    $(function() {
        var $window = $(window);
        var $document = $(document);
        var $body = $('body');

        /**
         * @namespace Utility functions
         * @name      utils
         */
        var utils = {};

        /**
         * Execute callback and add it to resize event
         *
         * @param {Function} callback
         */
        utils.resize = function(callback) {
            callback();
            $window.on('resize', callback);
        },

        /** @namespace Media queries */
        utils.layout = (function() {

            // Callbacks list
            var callbacks = [];

            // Steps on which callbacks will be called
            var steps = [320, 480, 768, 980];

            /**
             * Round width to step
             *
             * @param {Number} width
             *
             * @return Step
             */
            function step(width) {
                for (var n = 0; n < steps.length; n++)
                    if (width <= steps[n])
                        return steps[n];
                return Number.MAX_VALUE;
            }

            // Last step
            var last = step($body.outerWidth());

            // On each step call all callbacks
            utils.resize(function() {
                var current = step($body.outerWidth());
                if (current != last) {
                    last = current;
                    for (var n = 0; n < callbacks.length; n++)
                        callbacks[n](current);
                }
            });

            /** @scope utils.layout */
            return {

                /** Return current step */
                width: function() {
                    return last;
                },

                /**
                 * Register callback
                 *
                 * @param {Function} callback
                 */
                change: function(callback) {
                    callback(last);
                    callbacks.push(callback);
                }
            };
        })();

        /**
         * Merge options with data-attribute values
         *
         * @param  {Object|String} element     Element
         * @param  {Object}        options     Default options
         * @param  {String}        [namespace] Data attributes prefix
         *
         * @return {Object}                    Merged options
         */
        utils.options = function(element, options, namespace) {
            var $element = $(element);
            var namespace = namespace ? namespace + '_' : '';
            $.each(options, function(name, value) {
                var data = $element.data(namespace + name);
                options[name] = data === undefined ? value : data;
            });
            $.each($element.data(), function(name, value) {
                if (name.indexOf(namespace) != -1)
                    options[name.replace(namespace, '')] = value;
            });
            return options;
        };

        /**
         * Check use of iDevice
         *
         * @returns {Boolean}
         */
        utils.iDevice = function() {
            return !!navigator.userAgent.match(/(iPad|iPhone|iPod)/g);
        };

        /** @namespace UI elements */
        var ui = {};

        /** Content slider */
        ui.slider = function() {
            $('.ui_slider').each(function() {
                var $slider = $(this);
                var options = utils.options($slider, {
                    controls: true,
                    pager: false,
                    speed: 250,
                    mode: 'fade',
                    auto: true,
                    autoHover: true,
                    prevText: '',
                    nextText: ''
                }, 'ui_slider');
                $('ul', $slider).bxSlider(options);
            });
        };

        /** Button */
        ui.button = function() {
            $document.on({
                mousedown: function() {
                    $(this).addClass('click');
                },
                'mouseup mouseleave': function() {
                    $(this).removeClass('click');
                }
            }, '.ui_button');
        };

        /** Switch */
        ui.switcher = function() {
            $('.ui_switch').each(function() {
                if (!$('.active', this).length)
                    $('li:eq(0)', this).addClass('active');
            });
            $document.on('click', '.ui_switch li:not(.active)', function() {
                var $option = $(this);
                var value = $('a', $option).data('ui_switch_value');
                $option
                    .addClass('active')
                    .siblings()
                    .removeClass('active')
                    .closest('.ui_switch')
                    .trigger('change', value);
            });
        };

        /** Selectbox */
        ui.select = function() {

            /**
             * Toggle selectbox
             *
             * @param {Object}  select  Element or selector
             * @param {Boolean} [state] New state
             */
            function toggle(select, state) {
                var $select = $(select);
                state = state === undefined ? !$select.is('.open') : state;
                $select.toggleClass('open', state);
                var $list = $('ul', $select);

                // Open
                if (state) {
                    $list.addClass('stop');
                    var height = $list.height();
                    $list
                        .removeClass('stop')
                        .height(height);
                }

                // Close
                else
                    $list
                        .addClass('stop')
                        .removeAttr('style')
                        .removeClass('stop');
            }

            // Initialization
            $('.ui_select').each(function() {
                var $select = $(this);
                $select
                    .width($select.width())
                    .addClass("ui_init");
            });
            $document.on({
                mouseleave: function() {
                    toggle(this, false);
                },

                click: function(event) {
                    var $target = $(event.target);
                    if (!$target.closest('li').is('.active'))
                        toggle(this);

                    // Select option
                    if ($target.is('li:not(.active) *')) {
                        if (!$target.is('[data-ui_select_value]'))
                            $target = $target.closest('[data-ui_select_value]');
                        $(this)
                            .trigger('change', $target.data('ui_select_value'))
                            .find('label')
                            .html($target.html())
                            .end()
                            .find('.active')
                            .removeClass('active');
                        $target
                            .parent()
                            .addClass('active');
                    }
                }
            }, '.ui_select');
        };

        /** Items filter */
        ui.filter = function() {

            /** Fixed items position */
            function fix(filter) {
                var $list = $('.ui_filter_items', filter);
                var $items = $('li', $list);
                var $item = $items.filter(':visible').first();
                var $cache = $(filter).data('cache');
                $list
                    .add($items)
                    .removeAttr('style');
                $items
                    .width($item.width() - 0.5)
                    .height($item.height());
                $cache
                    .width($item.outerWidth() - 0.5)
                    .height($item.outerHeight());
            }

            /** Reset inline styles */
            function reset(filter) {
                var $filter = $(filter);
                var $items = $('.ui_filter_items', filter);
                $items
                    .add(' li', $items)
                    .add($filter.data('cache'))
                    .removeAttr('style');
            }

            /** Filter items */
            function filter(filter, value) {

                // Filter
                var $filter = $(filter).closest('.ui_filter');
                var $cache = $filter.data('cache');
                var $items = $([]);
                if (value == 'all')
                    $items = $cache;
                else
                    $cache.each(function() {
                        $(this).data('ui_filter_value')
                        var values = $(this).data('ui_filter_value').split(',');
                        if ($.inArray(value, values) != -1)
                            $items = $items.add(this);
                    });

                // Refresh
                fix($filter);
                $filter
                    .find('.ui_filter_items')
                    .quicksand(
                        $items,
                        {
                            duration: 750,
                            useScaling: true,
                            adjustHeight: 'dynamic'
                        },
                        function() {
                            reset($filter);
                        }
                    );
            }

            // Initialization
            $('.ui_filter').each(function() {
                var $filter = $(this);
                var $cache = $('li', $('.ui_filter_items', $filter).clone());
                $filter.data('cache', $cache);
            });
            $document.on('change', '.ui_filter .ui_filter_switch', function(event, value) {
                filter(this, value);
            });
            utils.resize(function() {
                $('.ui_filter').each(function() {
                    reset(this);
                });
            });
        };

        /** Lightbox */
        ui.lightbox = function() {
            $('.ui_lightbox').fancybox();
        };

        /** Map initialization */
        ui.map = function(callback) {
            var $maps = $('.ui_map');
            if (!$maps.length)
                return;

            // Initialize map
            function init($map) {

                // Get map position
                var latitude = parseFloat(String($map.data('ui_map_latitude')).replace(',', '.'));
                var longtitude = parseFloat(String($map.data('ui_map_longtitude')).replace(',', '.'));
                var position = new google.maps.LatLng(latitude, longtitude);

                // Render map
                var map = new google.maps.Map($map[0], {
                    zoom: $map.data('ui_map_zoom') || 16,
                    scrollwheel: false,
                    center: position,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    mapTypeControl: false,
                    panControlOptions: {
                        position: google.maps.ControlPosition.LEFT_CENTER
                    },
                    zoomControlOptions: {
                        position: google.maps.ControlPosition.LEFT_CENTER
                    },
                    scaleControlOptions: {
                        position: google.maps.ControlPosition.LEFT_CENTER
                    },
                    mapTypeControlOptions: {
                         mapTypeIds: [
                            google.maps.MapTypeId.ROADMAP, 'tehgrayz'
                        ]
                    }
                });

                // Center map on window resize
                google.maps.event.addDomListener(window, 'resize', function() {
                    setTimeout(function() {
                        map.setCenter(position);
                    }, 50);
                });

                // Center map when switching between boxed/full layout
                var $switcher = $('#switcher');
                if ($switcher.length)
                    $('.switch.layout', $switcher).on('switch', function() {
                        var interval = setInterval(function() {
                            google.maps.event.trigger(window, 'resize', map);
                        }, 50);
                        setTimeout(function() {
                            clearInterval(interval);
                        }, 350);
                    });

                // Grayscale
                map.mapTypes.set('grayscale', new google.maps.StyledMapType(
                    [
                        {
                            featureType: "all",
                            elementType: "all",
                            stylers: [
                                {
                                    saturation: -100
                                }
                            ]
                        }
                    ],
                    {
                        name: "Grayscale"
                    }
                ));
                map.setMapTypeId('grayscale');

                // Map is ready
                google.maps.event.addListenerOnce(map, 'idle', function() {

                    // Set custom marker
                    $.getScript('http://google-maps-utility-library-v3.googlecode.com/svn/trunk/richmarker/src/richmarker-compiled.js', function() {
                        new RichMarker({
                            draggable: false,
                            map: map,
                            position: position,
                            shadow: false,
                            content: '<div class="marker"></div>'
                        });
                    });
                });
            };

            // Load API
            $.getScript('https://www.google.com/jsapi', function() {
                google.load('maps', '3', {other_params: 'sensor=false', callback: function() {
                    $maps.each(function() {
                        init($(this));
                    });
                }});
            });
        };

        /** Initialization */
        ui.init = function() {
            ui.slider();
            ui.button();
            ui.select();
            ui.switcher();
            ui.filter();
            ui.lightbox();
            ui.map();
        };

        /**
         * @namespace Forms
         * @name      forms
         */
        var forms = {};

        /** Init placeholders(attribute data-placeholder) */
        forms.placeholders = function() {

            // Events
            $(document).on({
                focus: function() {
                    var $input = $(this);
                    if ($.trim($input.val()) == $input.data('placeholder'))
                        $input
                            .val('')
                            .removeClass('placeholder');
                },
                blur: function() {
                    var $input = $(this);
                    if (!$.trim($input.val()))
                        $input
                            .val($input.data('placeholder'))
                            .addClass('placeholder');
                },
                change: function() {
                    var $input = $(this);
                    return $input.val() != $input.data('placeholder');
                },
                keydown: function(event) {
                    if (event.which == 27)
                        $(this)
                            .val('')
                            .trigger('keyup')
                            .trigger('blur');
                }
            }, '[data-placeholder]');

            // Values
            $('[data-placeholder]').each(function() {
                var $input = $(this);
                var value = $.trim($input.val());
                if (!value || value == $input.data('placeholder'))
                    $input
                        .val('')
                        .trigger('blur');
            });
        };

        /** @namespace Form validation */
        forms.validation = {};

        /**
         * Any value
         *
         * @param  {String}  value Input value
         *
         * @return {Boolean}
         */
        forms.validation.any = function(value) {
            return !!$.trim(value).length;
        };

        /**
         * E-mail
         *
         * @param  {String}  value Input value
         *
         * @return {Boolean}
         */
        forms.validation.email = function(value) {
            var pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return pattern.test(value);
        };

        /**
         * Register form for validation before submit
         *
         * @param {Object|String} form Form element or selector
         */
        forms.validation.register = function(form) {
            var $form = $(form);
            $form.on('submit', function() {
                var $required = $('[data-require]', $form);
                var $invalid = $([]);
                $required
                    .addClass('stop')
                    .each(function() {
                        var $input = $(this);
                        var value = $.trim($input.val());
                        value = value == $input.data('placeholder') ? '' : value;
                        var type = $.trim($input.data('require'));
                        if (forms.validation[type] && !forms.validation[type](value))
                            $invalid = $invalid.add($input);
                    });
                setTimeout(function() {
                    $required.removeClass('invalid');
                    $invalid.addClass('invalid');
                    $required.removeClass('stop');
                }, 20);
                return !$invalid.length;
            });
        };

        /** Validation initialization */
        forms.validation.init = function() {
            $('form').each(function() {
                if ($('[data-require]', this).length)
                    forms.validation.register(this);
            });
        };

        forms.init = function() {

            // Init placeholders
            forms.placeholders();

            // Form validation
            forms.validation.init();
        };

        /** @namespace Common functions */
        var common = {};

        /** Scroll to anchor */
        common.anchors = function() {
            $document.on('click', '[data-anchor]', function() {
                var $trigger = $(this);
                var $anchor = $($trigger.data('anchor'));
                if ($anchor.length)
                    $('html, body').animate(
                        {
                            scrollTop: $anchor.offset().top
                        },
                        $trigger.data('duration') || 300,
                        $trigger.data('easing') || 'linear'
                    );
                return false;
            });
        };

        /** Main menu */
        common.menu = function() {
            var speed = 350;
            var $menu = $('#menu');
            $body.attr('data-idevice', utils.iDevice());

            // iDevice
            if (utils.iDevice()) {
                $document.on('vclick', function(event) {
                    var $item = $(event.target);
                    $item = $item.is('.submenu') ? $item : $item.closest('.submenu');
                    $('#menu .open')
                        .not($item)
                        .removeClass('open');
                    if ($item.filter('#menu.full > li > ul > .submenu, #menu.shrink > .submenu').length)
                        $item.toggleClass('open');
                });
                utils.resize(function() {
                    $('#menu .open').removeClass('open');
                });
            }

            // Others
            else {
                function animate(item) {
                    var $item = $(item);
                    $item.addClass('animate');
                    setTimeout(function() {
                        $item.removeClass('animate');
                    }, $body.is('.stop') ? 0 : 250);
                }

                $document.on({

                    // Slide down
                    mouseenter: function() {
                        var $item = $(this);
                        var $submenu = $('> ul', this);
                        $submenu.addClass('stop');
                        var height = $submenu.height();
                        $submenu
                            .removeClass('stop')
                            .height(height);
                        animate(this);
                    },

                    // Slide up
                    mouseleave: function() {
                        $('> ul', this)
                            .addClass('stop')
                            .removeAttr('style')
                            .removeClass('stop');
                        if (!$(this).is('.current-menu-item'))
                            animate(this);
                    }
                }, '#menu.full > li > ul > .submenu, #menu.shrink > .submenu');
            }

            // Switch between full and shrinked menu
            var height = $('> li > ul > li:eq(0)', $menu).height();
            utils.resize(function() {
                $menu
                    .attr('class', 'full')
                    .attr('class', $menu.height() < height * 2 ? 'full' : 'shrink');
            });
        };

        /** @namespace Home page */
        var home = {};

        /** Initialize slider */
        home.slider = function() {
            var $slider = $('#slider');
            if (!$slider.length || !$('#slider li').length)
                return;
            if ($.fn.cssOriginal!=undefined)
                $.fn.css = $.fn.cssOriginal;

            // Initialization
            $slider
                .on('init', function() {
                    var api = $('.fullwidthbanner', this).revolution({
                        delay: 9000,
                        startheight: 500,
                        startwidth: 940,
                        hideThumbs: 200,
                        thumbWidth: 100,
                        thumbHeight: 50,
                        thumbAmount: 5,
                        navigationType: 'none',
                        navigationArrows: 'verticalcentered',
                        navigationStyle: 'round',
                        navigationHAlign: 'center',
                        navigationVAlign: 'bottom',
                        navigationHOffset: 0,
                        navigationVOffset: 20,
                        soloArrowLeftHalign: 'left',
                        soloArrowLeftValign: 'center',
                        soloArrowLeftHOffset: 0,
                        soloArrowLeftVOffset: 0,
                        soloArrowRightHalign: 'right',
                        soloArrowRightValign: 'center',
                        soloArrowRightHOffset: 0,
                        soloArrowRightVOffset: 0,
                        touchenabled: 'on',
                        onHoverStop: 'on',
                        navOffsetHorizontal: 0,
                        navOffsetVertical: 20,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        hideSliderAtLimit: 0,
                        stopAtSlide: -1,
                        stopAfterLoops: -1,
                        shadow: 0,
                        fullWidth: 'on'
                    });
                    $slider.data('api', api);
                })
                .trigger('init');
        };

        /** Works list */
        home.works = function() {
            $document.on('click', '#works .items > li > a', function(event) {
                return !$(event.target).filter('.bx-prev, .bx-next').length;
            });
        };

        /** @namespace Portfolio */
        var portfolio = {};

        /** Change column count */
        portfolio.columns = function() {
            $('#preface .columns').on('change', function(event, value) {
                var $filter = $('[data-page="portfolio"] .ui_filter');
                $('.ui_filter_items li', $filter)
                    .add($filter.data('cache'))
                    .attr('class', 'col-1-' + value);
            });
        };

        /** @namespace Blog */
        var blog = {};

        /** Synchronize switch and selectbox */
        blog.sync = function() {
            var $select = $('#blog .ui_select');
            var $switcher = $('#blog .ui_switch');
            var sync = true;
            $select.on('change', function(event, value) {
                if (sync)
                    $('[data-ui_switch_value="' + value + '"]', $switcher).trigger('click');
            });
            $switcher.on('change', function(event, value) {
                sync = false;
                $('[data-ui_select_value="' + value + '"]', $select).trigger('click')
                $select.trigger('click');
                sync = true;
            });
            var height = $('li:eq(0)', $switcher).height() * 2
            utils.resize(function() {
                $switcher.add($select).show();
                var test = $switcher.height() < height;
                $switcher.toggle(test);
                $select.toggle(!test);
            });
        };

        /** @namespace Initialization */
        var init = {
            common: function() {
                ui.init();
                forms.init();
                common.anchors();
                common.menu();
            },
            home: function() {
                home.slider();
                home.works();
            },
            portfolio: function() {
                portfolio.columns();
            },
            blog: function() {
                blog.sync();
            }
        };

        // Initialization
        init.common();
        var page = $body.data('page');
        if (init[page])
            init[page]();
        switcher();
    });
})(jQuery);