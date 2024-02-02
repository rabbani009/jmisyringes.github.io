@extends('frontend.master')

@section('title') Annual/Audito'r Report| Message @endsection

<style>
    /* Style for each report item */
    .report-item {
        margin-bottom: 20px;
        text-align: center;
    }

    /* Style for PDF image */
    .pdf-image {
        max-width: 70%;
        height: auto;
        margin-bottom: 10px;
    }

    /* Style for report title */
    .report-title {
        font-size: 14px;
        margin-bottom: 5px;
        color:#006B85;
    }

    .heading {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
        text-align: center;
        color: #fff; /* Change color as needed */
        background-color: #006B85;
        padding:12px;
    }

    /* Style for view button */
    .view-button {
        background-color: #E39939;
        color: #fff;
        border: none;
        padding: 5px 15px;
        border-radius: 4px;
        text-decoration: none;
    }

    .view-button:hover {
        background-color: #006B85;
    }
</style>

@section('content')

<!-- page-title -->
<div class="ttm-page-title-row">
    <div class="ttm-page-title-row-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="#">Home</a>
                        </span>
                        <span>Annual Auditor's Reports</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- page-title end-->
<div class="site-main">
    <section class="ttm-row clearfix">
        <div class="container">
               <div class="col-12">
                    <h5 class="text-center heading">Click to get Audit Information</h5>
                </div>
            <div class="row">
                <!-- Report items -->
                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\AnnualAuditors Reports\Audit Reports\Audit Report 2022 - 2023.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">Audit Report 2022 - 2023</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\AnnualAuditors Reports\Audit Reports\Audit Report 2021 - 2022.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">Audit Report 2021 - 2022</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\AnnualAuditors Reports\Audit Reports\Audit Report 2020 - 2021.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">Audit Report 2020 - 2021</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\AnnualAuditors Reports\Audit Reports\Audit Report 2019 - 2020.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">Audit Report 2019 - 2020</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\AnnualAuditors Reports\Audit Reports\Audit Report 2018 - 2019.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">Audit Report 2018 - 2019</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\AnnualAuditors Reports\Audit Reports\Audit Report 2017 - 2018.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">Audit Report 2017 - 2018</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\AnnualAuditors Reports\Audit Reports\Audit Report 2016 - 2017.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">Audit Report 2016 - 2017</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\AnnualAuditors Reports\Audit Reports\Audit Report 2015 - 2016.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">Audit Report 2015 - 2016</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\AnnualAuditors Reports\Audit Reports\Audit Report 2015.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">Audit Report 2015</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\AnnualAuditors Reports\Audit Reports\Audit Report 2014.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">Audit Report 2014</div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\AnnualAuditors Reports\Audit Reports\Audit Report 2013.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">Audit Report 2013</div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\AnnualAuditors Reports\Audit Reports\Audit Report 2012.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">Audit Report 2012</div>
                    </div>
                </div>
                <!-- <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\AnnualAuditors Reports\Audit Reports\pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">Report</div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\AnnualAuditors Reports\Audit Reports\pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">Report</div>
                    </div>
                </div> -->
            
                <!-- Add more report items as needed -->
            </div>
        </div>
    </section>
</div>

@endsection
