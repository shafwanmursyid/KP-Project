<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="icon" href="{{ asset('frontend/assets/img/tab-icon.png') }}" type="image/png" />


        <!--=============== BOXICONS ===============-->
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />

        <!--=============== SWIPER CSS ===============-->
        <link
            rel="stylesheet"
            href="{{ asset('frontend/assets/libraries/swiper-bundle.min.css') }}"
        />

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
        @stack('style-alt')
        <title>CV Sarana Dharma Internusa</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="{{ route('homepage') }}" class="nav__logo">
                    <img src="{{ asset('frontend/assets/img/Logo2.png') }}" alt="Logo" class="logo-image">
                </a>                

                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="{{ route('homepage') }}" class="nav__link {{ request()->is('/') ? ' active-link' : '' }}">
                                <i class="bx bx-home-alt"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        {{-- <li class="nav__item">
                            <a href="{{ route('travel_package.index') }}" class="nav__link {{ request()->is('travel-packages') || request()->is('travel-packages/*')  ? ' active-link' : '' }}">
                                <i class="bx bx-building-house"></i>
                                <span>About</span>
                            </a>
                        </li> --}}
                        <li class="nav__item">
                            <a href="{{ route('about.index') }}" class="nav__link {{ request()->is('about') || request()->is('about/*')  ? ' active-link' : '' }}">
                                <i class="bx bx-building-house"></i>
                                <span>About</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('blog.index') }}" class="nav__link {{ request()->is('blogs') || request()->is('blogs/*')  ? ' active-link' : '' }}">
                                <i class="bx bx-award"></i>
                                <span>Blogs</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('contact') }}" class="nav__link {{ request()->is('contact') ? ' active-link' : '' }}">
                                <i class="bx bx-phone"></i>
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- theme -->
                {{-- <i class="bx bx-moon change-theme" id="theme-button"></i> --}}
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            @yield('content')
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div>
                    <a href="{{ route('homepage') }}" class="footer__logo">
                        <img src="{{ asset('frontend/assets/img/logo-footer.png') }}" alt="Logo" class="logo-footer">
                    </a>
                    <p class="footer__description">
                        CV Sarana Dharma Internusa (SDI) adalah <br> 
                        perusahaan yang berfokus pada pemberdayaan <br>
                        masyarakat dan pelestarian lingkungan <br>
                        melalui pengelolaan limbah dan program <br>
                        berkelanjutan, khususnya pengolahan minyak <br>
                        jelantah untuk mendukung ekonomi sirkular.
                        
                    </p>
                </div>

                <div class="footer__content">
                    <div class="company">
                        <h2>Company</h2>
                        <ul>
                          <li><a href="{{ route('about.index') }}">About</a></li>
                          <li><a href="{{ route('contact') }}">Contact</a></li>
                          <li><a href="{{ route('blog.index') }}">Blogs</a></li>
                          <li><a href="#">Our Clients</a></li>
                        </ul>
                    </div>
                    <div class="contact-section">
                        <h2>Get In Touch</h2>
                        <div class="live-chat">
                            <div class="chat-header">
                                <img src="{{ asset('frontend/assets/img/chat-icon.png') }}" alt="sdi" class="chat-icon">
                                <p>Live Chat Online</p>
                            </div>
                            <p class="time">Weekdays:</p>
                            <p class="time-clock">09:00 s/d 21:00 WIB</p>
                            <p class="time">Weekend/Holidays:</p> 
                            <p class="time-clock">09:00 s/d 17:00 WIB</p>
                        </div>
                        <div class="email">
                            <div class="email-header">
                                <img src="{{ asset('frontend/assets/img/email-icon.png') }}" alt="email" class="chat-icon">
                                <h3>Email</h3>
                            </div>
                            <p>saranadharmainternusa@gmail.com</p>
                        </div>
                        <div class="phone">
                            <div class="phone-header">
                                <img src="{{ asset('frontend/assets/img/phone-icon.png') }}" alt="phone" class="chat-icon">
                                <h3>Phone</h3>
                            </div>
                            <p>(+62) 821-2895-2723</p>
                        </div>
                        <div class="whatsapp">
                            <div class="wa-header">
                                <img src="{{ asset('frontend/assets/img/whatsapp-icon.png') }}" alt="whatsapp" class="chat-icon">
                                <h3>WhatsApp</h3>
                            </div>
                            <p>(+62) 821-2895-2723</p>
                        </div>
                        <div class="address">
                          <h3>Bandung, ID</h3>
                          <p>Jl Kembar Baru Selatan II No.6, <br>
                            Kel. Cigereleng, Kec. Regol, <br> 
                            Kota Bandung, Jawa Barat 40253</p>
                        </div>
                      </div>
                </div>
            </div>
            <div class="line-footer"></div>
            <div class="footer__info container">
                <div class="footer__privacy">
                    <a href="#">Privacy & Policy</a>
                    <a href="#">/</a>
                    <a href="#">Terms</a>
                    <a href="#">/</a>
                    <a href="#">What's New</a>
                </div>
                <div class="footer__social">
                    <a href="https://www.tiktok.com" target="_blank">
                        <img src="{{ asset('frontend/assets/img/tiktok-icon.png') }}" alt="tiktok" class="footer__social-link">
                    </a>
                    <a href="https://www.facebook.com" target="_blank"> 
                        <img src="{{ asset('frontend/assets/img/fb-icon.png') }}" alt="fb" class="footer__social-link">
                    </a>
                    <a href="https://www.instagram.com" target="_blank">
                        <img src="{{ asset('frontend/assets/img/ig-icon.png') }}" alt="tiktok" class="footer__social-link">
                    </a>
                </div>
            </div>
                
        </footer>

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="bx bx-chevrons-up"></i>
        </a>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="{{ asset('frontend/assets/libraries/scrollreveal.min.js') }}"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="{{ asset('frontend/assets/libraries/swiper-bundle.min.js') }}"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
        @stack('script-alt')
    </body>
</html>
