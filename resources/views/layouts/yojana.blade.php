<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yojana Sarkari Hai - Sarkari Yojana Information & Tools</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #F8FAFC;
            color: #111827;
        }

        a {
            text-decoration: none;
        }

        /* Header */

        .navbar {
            background: #fff;
            box-shadow: 0 3px 15px rgba(0, 0, 0, .08);
        }

        .navbar-brand {
            font-size: 28px;
            font-weight: 700;
            color: #1D4ED8 !important;
        }

        .nav-link {
            color: #374151;
            font-weight: 500;
            margin-left: 12px;
        }

        .nav-link:hover {
            color: #1D4ED8;
        }

        .scheme-btn {
            background: #F97316;
            border: none;
            color: white;
            border-radius: 12px;
            padding: 10px 20px;
            font-weight: 600;
        }

        .scheme-btn:hover {
            background: #ea580c;
        }

        /* Hero */

        .hero {
            background: linear-gradient(135deg, #1D4ED8, #2563EB);
            color: white;
            padding: 100px 0;
        }

        .hero h1 {
            font-size: 52px;
            font-weight: 700;
        }

        .hero p {
            color: #e5e7eb;
            font-size: 18px;
        }

        .search-box {
            background: white;
            padding: 12px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .15);
        }

        .search-box input {
            border: none;
            box-shadow: none !important;
        }

        .search-btn {
            background: #F97316;
            border: none;
            color: white;
            border-radius: 15px;
            font-weight: 600;
        }

        .search-btn:hover {
            background: #ea580c;
        }

        /* Tags */

        .tag {
            background: rgba(255, 255, 255, .15);
            padding: 10px 18px;
            border-radius: 30px;
            color: white;
            display: inline-block;
            margin: 6px;
            font-size: 14px;
        }

        /* cards */

        .card-custom {
            border: none;
            border-radius: 20px;
            background: white;
            box-shadow: 0 4px 18px rgba(0, 0, 0, .08);
            transition: .3s;
        }

        .card-custom:hover {
            transform: translateY(-5px);
        }

        .section-title {
            font-size: 40px;
            font-weight: 700;
        }

        .sub-title {
            color: #6b7280;
        }

        .finder {
            margin-top: -60px;
        }

        .find-btn {
            background: #1D4ED8;
            color: white;
            border: none;
            border-radius: 15px;
            font-weight: 600;
            padding: 14px;
        }

        .find-btn:hover {
            background: #1e40af;
        }
    </style>

</head>



<body>


</body>

    <!-- Header -->

    <nav class="navbar navbar-expand-lg sticky-top">

        <div class="container">

            <a href="#" class="navbar-brand">
                Yojana Sarkari Hai
            </a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">

                <span class="navbar-toggler-icon"></span>

            </button>


            <div class="collapse navbar-collapse" id="menu">

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">Schemes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">Tools</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">Documents</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">State Wise</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">News</a>
                    </li>

                    <li class="nav-item ms-lg-3">
                        <button class="scheme-btn">
                            Scheme Finder
                        </button>
                    </li>

                </ul>

            </div>

        </div>

    </nav>
<!-- ======================================
PREMIUM FOOTER
====================================== -->
   <!-- =====================================================
