@extends('layouts.frontend')

@section('content')
<!--==================== HOME ====================-->
      <!-- blog -->
      <section class="blog section" id="blog">
        <div class="blog__container container">
          <span class="blog__subtitle" style="text-align: center"
            >All SDI NEWS</span
          >

          <div class="blog__content grid">
            @foreach($blogs as $blog)
              <article class="blog__card">
                <div class="blog__image">
                    <img src="{{ Storage::url($blog->image) }}" alt="" class="blog__img" />
                    <a href="{{ route('blog.show',$blog->slug) }}" class="blog__button">
                    <i class="bx bx-right-arrow-alt"></i>
                    </a>
                </div>

                <div class="blog__data">
                    <h2 class="blog__title">{{ $blog->title }}</h2>
                    <div class="blog__reaction">
                      <img src="frontend/assets/img/calender.png" alt="cal" class="calendar-icon">
                      {{ date('d M Y', strtotime($blog->created_at)) }}
                      <img src="frontend/assets/img/profil.png" alt="cal" class="profil-icon">
                      <span class="blog__profil">Sarana Dharma Internusa</span>
                    </div>
                    <p class="blog__description">
                        {{ $blog->excerpt }}
                    </p>
                </div>
              </article>
            @endforeach
          </div>
        </div>
      </section>
@endsection