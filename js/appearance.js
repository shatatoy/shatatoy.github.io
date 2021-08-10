    //https://greensock.com/docs/v2/TweenMax

    var tlOpening = new TimelineMax({
    onStart: function(){
    TweenMax.fromTo('#container-p5', 8, {autoAlpha:0}, {autoAlpha:1})
    },
    delay: 1
    });
    tlOpening
    // .fromTo('.hero h1 span:nth-child(1)', 1.8, {autoAlpha:0, y:20}, {autoAlpha: 1, y:0, ease: Power2.easeOut},  2.2) // исчезает почему то
    // .fromTo('.hero h1 span:nth-child(3)', 1.8, {autoAlpha:0, y:40}, {autoAlpha: 1, y:0, ease: Power2.easeOut},  2.4)
    .fromTo('.hero h1', 1, {autoAlpha:0, y:20, x:-1}, {autoAlpha: 1, y:0, x:0}, 1)
    .fromTo('.hero h3', 1, {autoAlpha:0, y:20}, {autoAlpha: 1, y:0}, 2.6)
    .fromTo('#menu', 1, {autoAlpha:0, y:-10}, {autoAlpha: 1, y:0}, 3.8)
    // .fromTo('h2', 1, {autoAlpha:0, y:20}, {autoAlpha: 0, y:0}, 3.1)
    // .fromTo('p, h4, h2', 1, {autoAlpha:0, y:0}, {autoAlpha: 1, y:0}, 1)  
    // .fromTo('p', 1, {autoAlpha:0, y:20}, {autoAlpha: 1, y:0}, 7) // за 1 секунду от {autoAlpha:0(прозрачность?), y:20} к {autoAlpha: 1, y:0}, начиная от 4 секунды)
    // вне блока .hero они мягко исчезают. пригодится.
    ;