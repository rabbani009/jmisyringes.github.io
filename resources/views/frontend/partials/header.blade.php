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
            
                
                    <li class="dropdown"><a href="{{url('psi')}}">Price Sensitive Information</a></li>
                    <li class="dropdown"><a href="#">Annual/Auditor's Reports</a></li>
                    <li class="dropdown"><a href="#">Unaudited Reports</a></li>
                    <li class="dropdown"><a href="#">Director's Report </a></li>
                    <li class="dropdown"><a href="#">Profile Of Directors</a></li>
                    <li class="dropdown"><a href="{{url('/profile')}}">Board of Directors & Top Management</a></li>
                    <li class="dropdown"><a href="#">Nature of Business of JSMD</a></li>
                    <li class="dropdown"><a href="#">Shareholding Composition</a></li>
                    <li class="dropdown"><a href="#">Info. Of Investor Relation Department</a></li>
                    <li class="dropdown"><a href="#">Notice & General Information</a></li>
                    <li class="dropdown"><a href="#">Credit Rating Reports</a></li>
                    <li class="dropdown"><a href="#">Corporate Governance</a></li>
                    <li class="dropdown"><a href="#">Appointment of MD, CEO, CFO</a></li>
                    <li class="dropdown"><a href="#">Duties & Responsibilities of Mgmt</a></li>
                    <li class="dropdown"><a href="#">Link DSE CSE</a></li>
                    <li class="dropdown"><a href="#">Dividend Policy</a></li>
                    <li class="dropdown"><a href="#">Dividend Distribution Compliance Report</a></li>
                    <li class="dropdown"><a href="#">Unpaid Dividend</a></li>
                    <li class="dropdown"><a href="#">Code of Conduct</a></li>
               
           
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Products</span> <i class="bi bi-chevron-down"></i></a>
<ul class="menu">
 
        <li class="dropdown">
            <a href="{{url('/AD-product-view')}}">
                <span>AD Syringes</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="{{url('/disposable-syringes')}}">
                <span>Disposable Syringes</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="{{url('/tommey-syringes')}}">
                <span>Toomey Syringe</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="{{url('/insulin-syringes')}}">
                <span>Insulin Syringes</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="{{url('/disposable-needles')}}">
                <span>Disposable Needles</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="{{url('/scalp-vein-set')}}">
                <span>Scalp Vein Set</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="{{url('/iv-infusion-set')}}">
                <span>IV Infusion Set</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="{{url('/iv-cannula')}}">
                <span>I.V. Cannula</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="{{url('/blood-transfusion-set')}}">
                <span>Blood Transfusion Set</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="{{url('/first-aid-bandage')}}">
                <span>First Aid Bandage</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="{{url('/urine-drainage-bag')}}">
                <span>Urine Drainage Bag</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="{{url('/leg_bag')}}">
                <span>JMI Leg Bag</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="{{url('/Nelatob_Catheter')}}">
                <span>JMI Nelaton Catheter</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="{{url('/JMI-Disposable-Stomach-Tube')}}">
                <span>JMI Disposable Stomach Tube</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="{{url('/Umbilical_Cord_Clamp')}}">
                <span>JMI Umbilical Cord Clamp</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="{{url('/wound_dt')}}">
                <span>Wound Drain Tube</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="{{url('/feeding_tube')}}">
                <span>Feeding Tube</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="{{url('/JMI-Oral-Dispenser')}}">
                <span>JMI Oral Dispenser</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="{{url('/suction_catheter')}}">
                <span>Suction Catheter</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="{{url('/3-Way-Stopcock')}}">
                <span>3-Way Stopcock</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="{{url('/blood_Lancet')}}">
                <span>JMI Blood Lancet</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="{{url('/safety-Box')}}">
                <span>Safety Box</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="{{url('/copper-t')}}">
                <span>Copper T</span>
            </a>
        </li>
</ul>

            </li>
          <li><a class="nav-link scrollto " href="#">Export</a></li>
          <li class="dropdown"><a href="#"><span>Operational Excellence</span> <i class="bi bi-chevron-down"></i></a>
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


