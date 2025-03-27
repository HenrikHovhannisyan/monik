@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Создать новый промокод' }}
@endsection

@section('content')
    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Создать новый промокод</h2>
            <a class="btn btn-success" href="{{ route('promocodes.index') }}">
                <i class="fa-solid fa-arrow-left-long"></i>
                Назад
            </a>
        </div>

        <form action="{{ route('promocodes.store') }}" method="POST" data-bs-theme="dark">
            @csrf
            <hr class="text-white">
            <div class="row">
                <h3 class="text-white">Детали промокода</h3>

                <div class="mb-3 col-12 col-lg-6">
                    <label for="code" class="form-label text-white">
                        Промокод
                        <span class="text-danger"> *</span>
                    </label>
                    <input type="text" name="code" id="code" value="{{ old('code') }}" class="form-control" required>
                </div>

                <div class="mb-3 col-12 col-lg-6">
                    <label for="discount" class="form-label text-white">
                        Скидка (%)
                        <span class="text-danger"> *</span>
                    </label>
                    <input type="number" name="discount" id="discount" class="form-control" min="1" max="100" value="{{ old('discount') }}" required>
                </div>

                <div class="mb-3 col-12 col-lg-6">
                    <label for="type" class="form-label text-white">
                        Тип промокода
                        <span class="text-danger"> *</span>
                    </label>
                    <select name="type" id="type" class="form-control" required>
                        <option value="one-time" {{ old('type') == 'one-time' ? 'selected' : '' }}>Одноразовый</option>
                        <option value="multi-use" {{ old('type') == 'multi-use' ? 'selected' : '' }}>Многоразовый</option>
                    </select>
                </div>

                <div class="mb-3 col-12 col-lg-6">
                    <label for="status" class="form-label text-white">
                        Статус
                    </label>
                    <select name="status" id="status" class="form-control">
                        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Активен</option>
                        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Неактивен</option>
                    </select>
                </div>

                <div class="mb-3 col-12 col-lg-6">
                    <label for="expiry_date" class="form-label text-white">
                        Дата окончания (только для многоразового)
                    </label>
                    <input type="date" name="expiry_date" id="expiry_date" class="form-control" value="{{ old('expiry_date') }}" disabled>
                </div>
            </div>

            <button type="submit" class="btn btn-success">
                <i class="fa-solid fa-plus"></i>
                Добавить промокод
            </button>
        </form>
    </div>
@endsection
