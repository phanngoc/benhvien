// display information of Khoa
  $(document).ready(function(){
    $("#TTKhoa").click(function(e){
        ShowDialog(true);
        e.preventDefault();
    });
    $("#close").click(function(){
        $(".messagepop").fadeOut(300);
    });
});

function ShowDialog(modal)
{
    $("#overlay").show();
    $(".messagepop").fadeIn(300);
}

// active menu=============
$(document).ready(function () {
    $(document).on("scroll", onScroll);

    //smoothscroll
    $('#nav-mobile a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");

        $('a').removeClass('active1');
        $(this).addClass('active1');
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+5
        }, 500, 'swing', function () {
            window.location.hash = target;
            // $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event){
  var scrollPos = $(window).scrollTop();
    // var scrollPos = $(document).scrollTop();
    $('#bg_menu nav ul li a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#bg_menu nav ul li a').removeClass("active1");
            currLink.addClass("active1");
        }
        else{
            currLink.removeClass("active1");
        }
    });
}

// ================
$(document).ready(function(){

     $(window).on("load",function() {
      $(window).scroll(function() {
        $(".khoa_item").each(function() {
          var objectBottom = $(this).offset().top + $(this).outerHeight();
          var windowBottom = $(window).scrollTop() + $(window).innerHeight();

          if (objectBottom < windowBottom) {
            if ($(this).css("opacity")==0) {$(this).fadeTo(500,1);}
          } else {
            if ($(this).css("opacity")==1) {$(this).fadeTo(500,0);}
          }
        });
      }); $(window).scroll();
    });

// display step in form==========================
  $("#step_2,#first_btn").click(function(){
    $("#second_form").show();
    $("#first_form").hide();
    $("#third_form").hide();
    $("#fourth_form").hide();
  });
  $("#step_3,#second_btn").click(function(){
    $("#second_form").hide();
    $("#first_form").hide();
    $("#third_form").show();
    $("#fourth_form").hide();
  });
  $("#step_1").click(function(){
    $("#first_form").show();
    $("#second_form").hide();
    $("#third_form").hide();
    $("#fourth_form").hide();
  });
  $("#step_4,#third_btn").click(function(){
    $("#first_form").hide();
    $("#second_form").hide();
    $("#third_form").hide();
    $("#fourth_form").show();
  });
  
// display news detail
    $(".click-view-detail").click(function(){
        $(".click-view-detail").parent().removeClass("active");
        $(this).parent().addClass("active");
        var curren = $(this).attr("href");
        $(curren).parents(".content-detail").find(".item-detail").hide();
        $(curren).show();
        $(curren).parents(".content-detail").slideDown();
        $("html, body").animate({
            scrollTop:$(curren).offset().top - 54
        }, 1000
        );
        return false;
    });
    $(".closes").click(function(){
        $(this).parents(".content-detail").slideUp();
        var getid = $(this).attr("href");
        $.scrollTo( this.hash, 800,   { offset:-54 });
        return false;
    });

  $("select").change(function(){
    $("select option:selected").each(function(){
      $(".introduce").show();
      $("#choose_hospital").removeClass("text");
      $("#choose_hospital").addClass("hospital_detail_text");
      // $("#name_hospital").replaceWith($(this));
      var getText = $(this).text();
      $("#name_hospital").text(getText);
    });
  });


  $(".brand-logo").click(function(){
    $.scrollTo( this.hash, 900,   { easing:'easeInCubic'});
    return false;
  });

    $("#nav-mobile a").click(function(){
         $.scrollTo( this.hash, 900,   { easing:'easeInCubic' , offset:-54 });
         return false;
    });
	var swiper = new Swiper('.swiper-container', {
       effect: 'fade',
        pagination: '.swiper-pagination',
        paginationClickable: true,
		loop: true,
        autoplayDisableOnInteraction: false,
		autoplay:5000
    });
  $('select').material_select();
  $('.scrollspy').scrollSpy();
  var options = [
    {selector: '.class', offset: 200, callback: 'globalFunction()' },
    {selector: '.other-class', offset: 200, callback: 'globalFunction()' },
  ];
  Materialize.scrollFire(options);
   var options = [ {selector: '#staggered-test', offset: 50, callback: 'Materialize.toast("This is our ScrollFire Demo!", 1500 )' }, {selector: '#staggered-test', offset: 205, callback: 'Materialize.toast("Please continue scrolling!", 1500 )' }, {selector: '#staggered-test', offset: 400, callback: 'Materialize.showStaggeredList("#staggered-test")' }, {selector: '#image-test', offset: 500, callback: 'Materialize.fadeInImage("#image-test")' } ]; Materialize.scrollFire(options);

    var gethw = $(window).height(),
        truheight = gethw - 90;
    $("#menu").hide();
    $("#bg_menu").removeClass("first");
    $(window).scroll(function () {
        if ($(this).scrollTop() > truheight) {
            $("header nav").addClass("f-nav");
            $("#bg_menu").addClass("first");
            $("#menu").show();
            $("h1").addClass("menu_logo");

            } else {
                $("header nav").removeClass("f-nav");
                $("#menu").hide();
                $("#bg_menu").removeClass("first");
                $("h1").removeClass("menu_logo");
        }

    });
    new WOW().init();

    $("#flip").click(function(){
        $("#infor").slideToggle("slow");
        //$("#infor1").slideToggle("slow");
    });
     $("#flip1").click(function(){
        $("#infor1").slideToggle("slow");
    });
     $("#flip2").click(function(){
        $("#infor2").slideToggle("slow");
    });
     $("#flip3").click(function(){
        $("#infor3").slideToggle("slow");
    });
     $("#flip4").click(function(){
        $("#infor4").slideToggle("slow");
    });
     $("#flip5").click(function(){
        $("#infor5").slideToggle("slow");
    });
    /*==loADING---*/
    var getwithbr = $(window).width();
    $(".load-bar").animate({
      width: getwithbr
    }, 1500, function(){
      $(".loading .bg-filter").animate({
          height: "0"
      }, 1000, function(){
          $(".loading").fadeOut(300, function(){
                $(".fadeleft, .fadedown").each(function(i){
                    var $this = $(this);
                    setTimeout(function(){
                        $this.addClass("actives");
                    }, i*300);
                });
          });
      });
    });
//====== ajax choose city
  $('#hospital').change(function(e) {
      var hospital=$('#hospital').val();
      $.get('hospital.php', { "hospital": hospital }, function(result){
          $("#hospitalRetrive").html(result);
      });
  });


var jssor_1_SlideshowTransitions = [
  {$Duration:1200,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:1.3,$Top:2.5}},
  {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.1,0.9],$Top:[0.1,0.9]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:0.8,$Top:2.5}},
  {$Duration:1500,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:0.8,$Top:2.5}},
  {$Duration:1500,x:0.3,y:-0.3,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:0.8,$Top:2.5}},
  {$Duration:1800,x:1,y:0.2,$Delay:30,$Cols:10,$Rows:5,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$Reverse:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:{$Left:$Jease$.$InOutSine,$Top:$Jease$.$OutWave,$Clip:$Jease$.$InOutQuad},$Outside:true,$Round:{$Top:1.3}},
  {$Duration:1000,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
  {$Duration:1000,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
  {$Duration:1000,y:-1,$Cols:12,$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12}},
  {$Duration:1000,x:-0.2,$Delay:40,$Cols:12,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
  {$Duration:2000,y:-1,$Delay:60,$Cols:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}}
];

