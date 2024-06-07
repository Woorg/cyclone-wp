import svg4everybody from 'svg4everybody';
import $ from 'jquery';
// import {tns} from "tiny-slider/src/tiny-slider"
// import Tabby from 'tabbyjs';
// import magnificPopup from 'magnific-popup';
// import slick from 'slick-carousel';
// import LazyLoad from 'vanilla-lazyload';

// import "webp-hero/dist-cjs/polyfills";
// import WebpMachine from "webp-hero/dist/webp-machine"
// import 'jquery-mask-plugin';
// import 'ion-rangeslider';
// import Dropzone from 'dropzone';

// import "jquery-mask-plugin";
// import bound from 'bounds.js';

(function ($) {

  svg4everybody();

  let styles = [
    'padding: 2px 9px',
    'background: #82B93C',
    'color: #fff',
    'display: inline-block',
    'text-shadow: 0 1px 0 rgba(0, 0, 0, 0.2)',
    'box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.2) inset, 0 5px 3px -5px rgba(0, 0, 0, 0.5), 0 -13px 5px -10px rgba(255, 255, 255, 0.4) inset',
    'line-height: 1.56',
    'text-align: left',
    'font-size: 16px',
      'font-weight: 400'
  ].join(';');

  console.log('%c developed by igor gorlov gorlov https://webjeb.ru', styles);


   /*
      Lazyload images
    */


  let lazyLoadInstance = new LazyLoad({
    elements_selector: '.lazy',
    load_delay: 50,
    use_native: false
  });


  if (lazyLoadInstance) {
    lazyLoadInstance.update();
  }


  $(function() {


    // Nav

    const $header = $('.header');
    const $menuButton = $('.nav__button');

    $menuButton.on('click', function (e) {
      e.preventDefault();
      $(this).toggleClass('nav__button_active');
      $header.toggleClass('header_nav-active');

    });

    $(document).on('click', function(e) {
      if (!$(e.target).closest('.nav__button_active').length) {
        $header.removeClass('header_nav-active');
        $menuButton.removeClass('nav__button_active');
      }
    });

    // Tabs

    var $functionsTabs = $('.functions__nav');

    if( $functionsTabs.length > 0 ) {

      var functionsTabs = new Tabby('.functions__nav');

      $(window).resize(function () {
        if ( $(window).outerWidth() < 640 )  {
          location.reload();
          functionsTabs.destroy();
        } else {
          var functionsTabs = new Tabby('.functions__nav');
        }
      });

      if ( $(window).outerWidth() < 640 )  {
        functionsTabs.destroy();
      } else {
        var functionsTabs = new Tabby('.functions__nav');
      }

    }


    // Tabs

    var $popupTabs = $('.popup__tabs-nav');

    if( $popupTabs.length > 0 ) {

      var popupTabs = new Tabby('.popup__tabs-nav');

    }


    // Popup

    $('.open-popup a').magnificPopup({
      type:'inline',
      midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });





    // Slider

    var $slider = $('.functions__w');

    if( $slider.length > 0 ) {

      $slider.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        initialSlide: 1,
        arrows: false,
        mobileFirst: true,
        infinite: false,

        fade: false,
        adaptiveHeight: true,
        speed: 100,
        asNavFor: '.functions__nav',
        responsive: [

          {
            breakpoint: 640,
            settings: 'unslick'
          }
        ]
      });


      $('.functions__nav').slick({
        arrows: false,
        slidesToShow: 1.3,
        slidesToScroll: 1,
        asNavFor: $slider,
        infinite: false,
        dots: true,
        centerMode: true,
        centerPadding: '10px',
        mobileFirst: true,
        initialSlide: 1,
        speed: 100,
        focusOnSelect: true,
        variableWidth: true,
        responsive: [

          {
            breakpoint: 640,
            settings: 'unslick'
          }
        ]
      });

    }

    // Phone Mask

    $('.form__field_phone input').mask("+ 7(999)999-99-99", {
      placeholder: "Телефон"
    });


    $.extend($.validator.messages, {
      required: "Поле обязательно для заполнения.",
      remote: "Please fix this field.",
      email: "Неверно введён электронный адрес.",
      url: "Please enter a valid URL.",
      date: "Please enter a valid date.",
      dateISO: "Please enter a valid date (ISO).",
      number: "Please enter a valid number.",
      digits: "Please enter only digits.",
      creditcard: "Please enter a valid credit card number.",
      equalTo: "Please enter the same value again.",
      accept: "Please enter a value with a valid extension.",
      maxlength: $.validator.format("Please enter no more than {0} characters."),
      minlength: $.validator.format("Please enter at least {0} characters."),
      rangelength: $.validator.format("Please enter a value between {0} and {1} characters long."),
      range: $.validator.format("Please enter a value between {0} and {1}."),
      max: $.validator.format("Please enter a value less than or equal to {0}."),
      min: $.validator.format("Please enter a value greater than or equal to {0}.")
    });


    // function pageWidget(pages) {
    //   var widgetWrap = $('<div class="widget_wrap"><ul class="widget_list"></ul></div>');
    //   widgetWrap.prependTo("body");
    //   for (var i = 0; i < pages.length; i++) {
    //     $('<li class="widget_item"><a class="widget_link" href="' + pages[i] + '.html' + '">' + pages[i] + '</a></li>').appendTo('.widget_list');
    //   }
    //   var widgetStilization = $('<style>body {position:relative} .widget_wrap{position:absolute;top:0;left:0;z-index:9999;padding:10px 20px;background:#222;border-bottom-right-radius:10px;-webkit-transition:all .3s ease;transition:all .3s ease;-webkit-transform:translate(-100%,0);-ms-transform:translate(-100%,0);transform:translate(-100%,0)}.widget_wrap:after{content:" ";position:absolute;top:0;left:100%;width:24px;height:24px;background:#222 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQAgMAAABinRfyAAAABGdBTUEAALGPC/xhBQAAAAxQTFRF////////AAAA////BQBkwgAAAAN0Uk5TxMMAjAd+zwAAACNJREFUCNdjqP///y/DfyBg+LVq1Xoo8W8/CkFYAmwA0Kg/AFcANT5fe7l4AAAAAElFTkSuQmCC) no-repeat 50% 50%;cursor:pointer}.widget_wrap:hover{-webkit-transform:translate(0,0);-ms-transform:translate(0,0);transform:translate(0,0)}.widget_item{padding:0 0 10px}.widget_link{color:#fff;text-decoration:none;font-size:15px;}.widget_link:hover{text-decoration:underline} </style>');
    //   widgetStilization.prependTo(".widget_wrap");
    // }

    // pageWidget([
    //   'index',
    //   'functions',
    //   'capabilities',
    //   'implemented',
    //   'support'

    // ]);







  });




})(jQuery);
