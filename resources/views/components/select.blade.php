<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <select class="form-control" name="{{ $name }}" id="{{ $name }}">
        <option selected disabled>Select {{ $label }}</option>
        @foreach($data as $key => $val)
        <option value="{{$val->id}}" {{ $value == $val->id ? 'selected' : '' }}>{{$val->$attr}}</option>
        @endforeach
    </select>
</div>
