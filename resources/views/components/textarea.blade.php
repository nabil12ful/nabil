<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <textarea {{ $attributes->merge([
        'class' => 'form-control',
        'name' => $name,
        'id' => $name
    ]); }}>{{ $slot }}</textarea>
</div>