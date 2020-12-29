// SCROLL-SPY

var scrollSpy = document.querySelectorAll('.scrollspy');
M.ScrollSpy.init(scrollSpy, {
	scrollOffset : 56 // agar landingnya pas
});

// END SCROLL-SPY


// NAVBAR

var navbar = document.querySelectorAll('.sidenav');
M.Sidenav.init(navbar);

// Navbar active scroll & click (Learn!)
jQuery(document).ready(function(jQuery) {            
    var topMenu = jQuery("#top-menu"),
        offset = 40,
        topMenuHeight = topMenu.outerHeight()+offset,
        // All list items
        menuItems =  topMenu.find('a[href*="#"]'),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function(){
          var href = jQuery(this).attr("href"),
          id = href.substring(href.indexOf('#')),
          item = jQuery(id);
          //console.log(item)
          if (item.length) { return item; }
        });

    // so we can get a fancy scroll animation
    menuItems.click(function(e){
      var href = jQuery(this).attr("href"),
        id = href.substring(href.indexOf('#'));
          offsetTop = href === "#" ? 0 : jQuery(id).offset().top-topMenuHeight+1;
      jQuery('html, body').stop().animate({ 
          scrollTop: offsetTop
      }, 300);
      e.preventDefault();
    });

    // Bind to scroll
    jQuery(window).scroll(function(){
       // Get container scroll position
       var fromTop = jQuery(this).scrollTop()+topMenuHeight;

       // Get id of current scroll item
       var cur = scrollItems.map(function(){
         if (jQuery(this).offset().top < fromTop)
           return this;
       });

       // Get the id of the current element
       cur = cur[cur.length-1];
       var id = cur && cur.length ? cur[0].id : "";               
       
       menuItems.parent().removeClass("active");
       if(id){
            menuItems.parent().end().filter("[href*='#"+id+"']").parent().addClass("active");
       }
       
    })
})
// End active scroll & click

// END NAVBAR


// SLIDER

var slider = document.querySelectorAll('.slider');
M.Slider.init(slider, {
	// tulis nama optionsnya lalu beri nilai
	indicators: false, // tombol slider
	height: 587,
	duration: 800, //bisa juga pake property transition
	interval: 3000
});

// END SLIDER


// ABOUT

$(window).scroll(function() {
	var wScroll = $(this).scrollTop();

	if(wScroll > $('.about').offset().top - 10) {
		$('section#about .card').addClass('animated zoomInLeft');
	}
});

// video play button
function playVideo() {
      return videox.paused ? videox.play() : videox.pause();
    }

// END ABOUT


// SERVICES

var parallaxServices = document.querySelectorAll('.parallax');
M.Parallax.init(parallaxServices);

$(window).scroll(function() {
	var wScroll = $(this).scrollTop();

	if(wScroll > $('.services').offset().top - 220) {
		// agar munculnya satu-satu
		$('.effect-service').each(function(i) {
			setTimeout(function() {
				$('.effect-service').eq(i).addClass('animated fadeIn');
			}, 300 * i) // kita menjalankan sesuati tapi nunggu dulu beberapa lama (tergantung waktu yg kita tentukan)
		});	
	}

});

// END SERVICES


// PROMO

// Tabs Color
var tabPromo = document.querySelectorAll('.tabs');
M.Tabs.init(tabPromo);

var promoView = document.querySelectorAll('.materialboxed');
M.Materialbox.init(promoView);

// Modals
var modalPromo = document.querySelectorAll('.modal');
M.Modal.init(modalPromo);

var formSelect = document.querySelectorAll('select');
M.FormSelect.init(formSelect);
// for HTML5 "required" attribute
    $("select[required]").css({
      display: "inline",
      height: 0,
      padding: 0,
      width: 0
    });

var datePromo = document.querySelectorAll('.datepicker');
M.Datepicker.init(datePromo);

$(document).ready(function () {
	$('.price-active').trigger('click');
	$('.effect-pricelist').addClass('animated fadeInUp');
}); 

$(document).ready(function () {
	$('.promo-active').trigger('click');
	$('.effect-promo').addClass('animated fadeInUp');
}); 

// END PROMO


// CLIENTS

var flkty = new Flickity( '.main-gallery', {
  cellAlign: 'left',
  contain: true,
  wrapAround: true,
  prevNextButtons: false,
  autoPlay: 5000
});

// END CLIENTS


// VENDOR LIST

var vendorList = document.querySelectorAll('.collapsible');
M.Collapsible.init(vendorList);

$(window).scroll(function() {
	var wScroll = $(this).scrollTop();

if(wScroll > $('.vendor').offset().top - 220) {
		// agar munculnya satu-satu
		$('.vendor .effect-vendor').each(function(i) {
			setTimeout(function() {
				$('.vendor .effect-vendor').eq(i).addClass('active-effectvendor');
			}, 300 * i) // kita menjalankan sesuati tapi nunggu dulu beberapa lama (tergantung waktu yg kita tentukan)
		});	
	}

});

// END VENDOR LIST


// FOOTER

var subscribe = document.querySelectorAll('.tooltipped');
M.Tooltip.init(subscribe);

// END FOOTER

