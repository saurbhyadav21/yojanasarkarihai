
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yojana Sarkari Hai</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body{
            background:#f8fafc;
        }

        .navbar{
            background:#fff;
            box-shadow:0 2px 10px rgba(0,0,0,.08);
        }

        .hero{
            background:linear-gradient(135deg,#1d4ed8,#2563eb);
            color:#fff;
            padding:90px 0;
        }

        .section-title{
            font-size:32px;
            font-weight:700;
            margin-bottom:30px;
        }

        .card-custom{
            border:none;
            border-radius:20px;
            transition:.3s;
            box-shadow:0 3px 15px rgba(0,0,0,.08);
        }

        .card-custom:hover{
            transform:translateY(-5px);
        }

        .footer{
            background:#0f172a;
            color:white;
        }

        .footer a{
            color:#cbd5e1;
            text-decoration:none;
        }

        .footer a:hover{
            color:white;
        }
    </style>
</head>
<body>

<!-- Header -->

<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">

        <a class="navbar-brand fw-bold text-primary" href="#">
            Yojana Sarkari Hai
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Schemes</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Tools</a></li>
                <li class="nav-item"><a class="nav-link" href="#">State Wise</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Documents</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Latest News</a></li>
            </ul>

        </div>

    </div>
</nav>


<!-- Hero -->

<section class="hero text-center">

    <div class="container">

        <h1 class="display-5 fw-bold">
            Find Government Schemes For You
        </h1>

        <p class="mt-3">
            Search Sarkari Yojana, Eligibility, Benefits and Application Details
        </p>

        <div class="row justify-content-center mt-4">

            <div class="col-lg-7">

                <div class="input-group input-group-lg">

                    <input type="text"
                           class="form-control"
                           placeholder="Search PM Kisan, PM Awas, Ayushman Bharat">

                    <button class="btn btn-warning">
                        Search
                    </button>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- Search Yojana -->

<section class="py-5">

    <div class="container">

        <h2 class="section-title text-center">
            Search Popular Yojanas
        </h2>

        <div class="row g-4">

            <div class="col-md-3">
                <div class="card card-custom p-4 text-center">
                    PM Kisan Yojana
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-custom p-4 text-center">
                    PM Awas Yojana
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-custom p-4 text-center">
                    Ayushman Bharat
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-custom p-4 text-center">
                    E Shram Card
                </div>
            </div>

        </div>

    </div>

</section>


<!-- Category Wise -->

<section class="py-5 bg-white">

<div class="container">

<h2 class="section-title text-center">
Category Wise Schemes
</h2>

<div class="row g-4">

<div class="col-md-3">
<div class="card card-custom p-4 text-center">
👨‍🌾 Farmer
</div>
</div>

<div class="col-md-3">
<div class="card card-custom p-4 text-center">
👩 Women
</div>
</div>

<div class="col-md-3">
<div class="card card-custom p-4 text-center">
🎓 Student
</div>
</div>

<div class="col-md-3">
<div class="card card-custom p-4 text-center">
👴 Pension
</div>
</div>

</div>

</div>

</section>



<!-- State Wise -->

<section class="py-5">

<div class="container">

<h2 class="section-title text-center">
State Wise Schemes
</h2>

<div class="row g-3">

<div class="col-md-2"><button class="btn btn-outline-primary w-100">UP</button></div>
<div class="col-md-2"><button class="btn btn-outline-primary w-100">Delhi</button></div>
<div class="col-md-2"><button class="btn btn-outline-primary w-100">Bihar</button></div>
<div class="col-md-2"><button class="btn btn-outline-primary w-100">Punjab</button></div>
<div class="col-md-2"><button class="btn btn-outline-primary w-100">Rajasthan</button></div>
<div class="col-md-2"><button class="btn btn-outline-primary w-100">MP</button></div>

</div>

</div>

</section>



<!-- Central Schemes -->

<section class="py-5 bg-white">

<div class="container">

<h2 class="section-title text-center">
Central Government Schemes
</h2>

<div class="row g-4">

<div class="col-md-4">
<div class="card card-custom p-4">
PM Kisan Yojana
</div>
</div>

<div class="col-md-4">
<div class="card card-custom p-4">
PM Awas Yojana
</div>
</div>

<div class="col-md-4">
<div class="card card-custom p-4">
Ayushman Bharat
</div>
</div>

</div>

</div>

</section>



<!-- Eligibility Calculator -->

<section class="py-5">

<div class="container">

<h2 class="section-title text-center">
Eligibility & Calculators
</h2>

<div class="row g-4">

<div class="col-md-3">
<div class="card card-custom p-4 text-center">
PM Awas Eligibility Checker
</div>
</div>

<div class="col-md-3">
<div class="card card-custom p-4 text-center">
PM Kisan Checker
</div>
</div>

<div class="col-md-3">
<div class="card card-custom p-4 text-center">
EMI Calculator
</div>
</div>

<div class="col-md-3">
<div class="card card-custom p-4 text-center">
Age Calculator
</div>
</div>

</div>

</div>

</section>



<!-- Status Check -->

<section class="py-5 bg-white">

<div class="container">

<h2 class="section-title text-center">
Status Check
</h2>

<div class="row g-4">

<div class="col-md-4">
<div class="card card-custom p-4">
PM Kisan Status
</div>
</div>

<div class="col-md-4">
<div class="card card-custom p-4">
PM Awas Status
</div>
</div>

<div class="col-md-4">
<div class="card card-custom p-4">
Ayushman Card Status
</div>
</div>

</div>

</div>

</section>



<!-- Latest News -->

<section class="py-5">

<div class="container">

<h2 class="section-title text-center">
Latest Yojana Updates
</h2>

<div class="row g-4">

<div class="col-md-4">
<div class="card card-custom p-4">
PM Kisan 20th Installment Date
</div>
</div>

<div class="col-md-4">
<div class="card card-custom p-4">
PM Awas New List
</div>
</div>

<div class="col-md-4">
<div class="card card-custom p-4">
Ayushman Registration
</div>
</div>

</div>

</div>

</section>



<!-- Footer -->

<footer class="footer py-5">

<div class="container">

<div class="row">

<div class="col-md-3">

<h5>About</h5>

<a href="#">About Us</a><br>
<a href="#">Contact Us</a><br>
<a href="#">Disclaimer</a>

</div>

<div class="col-md-3">

<h5>Important Pages</h5>

<a href="#">Privacy Policy</a><br>
<a href="#">Terms & Conditions</a><br>
<a href="#">Sitemap</a>

</div>

<div class="col-md-3">

<h5>Categories</h5>

<a href="#">Farmer</a><br>
<a href="#">Women</a><br>
<a href="#">Scholarship</a>

</div>

<div class="col-md-3">

<h5>Tools</h5>

<a href="#">Eligibility Checker</a><br>
<a href="#">EMI Calculator</a><br>
<a href="#">Age Calculator</a>

</div>

</div>

<hr>

<div class="text-center">
© 2026 Yojana Sarkari Hai. All Rights Reserved.
</div>

</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

