@extends('layouts.yojana')

@section('title', 'PM Kisan Yojana 2026')

@section('content')

    <style>
        html {
            scroll-behavior: smooth;
        }

        .scheme-page {
            background: #f8fafc;
        }

        .scheme-hero {
            background: linear-gradient(135deg, #0f766e, #115e59);
            color: #fff;
            padding: 60px 0;
        }

        .scheme-breadcrumb a {
            color: #d1fae5;
            text-decoration: none;
        }

        .quick-info-card {
            border: none;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
        }

        .quick-info-card .card-body {
            padding: 25px;
        }

        .info-box {
            text-align: center;
            padding: 15px;
        }

        .info-box h6 {
            font-size: 13px;
            color: #64748b;
            margin-bottom: 8px;
        }

        .info-box p {
            margin: 0;
            font-weight: 600;
        }

        .sticky-sidebar {
            position: sticky;
            top: 100px;
        }

        .toc-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .06);
        }

        .toc-header {
            background: #0f766e;
            color: #fff;
            padding: 15px;
            font-weight: 600;
        }

        .toc-link {
            display: block;
            padding: 12px 15px;
            color: #334155;
            text-decoration: none;
            border-bottom: 1px solid #eee;
        }

        .toc-link:hover {
            background: #f1f5f9;
        }

        .content-card {
            background: #fff;
            border: none;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .05);
        }

        .content-section {
            margin-bottom: 60px;
            scroll-margin-top: 100px;
        }

        .content-section h2 {
            color: #0f766e;
            margin-bottom: 20px;
            font-weight: 700;
        }
    </style>

    <div class="scheme-page">

        <!-- HERO -->

        <section class="scheme-hero">

            <div class="container">

                <div class="scheme-breadcrumb mb-3">

                    <a href="/">Home</a>

                    /

                    <a href="#">Farmer Schemes</a>

                    /

                    PM Kisan Yojana

                </div>

                <h1 class="display-5 fw-bold">
                    PM Kisan Yojana 2026
                </h1>

                <p class="mt-3 mb-0 fs-5">
                    Complete Guide, Benefits, Eligibility,
                    Documents, Apply Process & Status Check
                </p>

            </div>

        </section>

        <!-- QUICK INFO -->

        <div class="container">

            <div class="card quick-info-card mt-n4 mb-5">

                <div class="card-body">

                    <div class="row g-4">

                        <div class="col-md-3">
                            <div class="info-box">
                                <h6>Scheme Type</h6>
                                <p>Farmer Scheme</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="info-box">
                                <h6>Benefit Amount</h6>
                                <p>₹6000 / Year</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="info-box">
                                <h6>Application Mode</h6>
                                <p>Online</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="info-box">
                                <h6>Last Updated</h6>
                                <p>25 June 2026</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- MAIN CONTENT -->

        <div class="container pb-5">

            <div class="row">

                <!-- SIDEBAR -->

                <div class="col-lg-3 mb-4">

                    <div class="sticky-sidebar">

                        <div class="toc-card">

                            <div class="toc-header">
                                Table Of Contents
                            </div>

                            <a href="#overview" class="toc-link">
                                Overview
                            </a>

                            <a href="#benefits" class="toc-link">
                                Benefits
                            </a>

                            <a href="#eligibility" class="toc-link">
                                Eligibility
                            </a>

                            <a href="#documents" class="toc-link">
                                Required Documents
                            </a>

                            <a href="#application-process" class="toc-link">
                                Application Process
                            </a>

                            <a href="#financial-benefits" class="toc-link">
                                Financial Benefits
                            </a>

                            <a href="#important-dates" class="toc-link">
                                Important Dates
                            </a>

                            <a href="#status-check" class="toc-link">
                                Status Check
                            </a>

                            <a href="#official-website" class="toc-link">
                                Official Website
                            </a>

                            <a href="#faq" class="toc-link">
                                FAQ
                            </a>

                        </div>

                        <!-- POPULAR TOOLS -->

                        <div class="toc-card mt-4">

                            <div class="toc-header">
                                Useful Tools
                            </div>

                            <a href="#" class="toc-link">
                                PM Awas Eligibility Checker
                            </a>

                            <a href="#" class="toc-link">
                                PM Kisan Eligibility Checker
                            </a>

                            <a href="#" class="toc-link">
                                Subsidy Calculator
                            </a>

                            <a href="#" class="toc-link">
                                Age Calculator
                            </a>

                        </div>

                        <!-- LATEST SCHEMES -->

                        <div class="toc-card mt-4">

                            <div class="toc-header">
                                Latest Schemes
                            </div>

                            <a href="#" class="toc-link">
                                PM Surya Ghar Yojana
                            </a>

                            <a href="#" class="toc-link">
                                PM Vishwakarma Yojana
                            </a>

                            <a href="#" class="toc-link">
                                Atal Pension Yojana
                            </a>

                            <a href="#" class="toc-link">
                                PM Mudra Loan
                            </a>

                        </div>

                    </div>

                </div>

                <!-- CONTENT -->

                <div class="col-lg-9">

                    <div class="content-card">

                        <section id="overview" class="content-section">

                            <h2>Overview</h2>

                            <p>
                                PM Kisan Yojana is a central government scheme...
                            </p>

                        </section>

                        <section id="benefits" class="content-section">

                            <h2>Benefits</h2>

                            <p>
                                Benefits content here...
                            </p>

                        </section>

                        <section id="eligibility" class="content-section">

                            <h2>Eligibility</h2>

                            <p>
                                Eligibility content here...
                            </p>

                        </section>
                        <!-- DOCUMENTS -->

                        <section id="documents" class="content-section">

                            <h2>Required Documents</h2>

                            <div class="table-responsive">

                                <table class="table table-bordered align-middle">

                                    <thead class="table-success">

                                        <tr>
                                            <th width="80">#</th>
                                            <th>Document Name</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td>1</td>
                                            <td>Aadhaar Card</td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Bank Passbook</td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>Mobile Number</td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>Residence Certificate</td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td>Land Records (If Required)</td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </section>

                        <!-- APPLICATION PROCESS -->

                        <section id="application-process" class="content-section">

                            <h2>Application Process</h2>

                            <div class="card border-0 bg-light">

                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-md-6 mb-4">

                                            <div class="border rounded p-3 h-100">

                                                <h5>
                                                    Step 1
                                                </h5>

                                                <p class="mb-0">
                                                    Visit the official website.
                                                </p>

                                            </div>

                                        </div>

                                        <div class="col-md-6 mb-4">

                                            <div class="border rounded p-3 h-100">

                                                <h5>
                                                    Step 2
                                                </h5>

                                                <p class="mb-0">
                                                    Complete registration.
                                                </p>

                                            </div>

                                        </div>

                                        <div class="col-md-6 mb-4">

                                            <div class="border rounded p-3 h-100">

                                                <h5>
                                                    Step 3
                                                </h5>

                                                <p class="mb-0">
                                                    Fill application form.
                                                </p>

                                            </div>

                                        </div>

                                        <div class="col-md-6 mb-4">

                                            <div class="border rounded p-3 h-100">

                                                <h5>
                                                    Step 4
                                                </h5>

                                                <p class="mb-0">
                                                    Upload required documents.
                                                </p>

                                            </div>

                                        </div>

                                        <div class="col-md-12">

                                            <div class="border rounded p-3">

                                                <h5>
                                                    Step 5
                                                </h5>

                                                <p class="mb-0">
                                                    Submit application and save acknowledgment.
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </section>

                        <!-- FINANCIAL BENEFITS -->

                        <section id="financial-benefits" class="content-section">

                            <h2>Financial Benefits</h2>

                            <div class="row">

                                <div class="col-md-4 mb-4">

                                    <div class="card text-center h-100 border-0 shadow-sm">

                                        <div class="card-body">

                                            <h3 class="text-success">
                                                ₹6000
                                            </h3>

                                            <p class="mb-0">
                                                Annual Assistance
                                            </p>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-4 mb-4">

                                    <div class="card text-center h-100 border-0 shadow-sm">

                                        <div class="card-body">

                                            <h3 class="text-primary">
                                                ₹2000
                                            </h3>

                                            <p class="mb-0">
                                                Per Installment
                                            </p>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-4 mb-4">

                                    <div class="card text-center h-100 border-0 shadow-sm">

                                        <div class="card-body">

                                            <h3 class="text-warning">
                                                3 Times
                                            </h3>

                                            <p class="mb-0">
                                                Payment Every Year
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </section>

                        <!-- IMPORTANT DATES -->

                        <section id="important-dates" class="content-section">

                            <h2>Important Dates</h2>

                            <div class="table-responsive">

                                <table class="table table-bordered">

                                    <tbody>

                                        <tr>
                                            <th width="40%">
                                                Application Start Date
                                            </th>

                                            <td>
                                                Available Throughout The Year
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Last Date
                                            </th>

                                            <td>
                                                As Per Official Notification
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Status Check
                                            </th>

                                            <td>
                                                Available Online
                                            </td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </section>

                        <!-- STATUS CHECK -->

                        <section id="status-check" class="content-section">

                            <h2>How To Check Application Status</h2>

                            <div class="alert alert-success">

                                Follow these simple steps to check your status.

                            </div>

                            <ol class="ps-3">

                                <li>Visit the official portal.</li>

                                <li>Click on Status Check.</li>

                                <li>Enter Registration Number.</li>

                                <li>Enter OTP if required.</li>

                                <li>View your application status.</li>

                            </ol>

                        </section>

                        <!-- OFFICIAL WEBSITE -->

                        <section id="official-website" class="content-section">

                            <h2>Official Website</h2>

                            <div class="card border-success">

                                <div class="card-body">

                                    <h5>
                                        Official Portal
                                    </h5>

                                    <p>
                                        Visit the official website for latest updates and registration.
                                    </p>

                                    <a href="#" class="btn btn-success">

                                        Visit Official Website

                                    </a>

                                </div>

                            </div>

                        </section>
                        <!-- FAQ SECTION -->
                        <div class="alert alert-warning">

                            <strong>Important:</strong>

                            Applicants are advised to verify all information
                            from the official government website before applying.

                        </div>
                        <section id="faq" class="content-section">

                            <h2>Frequently Asked Questions (FAQ)</h2>

                            <div class="accordion" id="faqAccordion">

                                <div class="accordion-item">

                                    <h2 class="accordion-header">

                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq1">

                                            What is PM Kisan Yojana?

                                        </button>

                                    </h2>

                                    <div id="faq1" class="accordion-collapse collapse show">

                                        <div class="accordion-body">

                                            PM Kisan is a government scheme that provides
                                            financial assistance to eligible farmers.

                                        </div>

                                    </div>

                                </div>

                                <div class="accordion-item">

                                    <h2 class="accordion-header">

                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq2">

                                            Who can apply for this scheme?

                                        </button>

                                    </h2>

                                    <div id="faq2" class="accordion-collapse collapse">

                                        <div class="accordion-body">

                                            Eligible beneficiaries can apply as per
                                            government guidelines.

                                        </div>

                                    </div>

                                </div>

                                <div class="accordion-item">

                                    <h2 class="accordion-header">

                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq3">

                                            How can I check my application status?

                                        </button>

                                    </h2>

                                    <div id="faq3" class="accordion-collapse collapse">

                                        <div class="accordion-body">

                                            Status can be checked through the official portal.

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </section>

                        <!-- SHARE SECTION -->

                        <section class="content-section">

                            <h2>Share This Scheme</h2>

                            <div class="d-flex flex-wrap gap-2">

                                <a href="#" class="btn btn-success">

                                    WhatsApp
                                </a>

                                <a href="#" class="btn btn-primary">

                                    Facebook
                                </a>

                                <a href="#" class="btn btn-dark">

                                    X (Twitter)
                                </a>

                                <button class="btn btn-secondary">

                                    Copy Link

                                </button>

                            </div>

                        </section>

                        <!-- AUTHOR BOX -->

                        <section class="content-section">

                            <div class="card border-0 shadow-sm">

                                <div class="card-body">

                                    <div class="row align-items-center">

                                        <div class="col-md-2 text-center">

                                            <img src="https://via.placeholder.com/80" class="rounded-circle img-fluid">

                                        </div>

                                        <div class="col-md-10">

                                            <h5 class="mb-2">
                                                Editorial Team
                                            </h5>

                                            <p class="mb-0">

                                                This content has been researched and reviewed
                                                by our editorial team to provide accurate
                                                information about government schemes.

                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </section>

                        <!-- TRUST SECTION -->

                        <section class="content-section">

                            <div class="alert alert-info border-0">

                                <strong>Disclaimer:</strong>

                                Information provided on this page is for educational
                                and informational purposes only. Please verify the
                                latest details from the official government website
                                before applying.

                            </div>

                        </section>

                        <!-- RELATED SCHEMES -->

                        <section class="content-section">

                            <h2>Related Government Schemes</h2>

                            <div class="row">

                                <div class="col-md-4 mb-4">

                                    <div class="card h-100 border-0 shadow-sm">

                                        <div class="card-body">

                                            <h5>
                                                PM Awas Yojana
                                            </h5>

                                            <p>

                                                Housing assistance for eligible families.

                                            </p>

                                            <a href="#" class="btn btn-outline-success">

                                                Read More

                                            </a>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-4 mb-4">

                                    <div class="card h-100 border-0 shadow-sm">

                                        <div class="card-body">

                                            <h5>
                                                PM Fasal Bima Yojana
                                            </h5>

                                            <p>

                                                Crop insurance scheme for farmers.

                                            </p>

                                            <a href="#" class="btn btn-outline-success">

                                                Read More

                                            </a>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-4 mb-4">

                                    <div class="card h-100 border-0 shadow-sm">

                                        <div class="card-body">

                                            <h5>
                                                Kisan Credit Card
                                            </h5>

                                            <p>

                                                Easy credit support for farmers.

                                            </p>

                                            <a href="#" class="btn btn-outline-success">

                                                Read More

                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </section>

                        <!-- LAST UPDATED -->

                        <section class="content-section">

                            <div class="card bg-light border-0">

                                <div class="card-body">

                                    <strong>
                                        Last Updated:
                                    </strong>

                                    25 June 2026

                                </div>

                            </div>

                        </section>

                        <!-- CTA SECTION -->

                        <section class="content-section">

                            <div class="card border-0 text-center shadow-sm">

                                <div class="card-body p-5">

                                    <h3 class="mb-3">

                                        Explore More Government Schemes

                                    </h3>

                                    <p>

                                        Discover the latest central and state government
                                        schemes, benefits, eligibility criteria and
                                        application process.

                                    </p>

                                    <a href="/schemes" class="btn btn-success btn-lg">

                                        View All Schemes

                                    </a>

                                </div>

                            </div>

                        </section>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
