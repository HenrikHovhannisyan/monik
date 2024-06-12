<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h2 class="modal-title fs-5" id="exampleModalLabel">
                    {{ __('index.confirm_logout') }}
                </h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ __('index.confirm_logout_message') }}
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-line-fill btn-sm" data-bs-dismiss="modal">
                    {{ __('index.cancel') }}
                </button>
                <button type="button" class="btn btn-fill-out btn-sm"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('index.logout') }}
                </button>
            </div>
        </div>
    </div>
</div>
