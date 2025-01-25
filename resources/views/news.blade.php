<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nadhim Alim</title>
    <link
      rel="icon"
      href="./img/logonadhimalim.jpg"
      type="image/x-icon"
      class="rounded-2xl"
    />
    <link rel="stylesheet" href="./style.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        list-style: none;
        scroll-behavior: smooth;
      }

      body {
        background-color: rgba(27, 26, 26, 0.521);
        color: #fff;
        font-family: Arial, sans-serif;
      }

      #cursor {
        width: 50px;
        height: 50px;
        position: fixed;
        background: url("./img/cursiri.png") no-repeat center center;
        background-size: contain;
        pointer-events: none;
      }

      header {
        position: fixed;
        width: 100%;
        top: 0;
        right: 0;
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 40px 16%;
        background: transparent;
        transition: all 0.5s ease;
      }

      .logo {
        font-size: 36px;
        color: #fff;
        font-weight: 600;
      }

      span {
        color: #e71919;
      }

      .navlist {
        display: flex;
      }

      .navlist a {
        font-size: 14px;
        font-weight: 500;
        color: #fff;
        margin-left: 40px;
        transition: all 0.5s ease;
      }

      .navlist a:hover {
        color: #cf0000;
        text-shadow: 3px 3px 20px rgb(185, 34, 14), -2px 1px 30px yellow;
      }

      .dropdown-divider {
        height: 1px;
        margin: 0.5rem 0;
        overflow: hidden;
        background-color: #e9ecef;
      }

      #menu-icon {
        font-size: 35px;
        z-index: 10001;
        cursor: pointer;
        color: white;
        display: none;
      }

      .h-btn {
        display: inline-block;
        padding: 11px 26px;
        background: transparent;
        color: red;
        border: 2px solid red;
        border-radius: 8px;
        font-size: 15px;
        font-weight: 500;
        transition: all 0.5s ease;
      }

      .h-btn:hover {
        background: #fff;
        border: 2px solid #fff;
        box-shadow: 0 0 20px rgb(199, 53, 17);
        transform: scale(1.2);
      }

      /* hero section */
      section {
        padding: 110px 16% 90px;
      }

      .hero {
        height: 100vh;
        width: 100%;
        background-position: top right;
        background-size: cover;
        display: flex;
        align-items: center;
        box-shadow: 0px -10px 20px rgba(70, 8, 8, 0.753);
        text-align: center;
        justify-content: center;
      }

      .main-content h4 {
        font-size: 1.6rem;
      }

      .main-content h1 {
        font-size: 4rem;
        font-weight: 600;
        margin: 5px 0px 5px;
        line-height: 1.2;
        color: #cf0000;
      }

      #typed-text-1 {
        color: #990f0f; /* Warna untuk teks pertama */
      }

      #typed-text-2 {
        color: #fff; /* Warna untuk teks kedua */
      }

      .main-content p {
        font-size: 1rem;
        font-weight: 200;
        width: 750px;
        max-width: 100%;
        color: #fff;
        line-height: 20px;
        margin-bottom: 10px;
      }

      .social {
        margin-bottom: 20px;
      }

      .social i {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        color: #990f0f;
        border-radius: 50%;
        backdrop-filter: brightness(88%);
        font-size: 20px;
        box-shadow: 0 0 20px transparent;
        cursor: pointer;
        transition: all 0.5s ease;
      }

      .social i:hover {
        transform: scale(2);
        box-shadow: 0 0 20px rgb(185, 109, 109);
      }

      .btn {
        display: inline-block;
        padding: 11px 26px;
        background: #cf0000;
        color: #fff;
        border: 2px solid #cf0000;
        border-radius: 8px;
        font-size: 15px;
        font-weight: 600;
        transition: all 0.5s ease;
      }

      .btn:hover {
        background: transparent;
        color: #cf0000;
        box-shadow: 0 0 20px rgb(236, 56, 56);
      }

      .btn2 {
        background: transparent;
        color: #cf0000;
        transition: all 0.5s ease;
      }

      .btn2:hover {
        transform: scale(1.2);
      }

      #follow-count {
        text-align: center;
        margin-bottom: 10px;
      }

      .h-btn1 {
        background: #cf0000;
        color: #fff;
        transition: all 0.5s ease;
      }

      header.sticky {
        background: rgb(146, 141, 141);
        box-shadow: 0 0.1rem 1rem rgba(0, 0, 0, 0.2);
        padding: 16px 16%;
      }

      .swiper-container {
        width: 100%;
        padding-bottom: 2rem;
      }
      .swiper-slide {
        display: flex;
        justify-content: center;
      }

      footer {
        padding: 22px 16%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 2rem;
      }

      .copyright p {
        font-size: 15px;
        font-weight: 600;
      }

      .scroll-top i {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background-color: rgb(162, 204, 204);
        width: 45px;
        height: 45px;
        border-radius: 20px;
        color: black;
        font-size: 20px;
      }

      @media (max-width: 1700px) {
        header {
          padding: 20px 8%;
        }
        header.sticky {
          padding: 14px 8%;
        }
        section {
          padding: 90px 8% 80px;
        }
        footer {
          padding: 18px 8%;
        }
        .logo {
          font-size: 28px;
        }
      }

      @media (max-width: 1380px) {
        header {
          padding: 20px 5%;
        }

        header.sticky {
          padding: 14px 5%;
        }
        section {
          padding: 90px 5% 80px;
        }
        footer {
          padding: 18px 5%;
        }
        .logo {
          font-size: 28px;
        }
        .hero {
          height: 90vh;
          background-position: center;
        }
      }

      @media (max-width: 950px) {
        .social {
          margin-bottom: 20px;
        }
        #menu-icon {
          display: block;
        }
        .navlist {
          position: absolute;
          top: 100%;
          right: -100%;
          width: 255px;
          min-height: 100vh;
          display: flex;
          flex-direction: column;
          background: rgb(146, 141, 141);
          transition: all 0.5s ease;
        }
        .navlist a {
          display: block;
          padding: 17px;
          font-size: 22px;
        }
        .navlist.active {
          right: 0;
        }
      }

      @media (max-width: 680px) {
        .main-content h4 {
          font-size: 20px;
        }
        .main-content h1 {
          font-size: 40px;
        }
        .main-content p {
          width: 100%;
          font-size: 15px;
        }
      }

      .tags {
        display: flex;
        flex-wrap: wrap;
      }

      .tag {
        margin-right: 10px; /* Add some space between tags */
      }

      .tag:nth-child(4n + 1) {
        margin-left: 0; /* Reset margin for every 4th tag */
      }
    </style>
  </head>
  <body>
    <!-- header -->
    <header>
      <a href="#" class="logo">Nadhim <span>Alim</span></a>

      <div class="bx bx-menu" id="menu-icon"></div>

      <ul class="navlist">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/') }}">My Education</a></li>
        <li><a href="{{ url('/') }}">Skill</a></li>
        <li><a href="{{ url('/') }}">Upgrade Hidup</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="{{ url('/') }}">Kontak</a></li>
      </ul>

      <div class="top-btnn">
        <a href="{{ route('login') }}" class="h-btn">Daftar/Masuk</a>
      </div>
    </header>

    <!-- hero section -->
    <section class="hero" id="home">
      <div class="main-content">
        <h4>Selamat Datang</h4>
        <h1 id="typed-text">
          <span id="typed-text-1"></span><span id="typed-text-2"></span>
        </h1>

        <p>
          Halo! Saya seorang pengembang web dengan latar belakang di bidang IT.
          Saya tertarik dalam pengembangan aplikasi web dan eksplorasi teknologi
          baru. Saya percaya bahwa teknologi memberikan peluang tanpa batas
          untuk belajar dan berkembang.
        </p>

        <div class="social">
          <a href="https://www.instagram.com/nadhimalim/"
            ><i class="ri-instagram-fill"></i
          ></a>
          <a href="https://www.instagram.com/nadhimalim/"
            ><i class="ri-youtube-fill"></i
          ></a>
          <a href="https://www.tiktok.com/@nadhimalim_14"
            ><i class="ri-tiktok-fill"></i
          ></a>
          <a href="https://wa.me/6289508545071"
            ><i class="ri-whatsapp-fill"></i
          ></a>
        </div>

        <div class="main-btn">
          <a href="https://id.linkedin.com/in/nadhim-alim-5a5a09278" class="btn"
            >Hire Me</a
          >
          <a href="./sertifikat/cv/cvnadhim.pptx" class="btn btn2"
            >Download CV</a
          >
        </div>
      </div>
    </section>

    <!-- education section -->
    <section class="bg-white" id="berita">
      <div class="mx-auto max-w-[1340px] px-4 py-12 sm:px-6 lg:py-16 xl:py-24">
        <div class="max-w-7xl sm:flex sm:justify-between mb-8">
          <h2
            class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl text-red-500"
          >
            News
          </h2>
        </div>
        <!-- Swiper Container -->
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <!-- Card 1 -->
            <div class="swiper-slide">
              <article
                class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm flex flex-col h-full"
              >
                <img
                  alt="News 1"
                  src="https://preview.redd.it/i-finally-finished-my-first-100x100-grid-v0-27cu7bql2yga1.png?width=548&format=png&auto=webp&s=75c5f9e8918b12b60c05fce05c865137711834ad"
                  class="h-56 w-full object-cover"
                />
                <div class="p-4 sm:p-6 flex-1">
                  <h3 class="text-lg font-medium text-gray-900">
                    Pembangunan Infrastruktur Berkelanjutan di Indonesia
                  </h3>
                  <p class="mt-2 text-sm text-gray-500">
                    Dalam beberapa tahun terakhir, Indonesia telah menunjukkan
                    komitmen yang kuat dalam membangun infrastruktur yang
                    berkelanjutan. Proyek-proyek besar seperti jalan tol lintas
                    pulau, pelabuhan modern, dan bandara internasional menjadi
                    prioritas utama untuk mendukung pertumbuhan ekonomi
                    nasional. Selain itu, pemerintah juga berfokus pada
                    pengembangan energi terbarukan dan transportasi ramah
                    lingkungan, termasuk kereta cepat dan bus listrik. Langkah
                    ini tidak hanya bertujuan untuk meningkatkan konektivitas
                    antar wilayah, tetapi juga untuk menjaga kelestarian
                    lingkungan dalam jangka panjang.
                  </p>
                  <a
                    href="#"
                    class="mt-4 inline-block rounded-lg bg-red-500 px-4 py-2 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500"
                    >Lihat Selengkapnya</a
                  >
                </div>
              </article>
            </div>
            <div class="swiper-slide">
              <article
                class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm flex flex-col h-full"
              >
                <img
                  alt="News 1"
                  src="https://preview.redd.it/i-finally-finished-my-first-100x100-grid-v0-27cu7bql2yga1.png?width=548&format=png&auto=webp&s=75c5f9e8918b12b60c05fce05c865137711834ad"
                  class="h-56 w-full object-cover"
                />
                <div class="p-4 sm:p-6 flex-1">
                  <h3 class="text-lg font-medium text-gray-900">
                    Pembangunan Infrastruktur Berkelanjutan di Indonesia
                  </h3>
                  <p class="mt-2 text-sm text-gray-500">
                    Dalam beberapa tahun terakhir, Indonesia telah menunjukkan
                    komitmen yang kuat dalam membangun infrastruktur yang
                    berkelanjutan. Proyek-proyek besar seperti jalan tol lintas
                    pulau, pelabuhan modern, dan bandara internasional menjadi
                    prioritas utama untuk mendukung pertumbuhan ekonomi
                    nasional. Selain itu, pemerintah juga berfokus pada
                    pengembangan energi terbarukan dan transportasi ramah
                    lingkungan, termasuk kereta cepat dan bus listrik. Langkah
                    ini tidak hanya bertujuan untuk meningkatkan konektivitas
                    antar wilayah, tetapi juga untuk menjaga kelestarian
                    lingkungan dalam jangka panjang.
                  </p>
                  <a
                    href="#"
                    class="mt-4 inline-block rounded-lg bg-red-500 px-4 py-2 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500"
                    >Lihat Selengkapnya</a
                  >
                </div>
              </article>
            </div>
            <div class="swiper-slide">
              <article
                class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm flex flex-col h-full"
              >
                <img
                  alt="News 1"
                  src="https://preview.redd.it/i-finally-finished-my-first-100x100-grid-v0-27cu7bql2yga1.png?width=548&format=png&auto=webp&s=75c5f9e8918b12b60c05fce05c865137711834ad"
                  class="h-56 w-full object-cover"
                />
                <div class="p-4 sm:p-6 flex-1">
                  <h3 class="text-lg font-medium text-gray-900">
                    Pembangunan Infrastruktur Berkelanjutan di Indonesia
                  </h3>
                  <p class="mt-2 text-sm text-gray-500">
                    Dalam beberapa tahun terakhir, Indonesia telah menunjukkan
                    komitmen yang kuat dalam membangun infrastruktur yang
                    berkelanjutan. Proyek-proyek besar seperti jalan tol lintas
                    pulau, pelabuhan modern, dan bandara internasional menjadi
                    prioritas utama untuk mendukung pertumbuhan ekonomi
                    nasional. Selain itu, pemerintah juga berfokus pada
                    pengembangan energi terbarukan dan transportasi ramah
                    lingkungan, termasuk kereta cepat dan bus listrik. Langkah
                    ini tidak hanya bertujuan untuk meningkatkan konektivitas
                    antar wilayah, tetapi juga untuk menjaga kelestarian
                    lingkungan dalam jangka panjang.
                  </p>
                  <a
                    href="#"
                    class="mt-4 inline-block rounded-lg bg-red-500 px-4 py-2 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500"
                    >Lihat Selengkapnya</a
                  >
                </div>
              </article>
            </div>
            <div class="swiper-slide">
              <article
                class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm flex flex-col h-full"
              >
                <img
                  alt="News 1"
                  src="https://preview.redd.it/i-finally-finished-my-first-100x100-grid-v0-27cu7bql2yga1.png?width=548&format=png&auto=webp&s=75c5f9e8918b12b60c05fce05c865137711834ad"
                  class="h-56 w-full object-cover"
                />
                <div class="p-4 sm:p-6 flex-1">
                  <h3 class="text-lg font-medium text-gray-900">
                    Pembangunan Infrastruktur Berkelanjutan di Indonesia
                  </h3>
                  <p class="mt-2 text-sm text-gray-500">
                    Dalam beberapa tahun terakhir, Indonesia telah menunjukkan
                    komitmen yang kuat dalam membangun infrastruktur yang
                    berkelanjutan. Proyek-proyek besar seperti jalan tol lintas
                    pulau, pelabuhan modern, dan bandara internasional menjadi
                    prioritas utama untuk mendukung pertumbuhan ekonomi
                    nasional. Selain itu, pemerintah juga berfokus pada
                    pengembangan energi terbarukan dan transportasi ramah
                    lingkungan, termasuk kereta cepat dan bus listrik. Langkah
                    ini tidak hanya bertujuan untuk meningkatkan konektivitas
                    antar wilayah, tetapi juga untuk menjaga kelestarian
                    lingkungan dalam jangka panjang.
                  </p>
                  <a
                    href="#"
                    class="mt-4 inline-block rounded-lg bg-red-500 px-4 py-2 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500"
                    >Lihat Selengkapnya</a
                  >
                </div>
              </article>
            </div>
            <div class="swiper-slide">
              <article
                class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm flex flex-col h-full"
              >
                <img
                  alt="News 1"
                  src="https://preview.redd.it/i-finally-finished-my-first-100x100-grid-v0-27cu7bql2yga1.png?width=548&format=png&auto=webp&s=75c5f9e8918b12b60c05fce05c865137711834ad"
                  class="h-56 w-full object-cover"
                />
                <div class="p-4 sm:p-6 flex-1">
                  <h3 class="text-lg font-medium text-gray-900">
                    Pembangunan Infrastruktur Berkelanjutan di Indonesia
                  </h3>
                  <p class="mt-2 text-sm text-gray-500">
                    Dalam beberapa tahun terakhir, Indonesia telah menunjukkan
                    komitmen yang kuat dalam membangun infrastruktur yang
                    berkelanjutan. Proyek-proyek besar seperti jalan tol lintas
                    pulau, pelabuhan modern, dan bandara internasional menjadi
                    prioritas utama untuk mendukung pertumbuhan ekonomi
                    nasional. Selain itu, pemerintah juga berfokus pada
                    pengembangan energi terbarukan dan transportasi ramah
                    lingkungan, termasuk kereta cepat dan bus listrik. Langkah
                    ini tidak hanya bertujuan untuk meningkatkan konektivitas
                    antar wilayah, tetapi juga untuk menjaga kelestarian
                    lingkungan dalam jangka panjang.
                  </p>
                  <a
                    href="#"
                    class="mt-4 inline-block rounded-lg bg-red-500 px-4 py-2 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500"
                    >Lihat Selengkapnya</a
                  >
                </div>
              </article>
            </div>
            <div class="swiper-slide">
              <article
                class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm flex flex-col h-full"
              >
                <img
                  alt="News 1"
                  src="https://preview.redd.it/i-finally-finished-my-first-100x100-grid-v0-27cu7bql2yga1.png?width=548&format=png&auto=webp&s=75c5f9e8918b12b60c05fce05c865137711834ad"
                  class="h-56 w-full object-cover"
                />
                <div class="p-4 sm:p-6 flex-1">
                  <h3 class="text-lg font-medium text-gray-900">
                    Pembangunan Infrastruktur Berkelanjutan di Indonesia
                  </h3>
                  <p class="mt-2 text-sm text-gray-500">
                    Dalam beberapa tahun terakhir, Indonesia telah menunjukkan
                    komitmen yang kuat dalam membangun infrastruktur yang
                    berkelanjutan. Proyek-proyek besar seperti jalan tol lintas
                    pulau, pelabuhan modern, dan bandara internasional menjadi
                    prioritas utama untuk mendukung pertumbuhan ekonomi
                    nasional. Selain itu, pemerintah juga berfokus pada
                    pengembangan energi terbarukan dan transportasi ramah
                    lingkungan, termasuk kereta cepat dan bus listrik. Langkah
                    ini tidak hanya bertujuan untuk meningkatkan konektivitas
                    antar wilayah, tetapi juga untuk menjaga kelestarian
                    lingkungan dalam jangka panjang.
                  </p>
                  <a
                    href="#"
                    class="mt-4 inline-block rounded-lg bg-red-500 px-4 py-2 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500"
                    >Lihat Selengkapnya</a
                  >
                </div>
              </article>
            </div>

            <!-- Additional cards can be added here using the same structure -->
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="copyright">
        <p>&copy; 2024 Nadhim Alim, All Rights Reserved</p>
      </div>
      <a href="#home" class="scroll-top">
        <i class="ri-arrow-up-s-fill"></i>
      </a>
    </footer>

    <script>
      AOS.init();
    </script>

    <script src="./tailwind.js" type="module"></script>

    <script>
      const header = document.querySelector("header");

      window.addEventListener("scroll", function () {
        header.classList.toggle("sticky", window.scrollY > 120);
      });

      // hamburgermenu

      const menu = document.getElementById("menu-icon");
      const navlist = document.querySelector(".navlist");

      menu.onclick = () => {
        menu.classList.toggle("bx-menu-active");
        navlist.classList.toggle("active");
      };

      window.onscroll = () => {
        menu.classList.remove("bx-menu-active");
        navlist.classList.remove("active");
      };

      // hallo nama saya
      const textElement1 = document.getElementById("typed-text-1");
      const textElement2 = document.getElementById("typed-text-2");
      const textContent1 = "Di Web Berita ";
      const textContent2 = "Nadhim Alim";
      let index1 = 0;
      let index2 = 0;

      function typeWriter1() {
        if (index1 < textContent1.length) {
          textElement1.textContent += textContent1.charAt(index1);
          index1++;
          setTimeout(typeWriter1, 100); // Waktu penundaan antara setiap karakter (dalam milidetik)
        }
      }

      function typeWriter2() {
        if (index2 < textContent2.length) {
          textElement2.textContent += textContent2.charAt(index2);
          index2++;
          setTimeout(typeWriter2, 100); // Waktu penundaan antara setiap karakter (dalam milidetik)
        }
      }

      // Memanggil fungsi mengetik sendiri saat halaman dimuat
      window.onload = function () {
        typeWriter1(); // Mulai mengetik teks pertama
        setTimeout(typeWriter2, textContent1.length * 100); // Mulai mengetik teks kedua setelah teks pertama selesai
      };

      const cursor = document.getElementById("cursor");
      document.addEventListener("mousemove", (e) => {
        cursor.style.top = `${e.clientY}px`;
        cursor.style.left = `${e.clientX}px`;
      });

      // Disable right-click context menu
      document.addEventListener("contextmenu", (event) =>
        event.preventDefault()
      );

      // Disable certain key combinations
      document.addEventListener("keydown", (event) => {
        // Disable F12 key
        if (event.key === "F12") {
          event.preventDefault();
        }

        // Disable Ctrl+Shift+I, Ctrl+Shift+J, Ctrl+U
        if (
          event.ctrlKey &&
          event.shiftKey &&
          (event.key === "I" || event.key === "J")
        ) {
          event.preventDefault();
        }

        if (event.ctrlKey && event.key === "U") {
          event.preventDefault();
        }
      });

      function showSection(sectionId) {
        const sections = document.querySelectorAll(".experience-section");
        sections.forEach((section) => {
          section.classList.add("hidden");
        });

        document.getElementById(sectionId).classList.remove("hidden");
      }

      document.addEventListener("DOMContentLoaded", function () {
        const nonItButton = document.querySelector(".category:nth-child(1)");
        const itButton = document.querySelector(".category:nth-child(2)");
        const skills = document.querySelectorAll(".skill-box");

        nonItButton.addEventListener("click", function () {
          skills.forEach((skill, index) => {
            if (index % 2 === 0) {
              // Display non-IT skills (e.g., index 0, 2, 4)
              skill.style.display = "block";
            } else {
              skill.style.display = "none";
            }
          });
        });

        itButton.addEventListener("click", function () {
          skills.forEach((skill, index) => {
            if (index % 2 !== 0) {
              // Display IT skills (e.g., index 1, 3, 5)
              skill.style.display = "block";
            } else {
              skill.style.display = "none";
            }
          });
        });
      });

      const swiper = new Swiper(".swiper-container", {
        slidesPerView: 1,
        spaceBetween: 16,
        loop: true, // Aktifkan efek looping
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          },
        },
      });
    </script>
  </body>
</html>
