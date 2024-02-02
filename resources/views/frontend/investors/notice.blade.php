@extends('frontend.master')

@section('title') Notice & General Information @endsection

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
                        <span>Notice & General Information</span>
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
                    <h2 class="text-center">Notice & General Information</h2>
                </div>
                <div class="col-lg-12 widget-area sidebar-right">
                    <aside class="widget widget-download">
                        <table>
                            <thead>
                                <tr>
                                    <th>Notice & General Information</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Principles on Disclosure of Material Information (MI) And Price Sensitive Information (PSI) of JSMDL</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Notice & General Information/Principles on Disclosure of Material Information (MI) And Price Sensitive Information (PSI) of JSMDL.pdf') }}" target="_blank" class="view-link">View</a></td>
                                </tr>

                                <tr>
                                    <td>Notice of the 24th AGM-2023</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Notice & General Information/Notice of the 24th AGM-2023.pdf') }}" target="_blank" class="view-link">View</a></td>
                                </tr>

                                <tr>
                                    <td>Proxy Form for 24th AGM-2023 of JMI Syringes & Medical Devices Ltd</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Notice & General Information/Proxy Form for 24th AGM-2023 of JMI Syringes & Medical Devices Ltd.pdf') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                                <tr>
                                    <td>Information with Regard to Material Changes August 21, 2023</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Notice & General Information/Information with Regard to Material Changes August 21, 2023.pdf') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                                <tr>
                                    <td>Information with Regard to Material Changes June 08, 2023</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Notice & General Information/Information with Regard to Material Changes June 08, 2023.pdf') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                                <tr>
                                    <td>Notice of the 23rd Annual General Meeting</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Notice & General Information/Notice of the 23rd Annual General Meeting.pdf') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                                <tr>
                                    <td>Notice to the Shareholder / Investors regarding unpaid dividend</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Notice & General Information/Notice to the Shareholder-Investors regarding unpaid dividend.pdf') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                                <tr>
                                    <td>Notice of the 21st Annual General Meeting</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Notice & General Information/Notice of the 21st Annual General Meeting.pdf') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                                <tr>
                                    <td>Information with Regard to Material Changes February 29, 2020</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Notice & General Information/Information with Regard to Material Changes February 29, 2020.pdf') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                                <tr>
                                    <td>Information with Regard to Material Changes</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Notice & General Information/Information with Regard to Material Changes.pdf') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                               
                                <tr>
                                    <td>Notice for the 10th Extra-Ordinary General Meeting</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Notice & General Information/Notice for the 10th Extra-Ordinary General Meeting.pdf') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                                <tr>
                                    <td>Notice for the 20th Annual General Meeting</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Notice & General Information/Notice for the 20th Annual General Meeting.pdf') }}" target="_blank" class="view-link">View</a></td>
                                </tr>

                                <tr>
                                    <td>Notice for 9th EGM</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Notice & General Information/Notice for 9th EGM.pdf') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                                <tr>
                                    <td>Information to Shareholders for 19th AGM</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Notice & General Information/Information to Shareholders for 19th AGM.pdf') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                                <tr>
                                    <td>Notice of the 19th Annual General Meeting</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Notice & General Information/Notice of the 19th Annual General Meeting.pdf') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                                <tr>
                                    <td>General Information of the Shareholders</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Notice & General Information/General Information of the Shareholders.pdf') }}" target="_blank" class="view-link">View</a></td>
                                </tr>
                                <!-- <tr>
                                    <td>notice</td>
                                    <td><a href="{{ asset('frontend\assets\investors\Notice & General Information/pdf') }}" target="_blank" class="view-link">View</a></td>
                                </tr> -->
                              
                          



                            </tbody>
                        </table>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
