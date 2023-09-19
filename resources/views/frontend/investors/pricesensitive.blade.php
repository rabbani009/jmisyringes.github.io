@extends('frontend.master')

@section('title') Certification| Message @endsection

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
<div class="container">
<div class="row">
    <div class="col-12">
        <h2 class="text-center">Price Sensitive Information</h2>
    </div>
    <div class="col-lg-12 widget-area sidebar-right">
        <aside class="widget widget-download">
            <ul class="download">
            @foreach($pricesencitives as $pricesencitive)
                <li>
                    <i class="fa fa-file-pdf-o"></i>
                        <div>
                            <h4>{{ $pricesencitive->name }}</h4>

                            @php
                                $fileImage = json_decode($pricesencitive->file_image);
                            
                            @endphp

                            @if (is_array($fileImage) && isset($fileImage[0]->download_link))
                                @php
                                    $filename = $fileImage[0]->download_link;
                                
                                @endphp
                                <a href="{{ route('download', ['filename' => urlencode($filename)]) }}" target="_blank">Download</a>
                            
                            @else
                                <p>No download link available.</p>
                            @endif
                        </div>
                </li>
                @endforeach 
                
                
            </ul>
        </aside>
    </div>
</div>
</div>
</section>
</div>



@endsection