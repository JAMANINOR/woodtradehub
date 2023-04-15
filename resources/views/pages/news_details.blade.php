@extends('layouts.main')

@section('myconten')
<section class="page_banner">
    <div class="container">
      <div class="col-xl-12 text-center">
        <h2>News Details</h2>
        <div class="breadcrumbs">
          <a href="/">Home</a><i>|</i><span>Blog</span>
        </div>
      </div>
    </div>
  </section>

  <section class="commonSection newsDetailsSection">
    <div class="container">
      <div class="row">
        <div class="col-xl-8 col-md-12 col-lg-8">

           <div class="newsDetailsArea">
            <div class="newsThumb">
              <div class="ntItem">
                @if(isset($news) && $news->image)
                    <img src="{{ asset('images/blog/' . $news->image) }}" alt="Image">
                @endif
              </div>
            </div>

            <div class="newsDetails">
              <div class="ndMeta">
                <span><i class="fal fa-user"></i>By {{ $news->user ? $news->user->name : 'Admin' }}</span>
                <span><i class="fal fa-comments"></i>0 Comments</span>
              </div>
              <h2 class="ndTitle">{{ $news->title }}</h2>
              <div class="nd_content">
                <p>
                    {{ $news->content }}
                </p>
              </div>
              <div class="row mb50">
                <div class="col-xl-6 col-md-6">
                  <div class="ndTags text-left clearfix">
                    <h5>Related Tags</h5>
                    {{-- <a href="#">Contstruction,</a> <a href="#">Chemical,</a> <a href="#">Safety</a> --}}
                  </div>
                </div>
                <div class="col-xl-6 col-md-6">
                  <div class="ndShare text-right clearfix">
                    <h5>Social Share</h5>
                        <a href="https://www.facebook.com/profile.php?id=100089813976111&mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i></a>
						<a href="https://instagram.com/jan_international_eksport?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
						<a href="https://www.linkedin.com/company/pt-jan-international-eksport/"><i class="fab fa-linkedin"></i></a>
						<a href="https://youtube.com/@janinternationaleksport"><i class="fab fa-youtube"></i></a>
                  </div>
                </div>
              </div>
              <div class="clearfix mh1"></div>

              {{-- <div class="ndPaginations">
                <div class="row">
                  <div class="col-xl-6 col-md-6">
                    <div class="pagin pdr5 text-left">
                      <strong>Prev Post</strong>
                      <h3><a href="#">Tips on Minimalist</a></h3>
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-6">
                    <div class="pagin pdl5 text-right">
                      <strong>Next Post</strong>
                      <h3><a href="#">Less Is More</a></h3>
                    </div>
                  </div>
                </div>
              </div> --}}

            </div>
          </div>


          @foreach($news->comments as $comment)
          <div class="card mb-3">
              <div class="card-body">
                  <p>{{ $comment->content }}</p>
              </div>
              <div class="card-footer text-muted">
                  Commented by {{ $comment->user->name }} on {{ $comment->created_at->format('d F Y H:i:s') }}
              </div>
          </div>
      @endforeach

        </div>

		   @include('partials.sidebar')
    </div>
  </section>
@endsection
