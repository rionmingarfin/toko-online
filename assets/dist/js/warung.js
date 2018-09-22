$(document).ready(function(){
  $(".utama-carousel").owlCarousel({
  	items :1,
  	loop :true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    smartSpeed:1000,
  });
  $(".produk").owlCarousel({
  	items :4,
  	margin:10,
  	nav:true,
  	navContainer:"#letaknavproduk",
  	navText:["<a><i class='fa fa-angle-double-left'></i></a>",
  	"<a><i class='fa fa-angle-double-right'></i></a>"],
  	dots:false,
  	responsiveClass:true,
    responsive:{
        0:{
            items:2,
        },
        600:{
            items:3,
        },
        1000:{
            items:4,
        }
    }
  });
   $(".blog").owlCarousel({
  	items :2,
  	margin:10,
  	nav:true,
  	navContainer:"#letakblog",
     smartSpeed:1000,
     loop:true,
  	navText:["<a><i class='fa fa-angle-double-left'></i></a>",
  	"<a><i class='fa fa-angle-double-right'></i></a>"],
  	dots:false,
  });
   $(".terlaris").owlCarousel({
  	items :1,
  	nav:true,
  	navContainer:"#terlaris",
  	navText:["<a><i class='fa fa-angle-double-left'></i></a>",
  	"<a><i class='fa fa-angle-double-right'></i></a>"],
  	dots:false,
  	responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        1000:{
            items:1,
        }
    }
  });
   $(".testimoni").owlCarousel({
  	items :1,
  	nav:false,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    loop:true,
    smartSpeed:1000,
  });
});