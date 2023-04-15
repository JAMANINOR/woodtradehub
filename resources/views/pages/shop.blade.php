@extends('layouts.main')

@section('myconten')

<section class="page_banner">
    <div class="container">
      <div class="col-xl-12 text-center">
        <h2>Product</h2>
        <div class="breadcrumbs">
          <a href="/">Home</a><i>|</i><span>shop</span>
        </div>
      </div>
    </div>
  </section>
  <section class="commonSection shopLoopPage">
    <div class="container">
      <div class="row mb50">
        <div class="col-xl-3 col-md-3">
          <div class="shopViewBtn">
          </div>
        </div>
        <div class="col-xl-9 col-md-9">
          <div class="shopAccess text-right">
            <div class="results"> <p>Showing {{ $products->firstItem() }}–{{ $products->lastItem() }} of {{ $products->total() }} results</p></div>

            <div class="sorts">
              <select name="sort">
                <option value="">Sort By</option>
                <option value="">Best Seller</option>
                <option value="">Popular Products</option>
              </select>
              <i class="fal fa-angle-down"></i>
            </div>

            <div class="searchForms2">
              <form method="get" action="#">
                <input type="search" name="s" placeholder="Search from here..." />
                <i class="fal fa-search"></i>
              </form>
            </div>
          </div>
        </div>
      </div>

    <div class="row">
        @foreach ($products as $product)
            <div class="col-xl-4 col-md-6 col-lg-4">
              <div class="single_product offerProduct">
                <div class="productImg">
                @if (!empty($product->photos) && count($product->photos) >= 1)
                 <img src="{{ asset('images/product/' . $product->photos[0]) }}" alt="{{ $product->photos[0] }}">
                 @endif
                </div>
                <div class="product_dec">
                  <div class="product_decIn">
                    <h2 class="productTitle"> <a href="{{ route('shop.show', $product->id) }}">{{ $product->title }}</a></h2>
                    <div class="product_price">
                      <span>{{ implode(', ', $product->tags) }}</span>
                      <div class="ratings"></div>
                    </div>
                    <div class="product_btn">
                      <a class="popUp" href="{{ route('shop.show', $product->id) }}"><i class="far fa-search"></i>View Details</a>
                      <a href="#"><i class="far fa-shopping-cart"></i>Add to cart</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        @endforeach
    </div>


    <div class="d-flex justify-content-center">
      <div class="row mt20 ">
        <div class="col-lg-">
          <div class="ind_pagination">
            {{ $products->links('vendor.pagination.default', ['class' => 'pagination-link' ]) }}
          </div>
        </div>
      </div>
    </div>
  </section>



@endsection
