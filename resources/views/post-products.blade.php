@extends('layout_format.header')

@section('container')
    <div class = "container-fluid">
        <div class = "text-center">
            <h1 style = "color: black;">Post Product</h1>
        </div>
        <form method = "POST" action = "{{ route('products.add') }}" enctype = "multipart/form-data">
            @csrf

            {{-- input name of the product --}}
            <div class = "mb-3">
                <label for = "name" class = "form-label">Product name</label>
                <input type = "text" name = "name" class = "form-control{{ $errors -> has('name') ? ' is-invalid' : '' }}" required autofocus>
                @if ($errors -> has('name'))
                    <div class = "invalid-feedback">
                        {{ $errors -> first('name') }}
                    </div>
                @endif
            </div>

            {{-- input price of the product --}}
            <div class = "mb-3">
                <label for = "price" class = "form-label">Product price</label>
                <input type = "number" name = "price" class = "form-control{{ $errors -> has('price') ? ' is-invalid' : '' }}" min = "1000" required>
                @if ($errors -> has('price'))
                    <div class = "invalid-feedback">
                        {{ $errors -> first('price') }}
                    </div>
                @endif
            </div>

            {{-- input description of the product --}}
            <div class = "mb-3">
                <label for = "description" class = "form-label">Product description</label>
                <textarea name = "description" class = "form-control{{ $errors -> has('description') ? ' is-invalid' : '' }}" required></textarea>
                @if ($errors -> has('description'))
                    <div class = "invalid-feedback">
                        {{ $errors -> first('description') }}
                    </div>
                @endif
            </div>

            {{-- input category of the product --}}
            <div class = "mb-3">
                <label for = "category" class = "form-label">Product category</label>
                <select name = "category" class = "form-select{{ $errors -> has('type') ? ' is-invalid' : '' }}" required>
                    <option value = "clothes">Clothes</option>
                    <option value = "figure">Figure</option>
                    <option value = "keychain">Keychain</option>
                    <option value = "stationary">Stationary</option>
                    <option value = "manga">Manga</option>
                </select>
                @if ($errors -> has('category'))
                    <div class = "invalid-feedback">
                        {{ $errors -> first('category') }}
                    </div>
                @endif
            </div>

            {{-- upload image of the product as input --}}
            <div class = "mb-3">
                <label for = "image" class = "form-label">Product image</label>
                <input type = "file" name = "image" class = "form-control{{ $errors -> has('image') ? ' is-invalid' : '' }}" accept = "image/jpeg, image/png, image/jpg" required>
                @if ($errors -> has('image'))
                    <div class = "invalid-feedback">
                        {{ $errors -> first('image') }}
                    </div>
                @endif
            </div>

            {{-- input name of the uploaded product image --}}
            <div class = "mb-3">
                <label for = "image-name" class = "form-label">Product image name</label>
                <input type = "text" name = "image-name" class = "form-control{{ $errors -> has('image-name') ? ' is-invalid' : '' }}" required>
                @if ($errors -> has('image-name'))
                    <div class = "invalid-feedback">
                        {{ $errors -> first('image-name') }}
                    </div>
                @endif
            </div>
            <button type = "submit" class = "btn btn-primary">Post Product</button>
        </form>
    </div>
@endsection

@extends('layout_format.footer')
