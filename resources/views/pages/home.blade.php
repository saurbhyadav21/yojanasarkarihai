@extends('layouts.yojana')

<!-- Hero Section -->
@section('content')
<section class="hero">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-9">
                <h1>Find Government Schemes For You</h1>

                <p class="mt-4">
                    Search Sarkari Yojana, Eligibility, Benefits, Application Process
                    and Useful Tools.
                </p>

                <div class="search-box mt-5">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-lg"
                            placeholder="Search PM Kisan, PM Awas, Ayushman Bharat" />

                        <button class="btn search-btn px-4">
                            <i class="bi bi-search"></i>
                            Search
                        </button>
                    </div>
                </div>

                <div class="mt-4">
                    <span class="tag"> PM Kisan </span>

                    <span class="tag"> PM Awas </span>

                    <span class="tag"> Ayushman Bharat </span>

                    <span class="tag"> E Shram Card </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Yojana For You -->
<section class="finder pb-5">
    <div class="container">
        <div class="card card-custom p-5">
            <div class="text-center">
                <h2 class="section-title">Yojana For You</h2>

                <p class="sub-title">Find Schemes According To Your Profile</p>
            </div>

            <div class="row mt-4 g-4">
                <div class="col-md-4">
                    <label class="mb-2"> Gender </label>

                    <select class="form-select form-select-lg">
                        <option>Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="mb-2"> State </label>

                    <select class="form-select form-select-lg">
                        <option>Select State</option>
                        <option>UP</option>
                        <option>Delhi</option>
                        <option>Bihar</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="mb-2"> Category </label>

                    <select class="form-select form-select-lg">
                        <option>Select Category</option>
                        <option>Farmer</option>
                        <option>Women</option>
                        <option>Student</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="mb-2"> Occupation </label>

                    <select class="form-select form-select-lg">
                        <option>Select Occupation</option>
                        <option>Farmer</option>
                        <option>Employee</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="mb-2"> Annual Income </label>

                    <input type="text" class="form-control form-control-lg" placeholder="Enter Income" />
                </div>

                <div class="col-md-4">
                    <label class="mb-2"> Age </label>

                    <input type="number" class="form-control form-control-lg" placeholder="Age" />
                </div>
            </div>

            <div class="text-center mt-5">
                <button class="find-btn px-5">
                    <i class="bi bi-search"></i>

                    Find Schemes
                </button>
            </div>
        </div>
    </div>
</section>

<!-- =======================================
POPULAR CATEGORIES
======================================= -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Explore Schemes By Category</h2>

            <p class="sub-title">
                Find Government Schemes According To Your Needs
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="card card-custom p-4 text-center h-100">
                    <div class="display-5 mb-3">👨‍🌾</div>

                    <h5>Farmer Schemes</h5>

                    <p class="text-muted">PM Kisan, KCC, Crop Insurance</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-custom p-4 text-center h-100">
                    <div class="display-5 mb-3">👩</div>

                    <h5>Women Schemes</h5>

                    <p class="text-muted">Sukanya, Ujjwala, Matru Vandana</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-custom p-4 text-center h-100">
                    <div class="display-5 mb-3">🎓</div>

                    <h5>Scholarship</h5>

                    <p class="text-muted">NSP, Pre & Post Matric</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-custom p-4 text-center h-100">
                    <div class="display-5 mb-3">👴</div>

                    <h5>Pension Schemes</h5>

                    <p class="text-muted">Old Age, Widow Pension</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =======================================
STATE WISE SCHEMES
======================================= -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">State Wise Schemes</h2>

            <p class="sub-title">Select Your State</p>
        </div>

        <div class="row g-3">
            <div class="col-lg-2 col-md-3 col-6">
                <button class="btn btn-outline-primary w-100 rounded-pill py-3">
                    Uttar Pradesh
                </button>
            </div>

            <div class="col-lg-2 col-md-3 col-6">
                <button class="btn btn-outline-primary w-100 rounded-pill py-3">
                    Delhi
                </button>
            </div>

            <div class="col-lg-2 col-md-3 col-6">
                <button class="btn btn-outline-primary w-100 rounded-pill py-3">
                    Bihar
                </button>
            </div>

            <div class="col-lg-2 col-md-3 col-6">
                <button class="btn btn-outline-primary w-100 rounded-pill py-3">
                    Rajasthan
                </button>
            </div>

            <div class="col-lg-2 col-md-3 col-6">
                <button class="btn btn-outline-primary w-100 rounded-pill py-3">
                    Haryana
                </button>
            </div>

            <div class="col-lg-2 col-md-3 col-6">
                <button class="btn btn-outline-primary w-100 rounded-pill py-3">
                    Punjab
                </button>
            </div>
        </div>
    </div>
