    //https://greensock.com/docs/v2/TweenMax
    // функция скроет элементы, добавь блок сначала сюда
    var tlOpening = new TimelineMax({
    onStart: function(){
    // TweenMax.fromTo('#container-p5', 8, {autoAlpha:0}, {autoAlpha:1})
    },
    delay: 1
    });
    tlOpening
    .fromTo('h2', 1, {autoAlpha:0, y:20}, {autoAlpha: 0, y:0}, 3.1)
    ;

    //а этот блок проявляет элемент с мувингом
    var target = $('.main');
    var targetPos = target.offset().top;
    var winHeight = $(window).height();
    var scrollToElem = targetPos - 0.6*winHeight;
    var key = 1;

    $(window).scroll(function(){
    var winScrollTop = $(this).scrollTop();
    if(winScrollTop > scrollToElem && key == 1){
    // $(target).addClass("fixed");

    var tlOpeningm = new TimelineMax({
    onStart: function(){
    // TweenMax.fromTo('.mainnn', 2, {top:"60%"}, {top:"30%"}, 0)
    },
    delay: 0
    });
    tlOpeningm
    .fromTo('.fixededddd', 2, {height:"100%"}, {height:"30%"}, 0)
    .fromTo('h2', 2, {autoAlpha:0, y:20}, {autoAlpha: 1, y:0}, 0)
    .fromTo('.cotte', 3, {autoAlpha:0, y:40}, {autoAlpha: 1, y:0}, 0)
    ;
    key = 2;
    } else {
      // $(target).removeClass("fixed");
    }
    });

