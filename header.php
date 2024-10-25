<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
  <link rel="stylesheet" href="./assets/css/media-queries.css" />
  <link rel="stylesheet" href="./assets/css/animation.css">
  <!-- Swiper js -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <title>DesVader Practise</title>
  <?php wp_head();?>
</head>

<body>
  <!-- Main header -->
<header>
  <div class="main-header flex screen-width ">
    <div class="logo ">
      <img src="./assets/images/cropped-desvader-logo 1.png" alt="DesVader-Logo-1" />
    </div>
    <div class="nav-container gap flex ">
      <nav class=" nav nav-links ">
        <ul class="flex">
          <li><a class="navlinks" href="#services">Services</li></a>
          <li><a class="navlinks" href="#about">About</a></li>
          <li><a class="navlinks" href="#clients">Clients</a></li>
          <li><a class="navlinks" href="#media">Media</a></li>
          <li><a class="navlinks" href="#experts">Experts</a></li>
          <div class="header-icons gap flex none">
            <a href="https://www.linkedin.com/in/dhkurz/" target="_blank">
            <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M26.2778 29H3.72222C1.94264 29 0.5 27.5574 0.5 25.7778V3.22222C0.5 1.44264 1.94264 0 3.72222 0H26.2778C28.0574 0 29.5 1.44264 29.5 3.22222V25.7778C29.5 27.5574 28.0574 29 26.2778 29ZM21.1688 24.9722H25.4722V16.1317C25.4722 12.3912 23.3519 10.5827 20.3902 10.5827C17.4272 10.5827 16.1802 12.8901 16.1802 12.8901V11.0093H12.0329V24.9722H16.1802V17.6425C16.1802 15.6786 17.0842 14.5099 18.8146 14.5099C20.4052 14.5099 21.1688 15.6329 21.1688 17.6425V24.9722ZM4.52778 6.60435C4.52778 8.02722 5.67249 9.18092 7.08515 9.18092C8.49781 9.18092 9.64185 8.02722 9.64185 6.60435C9.64185 5.18148 8.49781 4.02778 7.08515 4.02778C5.67249 4.02778 4.52778 5.18148 4.52778 6.60435ZM9.26823 24.9722H4.94367V11.0093H9.26823V24.9722Z"
                fill="white" fill-opacity="0.7" />
            </svg></a>
            <a href="https://www.linkedin.com/in/dhkurz/" target="_blank">
            <svg width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_104_2159)">
                <path
                  d="M35.2492 9.8975C35.066 9.16584 34.693 8.49546 34.1679 7.95408C33.6428 7.4127 32.9841 7.01949 32.2583 6.81417C29.6067 6.16667 19 6.16667 19 6.16667C19 6.16667 8.39332 6.16667 5.74165 6.87583C5.01591 7.08116 4.3572 7.47437 3.83206 8.01575C3.30692 8.55713 2.93395 9.22751 2.75082 9.95917C2.26553 12.6502 2.02814 15.3801 2.04165 18.1146C2.02435 20.8696 2.26175 23.6203 2.75082 26.3317C2.95271 27.0406 3.33404 27.6855 3.85796 28.204C4.38187 28.7225 5.03067 29.0971 5.74165 29.2917C8.39332 30.0008 19 30.0008 19 30.0008C19 30.0008 29.6067 30.0008 32.2583 29.2917C32.9841 29.0863 33.6428 28.6931 34.1679 28.1517C34.693 27.6104 35.066 26.94 35.2492 26.2083C35.7307 23.5375 35.9681 20.8284 35.9583 18.1146C35.9756 15.3596 35.7382 12.6088 35.2492 9.8975Z"
                  stroke="white" stroke-opacity="0.7" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M15.5312 23.1558L24.3958 18.1146L15.5312 13.0733V23.1558Z" stroke="white" stroke-opacity="0.7"
                  stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
              </g>
              <defs>
                <clipPath id="clip0_104_2159">
                  <rect width="37" height="37" fill="white" transform="translate(0.5)" />
                </clipPath>
              </defs>
            </svg></a>
            <a href="#" class="button none">Make Contact</a>
          </div>
        </ul>
      </nav>
      <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">
        &#9776;</a>
    </div>
  </div>
</header>

<section class="animation">
<canvas id="particles"></canvas>
<!-- HEXAGON GRID -->
<div id="hexagonGrid"></div>
  
