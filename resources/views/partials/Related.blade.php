<div class="row">
    <div class="col-xl-12">
      <div class="relatedProductArea">
        <div class="row mb40">
          <div class="col-xl-8 col-md-8">
            <h2 class="sec_title">
              Related Products
            </h2>
          </div>
          <div class="col-xl-4 col-md-4 text-right">
            <div class="relatedNavs"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12">
            <div class="relatedProductSlider owl-carousel">

                @foreach($relatedProducts as $relatedProduct)
                    <div class="single_product offerProduct">
                        <div class="productImg">
                            <img src="{{ asset('images/product/' . $relatedProduct->photos[0]) }}" alt="">
                        </div>
                        <div class="product_dec">
                            <div class="product_decIn">
                                <h2 class="productTitle"><a href="{{ route('shop.show', $relatedProduct->id) }}">{{ $relatedProduct->title }}</a></h2>
                                <div class="product_price">
                                    {{-- <span>{{ $relatedProduct->price }}</span> --}}
                                </div>
                                <div class="product_btn">
                                    <a class="popUp" href="{{ route('shop.show', $relatedProduct->id) }}"><i class="far fa-search"></i>View Details</a>
                                    <a href="#"><i class="far fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
