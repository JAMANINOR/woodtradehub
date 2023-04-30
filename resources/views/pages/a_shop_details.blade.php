@extends('layouts.a_main')

@section('a_conten')
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="card h-30">
            @foreach ($product->photos as $photo)
                <img class="card-img-top" src="{{ asset('images/product/' . $photo) }}" alt="">
            @endforeach
        </div>

      </div>
      <div class="col-lg-6">
        <div class="card h-100">
          <div class="card-body">
            <h3 class="card-title">{{ $product->title }}</h3>
            <h4>{{ $product->price }}</h4>
            <p class="card-text">{{ $product->description }}</p>
            <ul>
             @foreach($product->specifications as $name => $value)
                <li><span>{{ $name }}:</span> {{ $value }}</li>
            @endforeach

            </ul>
          </div>
          <div class="row">
            @foreach(explode(',', $product->thickness) as $thickness)
            <li>{{ trim($thickness) }}</li>
            @endforeach
            <div class="col-sm-6">
              <h3 class="metaTitle">Categories</h3>
              <p class="text_meta">{{ $product->category }}</p>
            </div>
          <div class="col-sm-6">
            <h3 class="metaTitle">Tags</h3>
            <p class="text_meta"><a href="#">{{ implode(', ', $product->tags) }}</a></p>
          </div>
        </div>
      </div>
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
@endsection