</section>
  <!-- Hero Section -->
  <section class="hero-section p-50">
    <div class="hero flex">
      <div class="hero-text column flex">
        <!-- hero-heading -->

        <h1 class="hero-heading h1">
          Welcome! I'm Desmond Kurz, founder of Des Vader Consulting.
        </h1>

        <!-- hero-paragraph -->

        <p class="hero-paragraph text-align f-20 white-3">
          With more than 30 years of business experience, I help companies
          develop effective growth strategies.
      </p>

        <p class="hero-paragraph white-2 text-align">
          I also leverage the Des Vader Expert Network to assemble teams of
          amazing, highly experienced people to deliver these strategies.
        </p>
        <!-- hero logos -->
        <div class="logo-section column flex">
          <div>
            <p class="text-align white-3 feature">Featured in</p>
          </div>

          <div class="hero-logos flex center">

            <img src="./assets/images/Bizcommunity.png" alt="bizcommunity-Logo" loading="lazy" />
            <img src="./assets/images/cliffcentral-logo.png" alt="cliffcentral-logo" loading="lazy" />
            <img src="./assets/images/ITweb-logo.png" alt="ITWEB-Logo" loading="lazy" />
            <img src="./assets/images/news24-logo.png" alt="news24-Logo" loading="lazy" />
            <img src="./assets/images/countytimes-logo.png" alt="county-times-logo" loading="lazy" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Business Services -->
  <section class="container p-50" id="services">

    <h2 class="heading h1">
      Business Services
    </h2>
    <p class="f-20 white-3 text-align">What I can do for your business</p>


    <div class="swiper mySwiper">
      <div class="stretch swiper-wrapper ">
        <!-- Card 1 -->
        <div class="  swiper-slide">
          <div class="card">
              <div class="card-image">
                <img src="./assets/images/service-1.png" alt="card-image" class="radius" loading="lazy">
              </div>
              <div class="services-text">
                <h3 class="white-3 text-align f-16">Deliver Qualified Leads</h3>
                <p class="text-align white-2 f-14">
                  Drive business growth with cost-effective, well-defined channel plans and promotional strategies that
                  generate high-quality leads through both digital and traditional methods.
                </p>
              </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="swiper-slide">
          <div class="card">
              <div class="card-image">
                <img src="./assets/images/service-2.png" alt="card-image" class="radius" loading="lazy">
              </div>
              <div class="services-text">
                <h3 class="white-3 text-align f-16">Enhance Customer Value</h3>
                <p class="text-align white-2 f-14">
                  Implement effective plans to extend customer duration and increase lifetime value, ensuring your
                  customer relationships are both long-lasting and profitable.
                </p>
              </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class=" swiper-slide">
          <div class="card">
              <div class="card-image">
                <img src="./assets/images/service-3.png" alt="card-image" class="radius" loading="lazy">
              </div>
              <div class="services-text">
                <h3 class="white-3 text-align f-16">Create Impactful Marketing Assets</h3>
                <p class="text-align white-2 f-14">
                  From websites to brochures, banners, and presentations, conceptualize and implement marketing assets
                  that resonate with your audience and strengthen your brand.
                </p>
              </div>
          </div>
        </div>

     <!-- Card 4 -->
        <div class="swiper-slide">
          <div class="card">
              <div class="card-image">
                <img src="./assets/images/service-4.png" alt="card-image" class="radius" loading="lazy">
              </div>
              <div class="services-text">
                <h3 class="white-3 text-align f-16">Measure Marketing Efficacy</h3>
                <p class="text-align white-2 f-14">
                  Implement tracking solutions that accurately measure the success of your marketing spend, ensuring you
                  get the best return on investment.
                </p>
              </div>
          </div>
        </div>


     <!-- Card 5 -->
        <div class=" swiper-slide">
          <div class="card">
              <div class="card-image">
                <img src="./assets/images/service-5.png" alt="card-image" class="radius" loading="lazy">
              </div>
              <div class="services-text">
                <h3 class="white-3 text-align f-16">Develop Reporting Frameworks</h3>
                <p class="text-align white-2 f-14">
                  Gain clear insights into your marketing operations with reporting frameworks that distill complex data into actionable information.
                </p>
              </div>
            </div>
        </div>
        
     <!-- Card 6 -->
        <div class="  swiper-slide">
          <div class="card">         
              <div class="card-image">
                <img src="./assets/images/service-6.png" alt="card-image" class="radius" loading="lazy">
              </div>
              <div class="services-text">
                <h3 class="white-3 text-align f-16">Optimize Marketing Automation</h3>
                <p class="text-align white-2 f-14">
                  Improve efficiency and reduce costs by optimizing marketing automation processes, ensuring seamless and effective campaign execution.           
                </p>
              </div>
            </div>
        </div>
        


     <!-- Card 7 -->
        <div class=" swiper-slide">
          <div class="card">
              <div class="card-image">
                <img src="./assets/images/service-7.png" alt="card-image" class="radius" loading="lazy">
              </div>
              <div class="services-text">
                <h3 class="white-3 text-align f-16">Skill Up Your Marketing Teams</h3>
                <p class="text-align white-2 f-14">
                  Empower your marketing teams with the skills and knowledge they need to execute effective strategies and drive results.   
                </p>
              </div>
            </div>
        </div>

     <!-- Card 8 -->
        <div class="  swiper-slide">
          <div class="card">
              <div class="card-image">
                <img src="./assets/images/service-8.png" alt="card-image" class="radius" loading="lazy">
              </div>
              <div class="services-text">
                <h3 class="white-3 text-align f-16">Plan Achievable Strategies</h3>
                <p class="text-align white-2 f-14">
                  Develop and execute marketing strategies that are not only ambitious but also realistic and attainable.
                </p>
              </div>
            </div>
        </div>

     <!-- Card 9 -->
        <div class=" swiper-slide">
          <div class="card">
              <div class="card-image">
                <img src="./assets/images/service-9.png" alt="card-image" class="radius" loading="lazy">
              </div>
              <div class="services-text">
                <h3 class="white-3 text-align f-16">Craft a Meaningful Brand</h3>
                <p class="text-align white-2 f-14">
                  Create a brand that gives purpose and meaning, resonating with your audience and setting you apart from the competition.   
                </p>
              </div>
            </div>
        </div>
        
      </div>
    </div>


  </section>

  <!-- Clients , Testimonials , Experts-->
  <section class="clients-container p-50" id="clients">

    <div class="client-container max-screen">
    <h2 class="h1 heading ">
      CLIENTS
    </h2>
    <p class="f-20 white-3 text-align">See some work and who I've worked with</p>


    <div class="swiper myClientSwiper">
       <div class="swiper-wrapper">

            <div class="swiper-slide">
           <div class="card w-100 h-100">
          <div class="logo-div">
          <img class="client-logos" src="./assets/images/debtline.png" alt="Debline-Logo" loading="lazy">
        </div>
        <p class=" client-name f-700 text-align f-14 white-3 ">Debtline</p>
        </div>
        </div>

     

        <div class="swiper-slide">
          <div class=" card w-100 h-100">
            <div class="logo-div">
              <img class="client-logos " src="./assets/images/wtalk.png" alt="Wyzetalk-Logo" loading="lazy">
            </div>
            <p class=" client-name f-700 text-align f-14 white-3 ">Wyzetalk</p>
          </div>
        </div>

        <div class="swiper-slide">
          <div class=" card w-100 h-100">
            <div class="logo-div">
              <img class="client-logos " src="./assets/images/hungry-lion.png" alt="HungryLion-Logo" loading="lazy">
            </div>
            <p class=" client-name f-700 text-align f-14 white-3 ">Hungry Lion</p>
          </div>
        </div>

        <div class="swiper-slide">
          <div class=" card w-100 h-100">
            <div class="logo-div">
              <img class="client-logos " src="./assets/images/vodac.png" alt="Vodacom" loading="lazy">
            </div>
            <p class=" client-name f-700 text-align f-14 white-3 ">Vodacom</p>
          </div>
        </div>

        <div class="swiper-slide">
          <div class=" card w-100 h-100">
            <div class="logo-div">
              <img class="client-logos" src="./assets/images/entersekt.png" alt="Entersekt" loading="lazy">
            </div>
            <p class=" client-name f-700 text-align f-14 white-3 ">Entersekt</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class=" card w-100 h-100">
            <div class="logo-div">
              <img class="client-logos" src="./assets/images/certsdev.png" alt="certificates.dev" loading="lazy">
            </div>
            <p class=" client-name f-700 text-align f-14 white-3 ">Certificates.dev</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class=" card w-100 h-100">
            <div class="logo-div">
              <img class="client-logos " src="./assets/images/Finchatbot.jpg" alt="FinChatBot" loading="lazy">
            </div>
            <p class=" client-name f-700 text-align f-14 white-3 ">FinChatBot</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class=" card w-100 h-100">
            <div class="logo-div">
              <img class="client-logos" src="./assets/images/Vueschool.jpg" alt="VueSchool" loading="lazy">
            </div>
            <p class=" client-name f-700 text-align f-14 white-3 ">Vueschool</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class=" card w-100 h-100">
            <div class="logo-div
              <img class="client-logos" src="./assets/images/Cortexlogic.jpg" alt="Cortexlogic" loading="lazy">
            </div>
            <p class=" client-name f-700 text-align f-14 white-3 ">Cortexlogic</p>
          </div>
        </div>

      </div>
    </div>  
    </div>
  
 


  <!-- Testimonials -->
  <div class="testimonial-container">

     <h2 class="h1 heading">TESTIMONIALS</h2>
     <p class="f-20 white-3 text-align">What my clients are saying </p> 
     <p class="f-20 white-3 text-align">And I love them too!</p>

