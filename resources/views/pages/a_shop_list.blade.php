@extends('layouts.a_main')

@section('a_conten')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center">
      <a href="{{ route('products.create') }}" class="btn btn-success">Tambah Produk</a>
      {{ $products->links() }}
    </div>
  </div>
  <div class="container">
    <div class="row">
      @foreach ($products as $product)
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="{{ route('products.show', ['id' => $product->id]) }}">
              <img class="card-img-top" src="{{asset('images/product/'. $product->photos[0]) }}" alt="">
            </a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="{{ route('products.show', ['id' => $product->id]) }}">{{ $product->title }}</a>
              </h4>
              <h5>{{ $product->price }}</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">{{ $product->category }}</small>
            </div>
            <div class="card-footer">
              <a href="{{ route('products.edit', ['id' => $product->id]) }}" class="btn btn-primary">Edit</a>
              <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
              </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
