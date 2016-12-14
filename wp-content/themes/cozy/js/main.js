TweenMax.set("#tortilla", {
  scale: 1, opacity: 0
});



var animation = TweenMax.to("#tortilla",1,{
  scale: 1, opacity: 1, ease: Bounce.easeOut
});



var controller = new ScrollMagic.Controller();
var scene =  new ScrollMagic.Scene({
  offset: $(window).height(),
  duration: 600
})
.setPin(".slide1").setTween(animation);
scene.addTo(controller);