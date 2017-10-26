$(".post").hover(function(){
  $(this).find(".more").fadeIn(200);
}, function(){
  $(this).find(".more").fadeOut(200);
});
