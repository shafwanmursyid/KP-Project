@extends('layouts.frontend')

@section('content')
<!--==================== HOME ====================-->

      <!--==================== CONTACT ====================-->
<section class="contact sections" id="contact">
  <div class="contact__container container">
    <span class="contact__subtitle" style="text-align: center"
    >Hubungi Kami</span>
    <h2 class="contact__title" style="text-align: center">
      Jika Anda mempunyai pertanyaan seputar layanan maupun ingin berdiskusi terkait <br>
      kerja sama dengan cv sarana dharma internusa
    </h2>
    <div class="home-contact">
      <span class="home">Home</span> 
      <span class="separator">/</span> 
      <span class="contact">Contact</span>
    </div>
    <div class="contact__card">
      <div class="contact__card-box">
        <div class="contact__card-info">
          <i class="bx bxs-phone-call"></i>
          <div>
            <h3 class="contact__card-title">Live Chat</h3>
            <p class="contact__card-description" style="text-align: center"
            >Senin s/d Jumat <br> 
            09.00 - 21.00 <br>
            Weekend / Hari Libur <br>
            09.00 - 17.00
            </p>
          </div>
        </div>
        <a href="https://wa.me/6282128952723" target="_blank">
          <button class="button contact__card-button">Live Chat Now!</button>
        </a>
      </div>
      <div class="contact__card-box">
        <div class="contact__card-info">
          <i class="bx bxs-message-rounded-dots"></i>
          <div>
            <h3 class="contact__card-title">E-mail</h3>
            <p class="contact__card-description"></p>
          </div>
        </div>
        <a href="mailto:saranadharmainternusa@gmail.com" target="_blank">
          <button class="button contact__card-button">E-mail Us</button>
        </a>
      </div>
    </div>
      <span class="get-in-touch2">Get In Touch</span> 
      <p class="description">
        Have questions or need help? Feel free to reach out to us anytime,<br> and we’ll be happy to assist you!
      </p>
    <div class="contact-infos">
        <div class="left-column">
            <div class="consultation">Konsultasi</div>
            <div class="info-layanan">Info Layanan</div>
            <div class="wa-contact">
              (+62) 821-2895-2723 (Official Whatsapp)
              <a href="https://wa.me/6282128952723" target="_blank" class="whatsapp-button">
                <img src="frontend/assets/img/wa-icon2.png" alt="WhatsApp Icon" class="whatsapp-icon">
                WhatsApp Now
              </a>
            </div>
        </div>
        <div class="right-column">
            <div class="office">Office</div>
            <div class="location">Bandung, ID</div>
            <div class="address">Jl Kembar Baru Selatan II No.6,<br>
                Kel. Cigereleng, Kec. Regol,<br>
                Kota Bandung, Jawa Barat 40253
            </div>
        </div>
    </div>
  </div>
</section>
@endsection