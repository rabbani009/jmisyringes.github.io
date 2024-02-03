@extends('frontend.master')

@section('title') Director's Profile @endsection


<style>
    
    .person-bio {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin-bottom: 30px;
        padding: 15px;
        /* border: 1px solid #ccc; */
    }

   

    .person-bio img {
        width: 200px; /* Adjust the image width as needed */
        height: auto;
        border-radius: 0%; /* Rounded border for circular image */
        transition: transform 0.3s ease-in-out; /* Transition effect for hover */
        margin-bottom:15px;
        border: 1px solid black;
    }

    .person-bio:hover img {
        transform: scale(1.1); /* Increase image size on hover */
    }

    .person-bio h2,
    .person-bio p {
        margin: 0;
        margin-bottom:15px;
    }

    @media (max-width: 767px) {
        .person-bio img {
            width: 80%; /* Adjust for smaller screens */
        }
    }

</style>


<div class="ttm-page-title-row">
    <div class="ttm-page-title-row-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="#">Home</a>
                        </span>
                        <span>Our Director's Profile</span>
                    </div>
                </div>
            </div>
        </div>
</div>


@section('content')

<div class="container">
           <!-- <div class="pageTitle text-center">
                <h3 class="mt-5">Our Director's Profile</h3>
            </div> -->
        <div class="person-bio-section">
            <!-- Person 1 -->
            <div class="person-bio">
                <img src="{{asset("/frontend/assets/images/profile/Chairman.jpg")}}" alt="
                Mr. Jabed Iqbal Pathan">
                <h5>Mr. Jabed Iqbal Pathan</h5>
                <p>Chairman</p>
                <p style="text-align:justify;">Mr. Md. Jabed Iqbal Pathan was born in Chandpur District in year 1970. He completed his B.Sc. Engineering degree from Bangladesh University of Engineering and Technology (BUET). After completion of study from BUET he engaged himself in business with different organizations at different capacity. He has experience of more than 23 (Twenty) years as a businessman. He is a member of Board of Directors and Chairman of Board of Directors of JMI Syringes & Medical Devices Ltd. apart from his Directorship with JMI Syringes & Medical Devices Ltd. He is also the founder and Directors of many businesses, namely Nipro JMI Pharma Ltd., Nipro JMI Marketing Ltd., E- Medicare Ltd., Mazzak Inter Trade Ltd., VIP Traders, Unido Pharmaceuticals Ltd., Tracking & Survey Solution Ltd. DNA Solution Ltd. etc. Mr. Pathan is a well-known entrepreneur in Bangladesh.
