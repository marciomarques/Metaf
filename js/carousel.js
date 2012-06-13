var next, prev, i=0;
jQuery(document).ready(function($) {
/*   $("ul.carousel li .description").hide(); */
  max = $("ul.carousel li").length-1;
  $("span.total-count").text(max+1);
  $("span.current-count").text(1);
/*
  $("ul.carousel li").hover( function() {
  	$(this).find("img.img-cinza").hide();
  	$(this).find("img.img-color").show();
  }, function() {
    if(!$(this).hasClass("active")){
      $(this).find("img.img-cinza").show();
      $(this).find("img.img-color").hide();
    }
  });
*/
  
/*
  $("ul.carousel li.active").hover( function() {
    $(this).find(".description").slideToggle();
  }, function(){
    $(this).find(".description").slideToggle();
  });
*/
  $("ul.carousel").find("li:eq(1)").on("click", function(){
    next();
  });
  next = function(){
    if(i<max){

      $("ul.carousel").find("li:eq("+(i+1)+")").find("img.img-cinza").hide();
      $("ul.carousel").find("li:eq("+(i+1)+")").find("img.img-color").show();
      $("ul.carousel").find("li:eq("+(i)+")").find("img.img-cinza").show();
      $("ul.carousel").find("li:eq("+(i)+")").find("img.img-color").hide();

      $("ul.carousel").find("li:eq("+(i+1)+")").addClass("active");
      $("ul.carousel").find("li:eq("+i+")").removeClass("active");
      $("ul.carousel").find("li:eq("+(i+2)+")").removeClass("hidden");
      $("ul.carousel").find("li:eq("+(i-1)+")").addClass("hidden");


      $("ul.carousel li").each(function(){
        $(this).on("click", undefined)
      });
      $("ul.carousel").find("li:eq("+(i+2)+")").on("click", next);
      $("ul.carousel").find("li:eq("+(i)+")").on("click", prev);
      $("span.current-count").text(++i+1);
      
/*
	  $("ul.carousel li.active").hover( function() {
	    $(this).find(".description").slideToggle();
	  }, function(){
	    $(this).find(".description").slideToggle()
	  });
*/
    }
  }
  prev = function(){
    if(i>0){

      $("ul.carousel").find("li:eq("+(i-1)+")").find("img.img-cinza").hide();
      $("ul.carousel").find("li:eq("+(i-1)+")").find("img.img-color").show();
      $("ul.carousel").find("li:eq("+(i)+")").find("img.img-color").hide();
      $("ul.carousel").find("li:eq("+(i)+")").find("img.img-cinza").show();

/*       $("ul.carousel").find("li:eq("+(i+1)+")").addClass("hidden"); */
      $("ul.carousel").find("li:eq("+i+")").removeClass("active");
      $("ul.carousel").find("li:eq("+(i-1)+")").addClass("active");
      $("ul.carousel").find("li:eq("+(i-2)+")").removeClass("hidden");
      $("ul.carousel").find("li:eq("+(i+1)+")").addClass("hidden");


      $("ul.carousel li").each(function(){
        $(this).on("click", undefined);
      });
      $("ul.carousel").find("li:eq("+(i)+")").on("click", next);
      $("ul.carousel").find("li:eq("+(i-2)+")").on("click", prev);
      $("span.current-count").text(--i+1);

/*
	  $("ul.carousel li.active").hover( function() {
	    $(this).find(".description").slideToggle();
	  }, function(){
	    $(this).find(".description").slideToggle();
	  });
*/
    }
  }
});