</section>

<!-- =======================================
CENTRAL GOVERNMENT SCHEMES
======================================= -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Popular Central Government Schemes</h2>

            <p class="sub-title">Most Searched Schemes In India</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card card-custom h-100 p-4">
                    <span class="badge bg-success mb-3"> Popular </span>

                    <h4>PM Kisan Yojana</h4>

                    <p class="text-muted">Financial assistance for farmers.</p>

                    <a href="#" class="btn btn-primary rounded-pill"> Read More </a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card card-custom h-100 p-4">
                    <span class="badge bg-warning mb-3"> Trending </span>

                    <h4>PM Awas Yojana</h4>

                    <p class="text-muted">Housing assistance scheme.</p>

                    <a href="#" class="btn btn-primary rounded-pill"> Read More </a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card card-custom h-100 p-4">
                    <span class="badge bg-danger mb-3"> Featured </span>

                    <h4>Ayushman Bharat</h4>

                    <p class="text-muted">Health insurance benefits.</p>

                    <a href="#" class="btn btn-primary rounded-pill"> Read More </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =======================================
TOOLS & CALCULATORS
======================================= -->
<section class="py-5" style="background: #ecfdf5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Eligibility Tools & Calculators</h2>

            <p class="sub-title">Check Eligibility, Benefits and Calculations</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="card card-custom p-4 text-center">
                    <div class="display-6 text-success mb-3">✔</div>

                    <h5>PM Awas Eligibility Checker</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-custom p-4 text-center">
                    <div class="display-6 text-success mb-3">✔</div>

                    <h5>PM Kisan Eligibility Checker</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-custom p-4 text-center">
                    <div class="display-6 text-success mb-3">✔</div>

                    <h5>Subsidy Calculator</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-custom p-4 text-center">
                    <div class="display-6 text-success mb-3">✔</div>

                    <h5>Age Calculator</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =======================================
STATUS CHECK SECTION
======================================= -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Status Check Services</h2>

            <p class="sub-title">Check Your Application Status Easily</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card card-custom p-4">
                    <h4>PM Kisan Status</h4>

                    <p class="text-muted">
                        Check installment and beneficiary status.
                    </p>

                    <a href="#" class="btn btn-outline-primary rounded-pill">
                        Check Status
                    </a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card card-custom p-4">
                    <h4>PM Awas Status</h4>

                    <p class="text-muted">Track application status online.</p>

                    <a href="#" class="btn btn-outline-primary rounded-pill">
                        Check Status
                    </a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card card-custom p-4">
                    <h4>Ayushman Card Status</h4>

                    <p class="text-muted">Verify card and beneficiary details.</p>

                    <a href="#" class="btn btn-outline-primary rounded-pill">
                        Check Status
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trending Searches -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Trending Searches</h2>

            <p class="sub-title">Most Searched Government Schemes</p>
        </div>

        <div class="text-center">
            <a href="#" class="btn btn-outline-primary rounded-pill m-2 px-4 py-2">
                PM Kisan Yojana
            </a>

            <a href="#" class="btn btn-outline-primary rounded-pill m-2 px-4 py-2">
                PM Awas Yojana
            </a>

            <a href="#" class="btn btn-outline-primary rounded-pill m-2 px-4 py-2">
                Ayushman Card
            </a>

            <a href="#" class="btn btn-outline-primary rounded-pill m-2 px-4 py-2">
                E Shram Card
            </a>

            <a href="#" class="btn btn-outline-primary rounded-pill m-2 px-4 py-2">
                Sukanya Yojana
            </a>

            <a href="#" class="btn btn-outline-primary rounded-pill m-2 px-4 py-2">
                Kisan Credit Card
            </a>

            <a href="#" class="btn btn-outline-primary rounded-pill m-2 px-4 py-2">
                Widow Pension
            </a>

            <a href="#" class="btn btn-outline-primary rounded-pill m-2 px-4 py-2">
                Old Age Pension
            </a>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-3 col-6">
                <h1 class="fw-bold">500+</h1>

                <p>Government Schemes</p>
            </div>

            <div class="col-lg-3 col-6">
                <h1 class="fw-bold">50+</h1>

                <p>Eligibility Tools</p>
            </div>

            <div class="col-lg-3 col-6">
                <h1 class="fw-bold">28+</h1>

                <p>States Covered</p>
            </div>

            <div class="col-lg-3 col-6">
                <h1 class="fw-bold">24x7</h1>

                <p>Information Access</p>
            </div>
        </div>
    </div>
