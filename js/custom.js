jQuery(function ($) {

    const carousel3Dswiper = new Swiper(".carousel-3D-swiper", {
        loop: true,
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 8,
        coverflowEffect: {
            rotate: 0,
            stretch: -30,
            depth: 350,
            modifier: 1,
            slideShadows: true
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            enabled: false
        },
        breakpoints: {
            768: {
                slidesPerView: 4.25,
                coverflowEffect: {
                    rotate: 0,
                    stretch: -60,
                    depth: 350,
                    modifier: 1,
                    slideShadows: true
                }
            },
            1200: {
                slidesPerView: 2.585,
                coverflowEffect: {
                    rotate: 0,
                    stretch: -80,
                    depth: 350,
                    modifier: 1,
                    slideShadows: true
                }
            }
        }
    });
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
    /**
     * Toggle .header-scrolled class to #header when page is scrolled
     */
    let selectHeader = $('#nav-main ');
    if (selectHeader) {
        const headerScrolled = () => {
            if (window.scrollY > 100) {
                selectHeader.addClass('header-scrolled')
            } else {
                selectHeader.removeClass('header-scrolled')
            }
        }
        window.addEventListener('load', headerScrolled)
        $(document).scroll(function() {
            headerScrolled();
        });
    }

}); // jQuery End
