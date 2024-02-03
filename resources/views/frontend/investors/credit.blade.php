@extends('frontend.master')

@section('title') Credit Rating Reports @endsection

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
        color:#006B85;
        line-height: 18px
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
                            <a title="Homepage" href="#">Home</a>
                        </span>
                        <span>Credit Rating Reports</span>
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
                    <h2 class="text-center">Credit Rating Reports</h2>
                </div>
                <div class="col-lg-12 widget-area sidebar-right">
                    <aside class="widget widget-download">
                        <table>
                            <thead>
                                <tr>
                                    <th>Credit Rating Reports</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>06 December, 2022</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Credit Rating Reports\06 December, 2022.pdf') }}" target="_blank" class="view-link">View</a></td>
                                </tr>

                                <tr>
                                    <td>02 December, 2021</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Credit Rating Reports\02 December, 2021.pdf') }}" target="_blank" class="view-link">View</a></td>
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
