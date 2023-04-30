@extends('layouts.a_main')

@section('a_conten')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Products') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Photos</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Size</th>
                                <th scope="col">Thickness</th>
                                <th scope="col">Category</th>
                                <th scope="col">Tags</th>
                                <th scope="col">Specifications</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                <td>{{ $product->title }}</td>
                                <td>
                                    @foreach($product->photos as $photo)
                                        <img src="{{ asset($photo) }}" width="50">
                                    @endforeach
                                </td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->size }}</td>
                                <td>{{ $product->thickness }}</td>
                                <td>{{ $product->category }}</td>
                                <td>{{ implode(', ', $product->tags) }}</td>
                                <td>
                                    <ul>
                                    @foreach($product->specifications as $specification)
                                        <li>{{ $specification }}</li>
                                    @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-primary">Show</a>
                                    <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-success">Edit</a>
                                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
