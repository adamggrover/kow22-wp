
jQuery(function(){

  $('.slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  fade: true,
  autoplaySpeed: 5000,
  speed: 2000,
  cssEase: 'ease-in-out',
  dots: false,
  touchMove: false,
  arrows:true
  });
  
  
  
  $('.news-carousel').slick({
  
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: false,
  
  
  dots:false,
  
  responsive: [{
    breakpoint: 1024,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 1,
     //centerMode: true,
  
    }
  
  }, {
    breakpoint: 800,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
      dots: true,
      infinite: true,
  
    }
  },  {
    breakpoint: 480,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 2000,
    }
  }]
  });
  
  $('.announcement-slider').slick({
  autoplay: true,
  arrows: false,
  autoplaySpeed: 4000
  
  });
  
  $('.announcement-div-slider').slick({
  autoplay: true,
  arrows: false,
  autoplaySpeed: 6000
  
  });
  
  
  });
  
AOS.init();

// hero loader

$(window).on('load', function() { // makes sure the whole site is loaded 
  $('#status').fadeOut(); // will first fade out the loading animation 
  $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  $('body').delay(350).css({'overflow':'visible'});
})

// When the user scrolls down 50px from the top of the document, change the header's background color from, transparent to dark

function headerBackground() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("header").style.backgroundColor = "#231F20";
  } else {
    document.getElementById("header").style.backgroundColor = "transparent";
  }

      }





//function to change logo size on scroll

function logoChange(){
    let logo = $(".logo1"); $(window).scroll(function() {
    //let scroll = $(window).scrollTop();
    

    
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        if(!logo.hasClass("logo2")) {
          logo.hide();
          logo.removeClass('logo1').addClass("logo2").fadeIn( "slow");
        }
      } else {
        if(!logo.hasClass("logo1")) {
          logo.hide();
          logo.removeClass("logo2").addClass('logo1').fadeIn( "slow");
        }
      }
    });
};

// Check if the header being displayed is the front page version and assign to variable "header"

header = document.getElementById("header").classList.contains("header1");

// On scroll run logo change function. Run header change function if on front page

  window.onscroll = function() {
      
     
      logoChange();
      if (header == true){
        headerBackground();
      }
      };



//Search Bar



  /* Set the height of the side navigation to 250px and the left margin of the page content to 250px */
function openSearch() {
    document.getElementById("header-search-container").style.height = "3rem";
    document.getElementById("header-container").style.marginTop = "3rem";
  }
  
  /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
  function closeSearch() {
    document.getElementById("header-search-container").style.height = "0";
    document.getElementById("header-container").style.marginTop = "0";
  }


// Sidenav

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("sidebar-nav").style.width = "26rem";

    document.getElementById("main").style.marginLeft = "26rem";

    

}
 
  
  /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("sidebar-nav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    
    
    
  }

//Announcement Box

function announcementClose() {
    var x = document.getElementById("announcement-wrapper");
    
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }


//news card section effects

//news card 1

//mouseOver
function opacityFunction(){
    document.getElementById("overlay1").style.opacity = '1';
}

function zIndexFuction(){
    document.getElementById("news-card-body1").style.zIndex = '1';
}

/*function linkColorFunction(){
    document.getElementById("news-card-body1").style.color = 'white';
}*/


//mouseOut

function opacityFunctionR(){
    document.getElementById("overlay1").style.opacity = '0';
}

function zIndexFuctionR(){
    document.getElementById("news-card-body1").style.zIndex = '0';
}

/*function linkColorFunctionR(){
    document.getElementById("news-card-body1").style.color = 'black';
}*/

//news card 2

//mouseOver
function opacityFunctionTwo(){
    document.getElementById("overlay2").style.opacity = '1';
}

function zIndexFuctionTwo(){
    document.getElementById("news-card-body2").style.zIndex = '1';
}

/*function linkColorFunctionTwo(){
    document.getElementById("news-card-body2").style.color = 'white';
}*/


//mouseOut

function opacityFunctionRTwo(){
    document.getElementById("overlay2").style.opacity = '0';
}

function zIndexFuctionRTwo(){
    document.getElementById("news-card-body2").style.zIndex = '0';
}

/*function linkColorFunctionRTwo(){
    document.getElementById("news-card-body2").style.color = 'black';
}*/

//news card 3

//mouseOver
function opacityFunctionThree(){
    document.getElementById("overlay3").style.opacity = '1';
}

function zIndexFuctionThree(){
    document.getElementById("news-card-body3").style.zIndex = '1';
}

/*function linkColorFunctionThree(){
    document.getElementById("news-card-body3").style.color = 'white';
}*/


//mouseOut

function opacityFunctionRThree(){
    document.getElementById("overlay3").style.opacity = '0';
}

function zIndexFuctionRThree(){
    document.getElementById("news-card-body3").style.zIndex = '0';
}

/*function linkColorFunctionRThree(){
    document.getElementById("news-card-body3").style.color = 'black';
}*/