<div class="testimonials">
  <swiper-container class=" myTestimonialSwiper stretch flex" init="false">
   
    <!-- Testimonial 1 -->
    <swiper-slide class="testimonial column flex">
      <div class="testimonial-profile">
        <div class="testimonial-image center ">
       <img src="./assets/images/Tashalene Reid.png" alt="Tashalene Reid Profile" loading="lazy">
      </div>
       <p class="text-align">Tashalene Reid</p>
       <p class="text-align f-15 white-2"> Experienced CEO | Strategic Leader 
         <a href="#" class="topo">@Topo.io</a>
        </p>
      </div>

       <div class="testimonial-text">
       <p class="text-align white-4">“Desmond was brilliant in helping me translate my big idea into a game-changing business strategy. His wealth of knowledge and experience across multiple industries has given him the ability to come up with creative solutions to complex challenges. “</p>
      </div>

          <a href="#" class="review white-2 text-align flex center">    
          <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_521_617)">
          <path d="M0.21875 2.34194C0.21875 1.59755 0.829359 0.993744 1.58262 0.993744H17.311C18.0642 0.993744 18.6749 1.59755 18.6749 2.34194V18.4663C18.6749 19.2109 18.0642 19.8145 17.311 19.8145H1.58262C0.829359 19.8145 0.21875 19.2109 0.21875 18.4663V2.34194Z" fill="#3963A4"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M5.8118 16.749V8.25042H3.02416V16.749H5.8118ZM4.41797 7.09008C5.39007 7.09008 5.99513 6.43748 5.99513 5.62192C5.97701 4.78801 5.39007 4.15352 4.43641 4.15352C3.48284 4.15352 2.85938 4.78801 2.85938 5.62192C2.85938 6.43748 3.4643 7.09008 4.3998 7.09008H4.41797Z" fill="white"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.35156 16.748H10.1392V12.0021C10.1392 11.7481 10.1573 11.4943 10.2309 11.3128C10.4324 10.8053 10.8911 10.2797 11.6612 10.2797C12.6699 10.2797 13.0734 11.059 13.0734 12.2015V16.748H15.8608V11.8751C15.8608 9.26468 14.4855 8.05002 12.6515 8.05002C11.1476 8.05002 10.4874 8.90179 10.1206 9.48196H10.1392V8.24944H7.35164C7.38822 9.0469 7.35156 16.748 7.35156 16.748Z" fill="white"/>
          </g>
          <defs>
          <clipPath id="clip0_521_617">
          <rect width="19" height="19.5" fill="white" transform="translate(0 0.553711)"/>
          </clipPath>
          </defs>
          </svg> Review</a>
        
    </swiper-slide>


    <!-- Testimonial 2 -->
    <swiper-slide class="testimonial column flex">
      <div class="testimonial-profile">
        <div class="testimonial-image center">
       <img src="./assets/images/Sabine Klisch.png" alt="Sabine Klisch" loading="lazy">
      </div>
       <p class="text-align">Sabine Klisch</p>
       <p class="text-align f-15 white-2">Global B2B Marketing & Comms Leader
        <a href="#" class="topo">@Topo.io</a>
      </p>
      </div>

       <div class="testimonial-text">
       <p class="text-align white-4">“Working with Desmond is a pleasure. He is not only a brilliant professional but also a colleague who leads and motivates people with inspiration and great ideas. I've always been amazed by his never-ending knowledge about the online world and online marketing in particular as well as creative ways to achieve return on investment.“</p>
      </div>

       
       
        <a href="#" class="review text-align  center white-2">
          <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_521_617)">
          <path d="M0.21875 2.34194C0.21875 1.59755 0.829359 0.993744 1.58262 0.993744H17.311C18.0642 0.993744 18.6749 1.59755 18.6749 2.34194V18.4663C18.6749 19.2109 18.0642 19.8145 17.311 19.8145H1.58262C0.829359 19.8145 0.21875 19.2109 0.21875 18.4663V2.34194Z" fill="#3963A4"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M5.8118 16.749V8.25042H3.02416V16.749H5.8118ZM4.41797 7.09008C5.39007 7.09008 5.99513 6.43748 5.99513 5.62192C5.97701 4.78801 5.39007 4.15352 4.43641 4.15352C3.48284 4.15352 2.85938 4.78801 2.85938 5.62192C2.85938 6.43748 3.4643 7.09008 4.3998 7.09008H4.41797Z" fill="white"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.35156 16.748H10.1392V12.0021C10.1392 11.7481 10.1573 11.4943 10.2309 11.3128C10.4324 10.8053 10.8911 10.2797 11.6612 10.2797C12.6699 10.2797 13.0734 11.059 13.0734 12.2015V16.748H15.8608V11.8751C15.8608 9.26468 14.4855 8.05002 12.6515 8.05002C11.1476 8.05002 10.4874 8.90179 10.1206 9.48196H10.1392V8.24944H7.35164C7.38822 9.0469 7.35156 16.748 7.35156 16.748Z" fill="white"/>
          </g>
          <defs>
          <clipPath id="clip0_521_617">
          <rect width="19" height="19.5" fill="white" transform="translate(0 0.553711)"/>
          </clipPath>
          </defs>
          </svg>Review</a>
         
    </swiper-slide>

