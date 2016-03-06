$(document).ready(function() {

    "use strict";

    $(".mobile-menu").on("click", function() {
        $(this).toggleClass("open");
        $("header nav > ul").slideToggle("slow");
    });
    
    document.addEventListener("touchstart", function(){}, true);

    $(window).load(function() {

        "use strict";

        $('.portfolio-masonry').isotope({
            itemSelector: '.col-md-4'
        });

        $('.portfolio-masonry2').isotope({
            itemSelector: '.col-md-6'
        });

        $('.inner-portfolio').isotope({
            itemSelector: '.col-md-6'
        });

        $('.inner-portfolio2').isotope({
            itemSelector: '.col-md-4'
        });

        $('.inner-portfolio3').isotope({
            itemSelector: '.col-md-3'
        });

        $('.blog-masonry').isotope({
            itemSelector: '.col-md-6'
        });

        $(function() {
            // init Isotope
            var $container = $('.portfolio-masonry, .portfolio-masonry2, .inner-portfolio, .inner-portfolio2, .inner-portfolio3').isotope({
                itemSelector: '.item'
            });
            // filter functions
            var filterFns = {
                // show if number is greater than 50
                numberGreaterThan50: function() {
                    var number = $(this).find('.number').text();
                    return parseInt(number, 10) > 50;
                },
                // show if name ends with -ium
                ium: function() {
                    var name = $(this).find('.name').text();
                    return name.match(/ium$/);
                }
            };
            // bind filter button click
            $('#filters').on('click', 'li', function() {
                var filterValue = $(this).attr('data-filter');
                // use filterFn if matches value
                filterValue = filterFns[filterValue] || filterValue;
                $container.isotope({
                    filter: filterValue
                });
            });
            // change is-checked class on buttons
            $('.filters').each(function(i, buttonGroup) {
                var $buttonGroup = $(buttonGroup);
                $buttonGroup.on('click', 'li', function() {
                    $buttonGroup.find('.active').removeClass('active');
                    $(this).addClass('active');
                });
            });
        });

    });

})

