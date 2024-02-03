@extends('frontend.master')

@section('title') Nature of Business @endsection

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
                        <span>Nature of Business</span>
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
                    <!-- <h2 class="text-center">Nature of the Company</h2> -->
                </div>
                <div class="col-lg-12 widget-area sidebar-right">
                    <div class="border-responsive">
                        <h3>Legal Status & Nature of the Company</h3>
                        <p style="text-align:justify">
                        JMI Syringes & Medical Devices Limited was incorporated as a Private Limited Company on 5th April 1999 in Bangladesh with an Authorized Capital of Tk. 6,00,00,000/- divided into 600,000 ordinary shares of Tk. 100/= each under the Companies Act., 1994. Subsequently the Company increased its Authorized Capital to Tk. 30,00,00,000/- and reduced the denomination of the shares from Tk. 100/= to Tk. 10/= as per Extra Ordinary General Meeting held on February 04, 2002 and was converted into a Public Limited Company as per Extra Ordinary General Meeting held on August 20, 2002. Again, the Company reverted its denomination of the shares from Tk. 10/= to Tk. 100/= as per Extra Ordinary General Meeting held on May 05, 2003 and went for public issue during that year. Company’s share is listed with the Dhaka and Chittagong Stock Exchange Ltd.

The Company has changed its name from JMI-Bangla Company Limited to JMI Syringes & Medical Devices Limited as per an Extra-Ordinary resolution passed on October 01, 2009 and this change has been approved by the Registrar of Joint Stock Companies & Firms on April 15, 2010.

The Company has changed it authorized capital from Tk. 30 Crore to Tk. 100 Crore and reverted its denomination of the share from Tk. 100/= to Tk. 10/= each. So that the Ordinary Shares of the Company has also been changed from 30 Lac to 10 Crore. It was approved by the shareholder an Extra Ordinary General Meeting held on 29th September 2012 and approved by the Registrar of Joint Stock Companies on 14-11-2012.

The Company has raised paid-up capital as per Consent Letter accorded by Bangladesh Securities and Exchange Commission, against issuing 1,11,00,000 Ordinary Share @ BDT 164.10 per share including premium BDT 154.10 per share to NIPRO Corporation, Osaka, Japan. All amount against the above has been received from NIPRO Corporation and presenting in Statement of Financial Position and Paid-up Share was 2,21,00,000 and Paid-up Capital was BDT. 22,10,00,000/= at the end of the year June 30, 2019.
                        </p>
                        <p style="text-align:justify">
                            The company changed its name from JMI-Bangla Company Limited to JMI Syringes & Medical Devices Limited on October 01, 2009, which was approved by the Registrar of Joint Stock Companies & Firms on April 15, 2010. Furthermore, it modified its authorized capital and denomination of shares through an Extraordinary General Meeting held on September 29, 2012, which was approved by the Registrar of Joint Stock Companies on November 14, 2012.
                        </p>
                        <h3>Commencement of Business</h3>
                        <p style="text-align:justify">
                        The Company commenced commercial operation on 26th January 2002. But the operation has stopped for some technical reason for 5 months and commercial operation has restarted from June 18, 2002.
                        </p>
                    </div>
                    <div class="border-responsive">
                        <h3>Nature of Business</h3>
                        <p style="text-align:justify">
                        The Company is primarily engaged in business of manufacturing and marketing of Disposable Syringe, Auto Disable Syringe (AD Syringe), Needle (blister pack), Infusion Set, Scalp Vein Set, Urine Drainage Bag, Insulin Syringe, First AID Bandage, Eye Gel Set, Riles Tube, IV Cannula, Feeding Tube, Cooper-T, Blood Lancets, Blood Transfusion Set, 3-Way Stop Cock, Suction Catheter, Alcohol Pad, Nelaton Catheter, Umbilical Cord Clamp, Wound Drain Tube, Safety Box etc.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