<!-- Testimonial 3 -->
    <swiper-slide class="testimonial column flex mr-92">
      <div class="testimonial-profile">
        <div class="testimonial-image center ">
       <img src="./assets/images/Martin Duys.png" alt="Martin Duys Profile" loading="lazy">
      </div>
       <p class="text-align">Martin Duys</p>
       <p class="text-align f-15 white-2">PMO lead and Marketing Technologist
        <a href="#" class="topo">@Topo.io</a>
      </p>
      </div>

       <div class="testimonial-text">
       <p class="text-align white-4">“Des is smart, articulate, organised, and driven.He is a really good leader with a gentle but goal-oriented leadership style. He is an excellent strategic thinker, but backs up his strong thinking skills with delivery every time.”</p>
      </div>

       
    
        <a href="#" class="review text-align  center white-2"> 
          <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_521_617)">
          <path d="M0.21875 2.34194C0.21875 1.59755 0.829359 0.993744 1.58262 0.993744H17.311C18.0642 0.993744 18.6749 1.59755 18.6749 2.34194V18.4663C18.6749 19.2109 18.0642 19.8145 17.311 19.8145H1.58262C0.829359 19.8145 0.21875 19.2109 0.21875 18.4663V2.34194Z" fill="#3963A4"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M5.8118 16.749V8.25042H3.02416V16.749H5.8118ZM4.41797 7.09008C5.39007 7.09008 5.99513 6.43748 5.99513 5.62192C5.97701 4.78801 5.39007 4.15352 4.43641 4.15352C3.48284 4.15352 2.85938 4.78801 2.85938 5.62192C2.85938 6.43748 3.4643 7.09008 4.3998 7.09008H4.41797Z" fill="white"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.35156 16.748H10.1392V12.0021C10.1392 11.7481 10.1573 11.4943 10.2309 11.3128C10.4324 10.8053 10.8911 10.2797 11.6612 10.2797C12.6699 10.2797 13.0734 11.059 13.0734 12.2015V16.748H15.8608V11.8751C15.8608 9.26468 14.4855 8.05002 12.6515 8.05002C11.1476 8.05002 10.4874 8.90179 10.1206 9.48196H10.1392V8.24944H7.35164C7.38822 9.0469 7.35156 16.748 7.35156 16.748Z" fill="white"/>
          </g>
          <defs>
          <clipPath id="clip0_521_617">
          <rect width="19" height="19.5" fill="white" transform="translate(0 0.553711)"/>
          </clipPath>
          </defs>
          </svg>Review</a>
        
    </swiper-slide>


  </swiper-container>
  </div>
  </div>
  </div>

<!-- Experts Network-->
<div class="network-container max-screen"  id="network">
  <h2 class="h1 heading">DES VADER EXPERTS NETWORK</h2>
  <p class=" f-20 white-3 text-align">With track records as legendary as the Jedi Order.</p>

      <div class="swiper myNetworkSwiper">
         <div class="swiper-wrapper">
  
              <div class="swiper-slide">
             <div class=" network card w-100 h-100">
              <p class="text-align f-14 white-2">Strategist, growth hacker</p>
            <div class="logo-div">
            <img class="network-image" src="./assets/images/Desmond Kurz.png" alt="" loading="lazy">
          </div>
            <p class="text-align f-14 f-700">Des Vader Consulting</p>
            <p class="text-align f-14 white-2">Desmond Kurz</p>
          </div>
          </div>

              <div class="swiper-slide">
             <div class=" network card w-100 h-100">
              <p class="text-align f-14 white-2">Web Development</p>
            <div class="logo-div">
            <img class="network-image" src="./assets/images/Stefano Aracena.png" alt="" loading="lazy">
          </div>
            <p class="text-align f-14 f-700">Web2Web</p>
            <p class="text-align f-14 white-2">Stefano Aracena</p>
          </div>
          </div>
  
       
  
          <div class="swiper-slide">
            <div class=" network card w-100 h-100">
              <p class="text-align f-14 white-2">Sales generation</p>
              <div class="logo-div">
                <img class="network-image" src="./assets/images/Nick Wonfor.png" alt="" loading="lazy">
              </div>
                <p class="text-align f-14 f-700">Bookkeeping</p>
                <p class="text-align f-14 white-2">Nick Wonfor</p>
            </div>
          </div>
  
          <div class="swiper-slide">
            <div class=" network card w-100 h-100">
              <p class="text-align f-14 white-2">SEO & Bookkeeping</p>
              <div class="logo-div">
                <img class="network-image" src="./assets/images/Han Cillers.png" alt="" loading="lazy">
              </div>
                <p class="text-align f-14 f-700">Bookkeeping</p>
                <p class="text-align f-14 white-2">Han Cilliers</p>
            </div>
          </div>
  
          <div class="swiper-slide">
            <div class=" network card w-100 h-100">
              <p class="text-align f-14 white-2">Markerting Strategist</p>
              <div class="logo-div">
                <img class="network-image" src="./assets/images/Aletta Louw.png" alt="" loading="lazy">
              </div>
                <p class="text-align f-14 f-700">XYZ Inc.</p>
                <p class="text-align f-14 white-2">Aletta Louw</p>
            </div>
          </div>
  
          <div class="swiper-slide">
            <div class=" network card w-100 h-100">
              <p class="text-align f-14 white-2">Storyteller</p>
              <div class="logo-div">
                <img class="network-image" src="./assets/images/Shane Addinall.png" alt="" loading="lazy">
              </div>
                <p class="text-align f-14 f-700">Inkfish Digital</p>
                <p class="text-align f-14 white-2">Shane Addinall</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class=" network card w-100 h-100">
              <p class="text-align f-14 white-2">Event Specialist</p>
              <div class="logo-div">
                <img class="network-image" src="./assets/images/Camilla Wilson.png" alt="" loading="lazy">
              </div>
                <p class="text-align f-14 f-700">Wyzetalk</p>
                <p class="text-align f-14 white-2">Camilla Wilson</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class=" network card w-100 h-100">
              <p class="text-align f-14 white-2">Storyteller</p>
              <div class="logo-div">
                <img class="network-image" src="./assets/images/Kate Gibbs.jpeg" alt="" loading="lazy">
              </div>
                <p class="text-align f-14 f-700">CommuniKate</p>
                <p class="text-align f-14 white-2">Kate Gibbs</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class=" network card w-100 h-100">
              <p class="text-align f-14 white-2">Communication</p>
              <div class="logo-div">
                <img class="network-image" src="./assets/images/Valdi Peraira.png" alt="" loading="lazy">
              </div>
                <p class="text-align f-14 f-700">Bookkeeping</p>
                <p class="text-align f-14 white-2">Valdi Pereira</p>
            </div>
          </div>
        </div>
      </div>  
   
   </div> 
  </section>

