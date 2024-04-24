$(window).on('load', function() {
    $('.loading').show();
})
 if (localStorage.old < 18 || localStorage.old == undefined) {
     window.location.replace(habeco.site_url + "/welcome");
 }
$(document).ready(function() {
    setTimeout(function() {
        $('.loading').hide();
    }, 2500);
    $('.home-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        nextArrow: '<img class="slick-next" src="' + habeco.site_url + '/wp-content/themes/habeco/assets/images/arrownext.png" />',
        prevArrow: '<img class="slick-prev" src="' + habeco.site_url + '/wp-content/themes/habeco/assets/images/arrowprev.png" />',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    //section2-slider
    $('.section2-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        nextArrow: '<img class="slick-next" src="' + habeco.site_url + '/wp-content/themes/habeco/assets/images/arrownext.png" />',
        prevArrow: '<img class="slick-prev" src="' + habeco.site_url + '/wp-content/themes/habeco/assets/images/arrowprev.png" />',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    //beer-slider
    $('.beer-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        nextArrow: '<img class="slick-next" src="' + habeco.site_url + '/wp-content/themes/habeco/assets/images/next2.png" />',
        prevArrow: '<img class="slick-prev" src="' + habeco.site_url + '/wp-content/themes/habeco/assets/images/prev2.png" />',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.beer-two-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        focusOnSelect: true,
        asNavFor: '.product-two-slider',
        nextArrow: '<img class="slick-next" src="' + habeco.site_url + '/wp-content/themes/habeco/assets/images/next2.png" />',
        prevArrow: '<img class="slick-prev" src="' + habeco.site_url + '/wp-content/themes/habeco/assets/images/prev2.png" />',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.about-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        nextArrow: '<img class="slick-next" src="' + habeco.site_url + '/wp-content/themes/habeco/assets/images/arrownext.png" />',
        prevArrow: '<img class="slick-prev" src="' + habeco.site_url + '/wp-content/themes/habeco/assets/images/arrowprev.png" />',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.news-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        nextArrow: '<img class="slick-next" src="' + habeco.site_url + '/wp-content/themes/habeco/assets/images/arrownext.png" />',
        prevArrow: '<img class="slick-prev" src="' + habeco.site_url + '/wp-content/themes/habeco/assets/images/arrowprev.png" />',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.achievements-slider').slick({
        dots: true,
        infinite: true,
        centerMode: true,
        speed: 300,
        focusOnSelect: true,
        arrows: true,
        centerPadding: '0px',
        slidesToShow: 3,
        slidesToScroll: 3,
        nextArrow: '<img class="slick-next" src="' + habeco.site_url + '/wp-content/themes/habeco/assets/images/next2.png" />',
        prevArrow: '<img class="slick-prev" src="' + habeco.site_url + '/wp-content/themes/habeco/assets/images/prev2.png" />',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.product-slider').slick({
        infinite: true,
        speed: 300,
        arrows: true,
        centerPadding: '0px',
        slidesToShow: 4,
        slidesToScroll: 1,
        nextArrow: '<img class="slick-next" src="' + habeco.site_url + '/wp-content/themes/habeco/assets/images/next.png" />',
        prevArrow: '<img class="slick-prev" src="' + habeco.site_url + '/wp-content/themes/habeco/assets/images/prev.png" />',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    $('.single-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        nextArrow: '<img class="slick-next" src="' + habeco.site_url + '/wp-content/themes/habeco/assets/images/next.png" />',
        prevArrow: '<img class="slick-prev" src="' + habeco.site_url + '/wp-content/themes/habeco/assets/images/prev.png" />',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.product-two-slider').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow:1,
      slidesToScroll: 1,
      arrows:false,
       asNavFor: '.beer-two-slider',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
    //scroll add class
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        //>=, not <=
        if (scroll >= 55) {
            $("#header").addClass("scroll-menu");

        } else
            $("#header").removeClass("scroll-menu");

    }); //missing );

    $('.quality .add').click(function() {
        var a = $(this).parent().find('.input-quality').val()
        a = parseInt($(this).parent().find('.input-quality').val()) + 1;
        parseInt($(this).parent().find('.input-quality').val(a));
        //console.log(parseInt($(this).parent().find('.input-quality').val())+1);
    })

    $('.quality .sub').click(function() {
        var a = $(this).parent().find('.input-quality').val()
        if (a <= 1) {
            alert('Số lượng không được bé hơn 1')
        } else {
            a = parseInt($(this).parent().find('.input-quality').val()) - 1;
            parseInt($(this).parent().find('.input-quality').val(a));
            //console.log(parseInt($(this).parent().find('.input-quality').val())+1);
        }
    })

    $('.mobile-button').click(function(){
        if($(this).hasClass('active'))
        {
            $(this).removeClass('active');
            $('.bg-white').removeClass('mobile-menu')
        }else{
            $(this).addClass('active');
            $('.bg-white').addClass('mobile-menu')
        }
    });
    $('.login').click(function(){
        $('#login-modal').modal('show');
    });
    $('.about-slider').css('margin-top', $('#header').height());
    $('.home-slider').css('margin-top', $('#header').height());
    $('.news-slider').css('margin-top', $('#header').height());
    $('.contact .section1 .image').css('margin-top', $('#header').height());
    $('.product .section1 .image').css('margin-top', $('#header').height());
    $('.shareholder .section1 .image').css('margin-top', $('#header').height());
    $('.search-wrapper').css('margin-top', $('#header').height());

    if ($(window).width() > 767 ) {
        AOS.init({
            offset: 200,
            duration: 400,
            startEvent: 'loading-complete-event'
        });
    } else {
        AOS.init({
            offset: 0,
            duration: 400,
            startEvent: 'loading-complete-event'
        });
    }
    
    $('a').click(function(event) {
        if($(this).attr('href') != '#' && $(this).attr('href') != 'javascript:void(Tawk_API.toggle())') {
            event.preventDefault();
            loading_effect_1($(this));
        }
    });

    $('.shareholder .section2 .category-box .number-year').click(function(){
        if($(this).hasClass('active'))
            $(this).removeClass('active');
        else{
            $('.shareholder .section2 .category-box .number-year').removeClass('active');
            $(this).addClass('active');
        }
        if($(this).parent('.year').hasClass('show-post'))
            $(this).parent('.year').removeClass('show-post');
        else{
            $('.shareholder .section2 .category-box .year').removeClass('show-post');
            $(this).parent('.year').addClass('show-post');
        }
    });

    $('.list-inline-item .search').click(function() {
        $(this).parents().find('.box-search').toggleClass('searchbar');
    });

})
function loading_effect_2() {
    TweenMax.to($('.loading-page'), 1, { ease: Power3.easeInOut, height: '0vh' });
    TweenMax.to($('.loading-page .loading-logo'), 1, { ease: Power3.easeInOut, opacity: 0 });
    // TweenMax.to(".info", 1, {className:"+=tracking-in-expand"});
    document.dispatchEvent(new Event('loading-complete-event'));
}
function loading_effect_1(element) {
    TweenMax.to($('.loading-page'), 1, { ease: Power3.easeInOut, height: '100vh' })
    TweenMax.to($('.loading-page .loading-logo'), 0.5, { ease: Power3.easeInOut, opacity: 1 });

    var link = element.attr('href');
    setTimeout(function() {
        window.location.replace(link);
    }, 1000);
}
$(window).load(function() {
    //$('.loading-page').css('background-image', 'url(' + habeco.template_dir + '/assets/images/loading/loading-1.png)');
    loading_effect_2();
});
