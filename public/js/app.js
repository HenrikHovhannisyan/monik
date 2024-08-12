// Start Get Language
/*document.addEventListener('DOMContentLoaded', function () {
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
});*/

// End Get Language

// Start add new phone
document.addEventListener('DOMContentLoaded', function() {
    const phoneContainer = document.querySelector('.phone-container');
    const addPhoneBtn = document.querySelector('.add-phone');

    if (!addPhoneBtn) {
        return;
    }

    addPhoneBtn.addEventListener('click', function() {
        const phoneGroup = document.createElement('div');
        phoneGroup.classList.add('form-group', 'col-md-12', 'mb-3', 'phone-group', 'd-flex');
        phoneGroup.innerHTML = `
            <input required class="form-control" name="phone[]" type="tel">
            <button type="button" class="btn btn-sm btn-danger remove-phone">
                <i class="fa-regular fa-trash-can remove-phone"></i>
            </button>
        `;
        phoneContainer.appendChild(phoneGroup);
        updateRemoveButtons();
    });

    function updateRemoveButtons() {
        const phoneGroups = phoneContainer.querySelectorAll('.phone-group');
        phoneGroups.forEach(function(group) {
            const removeBtn = group.querySelector('.remove-phone');
            if (phoneGroups.length > 1) {
                removeBtn.style.display = 'inline-block';
            } else {
                removeBtn.style.display = 'none';
            }
        });
    }

    phoneContainer.addEventListener('click', function(event) {
        if (event.target.classList.contains('remove-phone')) {
            const phoneGroups = phoneContainer.querySelectorAll('.phone-group');
            if (phoneGroups.length > 1) {
                event.target.closest('.phone-group').remove();
                updateRemoveButtons();
            }
        }
    });

    updateRemoveButtons();
});

// End add new phone

// Start copy product code
function copyProductCode(code) {
    let successMessage = document.getElementById('successMessage');
    let copiedSKU = document.getElementById('copiedSKU');

    navigator.clipboard.writeText(code);
    copiedSKU.textContent = code;
    successMessage.classList.remove('hidden');

    setTimeout(function() {
        successMessage.classList.add('hidden');
    }, 5000);
}

// End copy product code

// Start Checkout button activated
document.addEventListener('DOMContentLoaded', function () {
    const checkoutButton = document.querySelector('#checkout');
    const addressRadios = document.querySelectorAll('input[name="shipping_address"]');
    const paymentRadios = document.querySelectorAll('input[name="payment_option"]');

    function checkFormValidity() {
        const addressSelected = Array.from(addressRadios).some(radio => radio.checked);
        const paymentSelected = Array.from(paymentRadios).some(radio => radio.checked);

        checkoutButton.disabled = !(addressSelected && paymentSelected);
    }

    addressRadios.forEach(radio => radio.addEventListener('change', checkFormValidity));
    paymentRadios.forEach(radio => radio.addEventListener('change', checkFormValidity));

    checkFormValidity();
});

//End Checkout button activated