<!-- Article -->
 <section class="container p-50" id="articles">

<h2 class="heading h1">ARTICLES</h2>
<p class="f-20 white-3 text-align"> Latest posts by Desmond (Des Vader) Kurtz</p>

<div class="swiper myArticleSwiper">
  <div class="swiper-wrapper">
    
    <!-- Card 1 -->
    <div class=" swiper-slide  article card">

          <div class="card-image">
            <img src="./assets/images/article 1.png" alt="whatsapp-picture" class="radius" loading="lazy">
          </div>
          <div class="article card-text  flex gap">
          <h3 class="text-align f-20">How Long Could We Live?</h3>
          <p class="text-align white-4">
            Examining Lifep Extending Technology Research Underway Today and Their Possible Implications.

            As a follow-up to my article on the origins and implications of the retirement age, I wanted to explore life expectancy and how this is likely to change in the reasonably foreseeable future and examine some of the implications, particularly on retirement planning. At age 51, you start to think about these things, or rather, you should.          </p>
          </div>
          <a href="https://www.linkedin.com/pulse/how-long-could-we-live-desmond-kurz-hpwff/?trackingId=4yINuZS2SIC%2BG1t6o%2FTKHw%3D%3D" target="_blank" class="button">Read More</a>
    </div>

    <!-- Card 2 -->
    <div class="swiper-slide article card">
          <div class="card-image">
            <img src="./assets/images/article 2.png" alt="whatsapp-picture" class="radius" loading="lazy">
          </div>
          <div class="article card-text flex gap">
          <h3 class="text-align f-20">Bringing Star Trek’s Holodeck to Life: How AI and Emerging Tech can Revolutionise Marketing</h3>
          <p class="text-align white-4">
            Imagine walking into a room where all of your wildest dreams come alive, where the line between reality and imagination blurs, and you are not only a spectator but a player. That is the essence of the Star Trek Holodeck. As a lifelong geek, I’ve often dreamed of a high-tech immersive experience like this one. With the development of AI technologies, we’re now really close to making that possible.           </p>
          </div>
          <a href="https://www.linkedin.com/pulse/bringing-start-treks-holodeck-life-how-ai-emerging-tech-desmond-kurz-42cyf/?trackingId=4yINuZS2SIC%2BG1t6o%2FTKHw%3D%3D" target="_blank" class="button">Read More</a>
    </div>

    <!-- Card 3 -->
    <div class="swiper-slide article card">
          <div class="card-image">
            <img src="./assets/images/article 3.png" alt="whatsapp-picture" class="radius" loading="lazy">
          </div>
          <div class="article card-text flex gap">
          <h3 class="text-align f-20">Free Website Traffic? Get These SEO Basics Right.</h3>
          <p class="text-align rgba">
            Search Engine Optimization (SEO) is crucial for making your website visible to potential customers searching for products or services like yours online. By implementing effective SEO practices, you ensure that your site appears in relevant search results, connecting you with the right audience. </p>
          </div>
          <a href="https://www.linkedin.com/pulse/free-website-traffic-get-seo-basics-right-desmond-kurz-v3kjf/?trackingId=4yINuZS2SIC%2BG1t6o%2FTKHw%3D%3D" target="_blank" class="button">Read More</a>
    </div>

    <!-- Card 4 -->
    <div class=" swiper-slide article card">
          <div class="card-image">
            <img src="./assets/images/article 4.png" alt="whatsapp-picture" class="radius" loading="lazy">
          </div>
          <div class="article card-text flex gap">
          <h3 class="text-align f-20">The Best AI Design Tool You’ve Never Heard Of—Until Now</h3>
          <p class="text-align white-4">
            One of the earliest mainstream examples of using artificial intelligence (AI) and machine learning to improve access and affordability is in the creative and design field.

            There is no denying that there is a long road ahead in determining the rules and limitations of what content a generative AI application should be allowed to access during its “formative years”, but that side of the conversation aside, what is incredibly exciting is the way the technology is making access to quality design work accessible to people who once thought it was out of their reach.          </p>
          </div>
          <a href="https://www.linkedin.com/pulse/best-ai-design-tool-youve-never-heard-ofuntil-now-desmond-kurz-st6kf/?trackingId=4yINuZS2SIC%2BG1t6o%2FTKHw%3D%3D" target="_blank" class="button">Read More</a>
    </div>

    <!-- Card 5 -->
    <div class="swiper-slide article card">
          <div class="card-image">
            <img src="./assets/images/article 5.png" alt="whatsapp-picture" class="radius" loading="lazy">
          </div>
          <div class="article card-text flex gap">
          <h3 class="text-align f-20">Dev backlogs stalling growth?</h3>
          <p class="text-align white-4">
            If you're anything like me, your brain is a buzzing hive of brilliant ideas, all primed to skyrocket your clients to the next level. But then reality kicks in, and I’m hit with the harsh truth: those amazing ideas are going nowhere fast because development resources are about as scarce as a Jedi in the Empire. The frustration is real—how can I conquer the galaxy when my hands are tied? It’s a real tragedy, like a Sith Lord who can’t find his lightsaber.          </p>
          </div>
          <a href="https://www.linkedin.com/pulse/dev-backlogs-stalling-growth-desmond-kurz-xcfyf/?trackingId=4yINuZS2SIC%2BG1t6o%2FTKHw%3D%3D" target="_blank" class="button">Read More</a>
    </div>

    <!-- Card 6-->
    <div class="swiper-slide article card">
      <!-- <div class=" article card"> -->
        <!-- <div class="card-content"> -->
          <div class="card-image">
            <img src="./assets/images/article 6.png" alt="whatsapp-picture" class="radius" loading="lazy">
          </div>
          <div class="article card-text flex gap">
          <h3 class="text-align f-20">The quick guide to getting your emails (actually) read</h3>
          <p class="text-align white-4">
            Imagine you’ve spent hours crafting the perfect email. It’s packed with valuable content beautifully designed, and you’re sure it will resonate with your audience. But there’s one problem: if no one opens it, all your hard work goes unnoticed. That really sucks, doesn’t it?          </p>
          </div>
          <a href="https://www.linkedin.com/pulse/quick-guide-getting-your-emails-actually-read-desmond-kurz-ydyff/?trackingId=4yINuZS2SIC%2BG1t6o%2FTKHw%3D%3D" target="_blank" class="button">Read More</a>
    </div>

    <!-- Card 7-->
    <div class="swiper-slide article card">
          <div class="card-image">
            <img src="./assets/images/article 7.png" alt="whatsapp-picture" class="radius" loading="lazy">
          </div>
          <div class="article card-text flex gap">
          <h3 class="text-align f-20">The 5 Steps to a Killer Content Strategy</h3>
          <p class="text-align white-4">
            In a world where we’re constantly bombarded with hundreds of pieces of content daily, it has become more important than ever for businesses to carefully consider how they show up to existing and potential customers. Impactful content that hits home is the heartbeat of any thriving business. It's no longer about filling spaces or making noise; it's about weaving a compelling story that your audience can identify with, fosters brand loyalty, and drives real results.          </p>
          </div>
          <a href="https://www.linkedin.com/pulse/5-steps-killer-content-strategy-desmond-kurz-s8ldf/?trackingId=4yINuZS2SIC%2BG1t6o%2FTKHw%3D%3D" target="_blank" class="button">Read More</a>
    </div>

    <!-- Card 8-->
    <div class="swiper-slide article card">
          <div class="card-image">
            <img src="./assets/images/article 8.png" alt="whatsapp-picture" class="radius" loading="lazy">
          </div>
          <div class="article card-text flex gap">
          <h3 class="text-align f-20">Thinking of retiring at 65? Think again.</h3>
          <p class="text-align white-4">
            I’m 51 years old at the moment, and I think about retirement often the older I get. From my perspective, I don’t want to retire because I love what I do, so why would I want to stop? That’s my view, but quite a few people that I talk to are already retired or are just holding in there waiting for that magic age. Certainly, the older you get, it becomes a very serious topic, so I thought I would explore the history and implications of the retirement age          </p>
          </div>
          <a href="https://www.linkedin.com/pulse/thinking-retiring-65-think-again-desmond-kurz-kb3pf/?trackingId=4yINuZS2SIC%2BG1t6o%2FTKHw%3D%3D
          " target="_blank" class="button">Read More</a>
    </div>

    <!-- Card 9-->
    <div class="swiper-slide article card">
          <div class="card-image">
            <img src="./assets/images/article 9.png" alt="whatsapp-picture" class="radius" loading="lazy">
          </div>
          <div class="article card-text flex gap">
          <h3 class="text-align f-20">Top 5 Considerations When Building Your Business Website</h3>
          <p class="text-align white-4">
            The world has gone digital, so a website is no longer a luxury for a business - it’s a necessity. I’ve been working with organizations to build websites since the late 90’s when Microsoft Frontpage was still around. Yes, I’m that old. 

            In almost three decades of doing this, I have learned a few things I would like to pass on so you can avoid building a website that simply doesn’t work for you. There are only 5 to consider, so make sure you read through all of them. Ready for the first one?          </p>
          </div>
          <a href="https://www.linkedin.com/pulse/top-5-considerations-when-building-your-business-website-desmond-kurz-hu0af/?trackingId=4yINuZS2SIC%2BG1t6o%2FTKHw%3D%3D" target="_blank" class="button">Read More</a>
    </div>

 </section>

