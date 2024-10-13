@extends('layouts.frontend')

@section('content')
 <!--==================== HOME ====================-->
 <section>
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <section class="islands swiper-slide">
              <img src="{{ Storage::url($blog->image) }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  
                  
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>

      <!-- blog -->
      <section class="contents section" id="blog">
        <div class="blog__container container">
          <div class="content__container">
            <div class="blog__detail">
              <h2 class="content__subtitle">{{ $blog->title }}</h2>
              {!! $blog->description !!}
              <div class="blog__footer" style="margin-top: 2rem;">
                <div class="blog__reaction">{{ date('d M Y', strtotime($blog->created_at)) }}</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="contents" id="contents">
        <div class="blog__container container">
          <span class="blog__subtitle" style="text-align: center"
            >Related Blog</span
          >

          <div class="blog__content grid">
            @foreach($relatedBlogs as $relatedBlog)
            <article class="blog__card">
              <div class="blog__image">
                <img src="{{ Storage::url($relatedBlog->image) }}" alt="" class="blog__img" />
                <a href="{{ route('blog.show', $relatedBlog->slug) }}" class="blog__button">
                  <i class="bx bx-right-arrow-alt"></i>
                </a>
              </div>

              <div class="blog__data">
                <h2 class="blog__title">{{ $relatedBlog->title }}</h2>
                <div class="blog__reaction">
                  <img src="{{ asset('frontend/assets/img/calender.png') }}" alt="cal" class="calendar-icon">
                  {{ date('d M Y', strtotime($blog->created_at)) }}
                  <img src="{{ asset('frontend/assets/img/profil.png') }}" alt="cal" class="profil-icon">
                  <span class="blog__profil">Sarana Dharma Internusa</span>
                </div>
                <p class="blog__description">
                  {{ $relatedBlog->excerpt }}
                </p>
              </div>
            </article>
            @endforeach
          </div>
        </div>
      </section>
@endsection

@push('style-alt')
<style>
  blockquote {
    border-left: 8px solid #b4b4b4;
    padding-left: 1rem;
  }
  .blog__detail ul li {
    list-style: initial;
  }
</style>
@endpush