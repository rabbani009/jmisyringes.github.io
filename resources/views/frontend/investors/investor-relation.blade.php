@extends('frontend.master')

@section('title') Details of Information of Investor Relation Department as on 30th June, 2022 @endsection


 <style>
    /* Add your custom styles here */
    .investor-info p {
        margin-bottom: 5px; /* Adjust the value as needed */
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
                        <span>Information of Investor Relation Department</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- page-title end-->
<div class="site-main">
    <section class="ttm-row clearfix">
        <div class="container"> <!-- Removed table-container class -->
            <div class="row">
                <div class="col-lg-12">
                    <h4>(Ref: Listing Regulations-2015 of 44/2/i)</h4> <!-- Small heading added here -->
                    <div class="investor-info">
                        <p  class="mt-5" style="font-size:24px;">Investor Relation Department :</p>
                        <p>JMI Syringes & Medical Devices Ltd.</p>
                        <p>Plot # 29/C & 29/D (2nd Floor), Tejgaon Industrial Area,</p>
                        <p>Dhaka-1208. Bangladesh.</p>
                        <p>Tel: +880-2-55138723, 55138724</p>
                        <p>Fax: +880-2-55138725</p>
                        <p>Mobile: +880 1939 909052</p>
                        <p>E-mail: info@jmisyringe.com</p>
                        <p>Website: <a href="http://www.jmisyringe.com">www.jmisyringe.com</a></p>
                    </div>
                    <div class="contact-person">
                        <p class="mt-5" style="font-size:24px;">Contact Person:</p>
                        <p>Muhammad Tarek Hossain Khan, Company Secretary</p>
                        <p>Md. Mashiur Rahman, Assistant Manager, Compliance</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection
