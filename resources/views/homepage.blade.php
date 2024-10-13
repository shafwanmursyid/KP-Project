@extends('layouts.frontend')

@section('content')
<!--==================== HOME ====================-->
<section>
    <div class="swiper-container">
        <div>
            <!--========== ISLANDS 1 ==========-->
            <section class="general">
                <img
                    src="{{ asset('frontend/assets/img/image-1.png') }}"
                    alt=""
                    class="image-1"
                />
                <div class="bg__overlay">
                    <div class="islands__container container">
                        <div
                            class="hero-text"
                            style="z-index: 99; position: relative"
                        >
                            <h2 class="welcome-text">Halo, Selamat Datang</h2>
                            <div class="lines-1">
                                <span class="hero-black">Save the environment</span>
                            </div>
                            <div class="lines-2">
                                <span class="hero-white">starting from </span>
                                <span class="hero-green">your</span>
                            </div>
                            <div class="lines-3">
                                <span class="hero-green">own action</span>
                            </div>
                            <div class="text-container">
                                <p class="line-1">
                                    <span class="white">Selamatkan</span> 
                                    <span class="dark-green">lingkungan dan kesehatan</span> 
                                    <span class="white">dengan cara</span>
                                </p>
                                <p class="line-2">
                                    <span class="light-green">menyetorkan minyak jelantah</span> 
                                    <span class="white">pada kami</span>
                                </p>
                            </div>
                            
                            @if(session('success'))
                                <script>
                                    alert("{{ session('success') }}");
                                </script>
                            @endif
                            
                            <div class="form-container">
                                <form action="{{ route('submit.nomor_hp') }}" method="POST">
                                    @csrf
                                    <input type="text" name="nomor_hp" class="phone-input" placeholder="Masukkan nomor hp anda" required>
                                    <button type="submit" class="submit-button">Setor Sekarang</button>
                                </form>
                            </div>
                            
                            @if ($errors->any())
                                <div>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            
                            <img src="frontend/assets/img/globe-green.png" alt="Globe" class="globe-image">
                        </div>
                        <img src="frontend/assets/img/info.png" alt="Info" class="info-image">
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<!--==================== space ====================-->
<section
    class="space"
    style="margin-top: 1rem;"
>
    <div class="space__container container grid">
    </div>
</section>

<!--==================== cv ====================-->
<section class="section">
    <div class="container">
        <span class="section__about" style="text-align: left"
            >About Us</span
        >
        <h2 class="section__about2" style="text-align: left">
            CV. Sarana Dharma Internusa
        </h2>
    </div>
    <img src="frontend/assets/img/about-line.png" alt="line" class="line-image">
    <div class="company-description">
        <p>
            CV. Sarana Dharma Internusa berdiri pada tahun 2023 dan berdomisili di Kota Bandung Jawa Barat. Perusahaan ini bergerak pada bidang Waste Management. Spesialisasi utama kami adalah Used Cooking Oil (UCO) / Minyak goreng bekas pakai. Perusahaan ini didirikan atas dasar keprihatinan kami terhadap kondisi lingkungan yang semakin memburuk dan bertujuan mendukung pengembangan Energy bahan bakar alternatif / terbarukan. CV. Sarana Dharma Internusa menjunjung tinggi nilai integritas dan profesionalisme dalam setiap kegiatan usaha kami. Transparansi dan keberlanjutan adalah dua nilai utama kami.
        </p>
    </div>
    <img src="frontend/assets/img/about-sdi.jpeg" alt="sdi" class="sdi-image">
</section>

<!-- blog -->
<section class="blog section" id="blog">
    <div class="blog__container container">
        <span class="section__subtitle" style="text-align: center"
            >SDI NEWS</span
        >
        <h2 class="section__title" style="text-align: center">
            Beberapa Contoh Hasil Pekerjaan Yang Telah Kami Lakukan
        </h2>

        <div class="blog__content grid">
            @foreach($blogs as $blog)
                <article class="blog__card">
                    <div class="blog__image">
                        <img
                            src="{{ Storage::url($blog->image) }}"
                            alt=""
                            class="blog__img"
                        />
                        <a href="{{ route('blog.show', $blog->slug) }}" class="blog__button">
                            <i class="bx bx-right-arrow-alt"></i>
                        </a>
                    </div>

                    <div class="blog__data">
                        <h2 class="blog__title">
                            {{ $blog->title }}
                        </h2>
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
<!--==================== Our Partners ====================-->
<section class="our-partners" id="our-partners">
    <div class="partners-container">
        <h2 class="partners-title">Our Partners</h2>
        <hr class="partners-line">
        <div class="partners-logos">
            <div class="partner">
                <img src="frontend/assets/img/partner/p1.png" alt="Partner 1" class="partner-logo">
            </div>
            <div class="partner">
                <img src="frontend/assets/img/partner/p2.png" alt="Partner 2" class="partner-logo">
            </div>
            <div class="partner">
                <img src="frontend/assets/img/partner/p3.png" alt="Partner 3" class="partner-logo">
            </div>
            <div class="partner">
                <img src="frontend/assets/img/partner/p4.png" alt="Partner 4" class="partner-logo">
            </div>
        </div>
    </div>
</section>
@endsection