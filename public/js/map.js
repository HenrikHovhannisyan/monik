ymaps.ready(function () {
    let myMap;

    function initMap(mapId, latitude, longitude) {
        let myPlacemark,
            mapCenter = [latitude || 40.17763623592104, longitude || 44.512562778151285];

        myMap = new ymaps.Map(mapId, {
            center: mapCenter,
            zoom: 17,
        }, {
            searchControlProvider: "yandex#search",
        });

        if (latitude && longitude) {
            let coords = [latitude, longitude];
            myPlacemark = createPlacemark(coords);
            myMap.geoObjects.add(myPlacemark);
            getAddress(coords);
        }

        myMap.events.add("click", function (e) {
            let coords = e.get("coords");

            if (myPlacemark) {
                myPlacemark.geometry.setCoordinates(coords);
            } else {
                myPlacemark = createPlacemark(coords);
                myMap.geoObjects.add(myPlacemark);
                myPlacemark.events.add("dragend", function () {
                    getAddress(myPlacemark.geometry.getCoordinates());
                });
            }
            getAddress(coords);
        });

        function createPlacemark(coords) {
            return new ymaps.Placemark(coords, {
                iconCaption: "Поиск...",
            }, {
                preset: "islands#violetDotIconWithCaption",
                draggable: true,
            });
        }

        function getAddress(coords) {
            myPlacemark.properties.set("iconCaption", "Поиск...");
            ymaps.geocode(coords).then(function (res) {
                let firstGeoObject = res.geoObjects.get(0);

                let address = firstGeoObject.getAddressLine();
                let city = firstGeoObject.getLocalities().join(", ") || "";
                let region = firstGeoObject.getAdministrativeAreas().join(", ") || "";
                let street = firstGeoObject.getThoroughfare() || "";
                let house = firstGeoObject.getPremiseNumber() || "";

                let modal = document.querySelector(`#${mapId}`).closest('.modal');
                let citySelector = modal.querySelector('select[name="city"]');
                let regionInput = modal.querySelector('input[name="region"]');
                let streetInput = modal.querySelector('input[name="street"]');
                let houseInput = modal.querySelector('input[name="house_number"]');
                let latitudeInput = modal.querySelector('input[name="latitude"]');
                let longitudeInput = modal.querySelector('input[name="longitude"]');
                let addressInput = modal.querySelector('input[name="address"]');

                let cityOption = Array.from(citySelector.options).find(option => option.textContent.trim() === city);

                if (cityOption) {
                    cityOption.selected = true;
                } else {
                    citySelector.selectedIndex = 0;
                    alert("Город не найден в списке. Выберите город вручную.");
                }

                regionInput.value = region;
                streetInput.value = street;
                houseInput.value = house;
                latitudeInput.value = coords[0];
                longitudeInput.value = coords[1];
                addressInput.value = address;

                myPlacemark.properties.set({
                    iconCaption: [city, street, house].filter(Boolean).join(", "),
                    balloonContent: address,
                });
            });
        }
    }

    function clearMap() {
        if (myMap) {
            myMap.geoObjects.removeAll();
            myMap.destroy();
            myMap = null;
        }
    }

    document.querySelectorAll('.modal').forEach(function (modal) {
        modal.addEventListener('shown.bs.modal', function (event) {
            let modalId = modal.getAttribute('id');
            if (modalId.startsWith('editAddressModal')) {
                let addressId = modalId.replace('editAddressModal', '');
                let mapId = 'editMap' + addressId;

                let latitude = parseFloat(document.querySelector(`input[name="latitude"][data-id="${addressId}"]`)?.value);
                let longitude = parseFloat(document.querySelector(`input[name="longitude"][data-id="${addressId}"]`)?.value);

                initMap(mapId, latitude, longitude);
            } else if (modalId === 'addAddressModal') {
                initMap('map');
            }
        });

        modal.addEventListener('hidden.bs.modal', function () {
            clearMap();
        });
    });
});
