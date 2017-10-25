var loremipsum = document.registerElement("lorem-ipsum", {
  prototype: Object.create(HTMLParagraphElement.prototype)
});

var lorem = ["Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu luctus enim. Vivamus ac mi diam. Phasellus vestibulum tortor non tellus luctus, nec mattis leo mattis. Sed iaculis molestie nulla, vitae porttitor leo imperdiet vel. Aliquam convallis, nunc at mollis porta, tellus magna blandit purus, a rhoncus sapien velit quis velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam semper sodales mi, ut vulputate leo molestie et. Suspendisse eu erat nisi. Phasellus tincidunt, libero a maximus tempor, lorem ligula maximus nisi, in lacinia augue eros et nibh. Donec luctus nec lectus at vestibulum.","Fusce ut blandit sem, vestibulum dignissim purus. Suspendisse nec pulvinar felis, eget semper odio. Integer porttitor nisi nec neque ullamcorper, id rutrum orci porttitor. Praesent aliquam arcu et diam vestibulum, et blandit massa consequat. Sed vitae erat vel libero scelerisque semper vel et magna. Cras sit amet dolor quis lorem bibendum cursus. Proin a elit lectus. Integer erat nunc, laoreet et lorem id, aliquam cursus elit. Sed et eros non nulla congue imperdiet eget at lorem. Proin varius lacus nec pellentesque venenatis. Donec feugiat sem ac ex sollicitudin, eu sagittis lacus convallis. Nunc placerat tortor enim, blandit gravida felis rutrum vel. Donec nec elit nisi. Integer eget laoreet ligula. Morbi lobortis iaculis tortor, vitae pharetra dolor lobortis et. Suspendisse potenti.","Duis non sapien egestas sapien faucibus dignissim. Vestibulum tempus in ipsum sed condimentum. Suspendisse lorem mauris, dapibus sit amet ante et, blandit scelerisque elit. Donec sit amet nisi efficitur, suscipit tellus sed, feugiat lectus. Suspendisse scelerisque venenatis erat, sed pellentesque felis scelerisque id. Vivamus volutpat libero quis ligula malesuada, ac porta libero sagittis. Aenean diam felis, laoreet nec porttitor vitae, placerat eget dolor. Vivamus egestas, dui sed rhoncus pellentesque, sem purus posuere metus, ut dapibus nisi turpis et elit. Integer eget mauris suscipit, dignissim leo at, volutpat odio. Maecenas luctus felis ligula, eget rhoncus massa faucibus ut. Nam sit amet consectetur nunc. Mauris vitae nulla elit. Pellentesque id tortor non nulla viverra viverra quis quis massa. Sed mollis nulla ut orci malesuada finibus. Fusce dui nisl, vehicula sed quam vitae, pellentesque blandit justo.","Suspendisse eu eros arcu. Aenean sit amet tortor ut nulla viverra egestas sed et magna. Phasellus turpis tortor, luctus non dui ut, dapibus commodo leo. Nam eget dui elementum, elementum tellus nec, fermentum justo. Phasellus blandit a magna nec maximus. Mauris a orci luctus, lobortis felis eget, condimentum mi. Sed suscipit faucibus sapien quis molestie.","Nulla vel tellus quis urna tempus feugiat. In dignissim, velit ac pellentesque mattis, justo dui dignissim dui, vitae tristique est odio at enim. Nulla fermentum eget lorem ut viverra. Donec vestibulum ipsum lacus, ac interdum neque porta vel. Etiam id feugiat nunc. Nullam tempus ante ut felis consectetur tempus vitae non risus. Duis interdum vitae sem a egestas. Curabitur mollis tortor diam, quis vulputate quam porttitor sit amet. Duis ut justo ac enim finibus egestas. Sed tristique magna nisl, ut semper sem vulputate ac. Vestibulum tempus purus sed orci pharetra consectetur. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent dolor est, tempus vel imperdiet ac, luctus quis tellus. Mauris ac rhoncus enim."]


$("lorem-ipsum").each(function(){
  var paragraphs = $(this).attr("paragraphs");
  if(paragraphs == null){
    paragraphs = 1;
  }
  if(paragraphs > 5){
    paragraphs = 5;
  }

  var html = "<p>";

  for(var x = 0; x < paragraphs; x++){

    html = html + lorem[x] + "<br>";

  }
  html = html + "</p>";

  $(this).append(html);


});
