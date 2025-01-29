<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nadhim Alim</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="icon" href="./img/logonadhimalim.jpg" type="image/x-icon" class="rounded-2xl" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- Styles -->
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
            background: url('./img/cursiri.png') no-repeat center center;
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
            margin: .5rem 0;
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
            /* background: url("./img/nadhimalim.png"); */
            background: url("../../public/image/nadhimalim.png");
            background-position: top right;
            background-size: cover;
            display: flex;
            align-items: center;
            /* justify-content: flex-start; */
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
            color: #990f0f;
            /* Warna untuk teks pertama */
        }

        #typed-text-2 {
            color: #fff;
            /* Warna untuk teks kedua */
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

        .pendidikan {
            background: #fff;
        }



        /* pengalaman */
        .cardpengalaman {
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            overflow: hidden;
            width: 100%;
            padding: 20px;
            transition: box-shadow 0.3s ease;
        }

        .cardpengalaman:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .custom-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #f43f5e;
            color: white;
            border-radius: 8px;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .custom-button:hover {
            background-color: #be123c;
        }

        .hidden {
            display: none;
        }

        .custom-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #f43f5e;
            color: white;
            border-radius: 8px;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .custom-button:hover {
            background-color: #be123c;
        }

        .experience-section {
            margin-top: 20px;
            padding: 20px;
            border-radius: 8px;
            transition: box-shadow 0.3s ease;
        }


        .skill {
            background-color: white;
            padding: 2rem 1rem;
        }

        .skill h1 {
            text-align: center;
            color: black;
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 2rem;
        }

        /* Grid layout for skill cards */
        .skill-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        /* Card styling */
        .card {
            border-radius: 10px;
            background: linear-gradient(to right, #6EE7B7, #3B82F6, #9333EA);
            padding: 0.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            background-size: 400% 400%;
            animation: gradientShift 4s infinite;
        }

        .content {
            background-color: white;
            border-radius: 10px;
            padding: 2rem;
            text-align: left;
        }

        .content time {
            font-size: 0.875rem;
            color: #6B7280;
        }

        .content h3 {
            font-size: 1.25rem;
            margin: 0.5rem 0;
            color: #111827;
        }

        .tags {
            margin-top: 1rem;
            display: flex;
            gap: 0.5rem;
        }

        .tag {
            background-color: #EDE9FE;
            color: #7C3AED;
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
            border-radius: 9999px;
        }

        /* Keyframe for background animation */
        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .skill h1 {
                font-size: 2rem;
            }

            .content {
                padding: 1.5rem;
            }

            .content h3 {
                font-size: 1.125rem;
            }
        }

        @media (max-width: 480px) {
            .skill h1 {
                font-size: 1.75rem;
            }

            .content {
                padding: 1rem;
            }
        }

        /* katakatamotivasi */
        .katakatamotivasi {
            background-image: url("./img/peng1.jpg");
            background-size: cover;
            background-position: center;

            width: 100%;
        }

        .katakatamotivasi .moti h2 {
            font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
                "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
            font-weight: 800;
            color: #ce0b0b;
        }

        .katakatamotivasi:hover .moti h2 {
            animation: textColorChange 1s linear infinite;
            /* Mengubah warna teks saat dihover */
        }

        @keyframes textColorChange {
            0% {
                color: #ce0b0b;
            }

            50% {
                color: #ff0000;
            }

            100% {
                color: #ce0b0b;
            }
        }

        .kumpulanfoto1 .kumpulanfoto {
            text-align: center;

        }

        .kumpulanfoto1 .kumpulanfoto h1 {
            font-size: 2rem;
            font-weight: 700;
        }




        /* kontak */
        .center-text1 {
            text-align: center;
            font-size: 2rem;
            font-weight: 700;
            color: rgb(151, 7, 7);
        }

        .contact-form {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 4.2rem;
        }

        .contact-form form {
            position: relative;
            width: 100%;
            max-width: 600px;
        }

        form input,
        form textarea {
            width: 100%;
            padding: 20px;
            border: none;
            outline: none;
            box-shadow: 0 0 5px rgb(100, 65, 65);
            background: rgb(146, 141, 141);
            color: #fff;
            margin-bottom: 20px;
            font-weight: 800;
            border-radius: 8px;
        }

        form input::placeholder,
        form textarea::placeholder {
            color: #fff;
            font-size: 15px;
        }

        form .sendbtn {
            cursor: pointer;
            display: inline-block;
            padding: 11px 26px;
            border: 2px solid #a88e8e;
            transition: all 0.5s ease;
            width: 100%;
            /* Changed to 100% */
            max-width: 200px;
            /* Added max-width */
        }

        form .sendbtn:hover {
            background-color: #290404;
        }

        /* Media Query for smaller screens */
        @media only screen and (max-width: 768px) {
            .contact-form {
                margin: 2rem;
            }

            form input,
            form textarea {
                font-size: 14px;
            }
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
            margin-right: 10px;
            /* Add some space between tags */
        }

        .tag:nth-child(4n+1) {
            margin-left: 0;
            /* Reset margin for every 4th tag */
        }
    </style>