</p>
                <!-- More content about this person -->
            </div>

            <!-- Person 2 -->
            <div class="person-bio">
                <img src="{{asset("/frontend/assets/images/profile/MD.jpg")}}" alt="Suriya Akther Rina">
                <h5>Mr. Md. Abdur Razzaq</h5>
                <p>Managing Director (CIP)</p>
                <p style="text-align:justify;">Mr. Md. Abdur Razzaq was born in Noakhali District, Bangladesh. He completed his graduation and post-graduation degree in Economics from Chittagong University. He is the founder of the renowned group of companies named JMI Group of Industries in Bangladesh. There are 35 (Thirty-Five) companies under this group with well diversified in different industry. Currently, Mr. Razzaq holds the position of Managing Director and also he is the founder of JMI Syringes & Medical Devices Ltd., NIPRO JMI Company Ltd, NIPRO JMI Pharma Ltd., JMI Hospital Requisite Manufacturing Ltd., JMI Builders and Construction Ltd., JMI CNG Dispensing Ltd., JMI Vaccine Ltd., JMI Industrial Gas Ltd., JMI Printing & Packaging Ltd., JMI Safe Transportation Ltd., Nipro JMI Dialysis Centre Ltd., JMI Hollow Block Co. Ltd., JMI Export & Import Co. Ltd. JMI LPG & Petroliam Ltd., JMI Sonlu Appliance Ltd., Advance Travel Planners Ltd., JMI Cylinders Ltd., JMI Sankur Valve & Bung Ltd., JMI Engineering Ltd., JMI Sankur Auto Tank Ltd., Sunmyung International (Pvt.) Ltd., Sunrise Research & Consultancy Ltd., JMI Industrial Research & Toxicology Ltd., Bangladesh Clinical Trials Ltd., 3i Securities Ltd. and JMI Restora. He has vast working experience in higher position in private sectors of Japan. Mr. Razzaq is the founder Managing Director of JMI Syringes & Medical Devices Ltd. At present, Mr. Razzaq has become a successful business entrepreneur in Bangladesh and got CIP award 2 times in 2017 & 2019.</p>
                <!-- More content about this person -->
            </div>

              <!-- Person 3 -->
              <div class="person-bio">
                <img src="{{asset("frontend/assets/images/profile/HKK.jpg")}}" alt="Suriya Akther Rina">
                <h5>Hoi Kwan Kim</h5>
                <p>Director</p>
                <p style="text-align:justify;">Mr. Hoi Kwan Kim was born in 1947 in South Korea. He has completed MBA. He holds the position of Director of JMI Syringes & Medical Devices Ltd., JMI Hospital Requisite Mfg. Ltd., JMI Vaccine Ltd., JMI CNG Dispensing Ltd., NIPRO JMI Company Ltd., JMI Hollow Block Co. Ltd. and JMI Printing & Packaging Ltd. in Bangladesh. He is the Managing Director of Sun Myung International Inc., and Sun Myung Engineering Corporation, South Korea. He has lot of experience in the medical & surgical devices sector for more than 34 years. He has multiple business in Bangladesh, Korea, Pakistan, China, Vietnam, Singapore and Taiwan.</p>
                <!-- More content about this person -->
              </div>

                <!-- Person 4 -->
             <div class="person-bio">
                <img src="{{asset("frontend/assets/images/profile/Kobayashi.jpg")}}" alt="Suriya Akther Rina">
                <h5>Mr. Kyoetsu Kobayashi</h5>
                <p>Nominee Director of NIPRO Corporation</p>
                <p style="text-align:justify;">	Mr. Kyoetsu Kobayashi was born in 1955 in Japan. He completed the Bachelor of Science (BS) in Agriculture from Iwate University, Japan in the year 1980. After completion of his education he joined Nihon Ikoh Corporation, Akita, Japan in 1981 and served there up to 1998. Then he joined Nipro Corporation, Odate Factory, Akita, Japan as General Manager Production and serving from 1990 to 2014 then he promoted as Managing Director of Global Production Division of Nipro Corporation, Osaka, Japan. He also served as General Manager of Odate Factory, Akita Japan from 1998 to till now. He is well experienced business guy in the medical & surgical devices sector and also a decision maker of Global Production Department of Nipro Corporation. Now he is appointed as Nominee Director of JMI Syringes & Medical Devices Ltd. in Bangladesh on behalf of NIPRO Corporation, Osaka, Japan.</p>
                <!-- More content about this person -->
        </div>

                <!-- Person 5 -->
                <div class="person-bio">
                <img src="{{asset("frontend/assets/images/profile/TY.jpg")}}" alt="Suriya Akther Rina">
                <h5>Mr. Takehito Yogo </h5>
                <p>Nominee Director of NIPRO Corporation</p>
                <p style="text-align:justify;"> Mr. Takehito Yogo was born in 1968 in Japan. He completed Bachelor Degree from Jyochi University, Japan. After completion of his education he joined Yamaichi Securities Co. Ltd., Japan in April 1992 and served there up to September-1996. Then he joined Ernst & Young, as Certified Public Accountant in October 1996 and served there up to February 2004. Then he joined Goodman Co. Ltd., in March 2004 as Head of Internal Audit and served there up to May 2015 as President & SEO. Then again he joined NIPRO Corporation, Osaka, Japan as Executive VP of Corporate Planning HQ. From June 2018 he has promoted as Managing Director and CFO of NIPRO Corporation and till now he is continuing his job. He is well experienced in this arena of service around the world for NIPRO’s business. Now he is appointed as Nominee Director of JMI Syringes & Medical Devices Limited, Nipro JMI Pharma Limited, Nipro JMI Company Limited and Nipro JMI Marketing Limited in Bangladesh on behalf of NIPRO Corporation, Osaka, Japan.</p>
                <!-- More content about this person -->
              </div>
            <!-- Add more persons' details in a similar structure -->
            <div class="person-bio">
                <img src="{{asset("frontend/assets/images/profile/Fuji.jpg")}}" alt="Suriya Akther Rina">
                <h5>Mr. Katsuhiko Fujii </h5>
                <p>Nominee Director of NIPRO Corporation</p>
                <p style="text-align:justify;">Mr. Katsuhiko Fujii was born in 1962 in Japan. He completed the Bachelor of Arts (BA) in English Literature from Kansai Gaidai University, Japan in the year 1984. After completion of his education he joined Nipro Corporation, Osaka, Japan in 1984 and served there up to 1992. Then he joined Nipro Europe NV / SA, Belgium and serving from 1992 to 2001. In the year 2001 he joined to Nipro (Shanghai) Co., Ltd., China and served there up to 2003. Then he joined to Nipro Trading (Shanghai) Co., Ltd., China as Assistant General Manager and serving there up to 2010. Then he joined to Nipro Medical (Hefei) Co., Ltd., China as Assistant Managing Director and General Manager. He served there from 2010 to 2016. After that, he joined to Nipro Corporation, Osaka, Japan as General Manager of Global Production Division and serving there from 2016 to till now. He is well experienced business guy in the medical & surgical devices sector and also a decision maker of Global Production Department of Nipro Corporation. Now he is appointed as Nominee Director of JMI Syringes & Medical Devices Ltd. in Bangladesh on behalf of NIPRO Corporation, Osaka, Japan.</p>
                <!-- More content about this person -->
              </div>
              <div class="person-bio">
                <img src="{{asset("frontend/assets/images/profile/ST.jpg")}}" alt="Suriya Akther Rina">
                <h5>Mr. Seigo Tsuchiya</h5>
                <p>Nominee Director of NIPRO Corporation</p>
                <p style="text-align:justify;">Mr. Seigo Tsuchiya was born in 1974 in Japan. He completed Bachelor of Economics from Nihon University, Japan in the year 1997. Then he completed Master of Business Administration (MBA) from Nanyang Technological University, Japan in the year 2012. After completion of his Bachelor Degree he joined Terumo Corporation, Tokyo, Japan in April 1998 and served there up to February 2007. Then he joined Nipro ASIA PTE LTD. (Singapore) as Area Manager and serving from February 2007 to May 2012 then he promoted as Deputy Section Manager of Asia-Middle East Section, Global Sales Department, Global Business Division from June 2012. In the year June 2012 he was assigned as Managing Director of Nipro Middle East FZE (UAE) and continuing up to August-2015. After that he was transferred to Nipro ASIA PTE LTD. (Singapore) as Managing Director from September 2015 and till now continuing his job. He is well experienced business guy in the medical & surgical devices sector and also a decision maker of Global Business Department of Nipro Corporation. Now he is appointed as Nominee Director of JMI Syringes & Medical Devices Limited and Nipro JMI Marketing Limited in Bangladesh on behalf of NIPRO Corporation, Osaka, Japan.</p>
                <!-- More content about this person -->
              </div>
              <div class="person-bio">
                <img src="{{asset("frontend/assets/images/profile/HN.jpg")}}" alt="Suriya Akther Rina">
                <h5>Mr. Hisao Nakamori</h5>
                <p>Nominee Director of NIPRO Corporation</p>
                <p style="text-align:justify;">	Mr. Hisao Nakamori was born in 1973 in Japan. He completed the Bachelor of Arts (BA) in Sociology from Tokyo University of Foreign Studies, Japan in the year 1996. Then he obtained a Certification of the Official Business Skill Test in Book Keeping. He knows 3 more languages (i.e. Japanese-native level, Portuguese-professional working level and English-professional working level) and also obtained Brazilian driver’s license, Belgian driver’s license and Japanese driver’s license. After completion of his Bachelor Degree he joined Nipro Corporation, Osaka, Japan in Corporate planning and coordination division on April 1996 and served there up to June 2002. Then he joined Nipro Euope N.V. as Accounts Manager and serving from June 2002 to December 2004 then he promoted as Finance Controller of Nipro Europe N.V. (Zaventem, Belgium) from January 2005 and serving there December up to 2006. In the year January 2007 he assigned in Nipro Medical Ltda. (Sorocaba, Brazil) as different Managerial position and continuing up to March 2017. After that he was transferred to Nipro Corporation, Osaka, Japan from April 2017 and till now continuing his job as Deputy General Manager, Global Finance & Accounting Management Department. He is well experienced professional in the finance and accounts department of Nipro Corporation. Now he is appointed as Nominee Director of JMI Syringes & Medical Devices Ltd. in Bangladesh on behalf of NIPRO Corporation, Osaka, Japan.</p>
                <!-- More content about this person -->
              </div>
              <div class="person-bio">
                <img src="{{asset("frontend/assets/images/profile/Yamazaki.jpg")}}" alt="Suriya Akther Rina">
                <h5>Mr. Tsuyoshi Yamazaki</h5>
                <p>Nominee Director of NIPRO Corporation</p>
                <p style="text-align:justify;">Mr. Tsuyoshi Yamazaki was born in 1968 in Japan. He completed Bachelor Degree from Kyoto University of Foreign Studies, Japan. After completion of his education he joined Nipro Asia Pte Ltd., Singapore in 1991 and served there up to 1999 as Manager Marketing. Then he joined Nipro Middle East, Dubai, UAE in 1999 and served there up to 2002 as General Manager. Then he joined Nipro Medical Corporation, Miami, Florida, USA as Business Development Manager and served their up to 2004. Then he joined Nipro Corporation, Osaka, Japan and serving there till to date as Managing Director of Global Business Division and General Manager, Global Strategy of Global Business Division. He also serving as Managing Director in charge, Pharma Packaging Division of Nipro Corporation, Osaka, Japan. He is well experienced business guy and also a decision maker of Global Business Department of Nipro Corporation. Now he is appointed as Nominee Director of JMI Syringes & Medical Devices Limited and Nipro JMI Marketing Limited in Bangladesh on behalf of NIPRO Corporation, Osaka, Japan.</p>
                <!-- More content about this person -->
              </div>
              <div class="person-bio">
                <img src="{{asset("frontend/assets/images/profile/Hatakeyama.jpg")}}" alt="Suriya Akther Rina">
                <h5>Mr. Koki Hatakeyama</h5>
                <p>Nominee Director of NIPRO Corporation</p>
                <p style="text-align:justify;">Mr. Koki Hatakeyama was born in 1959 in Japan. He completed the Bachelor of Science (BS), Industrial Chemistry from Chuo University, Japan in the year 1981. After completion of his education he joined Nihon Ikoh Corporation, Guama, Japan in 1981 and served there up to March 1998. Then he joined Nipro Corporation, Odate Plant, Akita, Japan in Quality Management Department and serving there up to 2007 as General Manager. Then he joined Nipro (Thailand) Corporation Limited, Ayutthaya, Thailand in the year 2007 and served there up to 2011 as Representative Director, CEO of Nipro Thailand Corporation. Then he joined Nipro Corporation, Osaka, Japan as General Manager Global Supply, Global Business Division. Then he promoted as Director of Quality Assurance Department, Global Production Division and serving there till to date. He is well experienced business guy and also a decision maker of Global Business Department of Nipro Corporation. Now he is appointed as Nominee Director of JMI Syringes & Medical Devices Limited and Nipro JMI marketing Limited in Bangladesh on behalf of NIPRO Corporation, Osaka, Japan.</p>
                <!-- More content about this person -->
              </div>
              <div class="person-bio">
                <img src="{{asset("frontend/assets/images/profile/Haque.jpg")}}" alt="Suriya Akther Rina">
                <h5>Mr. Md. Abdul Hoque</h5>
                <p>Independent Director</p>
                <p style="text-align:justify;">Md. Abdul Hoque completed his M.com degree in Management from Dhaka University of Bangladesh. After completion of his M. Com degree he served in different organization at higher level. Now he is performing as Additional Managing Director of Agrani Insurance Company Limited at Saiham Sky View Tower (14th floor), 45 Bijoynagar, Dhaka. Now he is appointed as an Independent Director of JMI Syringes & Medical Devices Ltd. from October 28, 2020 for the next 3 years.</p>
                <!-- More content about this person -->
              </div>

              <div class="person-bio">
                <img src="{{asset("frontend/assets/images/profile/SSC.jpg")}}" alt="Suriya Akther Rina">
                <h5>Mr. A. T. M. Serajus Salekin Chowdhury</h5>
                <p>Independent Director</p>
                <p style="text-align:justify;">A.T.M. Serajus Salekin Chodhury completed his M. A. degree in English from Dhaka University of Bangladesh. After completion of his education he joined as bank professional in Janata Bank Ltd. from the year 1982 and served there up to 2010. The he started small trading business and became a skilled businessman. Now he is appointed as an Independent Director of JMI Syringes & Medical Devices Ltd. from September 21, 2019 for the next 3 years.</p>
                <!-- More content about this person -->
              </div>
        </div>

</div>







@endsection
