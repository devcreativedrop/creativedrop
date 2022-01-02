// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200); // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200); // Else fade out the arrow
    }
});
$('#return-to-top').click(function() { // When arrow is clicked
    $('body,html').animate({
        scrollTop: 0 // Scroll to top of body
    }, 1);
});

// ===== Add Active Class on Menu ====
$(document).ready(function() {
    var url = window.location;
    $('.design-page-menu ul li a[href="' + url + '"]').parent().addClass('active');
    $('.design-page-menu ul li a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');
});

$(document).ready(function() {
    var url = window.location;
    $('.sticky-top ul li a[href="' + url + '"]').parent().addClass('active');
    $('.sticky-top ul li a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');
});

// ===== Show menu on Hover ====
$(document).ready(function() {
    $('.navbar-light .dmenu').hover(function() {
        $(this).find('.sm-menu').first().stop(true, true).show();
    }, function() {
        $(this).find('.sm-menu').first().stop(true, true).hide()
    });
});

$(document).ready(function() {
    $(".megamenu").on("click", function(e) {
        e.stopPropagation();
    });

});

// ===== Creative Slider ====
var swiper = new Swiper('.creative-slider-block', {
    slidesPerView: 6,
    spaceBetween: 20,
    slidesPerGroup: 1,
    loop: false,
    loopFillGroupWithBlank: true,
    autoplay: false,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        640: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 10,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 10,
        },
        1200: {
            slidesPerView: 6,
            spaceBetween: 20,
        },
    }
});

var swiper = new Swiper(".mySwiper", {
    slidesPerView: "auto",
    spaceBetween: 5,
    freeMode: true,
});



// ===== Video Modal ====
$(document).ready(function() {

    // Gets the video src from the data-src on each button

    var $videoSrc;
    $('.video-btn').click(function() {
        $videoSrc = $(this).data("src");
    });
    //   console.log($videoSrc);

    // when the modal is opened autoplay it  
    $('#videoModal').on('shown.bs.modal', function(e) {

        // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
        $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    })

    // stop playing the youtube video when I close the modal
    $('#videoModal').on('hide.bs.modal', function(e) {
        // a poor man's stop video
        $("#video").attr('src', $videoSrc);
    })

    // document ready  
});


// ===== Logo Design Page Slider ====
var swiper = new Swiper('.logo-slider-block', {
    slidesPerView: 5,
    // centeredSlides: true,
    spaceBetween: 30,
    grabCursor: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        320: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        640: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 10,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 10,
        },
        1200: {
            slidesPerView: 6,
            spaceBetween: 20,
        },
    }
});


// ===== Scroll to Section ====
$(".scrollto-section").find("a").click(function(e) {
    e.preventDefault();
    var section = $(this).attr("href");
    $("html, body").animate({
        scrollTop: $(section).offset().top - 80
    }, 10);
});


// ===== Ekko Lightbox Popup For Lightbox ====
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox({ alwaysShowClose: true });
});

$(document).ready(function() {
    $("#ekkoLight").click(function() {
        $(".ekko-lightbox").addClass("customLight");
    });


});

// Enable Tooltip of Bootstrap
$(function() {
    $('[data-toggle="tooltip"]').tooltip()
});

$(function() {
    $('[data-toggle="popover"]').popover()
})
$(function() {
    $(".pop-show").popover({
        html: true,
        // trigger: "focus",
        content: function() {
            return $('.pop-inn').html();
        }
    });
})
$('.popover-dismiss').popover({
    trigger: 'focus'
})

//Sidebar

$(document).ready(function() {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#dismiss, .overlay').on('click', function() {
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
    });

    $('#sidebarCollapse').on('click', function() {
        $('#sidebar').addClass('active');
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });

    //Select2 Dropdown
    $('.js-example-basic-single').select2({
        minimumResultsForSearch: Infinity
    });
});

//filter section


$("#service").select2({
    placeholder: "Filter by Service",
    allowClear: false
});
$("#subcategory").select2({
    placeholder: "Filter by Subcategory",
    allowClear: false
});
$("#industry").select2({
    placeholder: "Filter by Industry",
    allowClear: false
});





$('#page_sections').change(function() {
    if ($(this).val() != '') {
        var select = $(this).attr("id");
        var value = $(this).val();
        alert(value);
        var dependent = $(this).data('dependent');
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url: "{{ route('dynamicdependent.fetch') }}",
            method: "POST",
            data: { select: select, value: value, _token: _token, dependent: dependent },
            success: function(result) {
                $('#' + dependent).html(result);
            }

        })
    }
});

$('#country').change(function() {
    $('#state').val('');
    $('#city').val('');
});

$('#state').change(function() {
    $('#city').val('');
});