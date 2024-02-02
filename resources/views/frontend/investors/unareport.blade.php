@extends('frontend.master')

@section('title') Unaudited Reports| Message @endsection

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

      /* Media query for small devices */
      @media (max-width: 768px) {
        .heading {
            font-size: 15px; /* Adjust font size for smaller devices */
            padding: 8px; /* Adjust padding for smaller devices */
        }
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
                        <span>Unaudited Reports</span>
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
                    <h5 class="text-center heading">Click to get Unaudited Reports</h5>
                </div>
            <div class="row">
                <!-- Report items -->
                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\Half-Yearly-Accounts-Un-Audited-for-Q2-on-31st December-2023-JMI Syringes.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">Half Yearly Accounts Un-Audited for Q2 on 31st December 2023-JMI Syringes</div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\Q1 Un-Audited Accounts- July to Sept 2023.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">Q1 Un-Audited Accounts- July to Sept 2023</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\3rd Quarter Financial Statements - March 2023.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">3rd Quarter Financial Statements - March 2023</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\Half Yearly Financial Statement - December 2022.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">Half Yearly Financial Statement - December 2022</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\1st Quarter Financial Statements - September 2022.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">1st Quarter Financial Statements - September 2022</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\3rd Quarter Financial Statements - March 2022.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">3rd Quarter Financial Statements - March 2022</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\Half Yearly Financial Statement December 2021.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">Half Yearly Financial Statement December 2021</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\1st Quarter Financial Statements - September 2021.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">1st Quarter Financial Statements - September 2021</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\3rd Quarter Financial Statements - March 2021.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">3rd Quarter Financial Statements - March 2021</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\2nd Quarter Financial Statements - December 2020.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">2nd Quarter Financial Statements - December 2020</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\1st Quarter Financial Statements - September 2020.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">1st Quarter Financial Statements - September 2020</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\3rd Quarter Report - March 2020.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">3rd Quarter Report - March 2020</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\Half Yearly Financial Statement December 2019.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">Half Yearly Financial Statement December 2019</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\1st Quarter Financial Statements - September 2019.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">1st Quarter Financial Statements - September 2019</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\3rd Quarter Report - March 2019.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">3rd Quarter Report - March 2019</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\Half Yearly Financial Statement December 2018.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">Half Yearly Financial Statement December 2018</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\1st Quarter Financial Statements 2018.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">1st Quarter Financial Statements 2018</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\3rd Quarter Report-March 2018.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">3rd Quarter Report-March 2018</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\2nd Quarter Report-December 2017.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">2nd Quarter Report-December 2017</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\1st Quarter Financial Statements 2017.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">1st Quarter Financial Statements 2017</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\3rd Quarter Report 2017.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">3rd Quarter Report 2017</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\2nd Quarter Report 2016.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">2nd Quarter Report 2016</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\1st Quarter Report 2016.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">1st Quarter Report 2016</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\3rd Quarter Report 2016.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">3rd Quarter Report 2016</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\3rd Quarter Report 2015.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">3rd Quarter Report 2015</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\2nd Quarter Report 2015.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">2nd Quarter Report 2015</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\1st Quarter Report 2015.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">1st Quarter Report 2015</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\3rd Quarter Report 2014.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">3rd Quarter Report 2014</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\2nd Quarter Report 2014.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">2nd Quarter Report 2014</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\1st Quarter Report 2015.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">1st Quarter Report 2014</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\3rd Quarter Report 2013.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">3rd Quarter Report 2013</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\2nd Quarter Report 2013.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">2nd Quarter Report 2013</div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="report-item">
                        <a href="{{ asset('frontend\assets\investors\Unaudited Reports\1st Quarter Report 2013.pdf') }}" target="_blank">
                            <img src="{{ asset('frontend\assets\images\pdfLarge2.png') }}" alt="PDF Image" class="pdf-image">
                        </a>
                        <div class="report-title">1st Quarter Report 2013</div>
                    </div>
                </div>
            
                <!-- Add more report items as needed -->
            </div>

            

            
        </div>
    </section>
</div>

@endsection
