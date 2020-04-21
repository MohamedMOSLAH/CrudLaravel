@csrf
<div class="form-group">
<input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" placeholder="Rentrer un nom ..." value="{{ old('name') ?? $mark->name }}">
    @error('name') 
        <div class="invalid-feedback">
            {{ $errors->first('name') }}
        </div>
    @enderror
</div>