</section>

<!-- Documents Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Important Documents</h2>

            <p class="sub-title">Find Information About Essential Documents</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="card card-custom h-100 p-4 text-center">
                    <div class="display-5 text-primary mb-3">📄</div>

                    <h5>Income Certificate</h5>

                    <p class="text-muted">Eligibility, Documents & Apply Process</p>

                    <a href="#" class="btn btn-primary rounded-pill"> Read More </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-custom h-100 p-4 text-center">
                    <div class="display-5 text-success mb-3">🪪</div>

                    <h5>Domicile Certificate</h5>

                    <p class="text-muted">Online Application Process</p>

                    <a href="#" class="btn btn-primary rounded-pill"> Read More </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-custom h-100 p-4 text-center">
                    <div class="display-5 text-danger mb-3">📑</div>

                    <h5>Caste Certificate</h5>

                    <p class="text-muted">Required Documents & Benefits</p>

                    <a href="#" class="btn btn-primary rounded-pill"> Read More </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-custom h-100 p-4 text-center">
                    <div class="display-5 text-warning mb-3">👶</div>

                    <h5>Birth Certificate</h5>

                    <p class="text-muted">Registration & Download Process</p>

                    <a href="#" class="btn btn-primary rounded-pill"> Read More </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular Tools -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Popular Tools</h2>

            <p class="sub-title">Useful Tools For Citizens</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="card card-custom p-4 text-center">
                    <h5>PM Awas Eligibility Checker</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-custom p-4 text-center">
                    <h5>PM Kisan Calculator</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-custom p-4 text-center">
                    <h5>Age Calculator</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-custom p-4 text-center">
                    <h5>EMI Calculator</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===============================
WEB STORIES
================================ -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Web Stories</h2>

            <p class="sub-title">Quick Government Scheme Updates</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-2 col-md-4 col-6">
                <div class="card card-custom overflow-hidden">
                    <img src="https://via.placeholder.com/300x500" class="img-fluid" />

                    <div class="p-3 text-center">
                        <small> PM Kisan Update </small>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="card card-custom overflow-hidden">
                    <img src="https://via.placeholder.com/300x500" class="img-fluid" />

                    <div class="p-3 text-center">
                        <small> PM Awas List </small>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="card card-custom overflow-hidden">
                    <img src="https://via.placeholder.com/300x500" class="img-fluid" />

                    <div class="p-3 text-center">
                        <small> Ayushman Card </small>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="card card-custom overflow-hidden">
                    <img src="https://via.placeholder.com/300x500" class="img-fluid" />

                    <div class="p-3 text-center">
                        <small> E Shram Card </small>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="card card-custom overflow-hidden">
                    <img src="https://via.placeholder.com/300x500" class="img-fluid" />

                    <div class="p-3 text-center">
                        <small> Pension Scheme </small>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="card card-custom overflow-hidden">
                    <img src="https://via.placeholder.com/300x500" class="img-fluid" />

                    <div class="p-3 text-center">
                        <small> Scholarship </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===============================
TRUST BADGES
================================ -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-3 col-6">
                <h1 class="text-primary">✔</h1>

                <h5>Updated Information</h5>
            </div>

            <div class="col-lg-3 col-6">
                <h1 class="text-success">✔</h1>

                <h5>Useful Tools</h5>
            </div>

            <div class="col-lg-3 col-6">
                <h1 class="text-warning">✔</h1>

                <h5>State Wise Schemes</h5>
            </div>

            <div class="col-lg-3 col-6">
                <h1 class="text-danger">✔</h1>

                <h5>Step By Step Guides</h5>
            </div>
        </div>
    </div>
</section>

<!-- ===============================
OFFICIAL GOVERNMENT LINKS
================================ -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Useful Government Portals</h2>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="card card-custom p-4 text-center">
                    <h5>PM Kisan Portal</h5>

                    <a href="#" class="btn btn-outline-primary rounded-pill mt-3">
                        Visit
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-custom p-4 text-center">
                    <h5>PMAY Portal</h5>

                    <a href="#" class="btn btn-outline-primary rounded-pill mt-3">
                        Visit
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-custom p-4 text-center">
                    <h5>MyScheme Portal</h5>

                    <a href="#" class="btn btn-outline-primary rounded-pill mt-3">
                        Visit
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-custom p-4 text-center">
                    <h5>DigiLocker</h5>

                    <a href="#" class="btn btn-outline-primary rounded-pill mt-3">
                        Visit
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===============================
NEWSLETTER SECTION
================================ -->
<section class="py-5 text-white" style="background: linear-gradient(135deg, #1d4ed8, #2563eb)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2>Get Latest Government Scheme Updates</h2>

                <p class="mt-3">Subscribe For New Yojana Updates & Guides</p>

                <div class="input-group mt-4">
                    <input type="email" class="form-control form-control-lg" placeholder="Enter Your Email" />

                    <button class="btn btn-warning px-4">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</section>


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

    <!-- ==========================================================