<!-- The News -->
 <section class="news-container p-50 max-screen" id="articles">

  <h2 class="heading h1">IN THE NEWS</h2>
  <p class="f-20 white-3 text-align"> The latest press mentions</p>
  
  <div
  style="
    --swiper-navigation-color: #ffffff00;
    --swiper-pagination-color: #fff;
  "
  class="swiper mySwiper2">

    <div class="swiper-wrapper">
       <!-- Card 1 -->
       <div class="swiper-slide news card">
        <div class="card-image">
          <img src="./assets/images/whatssapp 1.png" alt="whatsapp-picture" class="radius" loading="lazy">
        </div>
        <div class="news card-text flex gap">
        <h3 class="text-align f-20">South Africans may soon be able to pay bills, buy clothes and get flight tickets through WhatsApp - here’s how it’ll work</h3>
        <p class="text-align white-4">
          WhatsApp recently released code which made paying bills and making online purchases via the social media platform possible.
          This week, Absa was the first South African bank to launch a WhatsApp banking service. South African consumers may soon be able to pay bills, make online purchases and receive flight booking passes through WhatsApp, says Desmond Kurz, marketing director at Clickatell. 
       </p>
      </div>    
    <a href="https://www.news24.com/news24/bi-archive/south-africans-may-soon-be-able-to-pay-bills-buy-clothes-and-access-flight-bookings-through-whatsapp-heres-how-itll-work-2018-8" target="_blank" class="button">Read More</a>

  </div>

      <!-- Card 2 -->
      <div class="swiper-slide news card">
            <div class="card-image">
              <img src="./assets/images/cliff-logo.png" alt="cliff-central-picture" class="radius" loading="lazy">
            </div>
            <div class="news card-text flex gap">
            <h3 class="text-align f-20">20.10.15 eSports</h3>
            <p class="text-align white-4">
              Desmond Kurz from Mweb joins Gareth Cliff and the team to explain the mysterious world of eSports. How physical are these activities? How much money does it generate? Millions are watching, even in live stadiums! Desmond mentions some of the more popular games and how they work. Does South Africa measure up globally, can our internet compete? eSports are not yet mainstream, but they're huge and worth checking out...
            </p>
          </div>
          <a href="https://iono.fm/e/219911" class="button">Read More</a>
      </div>

      <!-- Card 3 -->
      <div class="swiper-slide news card">
        <div class="card-image">
          <img src="./assets/images/web-logo.png" alt="whatsapp-picture" class="radius" loading="lazy">
        </div>
        <div class="news card-text flex gap">
        <h3 class="text-align f-20">SA servers to host free EA titles</h3>
        <p class="text-align white-4">
          Web GameZone has partnered with Multiplay, one of the top three game service providers in the world, to provide local servers for EA's free-to-play titles - Battlefield Heroes and Battlefield Play4Free.

          This is the second time MWeb has partnered to bring leading games to SA, following a Gameservers.com arrangement to host servers for Call of Duty: Black Ops.            </p>
        </div>
        <a href="https://www.itweb.co.za/article/sa-servers-to-host-free-ea-titles/PmxVE7KyAkXqQY85" target="_blank" class="button">Read More</a>
    </div>

      <!-- Card 4 -->
      <div class="swiper-slide news card">
        <div class="card-image">
         <img src="./assets/./images/soccer-picture.png" alt="soccer-related-picture" class="radius" loading="lazy">
        </div>
        <div class="news card-text flex gap">
        <h3 class="text-align f-20">Cape Town vs Joburg in FIFA13, COD Black Ops 2</h3>
        <p class="text-align white-4">
          MWEB and Mind Sport South Africa (MSSA) will be hosting a live eSports inter-regional competition this Friday, 19 July 2013, in which the best players in Cape Town take on the best players in Joburg in COD Black Ops 2 and FIFA13.Invited guests will get to support their city at the MWEB Cape Town auditorium in Parow. The matches will stream live with commentary from the MCave in Cape Town and The HIve in Joburg.</p>
        </div>
        <a href="https://www.bizcommunity.com/Article/196/544/96709.html" target="_blank" class="button">Read More</a>
      </div>
    </div>


      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    
    <div thumbsSlider="" class="swiper myNewsSwiper">
      <div class="swiper-wrapper">
          
       <!-- Card 1 -->
       <div class="swiper-slide news card">
            <div class="card-image">
              <img src="./assets/images/whatssapp 1.png" alt="whatsapp-picture" class="radius" loading="lazy">
            </div>
            <div class="news card-text flex gap">
            <h3 class="text-align f-20">South Africans may soon be able to pay bills, buy clothes and get flight tickets through WhatsApp - here’s how it’ll work</h3>
            <p class="text-align white-4">
              WhatsApp recently released code which made paying bills and making online purchases via the social media platform possible.
              This week, Absa was the first South African bank to launch a WhatsApp banking service. 
           </p>
          </div>    
        <a href="https://www.news24.com/news24/bi-archive/south-africans-may-soon-be-able-to-pay-bills-buy-clothes-and-access-flight-bookings-through-whatsapp-heres-how-itll-work-2018-8" target="_blank" class="button">Read More</a>

      </div>

      <!-- Card 2 -->
      <div class="swiper-slide news card">
            <div class="card-image">
              <img src="./assets/images/cliff-logo.png" alt="cliff-central-picture" class="radius" loading="lazy">
            </div>
            <div class="news card-text flex gap">
            <h3 class="text-align f-20">20.10.15 eSports</h3>
            <p class="text-align white-4">
              Desmond Kurz from Mweb joins Gareth Cliff and the team to explain the mysterious world of eSports. How physical are these activities? How much money does it generate? Millions are watching, even in live stadiums! Desmond mentions some of the more popular games and how they work. Does South Africa measure up globally, can our internet compete? eSports are not yet mainstream, but they're huge and worth checking out...
            </p>
          </div>
          <a href="https://iono.fm/e/219911" class="button">Read More</a>
      </div>

      <!-- Card 3 -->
      <div class="swiper-slide news card">
            <div class="card-image">
              <img src="./assets/images/web-logo.png" alt="whatsapp-picture" class="radius" loading="lazy">
            </div>
            <div class="news card-text flex gap">
            <h3 class="text-align f-20">SA servers to host free EA titles</h3>
            <p class="text-align white-4">
              Web GameZone has partnered with Multiplay, one of the top three game service providers in the world, to provide local servers for EA's free-to-play titles - Battlefield Heroes and Battlefield Play4Free.

              This is the second time MWeb has partnered to bring leading games to SA, following a Gameservers.com arrangement to host servers for Call of Duty: Black Ops.            </p>
            </div>
            <a href="https://www.itweb.co.za/article/sa-servers-to-host-free-ea-titles/PmxVE7KyAkXqQY85" target="_blank" class="button">Read More</a>
        </div>
  
      <!-- Card 4 -->
      <div class="swiper-slide news card">
            <div class="card-image">
             <img src="./assets/./images/soccer-picture.png" alt="soccer-related-picture" class="radius" loading="lazy">
            </div>
            <div class="news card-text flex gap">
            <h3 class="text-align f-20">Cape Town vs Joburg in FIFA13, COD Black Ops 2</h3>
            <p class="text-align white-4">
              MWEB and Mind Sport South Africa (MSSA) will be hosting a live eSports inter-regional competition this Friday, 19 July 2013, in which the best players in Cape Town take on the best players in Joburg in COD Black Ops 2 and FIFA13.</p>
            </div>
          <a href="https://www.bizcommunity.com/Article/196/544/96709.html" class="button">Read More</a>
      </div>


      </div>
   </section>

