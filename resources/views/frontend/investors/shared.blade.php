@extends('frontend.master')

@section('title') Details of Shareholding Composition as on 30th June, 2022 @endsection

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
                        <span>Shareholding Composition</span>
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
                <div class="col-lg-12 widget-area sidebar-right">
                    <div>
                        <h6>Details of Shareholding Composition as on 30th June, 2022</h6>
                        <p>(Ref: Listing Regulations-2015 of 44/2/f)</p>
                        <table>
                            <thead>
                                <tr>
                                    <th>SL No.</th>
                                    <th>Shareholders’ Category</th>
                                    <th>No. of Shares (Qty)</th>
                                    <th>% of Total Share</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Directors’ & Sponsors’ (Local)</td>
                                    <td>5,202,500</td>
                                    <td>23.54%</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Directors’ & Sponsors’ (Foreign)</td>
                                    <td>12,400,000</td>
                                    <td>56.11%</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Institutions</td>
                                    <td>1,237,600</td>
                                    <td>5.60%</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>General Shareholders</td>
                                    <td>3,259,900</td>
                                    <td>14.75%</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong>Total</strong></td>
                                    <td><strong>22,100,000</strong></td>
                                    <td><strong>100.00%</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-12 widget-area sidebar-right mt-20">
                        <div>
                            <h6>Details of Shareholding position of Sponsors & Directors as on 30th June, 2022</h6>
                            <p>(Ref: Listing Regulations-2015 of 44/2/g)</p>
                            <table>
                                <thead>
                                    <tr>
                                        <th>SL No.</th>
                                        <th>Name of Sponsors / Directors</th>
                                        <th>Status</th>
                                        <th>No. of Shares (Qty)</th>
                                        <th>% of Total Share</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Md. Jabed Iqbal Pathan</td>
                                        <td>Chairman</td>
                                        <td>1,575,960</td>
                                        <td>7.13%</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Md. Abdur Razzaq</td>
                                        <td>Managing Director</td>
                                        <td>3,625,540</td>
                                        <td>16.41%</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Hoi Kwan Kim (South Korean)</td>
                                        <td>Director</td>
                                        <td>1,300,000</td>
                                        <td>5.88%</td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Nipro Corporation, Osaka, Japan</td>
                                        <td>Director</td>
                                        <td>11,100,000</td>
                                        <td>50.23%</td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Md. Abdul Haque</td>
                                        <td>Independent Director</td>
                                        <td>1,000</td>
                                        <td>0.00%</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><strong>Total</strong></td>
                                        <td><strong>17,602,500</strong></td>
                                        <td><strong>79.65%</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
