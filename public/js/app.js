// Start Get Language
document.addEventListener('DOMContentLoaded', function () {
    const dropdownItems = document.querySelectorAll('.select-lang');
    dropdownItems.forEach(item => {
        item.addEventListener('click', function () {
            const selectedLanguage = this.getAttribute('data-lang');
            localStorage.setItem('selectedLanguage', selectedLanguage);
        });
    });

    const selectedLanguage = localStorage.getItem('selectedLanguage');
    if (selectedLanguage && selectedLanguage !== "null" && window.location.pathname.slice(1, 3) !== selectedLanguage) {
        window.location.href = `/${selectedLanguage}`;
    }
});

// End Get Language

// Start Banner


// End Banner

// Start Home Category Section
new Swiper(".category", {
    slidesPerView: 2,
    spaceBetween: 20,
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
    breakpoints: {
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        992: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
    }
});

// End Home Category Section
