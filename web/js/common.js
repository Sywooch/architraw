jQuery(document).ready(function ($) {
    $(document).foundation();
    if (typeof $.fn.fullpage.destroy == 'function') {
        $.fn.fullpage.destroy('all');
    }

    $("#fullpage").fullpage({
        responsiveHeight: 1,
        sectionSelector: '.main_section',
        navigation: true,
        navigationPosition: 'left',
        scrollingSpeed: 500,
        verticalCentered: false,
        afterRender: function(){
            set_height_nav_elements($("#fp-nav.left li"));
            check_navs_item($("#fp-nav.left li"));
            add_btn_to_nav();
        },
        onLeave: function(index, nextIndex, direction){

            if(nextIndex != 1){
                $('body').addClass("body-invert");
            }else{
                $('body').removeClass("body-invert");
            }
        }
    });

    function set_height_nav_elements(elem) {

        var lenght = elem.length;
        elem.css('height', 100/lenght+"%");
    }

    function add_btn_to_nav() {
        $("#fp-nav").append("<button id='trigger-btn-menu' data-toggle='offcanvas-full-screen'></button>");
    }

    function check_navs_item(elem){
       if(elem.length <= 1){
            console.log(elem.remove());
       }
    }

    $('.blog-slider-container').slick({
            infinite: true,
            slidesToShow: 2,
            variableWidth: true,
            prevArrow: "<button class='slider-prev'>Предыдущие</button>",
            nextArrow: "<button class='slider-next'>Слудующие</button>",
    });

});



