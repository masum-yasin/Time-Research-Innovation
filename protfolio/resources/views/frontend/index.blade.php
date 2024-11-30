<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portfolio</title>
    <meta name="keywords" content="Portfolio" />
    <meta name="description" content="Portfolio" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- FavIcon CSS -->
    <link rel="icon" href="{{asset('')}}assets/img/favicon.png" type="image/gif" sizes="16x16">
    <!--Google Fonts CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!--Font Awesome Icon CSS-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/bootstrap.min.css">
    <!-- Carousel Slider CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <!-- Carousel Slider CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/owl.theme.default.min.css">
    <!-- Main Style CSS  -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/style.css">
    <style>
        .timeline-title, .timeline-year {
            margin-top: 10px; /* Adjust to your desired top margin */
            margin-bottom: 10px; /* Adjust to your desired bottom margin */
            margin: mx-auto
        }
    </style>
    
</head>
<body>

<!-- hearer-area start -->
<header class="header-area ">
    <div class="container">
        <div class="main-menu text-end">
            <nav class="main-navigation">
                    <button class="toggle-button">
                        <span></span>
                        <span class="toggle-width-two"></span>
                        <span></span>
                    </button>
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#about-me">About Me</a>
                        </li>
                        <li>
                            <a href="#my-service">My Service</a>
                        </li>
                        <li>
                            <a href="#my-skill">My Skill</a>
                        </li>
                        <li>
                            <a href="#my-porfolio">My Porfolio</a>
                        </li>
                        <li>
                            <a href="#my-education">My Education</a>
                        </li>
                        <li>
                            <a href="#my-experience">My Experience</a>
                        </li>
                        <li>
                            <a href="#my-client">My Client</a>
                        </li>
                        <li>
                            <a href="#my-pricing">My Pricing</a>
                        </li>
                        <li>
                            <a href="#my-blog">My Blog</a>
                        </li>
                        <li>
                            <a href="#my-contact">My Contact</a>
                        </li>
                    </ul>
                    
            </nav>
        </div>
    </div>
</header>
<!-- hearer-area end -->

