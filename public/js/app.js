// Start add new phone
document.addEventListener('DOMContentLoaded', function () {
    const phoneContainer = document.querySelector('.phone-container');
    const addPhoneBtn = document.querySelector('.add-phone');

    if (!addPhoneBtn) {
        return;
    }

    addPhoneBtn.addEventListener('click', function () {
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
        phoneGroups.forEach(function (group) {
            const removeBtn = group.querySelector('.remove-phone');
            if (phoneGroups.length > 1) {
                removeBtn.style.display = 'inline-block';
            } else {
                removeBtn.style.display = 'none';
            }
        });
    }

    phoneContainer.addEventListener('click', function (event) {
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

    setTimeout(function () {
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
        if (checkoutButton) {
            checkoutButton.disabled = !(addressSelected && paymentSelected);
        }
    }

    addressRadios.forEach(radio => radio.addEventListener('change', checkFormValidity));
    paymentRadios.forEach(radio => radio.addEventListener('change', checkFormValidity));

    checkFormValidity();
});

//End Checkout button activated


// Start service worker registration
if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/serviceworker.js')
        .then();
}

// End service worker registration

// Start PWA download button
let deferredPrompt;

window.addEventListener('beforeinstallprompt', (e) => {
    e.preventDefault();
    deferredPrompt = e;
    const installBtn = document.getElementById('installBtn');
    installBtn.style.display = 'block';

    installBtn.addEventListener('click', () => {
        installBtn.style.display = 'none';
        deferredPrompt.prompt();
        deferredPrompt.userChoice.then((choiceResult) => {
            deferredPrompt = null;
        });
    });
});

window.addEventListener('appinstalled', () => {
    console.log('PWA установлено');
    document.getElementById('installBtn').style.display = 'none';
});

// End PWA download button

// Start shipping total calculator
document.addEventListener('DOMContentLoaded', function () {
    const shippingOptions = document.querySelectorAll('input[name="shipping_option"]');
    const shippingTotal = document.getElementById('shippingTotal');
    const productSubtotalElement = document.getElementById('product-subtotal');

    if (!shippingOptions.length || !shippingTotal || !productSubtotalElement) {
        return;
    }

    const productSubtotal = parseInt(productSubtotalElement.textContent) || 0;
    let baseTotal = parseInt(shippingTotal.textContent) || 0;

    shippingOptions.forEach(option => {
        option.addEventListener('change', function () {
            let additionalShipping = 0;

            if (this.value === "express") {
                additionalShipping = productSubtotal > 10000 ? 1000 : 500;
            } else if (this.value === "standard") {
                additionalShipping = productSubtotal > 10000 ? 0 : 0;
            } else if (this.value === "free") {
                additionalShipping = 0;
            }

            shippingTotal.textContent = baseTotal + additionalShipping;
        });
    });
});

// End shipping total calculator

