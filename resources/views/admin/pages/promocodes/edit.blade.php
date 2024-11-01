@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Edit Promocode' }}
@endsection

@section('content')
    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Edit Promocode</h2>
            <a class="btn btn-success" href="{{ route('promocodes.index') }}">
                <i class="fa-solid fa-arrow-left-long"></i>
                Back
            </a>
        </div>

        <form action="{{ route('promocodes.update', $promocode->id) }}" method="POST" data-bs-theme="dark">
            @csrf
            @method('PUT')
            <hr class="text-white">
            <div class="row">
                <h3 class="text-white">Promocode Details</h3>

                <div class="mb-3 col-12 col-lg-6">
                    <label for="code" class="form-label text-white">
                        Promocode Code
                        <span class="text-danger"> *</span>
                    </label>
                    <input type="text" name="code" id="code" value="{{ $promocode->code }}" class="form-control" required>
                </div>

                <div class="mb-3 col-12 col-lg-6">
                    <label for="discount" class="form-label text-white">
                        Discount (%)
                        <span class="text-danger"> *</span>
                    </label>
                    <input type="number" name="discount" id="discount" min="1" max="100" value="{{ $promocode->discount }}" class="form-control" required>
                </div>

                <div class="mb-3 col-12 col-lg-6">
                    <label for="type" class="form-label text-white">
                        Type
                        <span class="text-danger"> *</span>
                    </label>
                    <select name="type" id="type" class="form-control" required>
                        <option value="one-time" {{ $promocode->type === 'one-time' ? 'selected' : '' }}>Одноразовый</option>
                        <option value="multi-use" {{ $promocode->type === 'multi-use' ? 'selected' : '' }}>Многоразовый</option>
                    </select>
                </div>

                <div class="mb-3 col-12 col-lg-6">
                    <label for="status" class="form-label text-white">
                        Status
                    </label>
                    <select name="status" id="status" class="form-control">
                        <option value="active" {{ $promocode->status === 'active' ? 'selected' : '' }}>Активен</option>
                        <option value="inactive" {{ $promocode->status === 'inactive' ? 'selected' : '' }}>Неактивен</option>
                    </select>
                </div>

                <div class="mb-3 col-12 col-lg-6">
                    <label for="expiry_date" class="form-label text-white">
                        Expiry Date
                    </label>
                    <input type="date" name="expiry_date" id="expiry_date"
                           value="{{ $promocode->expiry_date ? \Carbon\Carbon::parse($promocode->expiry_date)->format('Y-m-d') : '' }}"
                           class="form-control">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="fa-solid fa-pen-to-square"></i>
                Save Changes
            </button>
        </form>
    </div>
@endsection
