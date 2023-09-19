<!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- Uncomment below if you prefer to use an text logo -->
        <!-- <h1><a href="index.html">NewBiz</a></h1> -->
        <a href="{{url('/')}}"><img src="{{ Voyager::image( setting('site.logo') ) }}" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
        
          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
       
              <li><a href="{{url('mission')}}">Our Mission & Vision</a></li>
              <li><a href="{{url('message')}}">Message From Founder's</a></li>
              <li class="dropdown"><a href="#"><span>Our Recognition's</span> <i class="bi bi-chevron-right"></i></a>
                <ul> 
                  <li><a href="{{url('certification')}}">Certifications</a></li>    
                  <li><a href="{{url('award')}}">Award</a></li>
                     
                </ul>
              </li>
              <li><a href="#">Partners & Affiliations</a></li>
              <li class="dropdown"><a href="#"><span>Media</span><i class="bi bi-chevron-right"></i></a>
                <ul>   
                  <li><a href="#">Media</a></li>
                  <li><a href="#">Gallery</a></li>       
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Investors Corner</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Financial Information</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                    <li><a href="{{url('pricesencitive')}}">Price Sensitive Information</a></li>
                    <li><a href="#">Notice & General Information</a></li>
                    <li><a href="#">Info. Of Investor Relation Department</a></li>
                    <li><a href="#">Nature of Business of JSMDL</a></li>
                    <li><a href="#">Dividend Policy</a></li>
                    <li><a href="#">Code of Conduct</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Governance</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                    <!-- <li><a href="#">Board of Directors & Top Management</a></li> -->
                    <li><a href="{{url('profile')}}">Profile Of Directors</a></li>
                    <li><a href="#">Appointment of MD, CEO, CFO</a></li>
                    <li><a href="#">Corporate Governance</a></li>
                    <li><a href="#">Duties & Responsibilities of Management</a></li>
                    <li><a href="#">Appointment of MD, CEO, CFO</a>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Reports</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                    <li><a href="#">Annual/Auditor's Reports</a></li>
                    <li><a href="#">Unaudited Reports</a></li>
                    <li><a href="#">Credit Rating Reports</a></li>
                    <li><a href="#">Dividend Distribution Compliance Report</a></li>
                    <li><a href="#">Director's Report of 2021 & 2022</a></li>
                    <li><a href="#">Link DSE CSE</a></li>
                    <li><a href="#">Shareholding Composition</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Products</span> <i class="bi bi-chevron-right"></i></a>
<ul class="menu">
    @foreach ($categories as $category)
        <li class="dropdown">
            <a href="#">
                <span>{{ $category->name }}</span>
                <i class="bi bi-chevron-right"></i>
            </a>
            <ul>
                @foreach ($category->subcategories as $subcategory)
                    <li class="dropdown">
                        <a href="#">
                            <span>{{ $subcategory->name }}</span>
                            <i class="bi bi-chevron-right"></i>
                        </a>
                        <ul>
                            @foreach ($subcategory->subsubcategories as $subsubcategory)
                                <li><a href="#">{{ $subsubcategory->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>

            </li>
          <li><a class="nav-link scrollto " href="#">Export</a></li>
          <li class="dropdown"><a href="#"><span>Operational Excellence</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                    <li><a href="{{url('quality')}}">Quality Policy</a></li>
                    <li><a href="#">Manufacturing Facilities</a></li>
                    <li><a href="#">R&D</a></li>
                    <li><a href="#">Operational Management Team</a></li>
                 
                </ul>
            </li>
         
          <li><a class="nav-link scrollto" href="{{url('contact')}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- #header -->

<!-- site-header-menu end-->


