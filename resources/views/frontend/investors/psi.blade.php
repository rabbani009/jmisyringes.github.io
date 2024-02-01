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
                                    <td><a href="{{ asset('frontend/pricesensitive/filename.pdf') }}" target="_blank">View</a></td>
                                </tr>
                                <tr>
                                    <td>Price Sensitive Information 08-11-23</td>
                                    <td><a href="{{ asset('frontend/pricesensitive/filename.pdf') }}" target="_blank">View</a></td>
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