<main>
    <!-- banner-area start -->
    <section class="banner-area">
         <!-- banner-shape-w end -->
         @foreach ($aboutFrontend as $item)
             

         <div class="row align-items-center">
            <div class="col-md-5">
                <div class="banner-img">
                    <img src="{{'upload/'.$item->photo}}" alt="hero">
                </div>
            </div>
            <div class="col-md-5 mt-5 mb-5">
                <div class="container g-0">
                    <div class="banner-content">
                        <div class="com-title">
                            <p class="section-sub-title">
                                Hello & Welcome
                            </p>
                            <h1 class="section-title text-start ">
                                I AM <span>{{$item->fname}} {{$item->lname}} </span>
                            </h1>

                            <p class="section-sub-title">

                                {{$item->title}}
                            </p>
                        </div> <!-- com-title end -->
                        <div class="download-cv d-md-block d-lg-flex gap-3 mt-25">
                            <button class="download-btn"> 
                                <i class="fas fa-download"></i>
                                <span>Download CV</span>
                            </button>
                            <button class="s-btn book-btn">
                                <span>Book free consultation</span>
                                <i class="fas fa-angle-double-right"></i>
                            </button>
                        </div>
                    </div>
                    <!-- banner-content end -->
                </div>
            </div>
            <div class="col-md-2 mb-5">
                <div class="container">
                    <a href="#about-me" class="rotation">
                        <p class="rotate"> <i class="fas fa-arrow-up-long"></i> About Me </p>
                    </a>
                </div>
            </div>
         </div> 
    </section>
    <!-- banner-area end -->
     <!-- about-area start -->
     <section class="about-area" id="about-me">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <div class="rotation r-top-200 r-bottom-60">
                        <div class="section-title">
                            About <span>ME </span>
                        </div>
                        <a href="#my-service">
                            <p class="rotate"> 
                                <i class="fas fa-arrow-up-long"></i>
                                MY SERVICE 
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-content r-bottom-60">
                        <h3 class="content-title py-3">
                            Here is Some word about me!
                        </h3>
                        <p>{{$item->desc}}</p>
                        <div class="signature-img py-3">
                            <img src="assets/img/signature.png" alt="signature">
                        </div>
                        <ul class="socialList">
                            <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-pinterest-p"></i></a></li>
                            <li><a href=""><i class="fa-solid fa-envelope"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 bottom-sm-50">
                    <div class="about-img">
                        <img src="{{'upload/'.$item->photo}}" alt="about">
                    </div>
                </div>
            </div>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Age</th>
                    <th scope="col">Nationality</th>
                    <th scope="col">Address</th>
                    <th scope="col">Language</th>
                    <th scope="col">Year Of Experience</th>
                  </tr>
                </thead>
                <tbody>
                    
                  <tr>
             
                    <td>{{$item->fname}} {{$item->lname}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                   
                    <td>{{$item->age}}</td>
                    <td>{{$item->nationality}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->lang}}</td>
                    <td>{{$item->exprience}}</td>
                    
                  </tr>
               
                 
                </tbody>
              </table>
              
              
        </div>      
     </section>

     @endforeach
     <!-- about-area end -->
    <!-- service-area start -->
    <section class="service-area" id="my-service">
        <div class="container">
            <div class="row align-items-center justify-content-end col-rev">
                
                <div class="col-xl-8 col-lg-10 col-md-10  bottom-sm-50">
                    <div class="service-content">
                        @foreach ($service as $item)
                            
                 
                        <div class="service-item">
                            
                            <div class="service-icons">
                                    <i class="fa-solid fa-desktop"></i>
                            </div>
                            <div class="service-desc">
                                <h5>{{$item->title}}</h5>
                                <p class="py-2">{{$item->description}}</p>
                                <a href="#"> LEARN MORE <i class="fas fa-arrow-right-long"></i> </a>
                            </div>
                            
                        </div>
                        @endforeach
                       
                       
                       
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2">
                    <div class="rotation r-top-200 r-bottom-60 w-100">
                        <div class="section-title">
                            my <span>service </span>
                        </div>
                        <a href="#my-skill">
                            <p class="rotate">
                                <i class="fas fa-arrow-up-long"></i>
                                MY skill
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-area end -->
    <!-- skill-area start -->
    <section class="skill-area" id="my-skill">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-md-2">
                    <div class="rotation r-top-200 r-bottom-60">
                        <div class="section-title">
                            my <span>skill </span>
                        </div>
                        <a href="#my-porfolio">
                            <p class="rotate">
                                <i class="fas fa-arrow-up-long"></i>
                                MY Portfolio
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-md-6 mb-sm-5 mb-4 ">
                                <div class="skill-content ux">
                                <div class="progress-item">
                                    <i class="fa-solid fa-layer-group"></i>
                                    <P>UI/UX DESIGN</P>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                        <span>70% </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-sm-5 mb-4 ">
                                <div class="skill-content app">
                                <div class="progress-item">
                                    <i class="fa-solid fa-mobile"></i>
                                    <P>APP DESIGN</P>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                        <span>70% </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-sm-5 mb-4 ">
                            <div class="skill-content web">
                                <div class="progress-item">
                                        <i class="fa-solid fa-desktop"></i>
                                    <P>WEB DESIGN</P>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                        <span>70% </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-sm-5 mb-4 ">
                            <div class="skill-content photo">
                                <div class="progress-item">
                                        <i class="fa-solid fa-desktop"></i>
                                    <P>PHOTOGRAPY</P>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                        <span>70% </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- skill-area end -->
     <!-- porfolio-area start -->
     <section class="porfolio-area mb-50" id="my-porfolio">
         <div class="container">
             <div class="row  justify-content-end  col-rev">

                 <div class="col-xl-8 col-lg-10 col-md-10">
                     <div class="portfolio-menu mt-sm-0 mt-md-5 mt-lg-5 ">
                         <ul class="list-inline mb-30" id="portfolio-flters">
                             <li class="mx-3 active" data-filter="*">All Projects</li>
                             
                         </ul>
                     </div>

                     <div class="portfolio-container row">
                        {{-- @foreach ($project as $item) --}}
                            
                      
                         <div class="portfolio-item first  col-sm-6 col-md-4 mb-4">
                             {{-- <div class=" portfolio-img rounded overflow-hidden">
                                <h4>{{$item->project_name}}</h1>
                                <p>{{$item->description}}</p>
                                 <a href="{{'upload/'.$item->project_demo}}" class="fancylight popup-btn"
                                     data-fancybox-group="light">
                                     <img class="img-fluid" src="project_demo" alt="">
                                     <div class="portfolio-btn">
                                         <button type="button"
                                             class="btn btn-lg-square btn-outline-secondary border-2 mx-1"><i
                                                 class="fa fa-eye"></i></button>
                                         <button type="button"
                                             class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i
                                                 class="fa fa-link"></i></button>
                                     </div>
                                 </a>
                             </div> --}}

                            
                            

                         </div>

    
