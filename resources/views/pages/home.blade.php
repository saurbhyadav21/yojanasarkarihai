<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yojana Sarkari Hai - Sarkari Yojana Information & Tools</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <style>

        body{
            font-family: 'Poppins', sans-serif;
            background: #F8FAFC;
            color: #111827;
        }

        a{
            text-decoration:none;
        }

        /* Header */

        .navbar{
            background:#fff;
            box-shadow:0 3px 15px rgba(0,0,0,.08);
        }

        .navbar-brand{
            font-size:28px;
            font-weight:700;
            color:#1D4ED8 !important;
        }

        .nav-link{
            color:#374151;
            font-weight:500;
            margin-left:12px;
        }

        .nav-link:hover{
            color:#1D4ED8;
        }

        .scheme-btn{
            background:#F97316;
            border:none;
            color:white;
            border-radius:12px;
            padding:10px 20px;
            font-weight:600;
        }

        .scheme-btn:hover{
            background:#ea580c;
        }

        /* Hero */

        .hero{
            background:linear-gradient(135deg,#1D4ED8,#2563EB);
            color:white;
            padding:100px 0;
        }

        .hero h1{
            font-size:52px;
            font-weight:700;
        }

        .hero p{
            color:#e5e7eb;
            font-size:18px;
        }

        .search-box{
            background:white;
            padding:12px;
            border-radius:20px;
            box-shadow:0 10px 30px rgba(0,0,0,.15);
        }

        .search-box input{
            border:none;
            box-shadow:none !important;
        }

        .search-btn{
            background:#F97316;
            border:none;
            color:white;
            border-radius:15px;
            font-weight:600;
        }

        .search-btn:hover{
            background:#ea580c;
        }

        /* Tags */

        .tag{
            background:rgba(255,255,255,.15);
            padding:10px 18px;
            border-radius:30px;
            color:white;
            display:inline-block;
            margin:6px;
            font-size:14px;
        }

        /* cards */

        .card-custom{
            border:none;
            border-radius:20px;
            background:white;
            box-shadow:0 4px 18px rgba(0,0,0,.08);
            transition:.3s;
        }

        .card-custom:hover{
            transform:translateY(-5px);
        }

        .section-title{
            font-size:40px;
            font-weight:700;
        }

        .sub-title{
            color:#6b7280;
        }

        .finder{
            margin-top:-60px;
        }

        .find-btn{
            background:#1D4ED8;
            color:white;
            border:none;
            border-radius:15px;
            font-weight:600;
            padding:14px;
        }

        .find-btn:hover{
            background:#1e40af;
        }

    </style>

</head>
<body>


<!-- Header -->

<nav class="navbar navbar-expand-lg sticky-top">

    <div class="container">

        <a href="#" class="navbar-brand">
            Yojana Sarkari Hai
        </a>

        <button class="navbar-toggler"
                data-bs-toggle="collapse"
                data-bs-target="#menu">

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


<!-- Hero Section -->

<section class="hero">

    <div class="container">

        <div class="row justify-content-center text-center">

            <div class="col-lg-9">

                <h1>
                    Find Government Schemes For You
                </h1>

                <p class="mt-4">

                    Search Sarkari Yojana, Eligibility,
                    Benefits, Application Process and
                    Useful Tools.

                </p>


                <div class="search-box mt-5">

                    <div class="input-group">

                        <input type="text"
                               class="form-control form-control-lg"
                               placeholder="Search PM Kisan, PM Awas, Ayushman Bharat">

                        <button class="btn search-btn px-4">

                            <i class="bi bi-search"></i>
                            Search

                        </button>

                    </div>

                </div>


                <div class="mt-4">

                    <span class="tag">
                        PM Kisan
                    </span>

                    <span class="tag">
                        PM Awas
                    </span>

                    <span class="tag">
                        Ayushman Bharat
                    </span>

                    <span class="tag">
                        E Shram Card
                    </span>

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

                <h2 class="section-title">
                    Yojana For You
                </h2>

                <p class="sub-title">
                    Find Schemes According To Your Profile
                </p>

            </div>


            <div class="row mt-4 g-4">

                <div class="col-md-4">

                    <label class="mb-2">
                        Gender
                    </label>

                    <select class="form-select form-select-lg">

                        <option>Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>

                    </select>

                </div>


                <div class="col-md-4">

                    <label class="mb-2">
                        State
                    </label>

                    <select class="form-select form-select-lg">

                        <option>Select State</option>
                        <option>UP</option>
                        <option>Delhi</option>
                        <option>Bihar</option>

                    </select>

                </div>


                <div class="col-md-4">

                    <label class="mb-2">
                        Category
                    </label>

                    <select class="form-select form-select-lg">

                        <option>Select Category</option>
                        <option>Farmer</option>
                        <option>Women</option>
                        <option>Student</option>

                    </select>

                </div>


                <div class="col-md-4">

                    <label class="mb-2">
                        Occupation
                    </label>

                    <select class="form-select form-select-lg">

                        <option>Select Occupation</option>
                        <option>Farmer</option>
                        <option>Employee</option>

                    </select>

                </div>


                <div class="col-md-4">

                    <label class="mb-2">
                        Annual Income
                    </label>

                    <input type="text"
                           class="form-control form-control-lg"
                           placeholder="Enter Income">

                </div>


                <div class="col-md-4">

                    <label class="mb-2">
                        Age
                    </label>

                    <input type="number"
                           class="form-control form-control-lg"
                           placeholder="Age">

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

            <h2 class="section-title">
                Explore Schemes By Category
            </h2>

            <p class="sub-title">
                Find Government Schemes According To Your Needs
            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">

                <div class="card card-custom p-4 text-center h-100">

                    <div class="display-5 mb-3">
                        👨‍🌾
                    </div>

                    <h5>Farmer Schemes</h5>

                    <p class="text-muted">
                        PM Kisan, KCC, Crop Insurance
                    </p>

                </div>

            </div>


            <div class="col-lg-3 col-md-6">

                <div class="card card-custom p-4 text-center h-100">

                    <div class="display-5 mb-3">
                        👩
                    </div>

                    <h5>Women Schemes</h5>

                    <p class="text-muted">
                        Sukanya, Ujjwala, Matru Vandana
                    </p>

                </div>

            </div>


            <div class="col-lg-3 col-md-6">

                <div class="card card-custom p-4 text-center h-100">

                    <div class="display-5 mb-3">
                        🎓
                    </div>

                    <h5>Scholarship</h5>

                    <p class="text-muted">
                        NSP, Pre & Post Matric
                    </p>

                </div>

            </div>


            <div class="col-lg-3 col-md-6">

                <div class="card card-custom p-4 text-center h-100">

                    <div class="display-5 mb-3">
                        👴
                    </div>

                    <h5>Pension Schemes</h5>

                    <p class="text-muted">
                        Old Age, Widow Pension
                    </p>

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

            <h2 class="section-title">
                State Wise Schemes
            </h2>

            <p class="sub-title">
                Select Your State
            </p>

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

            <h2 class="section-title">
                Popular Central Government Schemes
            </h2>

            <p class="sub-title">
                Most Searched Schemes In India
            </p>

        </div>


        <div class="row g-4">

            <div class="col-lg-4">

                <div class="card card-custom h-100 p-4">

                    <span class="badge bg-success mb-3">
                        Popular
                    </span>

                    <h4>
                        PM Kisan Yojana
                    </h4>

                    <p class="text-muted">
                        Financial assistance for farmers.
                    </p>

                    <a href="#" class="btn btn-primary rounded-pill">
                        Read More
                    </a>

                </div>

            </div>


            <div class="col-lg-4">

                <div class="card card-custom h-100 p-4">

                    <span class="badge bg-warning mb-3">
                        Trending
                    </span>

                    <h4>
                        PM Awas Yojana
                    </h4>

                    <p class="text-muted">
                        Housing assistance scheme.
                    </p>

                    <a href="#" class="btn btn-primary rounded-pill">
                        Read More
                    </a>

                </div>

            </div>


            <div class="col-lg-4">

                <div class="card card-custom h-100 p-4">

                    <span class="badge bg-danger mb-3">
                        Featured
                    </span>

                    <h4>
                        Ayushman Bharat
                    </h4>

                    <p class="text-muted">
                        Health insurance benefits.
                    </p>

                    <a href="#" class="btn btn-primary rounded-pill">
                        Read More
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =======================================
TOOLS & CALCULATORS
======================================= -->

<section class="py-5"
style="background:#ecfdf5;">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="section-title">
                Eligibility Tools & Calculators
            </h2>

            <p class="sub-title">
                Check Eligibility, Benefits and Calculations
            </p>

        </div>


        <div class="row g-4">

            <div class="col-lg-3 col-md-6">

                <div class="card card-custom p-4 text-center">

                    <div class="display-6 text-success mb-3">
                        ✔
                    </div>

                    <h5>
                        PM Awas Eligibility Checker
                    </h5>

                </div>

            </div>


            <div class="col-lg-3 col-md-6">

                <div class="card card-custom p-4 text-center">

                    <div class="display-6 text-success mb-3">
                        ✔
                    </div>

                    <h5>
                        PM Kisan Eligibility Checker
                    </h5>

                </div>

            </div>


            <div class="col-lg-3 col-md-6">

                <div class="card card-custom p-4 text-center">

                    <div class="display-6 text-success mb-3">
                        ✔
                    </div>

                    <h5>
                        Subsidy Calculator
                    </h5>

                </div>

            </div>


            <div class="col-lg-3 col-md-6">

                <div class="card card-custom p-4 text-center">

                    <div class="display-6 text-success mb-3">
                        ✔
                    </div>

                    <h5>
                        Age Calculator
                    </h5>

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

            <h2 class="section-title">
                Status Check Services
            </h2>

            <p class="sub-title">
                Check Your Application Status Easily
            </p>

        </div>


        <div class="row g-4">

            <div class="col-lg-4">

                <div class="card card-custom p-4">

                    <h4>
                        PM Kisan Status
                    </h4>

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

                    <h4>
                        PM Awas Status
                    </h4>

                    <p class="text-muted">
                        Track application status online.
                    </p>

                    <a href="#" class="btn btn-outline-primary rounded-pill">
                        Check Status
                    </a>

                </div>

            </div>


            <div class="col-lg-4">

                <div class="card card-custom p-4">

                    <h4>
                        Ayushman Card Status
                    </h4>

                    <p class="text-muted">
                        Verify card and beneficiary details.
                    </p>

                    <a href="#" class="btn btn-outline-primary rounded-pill">
                        Check Status
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- =========================================
PART 4
TRENDING SEARCHES + STATS + DOCUMENTS SECTION
========================================= -->


<!-- Trending Searches -->

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="section-title">
                Trending Searches
            </h2>

            <p class="sub-title">
                Most Searched Government Schemes
            </p>

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

                <h1 class="fw-bold">
                    500+
                </h1>

                <p>
                    Government Schemes
                </p>

            </div>


            <div class="col-lg-3 col-6">

                <h1 class="fw-bold">
                    50+
                </h1>

                <p>
                    Eligibility Tools
                </p>

            </div>


            <div class="col-lg-3 col-6">

                <h1 class="fw-bold">
                    28+
                </h1>

                <p>
                    States Covered
                </p>

            </div>


            <div class="col-lg-3 col-6">

                <h1 class="fw-bold">
                    24x7
                </h1>

                <p>
                    Information Access
                </p>

            </div>

        </div>

    </div>

</section>



<!-- Documents Section -->

<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="section-title">

                Important Documents

            </h2>

            <p class="sub-title">

                Find Information About Essential Documents

            </p>

        </div>


        <div class="row g-4">


            <div class="col-lg-3 col-md-6">

                <div class="card card-custom h-100 p-4 text-center">

                    <div class="display-5 text-primary mb-3">

                        📄

                    </div>

                    <h5>

                        Income Certificate

                    </h5>

                    <p class="text-muted">

                        Eligibility, Documents & Apply Process

                    </p>

                    <a href="#" class="btn btn-primary rounded-pill">

                        Read More

                    </a>

                </div>

            </div>



            <div class="col-lg-3 col-md-6">

                <div class="card card-custom h-100 p-4 text-center">

                    <div class="display-5 text-success mb-3">

                        🪪

                    </div>

                    <h5>

                        Domicile Certificate

                    </h5>

                    <p class="text-muted">

                        Online Application Process

                    </p>

                    <a href="#" class="btn btn-primary rounded-pill">

                        Read More

                    </a>

                </div>

            </div>



            <div class="col-lg-3 col-md-6">

                <div class="card card-custom h-100 p-4 text-center">

                    <div class="display-5 text-danger mb-3">

                        📑

                    </div>

                    <h5>

                        Caste Certificate

                    </h5>

                    <p class="text-muted">

                        Required Documents & Benefits

                    </p>

                    <a href="#" class="btn btn-primary rounded-pill">

                        Read More

                    </a>

                </div>

            </div>



            <div class="col-lg-3 col-md-6">

                <div class="card card-custom h-100 p-4 text-center">

                    <div class="display-5 text-warning mb-3">

                        👶

                    </div>

                    <h5>

                        Birth Certificate

                    </h5>

                    <p class="text-muted">

                        Registration & Download Process

                    </p>

                    <a href="#" class="btn btn-primary rounded-pill">

                        Read More

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- Popular Tools -->

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="section-title">

                Popular Tools

            </h2>

            <p class="sub-title">

                Useful Tools For Citizens

            </p>

        </div>


        <div class="row g-4">


            <div class="col-lg-3 col-md-6">

                <div class="card card-custom p-4 text-center">

                    <h5>

                        PM Awas Eligibility Checker

                    </h5>

                </div>

            </div>



            <div class="col-lg-3 col-md-6">

                <div class="card card-custom p-4 text-center">

                    <h5>

                        PM Kisan Calculator

                    </h5>

                </div>

            </div>



            <div class="col-lg-3 col-md-6">

                <div class="card card-custom p-4 text-center">

                    <h5>

                        Age Calculator

                    </h5>

                </div>

            </div>



            <div class="col-lg-3 col-md-6">

                <div class="card card-custom p-4 text-center">

                    <h5>

                        EMI Calculator

                    </h5>

                </div>

            </div>

        </div>

    </div>

</section>