</head>

<body class="antialiased">

    <div id="cursor"></div>

    <!-- header -->
    <header>
        <a href="#" class="logo">Nadhim <span>Alim</span></a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navlist">
            <li><a href="#home">Home</a></li>
            <li><a href="#pendidikan">My Education</a></li>
            <li><a href="#skill">Skill</a></li>
            <li><a href="#upgrade">Upgrade Hidup</a></li>
            <li><a href="{{ route('news') }}">Project</a></li>
            <li><a href="#kontak">Kontak</a></li>
        </ul>

        <div class="top-btnn">
            {{-- <a href="./login.html" class="h-btn">Daftar/Masuk</a> --}}
            <a href="{{ route('login') }}" class="h-btn">Daftar/Masuk</a>


        </div>
    </header>

    <!-- hero section -->
    <section class="hero" id="home">
        <div class="main-content">
            <h4>Hi, Guys</h4>
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
                <a href="https://www.instagram.com/nadhimalim/"><i class="ri-instagram-fill"></i></a>
                <a href="https://www.instagram.com/nadhimalim/"><i class="ri-youtube-fill"></i></a>
                <a href="https://www.tiktok.com/@nadhimalim_14"><i class="ri-tiktok-fill"></i></a>
                <a href="https://wa.me/6289508545071"><i class="ri-whatsapp-fill"></i></a>
            </div>

            <div class="main-btn">
                <a href="https://id.linkedin.com/in/nadhim-alim-5a5a09278" class="btn">Hire Me</a>
                <a href="{{ asset('sertifikat/cv/cvnadhim.pptx') }}" class="btn btn2">Download CV</a>
            </div>
        </div>
    </section>

    <!-- education section -->
    <section class="bg-white" id="pendidikan">
        <div class="mx-auto max-w-[1340px] px-4 py-12 sm:px-6 lg:py-16 xl:py-24">
            <div class="max-w-7xl sm:flex sm:justify-between">
                <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl text-red-500">
                    My Education
                </h2>
            </div>

            <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">


                <!-- Primary School -->
                <article class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm">
                    <img src="{{ asset('image/pendidikan/sdit.png') }}" alt="Primary School" class="h-56 w-full object-cover">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            SDIT Baitussalam Prambanan
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">
                            Description of your primary school education, including notable
                            achievements or experiences.
                        </p>
                        <a href="#more-info"
                            class="mt-4 inline-block rounded-lg bg-red-500 px-4 py-2 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                            Learn More
                        </a>
                    </div>
                </article>

                <!-- Junior High School -->
                <article class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm">
                    <img src="{{ asset('image/pendidikan/smp.png') }}" alt="Primary School" class="h-56 w-full object-cover">
                    {{-- <img alt="Junior High School" src="./pendidikan/smp.png" class="h-56 w-full object-cover" /> --}}
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            SMP N 2 Piyungan
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">
                            Description of your junior high school education, including
                            notable achievements or experiences.
                        </p>
                        <a href="#more-info"
                            class="mt-4 inline-block rounded-lg bg-red-500 px-4 py-2 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                            Learn More
                        </a>
                    </div>
                </article>

                <!-- Senior High School -->
                <article class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm">
                    <img src="{{ asset('image/pendidikan/man.png') }}" alt="Primary School" class="h-56 w-full object-cover">

                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">MAN 3 Bantul</h3>
                        <p class="mt-2 text-sm text-gray-500">
                            Description of your senior high school education, including
                            notable achievements or experiences.
                        </p>
                        <a href="#more-info"
                            class="mt-4 inline-block rounded-lg bg-red-500 px-4 py-2 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                            Learn More
                        </a>
                    </div>
                </article>

                <!-- University -->
                <article
                    class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm lg:col-span-1 lg:col-start-2">
                    <img src="{{ asset('image/pendidikan/uad.png') }}" alt="Primary School" class="h-56 w-full object-cover">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            Informatika - UAD
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">
                            Description of your university education, including notable
                            achievements or experiences.
                        </p>
                        <a href="#more-info"
                            class="mt-4 inline-block rounded-lg bg-red-500 px-4 py-2 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                            Learn More
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section id="skill" class="skill">
        <h1>Skill Saya</h1>
        <div class="skill-cards">
            <article class="card">
                <div class="content">
                    <time datetime="2022-10-10" class="block text-xs text-gray-500">
                        @nadhimalim
                    </time>
                    <a href="#">
                        <h3 class="mt-0.5 text-lg font-medium text-gray-900">
                            Hard Skill
                        </h3>
                    </a>
                    <div class="tags">
                        <span class="tag">HTML & CSS</span>
                        <span class="tag">Javascript</span>
                        <span class="tag">PHP & Laravel</span>
                        <span class="tag">React</span>
                        <span class="tag">Tailwind dan Bootstrap</span>
                        <span class="tag">Mysql</span>
                        <!-- Add more tags here -->
                    </div>
                </div>
            </article>

            <article class="card">
                <div class="content">
                    <time datetime="2022-10-10" class="block text-xs text-gray-500">
                        @nadhimalim
                    </time>
                    <a href="#">
                        <h3 class="mt-0.5 text-lg font-medium text-gray-900">
                            Softkill
                        </h3>
                    </a>
                    <div class="tags">
                        <span class="tag">Communication</span>
                        <span class="tag">Teamwork</span>
                        <span class="tag">Time Management</span>
                        <span class="tag">Problem-Solving</span>
                        <span class="tag">Continuous Learning</span>
                        <span class="tag">Emotional Intelligenc</span>
                        <!-- Add more tags here -->
                    </div>
                </div>
            </article>
            <!-- Repeat this article block for other skills -->
        </div>
    </section>

    <!-- kata kata motivasi -->
    <section class="katakatamotivasi">
        <div class="moti">
            <h2 class="text-center text-2xl">
                "Selama masih ada di atas tanah, kita punya kesempatan berharga:
                beribadah dan meraih sukses. Setiap detik adalah peluang emas. Jangan
                sia-siakan waktu, karena di dalamnya terdapat jalan menuju impian dan
                kesuksesan." - Nadhim Alim
            </h2>
        </div>
    </section>

    <!-- pengalaman section -->
    <section class="bg-white" id="upgrade" id="upgrade">
        <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
            <h2 class="text-center text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                Upgrade Hidup
            </h2>

            <!-- Buttons for Experience Filters -->
            <div class="flex justify-center mt-8">
                <div class="btnpengalaman flex flex-wrap gap-4 justify-center">
                    <button class="custom-button" onclick="showSection('organisasi')">
                        Organisasi
                    </button>
                    <button class="custom-button" onclick="showSection('kepanitiaan')">
                        kepanitiaan
                    </button>
                    <button class="custom-button" onclick="showSection('magang')">
                        Magang
                    </button>
                    <button class="custom-button" onclick="showSection('pelatihan')">
                        Pelatihan
                    </button>
                    <button class="custom-button" onclick="showSection('lomba')">
                        Lomba
                    </button>
                    <button class="custom-button" onclick="showSection('kegiatan')">
                        kegiatan lainnya
                    </button>
                </div>
            </div>

            <!-- Sections for Experiences -->
            <div id="organisasi" class="experience-section grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <article class="cardpengalaman">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            PMR MAN 3 Bantul
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Expedita sint iure fugiat optio laboriosam quae numquam fugit
                            reprehenderit tempora qui?
                        </p>
                        <p class="mt-4 text-sm text-gray-400">Tahun Aktif: 2021 - 2023</p>
                    </div>
                </article>
                <article class="cardpengalaman">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">HIPMI PT UAD</h3>
                        <p class="mt-2 text-sm text-gray-500">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Expedita sint iure fugiat optio laboriosam quae numquam fugit
                            reprehenderit tempora qui?
                        </p>
                        <p class="mt-4 text-sm text-gray-400">
                            Tahun Aktif: 2024 - Sekarang
                        </p>
                    </div>
                </article>
                <article class="cardpengalaman">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">IKATAN MAHASISWA KABUPATEN BANTUL</h3>
                        <p class="mt-2 text-sm text-gray-500">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Expedita sint iure fugiat optio laboriosam quae numquam fugit
                            reprehenderit tempora qui?
                        </p>
                        <p class="mt-4 text-sm text-gray-400">
                            Tahun Aktif: Oktober 2024 - Januari 2025
                        </p>
                    </div>
                </article>
                <article class="cardpengalaman">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">PPKO UAD</h3>
                        <p class="mt-2 text-sm text-gray-500">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Expedita sint iure fugiat optio laboriosam quae numquam fugit
                            reprehenderit tempora qui?
                        </p>
                        <p class="mt-4 text-sm text-gray-400">
                            Tahun Aktif: Januari 2025 - Juli 2025
                        </p>
                    </div>
                </article>
                <article class="cardpengalaman">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">Robotic UAD</h3>
                        <p class="mt-2 text-sm text-gray-500">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Expedita sint iure fugiat optio laboriosam quae numquam fugit
                            reprehenderit tempora qui?
                        </p>
                        <p class="mt-4 text-sm text-gray-400">
                            Tahun Aktif: Desember 2023 - Juli 2023
                        </p>
                    </div>
                </article>

                <!-- Tambahkan lebih banyak kartu organisasi sesuai kebutuhan -->
            </div>

            <div id="kepanitiaan"
                class="experience-section hidden grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <article class="cardpengalaman">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            Panitia Hari Ulang Tahun Informatika Divisi SponsorShip
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Expedita sint iure fugiat optio laboriosam quae numquam fugit
                            reprehenderit tempora qui?
                        </p>
                        <p class="mt-4 text-sm text-gray-400">Tahun Aktif: 2023</p>
                    </div>
                </article>
                <article class="cardpengalaman">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            Panitia Bulan Ramadhan Informatika Divisi SponsorShip
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Expedita sint iure fugiat optio laboriosam quae numquam fugit
                            reprehenderit tempora qui?
                        </p>
                        <p class="mt-4 text-sm text-gray-400">Tahun Aktif: 2024</p>
                    </div>
                </article>
            </div>

            <div id="magang"
                class="experience-section hidden grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <article class="cardpengalaman">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            Magang PT Wesclic NeoTech Indonesia
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">
                            Sebagai Copywriter dan Desainer Grafis di Wesclic, saya
                            menciptakan konten pemasaran dan desain visual yang mendukung
                            kampanye perusahaan. Menggunakan Adobe Photoshop dan
                            Illustrator, saya menghasilkan materi yang konsisten dengan
                            identitas merek. Saya juga berhasil meningkatkan keterlibatan
                            audiens dan mengelola proyek dengan tenggat waktu yang ketat.
                        </p>
                        <p class="mt-4 text-sm text-gray-400">
                            Tahun Aktif: Juli 2024 - Oktober 2024
                        </p>
                    </div>
                </article>
            </div>

            <div id="pelatihan"
                class="experience-section hidden grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <article class="cardpengalaman">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            Kursus HTML CSS Javascript di Alfabank Yogyakarta
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">
                            disini saya belajar membuat website sederhana untuk dasar
                            programming saya
                        </p>
                        <p class="mt-4 text-sm text-gray-400">
                            Tahun Aktif: februari 2023 - April 2023
                        </p>
                    </div>
                </article>
                <article class="cardpengalaman">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            Kursus Laravel di Coding Studio
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">
                            disini saya belajar membuat website sederhana Pake teknologi
                            Laravel untuk dasar programming saya
                        </p>
                        <p class="mt-4 text-sm text-gray-400">
                            Tahun Aktif: Agustus 2024
                        </p>
                    </div>
                </article>
                <article class="cardpengalaman">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            Belajar Backend Developer Universitas Jenderal Achmad Yani
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">
                            disini saya belajar membuat website sederhana Pake teknologi
                            Laravel untuk dasar programming saya
                        </p>
                        <p class="mt-4 text-sm text-gray-400">
                            Tahun Aktif: Agustus 2024
                        </p>
                    </div>
                </article>
            </div>

            <div id="lomba"
                class="experience-section hidden grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <article class="cardpengalaman">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            Lomba Web Portofolio di UTDI Yogyakarta
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Deserunt nobis sint ab minus quos aut neque at veritatis velit
                            accusantium?
                        </p>
                        <p class="mt-4 text-sm text-gray-400">Tahun Aktif: Juni 2024</p>
                    </div>
                </article>

                <article class="cardpengalaman">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            Lomba Website Design di UAD
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Corrupti quae possimus beatae, excepturi veniam unde. Alias
                            mollitia aperiam illum maxime!
                        </p>
                        <p class="mt-4 text-sm text-gray-400">Tahun Aktif: Juni 2024</p>
                    </div>
                </article>
            </div>

            <div id="kegiatan"
                class="experience-section hidden grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <article class="cardpengalaman">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            Kegiatan Donor Darah
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">
                            Saya Melakukan Donor Darah Ketika Ada kesempatan dan waktu
                            kosong
                        </p>
                        <p class="mt-4 text-sm text-gray-400">
                            Tahun Aktif: 2021 - Sekarang
                        </p>
                    </div>
                </article>
                <article class="cardpengalaman">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">Freelance</h3>
                        <p class="mt-2 text-sm text-gray-500">
                            Saya Melakukan freelance Ketika Ada kesempatan dan waktu kosong
                            dan paling penting juga dibayar.
                        </p>
                        <p class="mt-4 text-sm text-gray-400">
                            Tahun Aktif: 2021 - Sekarang
                        </p>
                    </div>
                </article>
                <article class="cardpengalaman">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            Goto Goes Campus
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">
                            yang mengadakan dari Gojek dan Tokopedia yang saya hadiri jika
                            waktu kosong
                        </p>
                        <p class="mt-4 text-sm text-gray-400">
                            Tahun Aktif: 2021 - Sekarang
                        </p>
                    </div>
                </article>
                <article class="cardpengalaman">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            Seminar Kuliah Kerja Ngoding UII
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">
                            Acara Tersebut diadakan oleh Skyshi x GeekAcademy X DevCode di
                            UII
                        </p>
                        <p class="mt-4 text-sm text-gray-400">
                            Tahun Aktif: 14 Agustus 2023
                        </p>
                    </div>
                </article>
                <article class="cardpengalaman">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            Menjadi Web Programmer ft Dea Afrizal
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">
                            yang mengadakan acara tersebuat dari Himpunan mahasiswa UNISNU
                            JEPARA pada 16 maret 2023
                        </p>
                        <p class="mt-4 text-sm text-gray-400">
                            Tahun Aktif: 16 maret 2023
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- prestasi -->
    <section id="kumpulanfoto1" class="kumpulanfoto1">
        <div class="kumpulanfoto">
            <h1>Kumpulan Foto</h1>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni, odio.
            </p>
        </div>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <li>
                    <a href="#" class="group block overflow-hidden">
                        <img src="{{ asset('image/fotonadhim1.jpeg') }}" alt="Foto 1"
                            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
                    </a>
                </li>

                <li>
                    <a href="#" class="group block overflow-hidden">
                        <img src="{{ asset('image/fotonadhim4.jpeg') }}" alt="Foto 2"
                            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
                    </a>
                </li>

                <li>
                    <a href="#" class="group block overflow-hidden">
                        <img src="{{ asset('image/fotonadhim3.jpeg') }}" alt="Foto 3"
                            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
                    </a>
                </li>

                <li>
                    <a href="#" class="group block overflow-hidden">
                        <img src="{{ asset('image/fotonadhim4.jpeg') }}" alt="Foto 4"
                            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
                    </a>
                </li>
                <li>
                    <a href="#" class="group block overflow-hidden">
                        <img src="{{ asset('image/fotonadhim4.jpeg') }}"  alt="Foto 4"
                            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
                    </a>
                </li>
                <li>
                    <a href="#" class="group block overflow-hidden">
                        <img src="{{ asset('image/fotonadhim1.jpeg') }}"  alt="Foto 4"
                            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
                    </a>
                </li>
                <li>
                    <a href="#" class="group block overflow-hidden">
                        <img src="{{ asset('image/fotonadhim3.jpeg') }}"  alt="Foto 4"
                            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section class="kontak bg-white" id="kontak">
        <div class="center-text1">
            <h2>Berikan Saya<span class="kontakme"> Masukkan</span></h2>
        </div>

        <div class="contact-form">
            <form action="https://api.web3forms.com/submit" method="POST">
                <input type="hidden" name="access_key" value="c4a7fd4c-2f56-493d-ac96-bd83ffe205a8" />

                <input type="text" name="nama" placeholder="Masukkan Nama Anda" required />
                <input type="email" name="email" placeholder="Masukkan Email Anda" required />
                <textarea name="pesan" id="" cols="30" rows="10" placeholder="Masukkan Pesan Anda" required></textarea>
                <input type="submit" name="submit" value="Kirim Pesan" class="sendbtn" />
            </form>
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


    <script>
        const header = document.querySelector("header");

        window.addEventListener("scroll", function() {
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
        const textContent1 = "I' am ";
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
        window.onload = function() {
            typeWriter1(); // Mulai mengetik teks pertama
            setTimeout(typeWriter2, textContent1.length *
                100); // Mulai mengetik teks kedua setelah teks pertama selesai
        };

        const cursor = document.getElementById("cursor");
        document.addEventListener("mousemove", (e) => {
            cursor.style.top = `${e.clientY}px`;
            cursor.style.left = `${e.clientX}px`;
        });

        // Disable right-click context menu
        document.addEventListener("contextmenu", (event) => event.preventDefault());

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

        document.addEventListener("DOMContentLoaded", function() {
            const nonItButton = document.querySelector(".category:nth-child(1)");
            const itButton = document.querySelector(".category:nth-child(2)");
            const skills = document.querySelectorAll(".skill-box");

            nonItButton.addEventListener("click", function() {
                skills.forEach((skill, index) => {
                    if (index % 2 === 0) { // Display non-IT skills (e.g., index 0, 2, 4)
                        skill.style.display = "block";
                    } else {
                        skill.style.display = "none";
                    }
                });
            });

            itButton.addEventListener("click", function() {
                skills.forEach((skill, index) => {
                    if (index % 2 !== 0) { // Display IT skills (e.g., index 1, 3, 5)
                        skill.style.display = "block";
                    } else {
                        skill.style.display = "none";
                    }
                });
            });
        });
    </script>
    <script src="./tailwind.js" type="module"></script>
</body>

</html>