PART 7
Premium Production Upgrade
Glassmorphism + Hero Shapes + Mega Menu +
Animated Counters + Toast + Skeleton + Hover Effects
========================================================== -->

    <!-- ==========================================================
EXTRA CSS
========================================================== -->

    <style>
      /* Glassmorphism Card */

      .glass-card {
        background: rgba(255, 255, 255, 0.15);

        backdrop-filter: blur(20px);

        border: 1px solid rgba(255, 255, 255, 0.2);

        border-radius: 30px;

        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
      }

      /* Hover Effect */

      .card-custom {
        transition: 0.4s;
      }

      .card-custom:hover {
        transform: translateY(-10px);

        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
      }

      /* Hero Shapes */

      .hero {
        position: relative;

        overflow: hidden;
      }

      .hero:before {
        content: "";

        width: 300px;
        height: 300px;

        background: rgba(255, 255, 255, 0.1);

        position: absolute;

        top: -100px;
        right: -100px;

        border-radius: 50%;
      }

      .hero:after {
        content: "";

        width: 200px;
        height: 200px;

        background: rgba(255, 255, 255, 0.1);

        position: absolute;

        left: -80px;
        bottom: -80px;

        border-radius: 50%;
      }

      /* Counter */

      .counter-box {
        background: white;

        padding: 30px;

        border-radius: 25px;

        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      }

      /* Skeleton Loading */

      .skeleton {
        height: 200px;

        border-radius: 20px;

        background: linear-gradient(90deg, #eee 25%, #f5f5f5 50%, #eee 75%);

        background-size: 200% 100%;

        animation: skeleton 1.5s infinite;
      }

      @keyframes skeleton {
        0% {
          background-position: 200% 0;
        }

        100% {
          background-position: -200% 0;
        }
      }

      /* Mega Menu */

      .mega-menu {
        width: 700px;

        padding: 30px;

        border: none;

        border-radius: 25px;

        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
      }

      /* Footer Hover */

      .footer-link {
        transition: 0.3s;
      }

      .footer-link:hover {
        padding-left: 10px;

        color: #f97316 !important;
      }

      /* Gradient Button */

      .gradient-btn {
        background: linear-gradient(135deg, #1d4ed8, #2563eb);

        border: none;

        color: white;

        border-radius: 15px;

        padding: 14px 30px;

        font-weight: 600;
      }

      .gradient-btn:hover {
        opacity: 0.9;
      }
    </style>

    <!-- ==========================================================
ANIMATED COUNTERS
========================================================== -->

    <section class="py-5">
      <div class="container">
        <div class="row g-4 text-center">
          <div class="col-lg-3">
            <div class="counter-box">
              <h1 id="counter1">500+</h1>

              <p>Government Schemes</p>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="counter-box">
              <h1 id="counter2">50+</h1>

              <p>Useful Tools</p>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="counter-box">
              <h1 id="counter3">28+</h1>

              <p>States Covered</p>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="counter-box">
              <h1 id="counter4">24x7</h1>

              <p>Information Access</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ==========================================================
SKELETON LOADING CARDS
========================================================== -->

    <section class="py-5 bg-light">
      <div class="container">
        <h2 class="section-title text-center mb-5">Loading Placeholder</h2>

        <div class="row g-4">
          <div class="col-lg-4">
            <div class="skeleton"></div>
          </div>

          <div class="col-lg-4">
            <div class="skeleton"></div>
          </div>

          <div class="col-lg-4">
            <div class="skeleton"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- ==========================================================
TOAST NOTIFICATION
========================================================== -->

    <div class="position-fixed top-0 end-0 p-4" style="z-index: 99999">
      <div class="toast show">
        <div class="toast-header">
          <strong> Latest Update </strong>
        </div>

        <div class="toast-body">PM Kisan New Installment Released.</div>
      </div>
    </div>

    <!-- ==========================================================
CTA SECTION
========================================================== -->

    <section class="py-5">
      <div class="container">
        <div class="glass-card p-5 text-center">
          <h2 class="fw-bold">Find Schemes Made For You</h2>

          <p class="mt-3">
            Search Government Schemes, Eligibility, Benefits & Status Check.
          </p>

          <button class="gradient-btn">Search Schemes</button>
        </div>
      </div>
    </section>

    <script>
      /* Counter Animation */

      function animateValue(id, start, end, duration) {
        let range = end - start;

        let current = start;

        let increment = end > start ? 1 : -1;

        let stepTime = Math.abs(Math.floor(duration / range));

        let obj = document.getElementById(id);

        let timer = setInterval(function () {
          current += increment;

          obj.innerHTML = current + "+";

          if (current == end) {
            clearInterval(timer);
          }
        }, stepTime);
      }

      animateValue("counter1", 0, 500, 1000);

      animateValue("counter2", 0, 50, 1000);

      animateValue("counter3", 0, 28, 1000);
    </script>

    <!-- ==========================================================
PART 8
FINAL PRODUCTION UPGRADE
Swiper + AOS + Page Loader + Fancy Scrollbar +
Search Modal + Premium Footer + Floating Contact
========================================================== -->

    <!-- Swiper CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <!-- AOS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"
    />

    <style>
      /* ======================================
PAGE LOADER
====================================== */

      #loader {
        position: fixed;
        top: 0;
        left: 0;

        width: 100%;
        height: 100%;

        background: white;

        display: flex;
        justify-content: center;
        align-items: center;

        z-index: 999999;
      }

      .loader-circle {
        width: 70px;
        height: 70px;

        border: 8px solid #ddd;
        border-top: 8px solid #1d4ed8;

        border-radius: 50%;

        animation: spin 1s linear infinite;
      }

      @keyframes spin {
        100% {
          transform: rotate(360deg);
        }
      }

      /* ======================================
FANCY SCROLLBAR
====================================== */

      ::-webkit-scrollbar {
        width: 10px;
      }

      ::-webkit-scrollbar-thumb {
        background: #1d4ed8;
        border-radius: 20px;
      }

      ::-webkit-scrollbar-track {
        background: #f1f1f1;
      }

      /* ======================================
HEADER BLUR
====================================== */

      .navbar {
        backdrop-filter: blur(20px);
      }

      /* ======================================
WHATSAPP JOIN BOX
====================================== */

      .join-box {
        background: linear-gradient(135deg, #16a34a, #22c55e);

        color: white;

        padding: 40px;

        border-radius: 30px;

        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
      }

      /* ======================================
PREMIUM FOOTER
====================================== */

      .footer {
        background: #111827;

        color: white;
      }

      .footer a {
        color: #d1d5db;

        transition: 0.3s;
      }

      .footer a:hover {
        color: #f97316;

        padding-left: 5px;
      }
    </style>

    <!-- ======================================
PAGE LOADER
====================================== -->

    <div id="loader">
      <div class="loader-circle"></div>
    </div>

    <!-- ======================================
WEB STORIES SWIPER
====================================== -->

    <section class="py-5">
      <div class="container">
        <h2 class="section-title text-center mb-5">Latest Web Stories</h2>

        <div class="swiper storySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="card card-custom">
                <img
                  src="https://via.placeholder.com/300x500"
                  class="img-fluid"
                />

                <div class="p-3 text-center">PM Kisan Update</div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card card-custom">
                <img
                  src="https://via.placeholder.com/300x500"
                  class="img-fluid"
                />

                <div class="p-3 text-center">PM Awas Yojana</div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card card-custom">
                <img
                  src="https://via.placeholder.com/300x500"
                  class="img-fluid"
                />

                <div class="p-3 text-center">Ayushman Card</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======================================
WHATSAPP CHANNEL CTA
====================================== -->

    <section class="py-5">
      <div class="container">
        <div class="join-box text-center">
          <h2>Join WhatsApp Channel</h2>

          <p class="mt-3">Get Latest Government Scheme Updates</p>

          <button class="btn btn-light rounded-pill px-5">Join Now</button>
        </div>
      </div>
    </section>

    <!-- ======================================
SEARCH MODAL
====================================== -->

    <div class="modal fade" id="searchModal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content rounded-5 p-4">
          <h3>Search Scheme</h3>

          <input
            class="form-control form-control-lg mt-4"
            placeholder="PM Kisan, PM Awas..."
          />
        </div>
      </div>
    </div>
@endsection