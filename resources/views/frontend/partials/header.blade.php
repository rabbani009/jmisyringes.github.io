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
              <!-- <li><a href="{{url('message')}}">Message From Founder's</a></li> -->
              <li><a href="{{url ('qpolicy')}}">Quality Policy</a></li>
              <li><a href="{{url('export')}}">Export</a></li>
        
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Investors Corner</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                    <li><a href="{{url('psi')}}">Price Sensitive Information</a></li>
                    <li><a href="{{url('adreport')}}">Annual/Auditor's Reports</a></li>
                    <li><a href="{{url('unauditreport')}}">Unaudited Reports</a></li>
                    <li><a href="{{url('directors-Report')}}">Director's Report </a></li>
                    <li><a href="{{url('directors-profile')}}">Profile Of Directors</a></li>
                    <li><a href="{{url('/profile')}}">Board of Directors & Top Management</a></li>
                    <li><a href="{{url('/business-Nature')}}">Nature of Business of JSMD</a></li>
                    <li><a href="{{url('/shareholding-Composition')}}">Shareholding Composition</a></li>
                    <li><a href="{{url('Information-of-Investor-Relation-Department')}}">Info. Of Investor Relation Department</a></li>
                    <li><a href="{{url('notice')}}">Notice & General Information</a></li>
                    <li><a href="{{url('credit-rating')}}">Credit Rating Reports</a></li>
                    <li><a href="{{url('corporate-Governance')}}">Corporate Governance</a></li>
                    <li><a href="{{ url('appointment')}}">Appointment of MD, CEO, CFO</a></li>
                    <li><a href="{{url('duties')}}">Duties & Responsibilities of Mgmt</a></li>
                    <li><a href="{{url('link')}}">Link DSE CSE</a></li>
                    <li><a href="{{url('devined-policy')}}">Dividend Policy</a></li>
                    <li><a href="{{url('dividend-distribution')}}">Dividend Distribution Compliance Report</a></li>
                    <li class="dropdown"><a href="{{url('unpaid-devined')}}">Unpaid Dividend</a></li>
                    <li><a href="{{url('code-of-Conduct')}}">Code of Conduct</a></li>          
            </ul>
          </li>
          <li><a href="{{url('certificate')}}">Major Highlight</a></li>

          <li class="dropdown"><a href="#"><span>Products</span> <i class="bi bi-chevron-down"></i></a>

<ul class="menu">
        <li>
            <a href="{{url('/AD-product-view')}}">
                <span>AD Syringes</span>
            </a>
        </li>
        <li>
            <a href="{{url('/disposable-syringes')}}">
                <span>Disposable Syringes</span>
            </a>
        </li>
        <li>
            <a href="{{url('/tommey-syringes')}}">
                <span>Toomey Syringe</span>
            </a>
        </li>
        <li>
            <a href="{{url('/insulin-syringes')}}">
                <span>Insulin Syringes</span>
            </a>
        </li>
        <li>
            <a href="{{url('/disposable-needles')}}">
                <span>Disposable Needles</span>
            </a>
        </li>
        <li>
            <a href="{{url('/scalp-vein-set')}}">
                <span>Scalp Vein Set</span>
            </a>
        </li>
        <li>
            <a href="{{url('/iv-infusion-set')}}">
                <span>IV Infusion Set</span>
            </a>
        </li>
        <li>
            <a href="{{url('/iv-cannula')}}">
                <span>I.V. Cannula</span>
            </a>
        </li>
        <li>
            <a href="{{url('/blood-transfusion-set')}}">
                <span>Blood Transfusion Set</span>
            </a>
        </li>
        <li>
            <a href="{{url('/first-aid-bandage')}}">
                <span>First Aid Bandage</span>
            </a>
        </li>
        <li>
            <a href="{{url('/urine-drainage-bag')}}">
                <span>Urine Drainage Bag</span>
            </a>
        </li>
        <li>
            <a href="{{url('/leg_bag')}}">
                <span>JMI Leg Bag</span>
            </a>
        </li>
        <li>
            <a href="{{url('/Nelatob_Catheter')}}">
                <span>JMI Nelaton Catheter</span>
            </a>
        </li>
        <li>
            <a href="{{url('/JMI-Disposable-Stomach-Tube')}}">
                <span>JMI Disposable Stomach Tube</span>
            </a>
        </li>
        <li>
            <a href="{{url('/Umbilical_Cord_Clamp')}}">
                <span>JMI Umbilical Cord Clamp</span>
            </a>
        </li>
        <li>
            <a href="{{url('/wound_dt')}}">
                <span>Wound Drain Tube</span>
            </a>
        </li>
        <li>
            <a href="{{url('/feeding_tube')}}">
                <span>Feeding Tube</span>
            </a>
        </li>
        <li>
            <a href="{{url('/JMI-Oral-Dispenser')}}">
                <span>JMI Oral Dispenser</span>
            </a>
        </li>
        <li>
            <a href="{{url('/suction_catheter')}}">
                <span>Suction Catheter</span>
            </a>
        </li>
        <li>
            <a href="{{url('/3-Way-Stopcock')}}">
                <span>3-Way Stopcock</span>
            </a>
        </li>
        <li>
            <a href="{{url('/blood_Lancet')}}">
                <span>JMI Blood Lancet</span>
            </a>
        </li>
        <li>
            <a href="{{url('/safety-Box')}}">
                <span>Safety Box</span>
            </a>
        </li>
        <li>
            <a href="{{url('/copper-t')}}">
                <span>Copper T</span>
            </a>
        </li>
</ul>

            </li>
          <!-- <li><a class="nav-link scrollto " href="#">Export</a></li> -->
          <li class="dropdown"><a href="#"><span>Plant</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="{{url('quality')}}">QA/QC</a></li>
                    <li><a href="{{url('factory')}}">Factory</a></li>
                    <li><a href="{{url('production')}}">Production</a></li>
                    <li><a href="{{url('engineering')}}">Engineering</a></li>
                 
                </ul>
            </li>
         
          <li><a class="nav-link scrollto" href="{{url('contact')}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- #header -->

<!-- site-header-menu end-->