</div>

<div class="container py-5">
    <div class="row g-4">
        @foreach ($project as $item)
        <div class="col-md-4">
            <div class="portfolio-item card shadow-sm rounded">
                <div class="portfolio-img position-relative overflow-hidden rounded">
                    <!-- Project Image with custom size -->
                    <img class="img-fluid w-100" src="{{ asset('upload/' . $item->project_demo) }}" alt="Project Image">
                    
                    <!-- Project Hover Buttons -->
                    <div class="portfolio-btn d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle opacity-0 hover-overlay">
                        <a href="{{ asset('upload/' . $item->project_demo) }}" class="btn btn-lg-square btn-outline-secondary border-2 mx-1" data-fancybox="gallery">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="#" class="btn btn-lg-square btn-outline-secondary border-2 mx-1">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>
                <!-- Project Details -->
                <div class="card-body text-center">
                    <h4 class="text-secondary">{{ $item->project_name }}</h4>
                    <p class="text-muted">{{ $item->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


                        
                     
                         
                         
                        
                       
                        

                     </div>
                 </div>
                 <div class="col-xl-2 col-lg-2 col-md-2">
                     <div class="rotation r-top-200 r-bottom-60 w-100">
                         <div class="section-title">
                             my <span>porfolio </span>
                         </div>
                         <a href="#my-education">
                             <p class="rotate">
                                 <i class="fas fa-arrow-up-long"></i>
                                 MY education
                             </p>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- porfolio-area end -->
    <!-- skill-area start -->
    <section class="education-area" id="my-education">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <div class="rotation r-top-200 r-bottom-60">
                        <div class="section-title">
                            my <span>education </span>
                        </div>
                        <a href="#my-experience">
                            <p class="rotate">
                                <i class="fas fa-arrow-up-long"></i>
                                MY Experience
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="timeline-container">
                       
                            
                  
                        <ul>
                            @foreach ($education as $item)
                            <li class="mx-auto">
                                <div class="timeline-content sku-bg">
                                    <div class="timeline-items">
                                        <div class="timeline-title">
                                            <h3>{{$item->degree}}</h3>
                                            <p>{{$item->department}}</p>
                                        </div>
                                        <div class="timeline-year mt-2">
                                        <h3>{{$item->session}}</h3>
                                        </div>
                                        <div class="timeline-year mt-2">
                                        <h3>{{$item->result}}</h3>
                                        </div>
                                    </div>
                                    <h3>{{$item->institue}}</h3>
                                </div>
                            </li>
                            @endforeach

                            <li>
                                <div class="timeline-content green-bg">
                                    <div class="timeline-items">
                                        <div class="timeline-title">
                                            <h3>PHD</h3>
                                            <p>At Oxforth University</p>
                                        </div>
                                        <div class="timeline-year">
                                            <h3>2011-15</h3>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, quisquam perferendis?
                                        Harum, expedita quod numquam ad</p>
                                </div>
                            </li> 
                            <li>
                                <div class="timeline-content pompelmo-bg">
                                    <div class="timeline-items">
                                        <div class="timeline-title">
                                            <h3>PHD</h3>
                                            <p>At Oxforth University</p>
                                        </div>
                                        <div class="timeline-year">
                                            <h3>2011-15</h3>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, quisquam perferendis?
                                        Harum, expedita quod numquam ad</p>
                                </div>
                            </li>

                        
                        </ul>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- skill-area end -->
    <!-- skill-area start -->
    <section class="experience-area" id="my-experience">
        <div class="container">

           
            <div class="row align-items-center justify-content-end">
                <div class="col-xl-8 col-lg-10 col-md-10">
                    <div class="text-center book-free mb-30">
                        <button class="s-btn book-btn">
                            <span>Book free consultation</span>
                            <i class="fas fa-angle-double-right"></i>
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="experience-des active d-flex align-items-center">
                                <img src="assets/img/experience.png" alt="experience">
                                <div>
                                    <h3>Lead Designer</h3>
                                    <h5>2015-Present</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="experience-des d-flex align-items-center">
                                <img src="assets/img/experience.png" alt="experience">
                                <div>
                                    <h3>Lead Designer</h3>
                                    <h5>2011-2014</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="experience-des d-flex align-items-center">
                                <img src="assets/img/experience.png" alt="experience">
                                <div>
                                    <h3>Lead Designer</h3>
                                    <h5>2011-2014</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="experience-des d-flex align-items-center">
                                <img src="assets/img/experience.png" alt="experience">
                                <div>
                                    <h3>Lead Designer</h3>
                                    <h5>2011-2014</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                   <div class="col-xl-2 col-lg-12 col-md-2">
                       <div class="rotation r-top-200 r-bottom-60 w-100">
                           <div class="section-title">
                               my <span> Experience </span>
                           </div>
                           <a href="#my-client">
                               <p class="rotate">
                                   <i class="fas fa-arrow-up-long"></i>
                                   Client Says
                               </p>
                           </a>
                       </div>
                   </div>
            </div>
        </div>
    </section>
    <!-- skill-area end -->
    <!-- skill-area end -->
    <section class="happy-client overlay"
        data-background="assets/img/laptop.png">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 mb-3">
                    <div class="happy-history">
                        <div>
                            <i class="fas fa-user-alt fa-3x"></i>
                        </div>
                        <div>
                            <h3 data-toggle="counter-up">102</h3>
                            <h6>Satisfid Client</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-3">
                    <div class="happy-history">
                        <div>
                            <i class="fas fa-mug-hot fa-3x"></i>
                        </div>
                        <div>
                            <h3 data-toggle="counter-up">502</h3>
                            <h6>Cup Of COffee</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-3">
                    <div class="happy-history">
                        <div>
                           <i class="fa-solid fa-bag-shopping fa-3x"></i>
                        </div>
                        <div>
                            <h3 data-toggle="counter-up">824</h3>
                            <h6>Copleted Project</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-3">
                    <div class="happy-history">
                        <div>
                           <i class="fa-solid fa-award fa-3x"></i>
                        </div>
                        <div>
                            <h3 data-toggle="counter-up">112</h3>
                            <h6>Award Win</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- skill-area end -->
 
    
    <!-- skill-area start -->
    <section class="client-area" id="my-client">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-md-2">
                    <div class="rotation r-top-200 r-bottom-60">
                        <div class="section-title">
                            Clients <span>Says </span>
                        </div>
                        <a href="#my-pricing">
                            <p class="rotate">
                                <i class="fas fa-arrow-up-long"></i>
                                MY Pricing
                            </p>
                        </a>
                    </div>
                </div>
       
                <div class="col-xl-9 col-lg-10 col-md-10">
                    <!-- Single Carousel Container -->
                    <div class="owl-carousel testimonial-carousel owl-theme">
                        @foreach ($client as $item)
                            <div class="testimonial-item text-center">
                                <div class="position-relative mb-5">
                                    <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto"
                                        src="assets/img/testimonial-1.jpg" alt="">
                                    <div class="testimonial-icon">
                                        <i class="fa fa-quote-left text-primary"></i>
                                    </div>
                                </div>
                                <p class="fs-5 fst-italic">{{$item->desc}}</p>
                                <hr class="w-25 mx-auto">
                                <h5>{{$item->name}}</h5>
                                <span>{{$item->profession}}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                
         
            </div>
        </div>
    </section>
    <!-- skill-area end -->

    <!-- skill-area end -->
    <section class="collaborator-wrapper sec-padding-70">
        <div class="container">
            <div class="collaborator-slider owl-carousel">
                <div class="collaborator-items">
                    <a href="#">
                        <img src="assets/img/company3.png" alt="company3">
                    </a>
                </div>
                <div class="collaborator-items">
                    <a href="#">
                        <img src="assets/img/company2.png" alt="company3">
                    </a>
                </div>
                <div class="collaborator-items">
                    <a href="#">
                        <img src="assets/img/company1.png" alt="company3">
                    </a>
                </div>
                <div class="collaborator-items">
                    <a href="#">
                        <img src="assets/img/company.png" alt="company3">
                    </a>
                </div>
                <div class="collaborator-items">
                    <a href="#">
                        <img src="assets/img/company1.png" alt="company3">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- skill-area end -->
     <section class="pricing-area overlay d-none" id="my-pricing" data-background="assets/img/laptop.png">
         <div class="container">
             <div class="row align-items-center justify-content-end col-rev">
                 <div class="col-md-10">
                     <div class="row">
                         <div class="col-sm-6 col-md-4 mb-4">
                             <div
                                 class="card-wrapper d-flex flex-column text-center align-items-center justify-content-center ">
                                 <div class="card-price yellow-bg w-100">
                                     <h2>$500</h2>
                                 </div>
                                 <div class="card-details bg-white w-100">
                                     <ul class=" my-3">
                                         <li>1 Website</li>
                                         <li>1GB Storage </li>
                                         <li> 10GB Bandwidth</li>
                                         <li> 100 Email</li>
                                         <li>24/7 Support</li>
                                     </ul>
                                 </div>
                                 <div class="card-button sku-bg w-100 border-0">
                                     <a class="text-uppercase" href="#">Get it</a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-sm-6 col-md-4 mb-4">
                             <div class="card-wrapper d-flex flex-column text-center align-items-center
                                justify-content-center mt-sm-40">
                                 <div class="project-base w-100">
                                     <p class="text-uppercase text-white">project base</p>
                                 </div>
                                 <div class="card-price green-bg w-100 border-radious-0">
                                     <h2>$500</h2>
                                 </div>
                                 <div class="card-details bg-white w-100">
                                     <ul class=" my-3">
                                         <li>1 Website</li>
                                         <li>1GB Storage </li>
                                         <li> 10GB Bandwidth</li>
                                         <li> 100 Email</li>
                                         <li>24/7 Support</li>
                                     </ul>
                                 </div>
                                 <div class="card-button pompelmo-bg w-100 border-0">
                                     <a class="text-uppercase" href="#">Get it</a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-sm-6 col-md-4 mb-4">
                             <div
                                 class="card-wrapper d-flex flex-column text-center align-items-center justify-content-center border-0">
                                 <div class="card-price pompelmo-bg w-100">
                                     <h2>$50k</h2>
                                 </div>
                                 <div class="card-details bg-white w-100">
                                     <ul class=" my-3">
                                         <li>1 Website</li>
                                         <li>1GB Storage </li>
                                         <li> 10GB Bandwidth</li>
                                         <li> 100 Email</li>
                                         <li>24/7 Support</li>
                                     </ul>
                                 </div>
                                 <div class="card-button yellow-bg w-100 border-0">
                                     <a class="text-uppercase" href="#">Get it</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-2">
                     <div class="rotation r-top-200 r-bottom-60 w-100">
                         <div class="section-title text-white">
                             Pricing <span> Plan </span>
                         </div>
                         <a href="#my-blog">
                             <p class="rotate text-white">
                                 <i class="fas fa-arrow-up-long"></i>
                                 view blog
                             </p>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="pricing-area overlay price-section" id="my-pricing" data-background="assets/img/laptop.png">
         <div class="container">
             <div class="row align-items-center justify-content-end col-rev">
                 <div class="col-md-10">
                   <div class="inner-container">
                      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                  data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                  aria-selected="true">Starter</button>
                          </li>
                          <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                  data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                  aria-selected="false">Advanced</button>
                          </li>
                          <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                  data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                  aria-selected="false">Growth</button>
                          </li>
                      </ul>

                   </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-6 mb-4">
                                    <!-- Left section -->
                                    <div class="left-col card">
                                        <h5>Monthly Plan</h5>
                                        <h3 class="fw-700">Standard Package</h3>
                                        <h2 class="fw-700 mt-4"><span>$340</span></h2>
                                        <p class="mt-3">Molestie cras ullamcorper purus sit risus, commodo ut arcu orci
                                            lacus,
                                            odio
                                            luctus augue bibendum pharetra augue bibendum pharetra</p>
                                        <ul class="mt-4">
                                            <li>
                                                <p class="fw-400 mt-1">Augue bibendum pharetra</p>
                                            </li>
                                            <li>
                                                <p class="fw-400  mt-1">Ullamcorper purus sit risus, commodo</p>
                                            </li>
                                            <li>
                                                <p class="fw-400  mt-1">Augue bibendum pharetra</p>
                                            </li>
                                            <li>
                                                <p class="fw-400  mt-1">Tempus arcu euismod.</p>
                                            </li>
                                        </ul>
                                        <!-- Button  -->
                                        <div class="main-btn mt-3">
                                            <button class="s-btn-1" type="button" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Get
                                                Started</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6 mb-4">
                                    <!-- Right section -->
                                    <div class="right-col card">
                                        <h5>Monthly Plan</h5>
                                        <h3 class="fw-700">Standard Package</h3>
                                        <h2 class="fw-700 mt-4"><span>$720</span></h2>
                                        <p class="mt-3">Molestie cras ullamcorper purus sit risus, commodo ut arcu orci
                                            lacus,
                                            odio
                                            luctus augue bibendum pharetra augue bibendum pharetra</p>
                                        <ul class="mt-4">
                                            <li>
                                                <p class="fw-400 mt-1">Augue bibendum pharetra </p>
                                            </li>
                                            <li>
                                                <p class="fw-400  mt-1">Ullamcorper purus sit risus, commodo </p>
                                            </li>
                                            <li>
                                                <p class="fw-400  mt-1">Augue bibendum pharetra</p>
                                            </li>
                                            <li>
                                                <p class="fw-400  mt-1">Tempus arcu euismod.</p>
                                            </li>
                                        </ul>
                                        <!-- Button  -->
                                        <div class="main-btn mt-3">
                                            <button class="s-btn" type="button" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Get
                                                Started</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-6 mb-4">
                                    <!-- Left section -->
                                    <div class="left-col card">
                                        <h5>Monthly Plan</h5>
                                        <h3 class="fw-700">Standard Package</h3>
                                        <h2 class="fw-700 mt-4"><span>$340</span></h2>
                                        <p class="mt-3">Molestie cras ullamcorper purus sit risus, commodo ut arcu orci
                                            lacus,
                                            odio
                                            luctus augue bibendum pharetra augue bibendum pharetra</p>
                                        <ul class="mt-4">
                                            <li>
                                                <p class="fw-400 mt-1">Augue bibendum pharetra</p>
                                            </li>
                                            <li>
                                                <p class="fw-400  mt-1">Ullamcorper purus sit risus, commodo</p>
                                            </li>
                                            <li>
                                                <p class="fw-400  mt-1">Augue bibendum pharetra</p>
                                            </li>
                                            <li>
                                                <p class="fw-400  mt-1">Tempus arcu euismod.</p>
                                            </li>
                                        </ul>
                                        <!-- Button  -->
                                        <div class="main-btn mt-3">
                                            <button class="s-btn-1" type="button" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Get
                                                Started</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6 mb-4">
                                    <!-- Right section -->
                                    <div class="right-col card">
                                        <h5>Monthly Plan</h5>
                                        <h3 class="fw-700">Standard Package</h3>
                                        <h2 class="fw-700 mt-4"><span>$820</span></h2>
                                        <p class="mt-3">Molestie cras ullamcorper purus sit risus, commodo ut arcu orci
                                            lacus,
                                            odio
                                            luctus augue bibendum pharetra augue bibendum pharetra</p>
                                        <ul class="mt-4">
                                            <li>
                                                <p class="fw-400 mt-1">Augue bibendum pharetra </p>
                                            </li>
                                            <li>
                                                <p class="fw-400  mt-1">Ullamcorper purus sit risus, commodo </p>
                                            </li>
                                            <li>
                                                <p class="fw-400  mt-1">Augue bibendum pharetra</p>
                                            </li>
                                            <li>
                                                <p class="fw-400  mt-1">Tempus arcu euismod.</p>
                                            </li>
                                        </ul>
                                        <!-- Button  -->
                                        <div class="main-btn mt-3">
                                            <button class="s-btn" type="button" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Get
                                                Started</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-6 mb-4">
                                    <!-- Left section -->
                                    <div class="left-col card">
                                        <h5>Monthly Plan</h5>
                                        <h3 class="fw-700">Standard Package</h3>
                                        <h2 class="fw-700 mt-4"><span>$540</span></h2>
                                        <p class="mt-3">Molestie cras ullamcorper purus sit risus, commodo ut arcu orci
                                            lacus,
                                            odio
                                            luctus augue bibendum pharetra augue bibendum pharetra</p>
                                        <ul class="mt-4">
                                            <li>
                                                <p class="fw-400 mt-1">Augue bibendum pharetra</p>
                                            </li>
                                            <li>
                                                <p class="fw-400  mt-1">Ullamcorper purus sit risus, commodo</p>
                                            </li>
                                            <li>
                                                <p class="fw-400  mt-1">Augue bibendum pharetra</p>
                                            </li>
                                            <li>
                                                <p class="fw-400  mt-1">Tempus arcu euismod.</p>
                                            </li>
                                        </ul>
                                        <!-- Button  -->
                                        <div class="main-btn mt-3">
                                            <button class="s-btn-1" type="button" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Get
                                                Started</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6 mb-4">
                                    <!-- Right section -->
                                    <div class="right-col card">
                                        <h5>Monthly Plan</h5>
                                        <h3 class="fw-700">Standard Package</h3>
                                        <h2 class="fw-700 mt-4"><span>$720</span></h2>
                                        <p class="mt-3">Molestie cras ullamcorper purus sit risus, commodo ut arcu orci
                                            lacus,
                                            odio
                                            luctus augue bibendum pharetra augue bibendum pharetra</p>
                                        <ul class="mt-4">
                                            <li>
                                                <p class="fw-400 mt-1">Augue bibendum pharetra </p>
                                            </li>
                                            <li>
                                                <p class="fw-400  mt-1">Ullamcorper purus sit risus, commodo </p>
                                            </li>
                                            <li>
                                                <p class="fw-400  mt-1">Augue bibendum pharetra</p>
                                            </li>
                                            <li>
                                                <p class="fw-400  mt-1">Tempus arcu euismod.</p>
                                            </li>
                                        </ul>
                                        <!-- Button  -->
                                        <div class="main-btn mt-3">
                                            <button class="s-btn" type="button" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Get
                                                Started</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                     
                 </div>
                 <div class="col-md-2">
                     <div class="rotation r-top-200 r-bottom-60 w-100">
                         <div class="section-title text-white">
                             Pricing <span> Plan </span>
                         </div>
                         <a href="#my-blog">
                             <p class="rotate text-white">
                                 <i class="fas fa-arrow-up-long"></i>
                                 view blog
                             </p>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </section>
    
    <!-- blog-area start -->
    <section class="blog-area sec-padding-70" id="my-blog">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-md-2">
                    <div class="rotation r-top-200 r-bottom-60">
                        <div class="section-title">
                            my <span>Blog </span>
                        </div>
                        <a href="#my-contact">
                            <p class="rotate">
                                <i class="fas fa-arrow-up-long"></i>
                                contact
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-10 col-md-10">
                   <div class="text-center book-free mb-30">
                       <button class="s-btn book-btn">
                           <span>Book free consultation</span>
                           <i class="fas fa-angle-double-right"></i>
                       </button>
                   </div>
                   <div class="blog-card col-rev">
                       
                       <div class="blog-card-body mr-n-25">
                           <div class="blog-card-caption">
                               <p class="date">
                                   12
                                   <span class="d-block">April</span>

                               </p>
                               <p>
                                   <a href="#"><i class="fas fa-comment"></i> 123</a>
                               </p>
                               <p>
                                   <a href="#"><i class="fas fa-heart"></i> 123</a>
                               </p>
                           </div>

                           <div class="blog-card-des">
                               <h5 class="blog-card-title"> <b> Consectetur adipisicing elit</b></h5>
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet nesciunt qui sit velit
                                   delectus voluptates, repellat ipsum culpa id deleniti. Rerum debitis facilis
                                   accusantium
                                   neque numquam mollitia modi quasi distinctioLorem ipsum dolor sit amet, consectetur
                                   adipisicing elit. Amet nesciunt qui sit velit
                                   delectus voluptates, repellat ipsum culpa id deleniti. Rerum debitis facilis
                                   accusantium
                                   neque numquam mollitia modi quasi distinctio..</p>
                               <a href="blog.html" class="blog-card-link"> <b>Read more </b><i
                                       class="fas fa-angle-double-right"></i></a>
                           </div>
                       </div>
                       <div class="blog-card-header">
                           <img src="assets/img/img-1.jpg" class="blog-card-img" alt="imgs">
                       </div>
                   </div>
                   <div class="blog-card flex-columns-sm">
                       <div class="blog-card-header">
                           <img src="assets/img/img-1.jpg" class="blog-card-img" alt="imgs">
                       </div>
                       <div class="blog-card-body ml-n-25">
                           <div class="blog-card-caption">
                               <p class="date">
                                   12
                                   <span class="d-block">April</span>

                               </p>
                               <p>
                                   <a href="#"><i class="fas fa-comment"></i> 123</a>
                               </p>
                               <p>
                                   <a href="#"><i class="fas fa-heart"></i> 123</a>
                               </p>
                           </div>

                           <div class="blog-card-des">
                               <h5 class="blog-card-title"> <b> Consectetur adipisicing elit</b></h5>
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet nesciunt qui sit velit
                                   delectus voluptates, repellat ipsum culpa id deleniti. Rerum debitis facilis
                                   accusantium
                                   neque numquam mollitia modi quasi distinctioLorem ipsum dolor sit amet, consectetur
                                   adipisicing elit. Amet nesciunt qui sit velit
                                   delectus voluptates, repellat ipsum culpa id deleniti. Rerum debitis facilis
                                   accusantium
                                   neque numquam mollitia modi quasi distinctio..</p>
                               <a href="blog.html" class="blog-card-link"> <b>Read more </b><i
                                       class="fas fa-angle-double-right"></i></a>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- skill-area end -->
      <!-- contact-area start -->
      <section class="contact-area overlay" id="my-contact" data-background="assets/img/contact-bg.jpg">
          <div class="container">
              <div class="row align-items-center ">
                  <div class="col-xl-2 col-lg-2 col-md-2">
                      <div class="rotation r-top-200 r-bottom-60">
                          <div class="section-title text-white">
                              contact <span>With me </span>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-8 col-lg-10 col-md-10 justify-content-center">
                       <div class="contact_form">
                        <form class="row " method="post" action="{{route('contact.store')}}">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter your name">
                                </div>
                               
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group  mb-3">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <textarea class="form-control" name="message" id="message" rows="1"
                                        placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-center mt-20">
                                <button type="submit" value="submit" class="s-btn">
                                    <span>Send Message</span>
                                </button>
                            </div>
                        </form>
                       </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- contact-area end -->
</main>

<footer class="footer-area bg-white">
    <div class="container text-center">
        <p class="copyright-text py-3">
            © 2024 Design and Developed by
            <a href="https://timerni.com/">
                Timerni
                <img src="assets/img/Tri_logo.png" alt="logo" style=" width: 35px;
                margin-left: 4px;
                vertical-align: middle;">
            </a>
        </p>
    </div>
</footer>
<!-- footer-area end -->
 <!-- Modal -->
 <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form>
                     <div class="mb-3">
                         <label for="Name" class="form-label">Enter Your Name</label>
                         <input type="text" class="form-control" id="Name" aria-describedby="Name">
                     </div>
                     <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Email address</label>
                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                     </div>
                     <div class="mb-3">
                         <label for="Country" class="form-label">Country Name</label>
                         <input type="text" class="form-control" id="Country" aria-describedby="Country">
                     </div>


                     <button type="submit" class="s-btn">Submit</button>
                 </form>

             </div>
             <div class="modal-footer">
                 <button type="button" class="s-btn " data-bs-dismiss="modal">Close</button>
                 <button type="button" class="btn ">Save changes</button>
             </div>
         </div>
     </div>
 </div>
<!-- Jquery JS Link -->
<script src="{{asset('')}}assets/js/jquery.min.js"></script>
<!-- Bootstrap JS Link -->
<script src="{{asset('')}}assets/js/popper.min.js"></script>
<!-- carousel slider JS -->
<script src="{{asset('')}}assets/js/bootstrap.min.js"></script>
<script src="{{asset('')}}assets/js/owl.carousel.min.js"></script>
<script src="{{asset('')}}assets/js/wow.min.js"></script>
<script src="{{asset('')}}assets/js/waypoints.min.js"></script>
<script src="{{asset('')}}assets/js/isotope.pkgd.min.js"></script>
<script src="{{asset('')}}https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<script src="assets/js/counterup.min.js"></script>
<!-- Custom JS Link -->
<script src="{{asset('')}}assets/js/custom.js"></script> 
</body>
</html>