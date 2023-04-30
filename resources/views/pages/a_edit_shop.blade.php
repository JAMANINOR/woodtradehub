@extends('layouts.a_main')

@section('a_conten')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Product</h1>
                <form action="{{ route('products.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $product->title) }}" required autocomplete="title" autofocus>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="photos" class="col-md-4 col-form-label text-md-right">{{ __('Photos') }}</label>

                        <div class="col-md-6">
                            <input id="photos" type="file" class="form-control-file @error('photos') is-invalid @enderror" name="photos[]" multiple required>

                            @error('photos')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                        <div class="col-md-6">
                            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description">{{ old('description', $product->description) }}</textarea>

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                        <div class="col-md-6">
                            <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price', $product->price) }}" required autocomplete="price">

                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="size" class="col-md-4 col-form-label text-md-right">{{ __('Size') }}</label>

                        <div class="col-md-6">
                            <input id="size" type="text" class="form-control @error('size') is-invalid @enderror" name="size" value="{{ old('size', $product->size) }}" required autocomplete="size">

                            @error('size')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="thickness" class="col-md-4 col-form-label text-md-right">{{ __('Thickness') }}</label>

                        <div class="col-md-6">
                            <input id="thickness" type="text" class="form-control @error('thickness') is-invalid @enderror" name="thickness" value="{{ old('thickness') ?? $product->thickness }}" required autocomplete="thickness">

                            @error('thickness')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                        <div class="col-md-6">
                            <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') ?? $product->category }}" required autocomplete="category">

                            @error('category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tags" class="col-md-4 col-form-label text-md-right">{{ __('Tags') }}</label>

                        <div class="col-md-6">
                            <input id="tags" type="text" class="form-control @error('tags') is-invalid @enderror" name="tags" value="{{ old('tags') ?? implode(',', $product->tags) }}" autocomplete="tags">

                            @error('tags')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="specifications" class="col-md-4 col-form-label text-md-right">{{ __('Specifications') }}</label>

                        <div class="col-md-6">
                            <textarea id="specifications" class="form-control @error('specifications') is-invalid @enderror" name="specifications" required autocomplete="specifications">{{ old('specifications') ?? implode("\n", $product->specifications) }}</textarea>

                            @error('specifications')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Save Changes') }}
                            </button>
                        </div>
                    </div>
@endsection
