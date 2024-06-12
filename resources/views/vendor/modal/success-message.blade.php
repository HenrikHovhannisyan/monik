<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title text-success" id="successModalLabel">{{ __('index.success') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center d-grid gap-3">
                <i class="text-success fa-regular fa-circle-check fa-5x fa-fade"></i>
                {{ session('success') }}
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-fill-out btn-sm" data-bs-dismiss="modal">{{ __('index.ok') }}</button>
            </div>
        </div>
    </div>
</div>

@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
        });
    </script>
@endif
