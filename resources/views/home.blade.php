@extends('layouts.main')

@section('home')
<section class="hero" id="home">
    <div class="container">
      <div class=" row justify-content-between">
        <div class="content col-5">
            <h1>Layanan Jasa Di <span>Bidang IT</span></h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
              error.
            </p>
            <a href="/#menu" class="cta">Coba Layanan</a>
        </div>
        <div class="logo col-6">
          <img src="../img/nobg.png" width="125%">
        </div>
      </div>
    </div>
</section>

     <!-- About Section start -->
     <section id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>

        <div class="row justify-content-between">
          <div class="about-img">
            <img src="img/tentang-kmi.png" alt="Tentang Kami" />
          </div>
          <div class="content">
            <h3>Kenapa memilih layanan kami?</h3>
            <p>
              Kami memberikan penawaran yang murah serta memberikan pelayanan
              profesional terkait masalah di bidang IT.
            </p>
            <p>
              Sebagai penyedia layanan jasa dengan mengutamakan Kualitas, Keamanan
              , dan Kepuasan Customer. Kami selalu berusaha untuk mengembangkan
              layanan yang diberikan.
            </p>
          </div>
        </div>
      </section>
      <!-- About Section end -->

       <!-- Menu Section start -->
    <section id="menu" class="menu">
        <h2><span>Layanan</span> Kami</h2>
        <p>Kami memberikan Solusi untuk memenuhi kebutuhan anda di bidang IT.</p>
  <div class="container text-center">
        <div class="row ">
          <div class="col-4 menu-card"><a href="#">
            <img
              src="img/menu/cloudee.png"
              alt="Web Developer"
              class="menu-card-img"
            />
            <h3 class="menu-card-title">- Web Developer -</h3>
          </div></a>
          <div class="col-4 menu-card"><a href="#">
            <img
              src="img/menu/vps.png"
              alt="Virtual Private Server(VPS)"
              class="menu-card-img"
            />
            <h3 class="menu-card-title">- Virtual Private Server(VPS) -</h3>
          </div></a>
          <div class="col-4 menu-card"><a href="#">
            <img
              src="img/menu/vpn.jpg"
              alt="Virtual Private Network"
              class="menu-card-img"
            />
            <h3 class="menu-card-title">- Virtual Private Network -</h3>
          </div></a>
        </div>
  </div>
      <div class="container text-center">
        <div class="row ">
          <div class="col-4 menu-card"><a href="#">
            <img
              src="img/menu/Cloude.png"
              alt="Cloud Storage"
              class="menu-card-img"
            />
            <h3 class="menu-card-title">- Cloud Storage -</h3>
          </div></a>
          <div class="col-4 menu-card"><a href="#">
            <img
              src="img/menu/mikrotik.jpg"
              alt="Mikrotik"
              class="menu-card-img"
            />
            <h3 class="menu-card-title">- Setting Mikrotik -</h3>
          </div></a>
        </div>
      </div>
      </div>
    </section>
      <!-- Menu Section end -->

       <!-- Contact Section start -->
    <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>
      <p>
        Jika ingin mengetahui lebih lanjut isi form berikut ini, dan tim kami
        akan menghubungi anda.
      </p>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31821.967652110754!2d105.24798530673439!3d-4.458274406593164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3f3a4b39cc027b%3A0x4833415753de9c14!2sMenggala%20Kota%2C%20Kec.%20Menggala%2C%20Kab.%20Tulang%20Bawang%2C%20Lampung!5e0!3m2!1sid!2sid!4v1676515177759!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="">
          <div class="input-group">
            <i data-feather="user" ></i>
            <input type="text" placeholder="Nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="Email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="No Hp" />
          </div>
          <button type="submit" class="btn">Kirim Pesan</button>
        </form>
      </div>
    </section>

    <!-- Contact Section end -->

    <!-- Footer start -->
    <footer>
      <div class="socials">
        <a href="https://instagram.com/bytedata_id"><i data-feather="instagram"></i></a>
        <a href="https://wa.me/6285174399112"><i class="fa fa-whatsapp" style="font-size:24px"></i></a>
        <a href="mailto:bytedata.id@gmail.com"><i data-feather="mail"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Layanan Kami</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="credit">
        <p>Created by <a href="">bytedata.id</a> | &copy; 2023.</p>
      </div>
    </footer>
    <!-- Footer end -->

    @endsection

