<!-- Add Address Modal -->
<div class="modal fade" id="addAddressModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h2 class="modal-title fs-5" id="exampleModalLabel">
                    {{ __('index.add_address') }}
                </h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('addresses.store') }}">
                    @csrf
                    <input type="hidden" name="address" value="address">
                    <input type="hidden" name="latitude" value="40.1772">
                    <input type="hidden" name="longitude" value="44.5035">
                    <div class="form-group mb-3">
                        <div class="custom_select">
                            <select class="form-control" name="city" required>
                                <option value="">{{ __('index.select_city') }}</option>
                                <option value="Yerevan">{{ __('index.cities.Yerevan') }}</option>
                                <option value="Gyumri" disabled>{{ __('index.cities.Gyumri') }}</option>
                                <option value="Vanadzor" disabled>{{ __('index.cities.Vanadzor') }}</option>
                                <option value="Hrazdan" disabled>{{ __('index.cities.Hrazdan') }}</option>
                                <option value="Vagharshapat" disabled>{{ __('index.cities.Vagharshapat') }}</option>
                                <option value="Abovyan" disabled>{{ __('index.cities.Abovyan') }}</option>
                                <option value="Kapan" disabled>{{ __('index.cities.Kapan') }}</option>
                                <option value="Ararat" disabled>{{ __('index.cities.Ararat') }}</option>
                                <option value="Armavir" disabled>{{ __('index.cities.Armavir') }}</option>
                                <option value="Gavar" disabled>{{ __('index.cities.Gavar') }}</option>
                                <option value="Artashat" disabled>{{ __('index.cities.Artashat') }}</option>
                                <option value="Ijevan" disabled>{{ __('index.cities.Ijevan') }}</option>
                                <option value="Charentsavan" disabled>{{ __('index.cities.Charentsavan') }}</option>
                                <option value="Goris" disabled>{{ __('index.cities.Goris') }}</option>
                                <option value="Masis" disabled>{{ __('index.cities.Masis') }}</option>
                                <option value="Ashtarak" disabled>{{ __('index.cities.Ashtarak') }}</option>
                                <option value="Sisian" disabled>{{ __('index.cities.Sisian') }}</option>
                                <option value="Spitak" disabled>{{ __('index.cities.Spitak') }}</option>
                                <option value="Sevan" disabled>{{ __('index.cities.Sevan') }}</option>
                                <option value="Martuni" disabled>{{ __('index.cities.Martuni') }}</option>
                                <option value="Vardenis" disabled>{{ __('index.cities.Vardenis') }}</option>
                                <option value="Yeghvard" disabled>{{ __('index.cities.Yeghvard') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" type="text" name="region" placeholder="{{ __('index.region') }} *"
                               required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="street" placeholder="{{ __('index.street') }} *"
                               required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="house_number"
                               placeholder="{{ __('index.house_number') }} *" required>
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" type="text" name="postcode" placeholder="{{ __('index.postcode') }} *"
                               required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-fill-out btn-sm">
                            {{ __('index.add') }}
                        </button>
                        <button type="button" class="btn btn-line-fill btn-sm" data-bs-dismiss="modal">
                            {{ __('index.cancel') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

