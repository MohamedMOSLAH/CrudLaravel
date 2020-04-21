@csrf
<div class="form-group">
<input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" placeholder="Rentrer un nom ..." value="{{ old('name') ?? $product->name }}">
    @error('name') 
        <div class="invalid-feedback">
            {{ $errors->first('name') }}
        </div>
    @enderror
</div>

<div class="form-group">
    <input type="text" class="form-control @error('price') is-invalid @enderror"  name="price" placeholder="Rentrer une prix ..." value="{{ old('price') ?? $product->price }}">
        @error('price') 
            <div class="invalid-feedback">
                {{ $errors->first('price') }}
            </div>
        @enderror
    </div>

<div class="form-group">
    <textarea name="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">
        {{ old('description') ?? $product->description }}
    </textarea>
    @error('description')
    <div class="invalid-feedback">
        {{ $errors->first('description') }}
    </div>
    @enderror
</div>
<div class="form-group">
    <select class="custom-select @error('mark_id') is-invalid @enderror " name="mark_id">
        @foreach($marks as $mark)
            <option value="{{ $mark->id }}" {{ $product->mark_id == $mark->id ? 'selected' : ''  }}>{{ $mark->name }}</option>
        @endforeach>
    </select>
    @error('staus') 
        <div class="invalid-feedback">
            {{ $errors->first('mark_id') }}
        </div>
    @enderror
</div>
<div class="form-group">
    <input type="file" class="form-control" name="photos[]" multiple />
</div>