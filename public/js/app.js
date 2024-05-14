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