var jssor_1_options = {
  $AutoPlay: true,
  $SlideshowOptions: {
    $Class: $JssorSlideshowRunner$,
    $Transitions: jssor_1_SlideshowTransitions,
    $TransitionsOrder: 1
  },
  $ArrowNavigatorOptions: {
    $Class: $JssorArrowNavigator$
  },
  $BulletNavigatorOptions: {
    $Class: $JssorBulletNavigator$
  }
};

var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

//responsive code begin
//you can remove responsive code if you don't want the slider scales while window resizing
function ScaleSlider() {
    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
    if (refSize) {
        refSize = Math.min(refSize, 1500);
        jssor_1_slider.$ScaleWidth(refSize);
    }
    else {
        window.setTimeout(ScaleSlider, 30);
    }
}
ScaleSlider();
$(window).bind("load", ScaleSlider);
$(window).bind("resize", ScaleSlider);
$(window).bind("orientationchange", ScaleSlider);

});

// datepicker=====================
$(function() {
  $( "#datepicker" ).datepicker();
});
/*== map ==*/
function initialize() {
   var mapOptions = {
        zoom: 15,
        center: new google.maps.LatLng(16.072840, 108.215240),
        scrollwheel: true,
        styles: [{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#e7eaec"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"color":"#e7eaeb"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.government","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"visibility":"off"},{"color":"#c9d5ca"}]},{"featureType":"poi.place_of_worship","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.school","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.sports_complex","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ddc6a2"},{"saturation":"-50"},{"lightness":"7"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#b59e74"},{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#d7dbdc"}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#d7dbdc"}]},{"featureType":"transit.station","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#abb9c1"}]}]
    };
    var mapElement = document.getElementById('map');
    var map = new google.maps.Map(mapElement, mapOptions);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(16.072840, 108.215240),
        map: map,
        title: 'Snazzy!'
    });
}
google.maps.event.addDomListener(window, 'load', initialize);
// ========================================
$(function() {
  var pull    = $('#pull');
    menu    = $("#menu");

  $(pull).on('click', function(e) {
    e.preventDefault();
    menu.slideToggle();
  });
});

$("#idea").als({
  visible_items: 4,
  scrolling_items: 2,
  orientation: "horizontal",
  circular: "yes",
  autoscroll: "no",
  interval: 4000
});
