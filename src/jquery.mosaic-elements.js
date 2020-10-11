/**
 * mosaicElements - plugin for animating elements
 * @author Vyacheslav K. <vyach.kotlyarov@gmail.com>
 * @link https://github.com/drzeitraum/jquery-mosaic-elements
 */
(function ($) {

        jQuery.fn.mosaicElements = function (opt) {

            // default options
            opt = $.extend({
                'container': '#mosaic', // attribute for the main container for the elements
                'elements': '.mosaic-item', // attribute for the elements
                'rotate_min': -180, // minimum of rotation from in degree
                'rotate_max': 180, // maximum of rotation to in degree
                'duration_min': 60, // minimum of duration from in px
                'duration_max': 600, // maximum of duration to in px
                'masonry': true, // masonry effect
                'masonry_shift': 0, // correction for calculating the transition to the next column in the container
                'transition': 500 // css transition in ms
            }, opt);

            // random integer
            function getRandomInt(min, max) {
                return Math.floor(Math.random() * (max - min)) + min;
            }

            // random element from array
            function getRandElement(arr) {
                var rand = Math.floor(Math.random() * arr.length);
                return arr[rand];
            }

            // opacity
            function opacity() {
                setTimeout(function () {
                    $(opt.elements).css({
                        'opacity': 1
                    });
                }, opt.transition + opt.transition/2)
            }

            // styles
            if (opt.masonry) {
                $(opt.elements).css({
                    'position': 'absolute',
                    'transition': opt.transition / 1000 + 's'
                });
            } else {
                $(opt.elements).css({
                    'position': 'relative',
                    'float': 'left',
                    'transition': opt.transition / 1000 + 's'
                });
            }
            var arr_property = ['top', 'right', 'bottom', 'left']; // indent for a random
            var arr_rotate_axis = ['', 'X', 'Y']; // coordinate axis for a random
            var container_height = $(opt.container).height(); // the height of the container
            var elements_height = 0; // height of elements
            var elements_width = $(opt.elements).outerWidth(true); // the width of the elements

            var col = 0; // column number

            // the mosaic collection
            $(opt.elements).each(function (index, element) {

                // styles
                var rotate = getRandomInt(opt.rotate_min, opt.rotate_max); // rotate
                var duration = getRandomInt(opt.duration_min, opt.duration_max); // duration
                var rotate_axis = getRandElement(arr_rotate_axis); // rotate axis
                $(element).css(getRandElement(arr_property), '-3000px'); // indent

                // position to default
                var left = 0;
                var top = 0;

                // position for a masonry
                if (opt.masonry) {
                    if (elements_height >= container_height - opt.masonry_shift) {
                        elements_height = top = 0;
                        col++;
                    } else {
                        top = elements_height;
                    }
                    left = elements_width * col;
                }

                // calculate height
                elements_height += $(element).outerHeight(true);

                // jQuery animate
                $(element).animate({
                    left: left,
                    top: top
                }, {
                    duration: duration,
                    start: function () {
                        $(element).css({
                            'transform': "rotate" + rotate_axis + "(" + rotate + "deg)",
                        });
                    },
                    complete: function () {
                        setTimeout(function () {
                            $(element).css({
                                "transform": "rotate(0deg)",
                                'opacity': 0.5
                            });
                        }, duration);
                    }
                });

                // opacity 1
                if (index + 1 == $(opt.elements).length) {
                    opacity();
                }

            });

            // hover effect
            $(opt.elements).hover(function (event) {
                //reset
                $(opt.elements).css({
                    'opacity': "1",
                })
                // effect
                $(this).animate({
                    'opacity': "0.5",
                }, 0);
            });

        }

    }
)(jQuery);
