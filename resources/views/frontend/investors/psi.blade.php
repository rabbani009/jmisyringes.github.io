@extends('frontend.master')

@section('title') Certification| Message @endsection

<style>
    .border-responsive {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
    }

    /* Style for table */
    .table-container {
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    /* Style for class="view-link" View links */
   .view-link {
        display: inline-block;
        padding: 8px 16px;
        background-color: #E39939;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
        text-align: center;
    }

     .view-link:hover {
        background-color: #FFFFFF;
        color:#006B85;
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
                            <a title="Homepage" href="index.html">Home</a>
                        </span>
                        <span>Price Sensitive Information</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- page-title end-->
<div class="site-main">
    <section class="ttm-row clearfix">
        <div class="container table-container"> <!-- Added table-container class -->
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Price Sensitive Information</h2>
                </div>
                <div class="col-lg-12 widget-area sidebar-right">
                    <aside class="widget widget-download">
                        <table>
                            <thead>
                                <tr>
                                    <th>Price Sensitive Information</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Price Sensitive Information of JMI Syringes regarding Q2 Un-Audited Accounts date 30-01-2024</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/Price Sensitive Information of JMI Syringes regarding Q2 Un-Audited Accounts date 30-01-2024L.pdf') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                                <tr>
                                    <td>Price Sensitive Information 08-11-23</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/Price Sensitive Information 08-11-23.png') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                                <tr>
                                    <td>235<sup>th</sup> Board Meeting</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/235th Board Meeting.png') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                                <tr>
                                    <td>235<sup>th</sup> Board Meeting (unresolved agenda)</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/235th Board Meeting (unresolved agenda).jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                                <tr>
                                    <td>27<sup>th</sup> April, 2023</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/27th April, 2023.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>8<sup>th</sup> December, 2022</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/8th December, 2022.png') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                                <tr>
                                    <td>10<sup>th</sup> November, 2022</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/10th November, 2022.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>17<sup>th</sup> October, 2022</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/17th October, 2022.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>26<sup>th</sup> April, 2022</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/26th April, 2022.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>26<sup>th</sup> January, 2022</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/26th January, 2022.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>20<sup>th</sup> December, 2021</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/20th December, 2021.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>14<sup>th</sup> November, 2021</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/14th November, 2021.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>27<sup>th</sup> October, 2021</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/27th October, 2021.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>28<sup>th</sup> April, 2021</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/28th April, 2021.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>28<sup>th</sup> January, 2021</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/28th January, 2021.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>12<sup>th</sup> November, 2020</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/12th November, 2020.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>27<sup>th</sup> October, 2020</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/27th October, 2020.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>10<sup>th</sup> June, 2020</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/10th June, 2020.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>29<sup>th</sup> April, 2020</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/29th April, 2020.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>29<sup>th</sup> January, 2020</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/29th January, 2020.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>30<sup>th</sup> September, 2019</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/30th September, 2019.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>3<sup>rd</sup> October, 2019</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/3rd October, 2019.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>21<sup>st</sup> September, 2019</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/21st September, 2019.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>22<sup>nd</sup> August, 2019</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/22nd August, 2019.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>29<sup>th</sup> May, 2019</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/29th May, 2019.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>29<sup>th</sup> April, 2019</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/29th April, 2019.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>16<sup>th</sup> February, 2019</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/16th February, 2019.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>24<sup>th</sup> January, 2019</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/24th January, 2019.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>2<sup>nd</sup> January, 2019</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/2nd January, 2019.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>10<sup>th</sup> November, 2018</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/10th November, 2018.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>30<sup>th</sup> October, 2018</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/30th October, 2018.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>28<sup>th</sup> April, 2018</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/28th April, 2018.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>27<sup>th</sup> January, 2018</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/27th January, 2018.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>2<sup>nd</sup> November, 2017</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/2nd November, 2017.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>Information of Shareholders</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/Information of Shareholders.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr><tr>
                                    <td>10<sup>th</sup>  October, 2017</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/10th October, 2017.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                                <tr>
                                    <td>31<sup>st</sup> March, 2017</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/31st March, 2017.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                                <tr>
                                    <td>CIP Award 2015</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/CIP Award 2015.pdf') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                                <tr>
                                    <td>31<sup>st</sup> December, 2016</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/31st December, 2016.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr>

                                <tr>
                                    <td>30<sup>th</sup> October, 2016</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/30th October, 2016.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                                <tr>
                                    <td>20<sup>th</sup> October, 2016</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/20th October, 2016.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                                <tr>
                                    <td>19<sup>th</sup> May, 2016</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/19th May, 2016.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr>

                                <tr>
                                    <td>31<sup>st</sup> December, 2015</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Price Sensitive Information/31st December, 2016.jpg') }}" target="_blank" class="view-link">View</a></td>
                                </tr>



                            </tbody>
                        </table>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