PART 6
Sticky Search + Back To Top + Mobile Bottom Navigation +
Dark Mode Toggle + Social Floating Buttons +
Scroll Progress Bar
====================================================== -->

    <style>
      /* ==========================================
SCROLL PROGRESS BAR
========================================== */

      #progressBar {
        position: fixed;
        top: 0;
        left: 0;
        width: 0%;
        height: 4px;
        background: #f97316;
        z-index: 99999;
      }

      /* ==========================================
STICKY SEARCH
========================================== */

      .sticky-search {
        position: fixed;
        top: 80px;
        right: 25px;
        width: 320px;
        background: white;
        padding: 15px;
        border-radius: 20px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        z-index: 1000;
      }

      .sticky-search input {
        border-radius: 15px;
      }

      /* ==========================================
BACK TO TOP
========================================== */

      .back-to-top {
        position: fixed;
        bottom: 100px;
        right: 25px;

        width: 55px;
        height: 55px;

        border: none;

        background: #1d4ed8;
        color: white;

        border-radius: 50%;
        font-size: 22px;

        z-index: 999;
      }

      /* ==========================================
WHATSAPP BUTTON
========================================== */

      .whatsapp-btn {
        position: fixed;

        bottom: 170px;
        right: 25px;

        width: 55px;
        height: 55px;

        border-radius: 50%;

        background: #16a34a;
        color: white;

        display: flex;
        justify-content: center;
        align-items: center;

        font-size: 25px;

        z-index: 999;
      }

      /* ==========================================
TELEGRAM BUTTON
========================================== */

      .telegram-btn {
        position: fixed;

        bottom: 240px;
        right: 25px;

        width: 55px;
        height: 55px;

        border-radius: 50%;

        background: #0ea5e9;
        color: white;

        display: flex;
        justify-content: center;
        align-items: center;

        font-size: 25px;

        z-index: 999;
      }

      /* ==========================================
DARK MODE BUTTON
========================================== */

      .dark-btn {
        position: fixed;

        left: 25px;
        bottom: 30px;

        width: 60px;
        height: 60px;

        border: none;

        border-radius: 50%;

        background: #111827;
        color: white;

        z-index: 999;
      }

      /* ==========================================
MOBILE BOTTOM NAVIGATION
========================================== */

      .mobile-nav {
        position: fixed;

        bottom: 0;
        left: 0;

        width: 100%;

        background: white;

        box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.1);

        z-index: 9999;
      }

      .mobile-nav a {
        color: #1d4ed8;
        text-decoration: none;
        font-size: 13px;
      }

      @media (min-width: 992px) {
        .mobile-nav {
          display: none;
        }
      }
    </style>

    <!-- Progress Bar -->

    <div id="progressBar"></div>

    <!-- Sticky Search -->

    <div class="sticky-search d-none d-lg-block">
      <h6 class="mb-3">Search Yojana</h6>

      <div class="input-group">
        <input class="form-control" placeholder="PM Kisan, PM Awas" />

        <button class="btn btn-warning">Search</button>
      </div>
    </div>

    <!-- Telegram -->

    <a href="#" class="telegram-btn">
      <i class="bi bi-telegram"></i>
    </a>

    <!-- Whatsapp -->

    <a href="#" class="whatsapp-btn">
      <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Back To Top -->

    <button
      class="back-to-top"
      onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
    >
      ↑
    </button>

    <!-- Dark Mode -->

    <button class="dark-btn" onclick="toggleDark()">🌙</button>

    <!-- Mobile Bottom Navigation -->

    <div class="mobile-nav py-2">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <a href="#">
              <i class="bi bi-house fs-5"></i>

              <br />

              Home
            </a>
          </div>

          <div class="col">
            <a href="#">
              <i class="bi bi-grid fs-5"></i>

              <br />

              Schemes
            </a>
          </div>

          <div class="col">
            <a href="#">
              <i class="bi bi-search fs-5"></i>

              <br />

              Search
            </a>
          </div>

          <div class="col">
            <a href="#">
              <i class="bi bi-tools fs-5"></i>

              <br />

              Tools
            </a>
          </div>

          <div class="col">
            <a href="#">
              <i class="bi bi-newspaper fs-5"></i>

              <br />

              News
            </a>
          </div>
        </div>
      </div>
    </div>

    <script>
      /* Scroll Progress Bar */

      window.onscroll = function () {
        let winScroll =
          document.body.scrollTop || document.documentElement.scrollTop;

        let height =
          document.documentElement.scrollHeight -
          document.documentElement.clientHeight;

        let scrolled = (winScroll / height) * 100;

        document.getElementById("progressBar").style.width = scrolled + "%";
      };

      /* Dark Mode */

      function toggleDark() {
        document.body.classList.toggle("bg-dark");

        document.body.classList.toggle("text-white");
      }
    </script>
<footer class="footer py-5">

    <div class="container">

        <div class="row">

            <div class="col-lg-4">

                <h3>

                    Yojana Sarkari Hai

                </h3>

                <p class="mt-4">

                    Find Government Schemes,
                    Benefits,
                    Eligibility,
                    Status Check
                    and Useful Tools.

                </p>

            </div>



            <div class="col-lg-2">

                <h5>

                    Quick Links

                </h5>

                <ul class="list-unstyled">

                    <li><a href="#">Home</a></li>
                    <li><a href="#">Schemes</a></li>
                    <li><a href="#">Tools</a></li>
                    <li><a href="#">News</a></li>

                </ul>

            </div>



            <div class="col-lg-3">

                <h5>

                    Important Pages

                </h5>

                <ul class="list-unstyled">

                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Disclaimer</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Sitemap</a></li>

                </ul>

            </div>



            <div class="col-lg-3">

                <h5>

                    Popular Schemes

                </h5>

                <ul class="list-unstyled">

                    <li><a href="#">PM Kisan</a></li>
                    <li><a href="#">PM Awas</a></li>
                    <li><a href="#">Ayushman Bharat</a></li>
                    <li><a href="#">E Shram Card</a></li>

                </ul>

            </div>

        </div>

        <hr>

        <div class="text-center">

            © 2026 Yojana Sarkari Hai.
            All Rights Reserved.

        </div>

    </div>

</footer>




<!-- Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- AOS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

<script>
    AOS.init();

    new Swiper(".storySwiper", {

        slidesPerView: 2,
        spaceBetween: 20,

        breakpoints: {

            768: {
                slidesPerView: 4
            },

            1200: {
                slidesPerView: 6
            }

        }

    });


    window.onload = function() {

        document.getElementById("loader").style.display = "none";

    }
</script>