<!-- Videos , copy of the article swiper  -->
   <section class="container p-50" id="videos">
    <h2 class="h1 heading">Videos</h2>
    <p class="f-20 white-3 text-align">See the latest videos, podcasts and media by Des Vader</p>
  

   <div class="swiper myArticleSwiper">
    <div class="swiper-wrapper">

      <!-- Card 1 -->
      <div class="swiper-slide article card">
            <div class="card-image">
              <iframe width="560" height="315" class="radius" src="https://www.youtube.com/embed/2I8kLc3FN68?si=_lewjpVfePxLRs2g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="article card-text flex gap">
            <h3 class="text-align f-20">Des Vader Bot - The Technology That Will See Us Live to 100</h3>
            <p class="text-align white-4">   
              In this video, Des Vader Bot takes you on a journey through some of the most exciting medical breakthroughs that could extend human life well beyond 100 years! 🚀 From senolytics and telomere lengthening to genetic engineering and 3D-printed organs, the future of longevity is closer than you think.
            </p>
          </div>
          <a href="https://youtu.be/2I8kLc3FN68" target="_blank" class="button">Read More</a>
      </div>

      <!-- Card 2 -->
      <div class="swiper-slide article card">   
            <div class="card-image">
              <iframe width="560" height="315" class="radius"  src="https://www.youtube.com/embed/2-cpib4zbl4?si=o8hn2qeUUtcunAtu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="article card-text flex gap">
            <h3 class="text-align f-20">Des Vader Bot - Ray Kurzweil's Mind Blowing Predictions</h3>
            <p class="text-align white-4">
              In this quick 1-minute (ish) video, Des Vader Bot, Des Vader’s AI video generator, takes you on a journey through the top predictions of futurist Ray Kurzweil. From the rise of AI and the singularity to the promise of life extension and 3D-printed organs, these insights offer a glimpse into a world where technology is about to redefine what it means to be human.           
             </p>
            </div>
            <a href="https://youtu.be/2-cpib4zbl4" target="_blank" class="button">Read More</a>
      </div>

      <!-- Card 3 -->
      <div class="swiper-slide article card">
            <div class="card-image">
              <iframe width="560" height="315" class="radius" src="https://www.youtube.com/embed/zDuLQpufcLY?si=qsqfV1WTB2qZgUBr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="article card-text flex gap">
            <h3 class="text-align f-20">Des Vader Bot - The Quantum Internet Revolution Explained</h3>
            <p class="text-align rgba">
              Join Des Vader Bot, your go-to AI for all things tech, as he takes you on a futuristic journey into the world of the Quantum Internet. Discover what makes this technology so groundbreaking, from its unbreakable security features to real-world examples like the quantum network running under New York City and the 22-mile loop in Boston.           
            </p>
          </div>
          <a href="https://youtu.be/zDuLQpufcLY" target="_blank" class="button">Read More</a>
      </div>

      <!-- Card 4 -->
      <div class="swiper-slide article card">
            <div class="card-image">
              <iframe width="560" height="315" class="radius" src="https://www.youtube.com/embed/usAI3_iEUuY?si=3qLXaCYNVIpQqfWf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="article card-text flex gap">
            <h3 class="text-align f-20">Des Vader Bot - SEO Basics for Free Traffic</h3>
            <p class="text-align white-4">
              In this video, Des Vader Bot, trusty AI sidekick to Desmond Kurz, breaks down the key steps to mastering Search Engine Optimization (SEO) and driving free traffic to your website. From page titles and meta descriptions to fixing those pesky broken links, we've got you covered with the essentials! 
            </p>
          </div>
          <a href="https://youtu.be/usAI3_iEUuY?si=7W7dTDk-xzlaJwYD " target="_blank" class="button">Read More</a>
      </div>

      <!-- Card 5-->
      <div class="swiper-slide article card">
            <div class="card-image">
              <iframe width="560" height="315" class="radius" src="https://www.youtube.com/embed/6snXTC4T4Go?si=VG6JuIHzXde1m-xq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="article card-text flex gap">
            <h3 class="text-align f-20">Des Vader Short: The Secret to Getting Your Email Read</h3>
            <p class="text-align white-4">
              In this episode, I'm here to help you transform your email marketing efforts into successful campaigns. I'm your host, Desmond Kurz, also known as Des Vader, and with 17 years of email experience under my belt, I'm here to share the secrets of getting your emails opened and read.
            </p>
          </div>
          <a href="https://youtu.be/6snXTC4T4Go" target="_blank" class="button">Read More</a>
      </div>

      <!-- Card 6-->
      <div class="swiper-slide article card">
            <div class="card-image">
              <iframe width="560" height="315" class="radius" src="https://www.youtube.com/embed/aboUc6VX8QE?si=tMMVzYeuNIpAsTER" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="article card-text flex gap">
            <h3 class="text-align f-20">Des Vader Short: Generative AI for Marketers - ChatGPT vs Gemini</h3>
            <p class="text-align white-4">
              This Des Vader Short explores the use of Generative AI in marketing and which is the best tool to use. In this episode we look at two of the giants - OpenAI's ChatGPT and Google's Gemini. Let me know in the comments what you think?
             </p>
            </div>
            <a href="https://youtu.be/aboUc6VX8QE" target="_blank" class="button">Read More</a>
      </div>

      <!-- Card 7 -->
      <div class="swiper-slide article card">
            <div class="card-image">
              <iframe width="560" height="315" class="radius" src="https://www.youtube.com/embed/iKnAblhKBEk?si=FMJiEWFTieOfJMfe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="article card-text flex gap">
            <h3 class="text-align f-20">Des Vader: Crafting a Killer Email Subject Line #marketingprofessional </h3>
            <p class="text-align white-4">
              If you want your emails read, you need to know how to craft a killer subject line. I've used my 17 years of email experience to give you a quick guide on how to do this.  
              what we really here to talk about the subject line so what you need to think           
            </p>
            </div>
            <a href="https://youtu.be/iKnAblhKBEk?si=EUoiSUVxFZeMlj_k " target="_blank" class="button">Read More</a>
      </div>

      </div>
    </div>
  </section>

  <!-- Upcoming Events -->
   <section class="network-container p-50 max-screen">
    <h2 class="h1 heading">UPCOMING EVENTS</h2>
    <p class=" f-20 white-3 text-align">See my upcoming and newest events</p>
    

    <div class="swiper myNetworkSwiper">
      <div class="swiper-wrapper">

           <div class="swiper-slide">
          <div class="  card w-100 h-100">
            <div class="event">
           <p class="text-align f-16 white-3">24 July - 25 July</p>
         <img class="events" src="./assets/images/events.png" alt="" loading="lazy">
         <p class="text-align f-14 f-700 white-3">Comic Con Africa</p>
         <p class="text-align f-14 white-2">Panelist and Speaker</p>
         <a href="#" class="text-align f-14 white-2 ticket-button">Get your tickets now</a>
       </div>
       </div>
       </div>

    

       <div class="swiper-slide">
        <div class="  card w-100 h-100">
          <div class="event">
         <p class="text-align f-16 white-3">24 July - 25 July</p>
       <img class="events" src="./assets/images/events.png" alt="" loading="lazy">
       <p class="text-align f-14 f-700 white-3">Comic Con Africa</p>
       <p class="text-align f-14 white-2">Panelist and Speaker</p>
       <a href="#" class="text-align f-14 white-2 ticket-button">Get your tickets now</a>
     </div>
     </div>
     </div>

     <div class="swiper-slide">
      <div class="  card w-100 h-100">
        <div class="event">
       <p class="text-align f-16 white-3">24 July - 25 July</p>
     <img class="events" src="./assets/images/events.png" alt="" loading="lazy">
     <p class="text-align f-14 f-700 white-3">Comic Con Africa</p>
     <p class="text-align f-14 white-2">Panelist and Speaker</p>
     <a href="#" class="text-align f-14 white-2 ticket-button">Get your tickets now</a>
   </div>
   </div>
   </div>

   <div class="swiper-slide">
    <div class="  card w-100 h-100">
      <div class="event">
     <p class="text-align f-16 white-3">24 July - 25 July</p>
   <img class="events" src="./assets/images/events.png" alt="" loading="lazy">
   <p class="text-align f-14 f-700 white-3">Comic Con Africa</p>
   <p class="text-align f-14 white-2">Panelist and Speaker</p>
   <a href="#" class="text-align f-14 white-2 ticket-button">Get your tickets now</a>
 </div>
 </div>
 </div>

 <div class="swiper-slide">
  <div class="  card w-100 h-100">
    <div class="event">
   <p class="text-align f-16 white-3">24 July - 25 July</p>
 <img class="events" src="./assets/images/events.png" alt="" loading="lazy">
 <p class="text-align f-14 f-700 white-3">Comic Con Africa</p>
 <p class="text-align f-14 white-2">Panelist and Speaker</p>
 <a href="#" class="text-align f-14 white-2 ticket-button">Get your tickets now</a>
</div>
</div>
</div>

     </div>
     </div>

   </section>




 