@extends('layouts.main')

@section('myconten')
<section class="page_banner">
    <div class="container">
      <div class="col-xl-12 text-center">
        <h2>News</h2>
        <div class="breadcrumbs">
          <a href="/">Home</a><i>|</i><span>Blog</span>
        </div>
      </div>
    </div>
  </section>
  <section class="commonSection newslistpage">
    <div class="container">
      <div class="row">
        <div class="col-xl-8 col-md-12 col-lg-8">
          <div class="row bloglistgrid">

            @foreach($news as $item)
            <div class="col-xl-6 col-md-6 col-lg-6 blog_mash">
              <div class="singleBlog">
                <div class="sbThumb">
                    @if ($item->image)
                        <img src="{{ asset('images/blog/'.$item->image) }}" class="card-img-top" alt="...">
                    @else
                        <img src="{{ asset('images/blog/empty.png') }}" class="card-img-top" alt="...">
                    @endif

                </div>
                <div class="sbDetails">
                  <p class="sb_cats">
                    <a href="#">Industry</a>
                  </p>
                  <h4>
                    <a href="{{ route('news.show', $item) }}">{{ $item->title }}</a>
                  </h4>
                </div>
                <div class="sb_footer">
                    <span><i class='fal fa-user'></i>By {{ $item->user ? $item->user->name : 'Admin' }}</span>
                    <span><i class="fal fa-comments"></i>0 Comments</span>
                </div>
              </div>
            </div>
            @endforeach


          </div>

            <div class="d-flex justify-content-center">
      <div class="row mt20 ">
        <div class="col-lg-">
          <div class="ind_pagination">
            {{ $news->links('vendor.pagination.default', ['class' => 'pagination-link' ]) }}
          </div>
        </div>
      </div>
    </div>
        </div>

            @include('partials.sidebar')

      </div>
    </div>
  </section>
@endsection
