@extends('layouts.main')

@section('myconten')


  <section class="page_banner">
    <div class="container">
      <div class="col-xl-12 text-center">
        <h2>Product Details</h2>
        <div class="breadcrumbs">
          <a href="index.php">Home</a><i>|</i><span>Shop</span>
        </div>
      </div>
    </div>
  </section>
  <section class="commonSection shopDetails">
    <div class="container">
      <div class="row mb80">
        <div class="col-lg-7 col-lg-7">



          <div id="productSlide" class="carousel slide productSlide" data-ride="carousel">
            @if(count($product->photos) > 0)
            <div class="carousel-inner">
                @if(isset($product->photos[0]))
                <div class="carousel-item active">
                    <div class="ps_img">
                        <img src="{{ asset('images/product/' . $product->photos[0]) }}" alt="{{ $product->photos[0] }}" width="550">
                    </div>
                </div>
                @endif
                @if(isset($product->photos[1]))
                <div class="carousel-item">
                    <div class="ps_img">
                        <img src="{{ asset('images/product/' . $product->photos[1]) }}" alt="{{ $product->photos[1] }}" width="550">
                    </div>
                </div>
                @endif
                @if(isset($product->photos[2]))
                <div class="carousel-item">
                    <div class="ps_img">
                        <img src="{{ asset('images/product/' . $product->photos[2]) }}" alt="{{ $product->photos[2] }}" width="550">
                    </div>
                </div>
                @endif
            </div>
            @endif
            <ol class="carousel-indicators clearfix">

            @if(count($product->photos) > 0)
                @if(isset($product->photos[0]))
                    <li data-target="#productSlide" data-slide-to="0" class="active"><img src="{{ asset('images/product/' . $product->photos[0]) }}" alt="{{ $product->photos[0] }}" width="100" height="70"></li>
                @endif
                @if(isset($product->photos[1]))
                    <li data-target="#productSlide" data-slide-to="1"><img src="{{ asset('images/product/' . $product->photos[1]) }}" alt="{{ $product->photos[1] }}" width="100" height="70"></li>
                @endif
                @if(isset($product->photos[2]))
                    <li data-target="#productSlide" data-slide-to="2"><img src="{{ asset('images/product/' . $product->photos[2]) }}" alt="{{ $product->photos[2] }}" width="100" height="70"></li>
                @endif
            @endif
            </ol>
          </div>

        </div>
        <div class="col-lg-5 col-lg-5">
          <div class="product_decp">
            <h3 class="proTitle">{{ $product->title }}</h3>
            <div class="details_price">
              <del>-</del>
              <span>-</span>
            </div>
            <p>
                {{ Str::before($product->description, '.', '.') }}

            </p>
            <div class="pd_details_meta">
              <div class="row">
                <div class="col-sm-8">
                  <h3 class="metaTitle">Size</h3>
                  <p class="text-meta">{{ $product->size }}
                  </p>
                </div>


              </div>
            </div>
            <div class="pd_details_meta clearfix pdtb30">
              <a href="#" class="add_to_car_btn"><i class="far fa-shopping-cart"></i>Add To Cart</a>
              <a href="#" class="wishlisth_btn"><i class="fal fa-heart"></i></a>
            </div>
            <div class="pd_details_meta">
              <div class="row">
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
            <div class="pd_details_meta pdb0">
              <div class="social_shares">
                <strong>Social Share:</strong>
                <a href="https://www.facebook.com/profile.php?id=100089813976111&mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i></a>
                <a href="https://instagram.com/jan_international_eksport?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/pt-jan-international-eksport/"><i class="fab fa-linkedin"></i></a>
                <a href="https://youtube.com/@janinternationaleksport"><i class="fab fa-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="nav nav-tabs productTabs" id="productTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="descriptions-tab" data-toggle="tab" href="#descriptions" role="tab"
                aria-controls="descriptions" aria-selected="true">Description</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="additionalinformation-tab" data-toggle="tab" href="#additionalinformation"
                role="tab" aria-controls="additionalinformation" aria-selected="false">Spesification</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-8 col-lg-10 offset-lg-1 offset-2">
          <div class="tab-content productTabContent" id="productTabContent">
            <div class="tab-pane fade show active" id="descriptions" role="tabpanel" aria-labelledby="descriptions-tab">
              <div class="descriptionContent">
                <p>
                    {{ $product->description }}
                </p>
              </div>
            </div>
            <div class="tab-pane fade" id="additionalinformation" role="tabpanel"
              aria-labelledby="additionalinformation-tab">
              <div class="adinfo">
                <ul class="clearfix">

                    @foreach($product->specifications as $name => $value)
                        <li><span>{{ $name }}</span></li>
                        <li>{{ $value }}</li>
                    @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>


    @include('partials.Related')


    </div>
  </section>

@endsection
