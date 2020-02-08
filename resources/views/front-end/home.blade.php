@extends('front-end.layout.master')

@section('content')

    <!-- Main Content -->
    <main>

      <!-- Hero -->
      <section id="hero" class="hero-style-3 d-flex align-content-center min-vh-100 align-items-center" style="background-position: right; background-repeat: no-repeat;background-image:url('front-end/images/grid.png');">
        <div class="cubes d-none d-xl-block">
          <img class="cube-1" src="{{ asset('/') }}front-end/images/cube1.png" alt="Cube Cando">
          <img class="cube-2" src="{{ asset('/') }}front-end/images/cube2.png" alt="Cube Cando">
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="offset-lg-1 col-lg-3 align-self-center">
              <h3>Web Design & <br>Software Development company</h3>
              <p class="lead">Website Design With Better Performance & Built-In Strategy That Simply Works Better.We Design, Build, Promote & Offer High Quality, Responsive & SEO Friendly Websites & High Quality Custom Software.</p>
              <a href="#" class="btn btn-outline btn-large">Get started</a>
            </div>
            <div class="offset-lg-1 col-lg-7">
              <img src="{{ asset('/') }}front-end/images/people-main.png" class="img-fluid" alt="Hero image" />
            </div>
          </div>
        </div>
      </section>

      <!-- Services -->
      <section id="services" class="text-center">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h3 class="mb-4">Our Services</h3>
              <img class="divider mb-5" src="{{ asset('/') }}front-end/images/divider.png" alt="Services" />
            </div>
          </div>
          <div class="row" style="height:430px;">
            <!-- Service Item 1 -->
            <div class="col-lg-4 align-self-start">
              <div class="border-gradient">
                <div class="service service-style-7" data-aos="zoom-in">
                  <img src="{{ asset('/') }}front-end/images/services1.png" alt="Services" />
                  <h6 class="service-title">Statistical Analysis</h6>
                  <span class="service-text">Monotonectally embrace empowered solutions for virtual best practices.</span>
                </div>
              </div>
            </div>
            <!-- Service Item 2 -->
            <div class="col-lg-4 align-self-center">
              <div class="border-gradient">
                <div class="service service-style-7" data-aos="zoom-in" data-aos-delay="100">
                  <img src="{{ asset('/') }}front-end/images/services2.png" alt="Services" />
                  <h6 class="service-title">Scientific Strategy</h6>
                  <span class="service-text">Monotonectally embrace empowered solutions for virtual best practices.</span>
                </div>
              </div>
            </div>
            <!-- Service Item 3 -->
            <div class="col-lg-4 align-self-end">
              <div class="border-gradient">
                <div class="service service-style-7" data-aos="zoom-in" data-aos-delay="200">
                  <img src="images/index-data/services/services3.png" alt="Services" />
                  <h6 class="service-title">Workflow Optimization</h6>
                  <span class="service-text">Monotonectally embrace empowered solutions for virtual best practices.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-none d-xl-block">
          <img class="services-cube" src="{{ asset('/') }}front-end/images/big-cube.png" alt="Services Cube">
        </div>
      </section>





      <!-- Process -->
      <section id="process">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h3 class="mb-4">Projects </h3>
              <img class="divider mb-5" src="{{ asset('/') }}front-end/images/divider.png" alt="Process" />
            </div>
          </div>
          
          <section id="key" class="text-center">
        <div class="container">
          <div class="row">
            <!-- Service Item 1 -->
            <div class="col-lg-3 align-self-start">
              <div class="border-gradient">
                <div class="service service-style-7" data-aos="zoom-in">
                  <img src="{{ asset('/') }}front-end/images/flow1.png" alt="Services" />
                  <h6 class="service-title">1. Inventory Management System</h6>
                  <span class="service-text">A complete Inventory Management System that...</span>
                </div>
              </div>
            </div>
            <!-- Service Item 2 -->
            <div class="col-lg-3 align-self-center">
              <div class="border-gradient">
                <div class="service service-style-7" data-aos="zoom-in" data-aos-delay="100">
                  <img src="https://image.freepik.com/free-vector/inventory-management-isometric-illustration_1124-929.jpg" alt="Services" height="100" width="200" />
                  <h6 class="service-title">2. Power calculation</h6>
                  <span class="service-text">Monotonectally embrace empowered solutions for virtual best practices.</span>
                </div>
              </div>
            </div>
            <!-- Service Item 3 -->
            <div class="col-lg-3 align-self-center">
              <div class="border-gradient">
                <div class="service service-style-7" data-aos="zoom-in" data-aos-delay="100">
                  <img src="{{ asset('/') }}front-end/images/flow3.png" alt="Services" />
                  <h6 class="service-title">3. Simulations</h6>
                  <span class="service-text">Monotonectally embrace empowered solutions for virtual best practices.</span>
                </div>
              </div>
            </div>
            <div class="col-lg-3 align-self-center">
              <div class="border-gradient">
                <div class="service service-style-7" data-aos="zoom-in" data-aos-delay="100">
                  <img src="{{ asset('/') }}front-end/images/flow3.png" alt="Services" />
                  <h6 class="service-title">3. Simulations</h6>
                  <span class="service-text">Monotonectally embrace empowered solutions for virtual best practices.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>











<!-- Team -->
<section id="portfolio" class="text-center">
        <div class="container">
          <div class="row mb-3">
            <div class="col">
              <h3 class="mb-4">Portfolio</h3>
              <img class="divider mb-5" src="{{ asset('/') }}front-end/images/divider.png" alt="Team" />
            </div>
          </div>
          <div class="row">
            <!-- Team Member 1 -->
            @forelse($ports as $portfolio)
            
            <div class="col-auto mb-4">
           
              <div class="border-square" style="width: 15rem;">
                <div class="team-member-style-3" data-aos="zoom-in" data-aos-delay="0">
                
                <img src="https://i.stack.imgur.com/cqYpU.png" height="100px"  alt="Team member">
                  
                  <h6 class="">{{$portfolio->title}}</h6>
                  <span class="">{!! $portfolio->description !!}</span>
                </div>
              </div>
            </div>
<br>
            @empty
            @endforelse
           
            
          </div>
          </div>
        </div>
        
      </section>

















      <!-- Skills -->
      <section id="skills" class="px-lg-5">
        <div class="container-fluid">
          <div class="row">
            <div class="offset-lg-1 col-lg-5" data-aos="fade-right" data-aos-delay="200">
              <img src="{{ asset('/') }}front-end/images/progress.png" class="img-fluid" alt="Progress">
            </div>
            <div class="col-lg-4 align-self-center" data-aos="fade-left" data-aos-delay="300">
              <h3 class="text-white mb-3">Quantitative analysis</h3>
              <h6 class="text-white">Data analysis includes but is not limited to:</h6>
              <p class="lead mb-2">Support with expiriment design</p>
              <div class="progress">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
              </div>
              <p class="lead mb-2">Assay analysis and optimization</p>
              <div class="progress">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 98%;" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">98%</div>
              </div>
              <p class="lead mb-2">Non-parametric statistics</p>
              <div class="progress">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
              </div>
            </div>
          </div>
        </div>
      </section>


      








      <!-- Process -->
      <section id="process">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h3 class="mb-4">The Process</h3>
              <img class="divider mb-5" src="{{ asset('/') }}front-end/images/divider.png" alt="Process" />
            </div>
          </div>
          <div class="row" style="height:430px;">
            <!-- Service Item 1 -->
            <div class="col-lg-4 align-self-start">
              <div class="border-gradient">
                <div class="service service-style-7" data-aos="zoom-in">
                  <img src="{{ asset('/') }}front-end/images/flow1.png" alt="Services" />
                  <h6 class="service-title">1. Bioinformatics</h6>
                  <span class="service-text">Monotonectally embrace empowered solutions for virtual best practices.</span>
                </div>
              </div>
            </div>
            <!-- Service Item 2 -->
            <div class="col-lg-4 align-self-center">
              <div class="border-gradient">
                <div class="service service-style-7" data-aos="zoom-in" data-aos-delay="100">
                  <img src="{{ asset('/') }}front-end/images/flow2.png" alt="Services" />
                  <h6 class="service-title">2. Power calculation</h6>
                  <span class="service-text">Monotonectally embrace empowered solutions for virtual best practices.</span>
                </div>
              </div>
            </div>
            <!-- Service Item 3 -->
            <div class="col-lg-4 align-self-end">
              <div class="border-gradient">
                <div class="service service-style-7" data-aos="zoom-in" data-aos-delay="200">
                  <img src="{{ asset('/') }}front-end/images/flow3.png" alt="Services" />
                  <h6 class="service-title">3. Simulations</h6>
                  <span class="service-text">Monotonectally embrace empowered solutions for virtual best practices.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- About -->
      <section id="about" class="px-lg-5">
        <div class="container-fluid">
          <div class="row">
            <div class="offset-lg-1 col-lg-5" data-aos="fade-right">
              <div class="about-splash align-self-center">
                <img src="{{ asset('/') }}front-end/images/about-image.png" alt="About us" class="img-fluid" />
              </div>
            </div>
            <div class="col-lg-5 align-self-center" data-aos="fade-left">
              <h5 class="text-primary mb-3">Why choose us</h5>
              <h3 class="text-white mt-0 mb-3">10 years of experience in data analysis</h3>
              <h6 class="text-white">Embrace empowered solutions for virtual best practices.</h6>
              <p class="lead">Out believe has request not how comfort evident. Up delight cousins we feeling minutes. Genius has looked end piqued spring.</p>
              <a class="video-btn mfp-iframe" href="https://www.youtube.com/watch?v=Scxs7L0vhZ4?autoplay=1"><i class="fas fa-play"></i></a>
            </div>
          </div>
        </div>
      </section>

      <!-- Pricing Tables -->
      <section id="pricing">
        <div class="container">
          <div class="row text-center">
            <div class="col-lg-12">
              <h5 class="text-primary mb-3">Pricing</h5>
              <h3 class="mt-1">Pick your plan</h3>
            </div>
          </div>
          <div class="row text-center">
            <div class="col">
              <label class="toggler toggler--is-active" id="filt-monthly">Monthly</label>
              <div class="toggle">
                <input type="checkbox" id="switcher" class="check">
                <b class="b switch"></b>
              </div>
              <label class="toggler" id="filt-yearly">Yearly</label>
            </div>
          </div>
          <div id="monthly" class="row mt-5" style="height:660px;">
            <!-- Table 1 -->
            <div class="col-lg-4 mb-5 align-self-start">
              <div class="border-gradient">
                <div class="card p-5 bg-dark border-dark" data-aos="zoom-in">
                  <h5 class="mb-0">Free</h5>
                  <h3 class="text-primary my-3">$0</h3>
                  <p>Single Access</p>
                  <p>With Ads</p>
                  <p>48h Support</p>
                  <a class="btn btn-secondary btn-medium" href="#contact">Get Started</a>
                </div>
              </div>
            </div>
            <!-- Table 2 -->
            <div class="col-lg-4 mb-5 align-self-center">
              <div class="border-gradient">
                <div class="card p-5 bg-dark border-dark" data-aos="zoom-in" data-aos-delay="100">
                  <h5 class="mb-0">Standard</h5>
                  <h3 class="text-primary my-3">$199</h3>
                  <p>Single Access</p>
                  <p>No Ads</p>
                  <p>24h Support</p>
                  <a class="btn btn-secondary btn-medium" href="#contact">Get Started</a>
                </div>
              </div>
            </div>
            <!-- Table 3 -->
            <div class="col-lg-4 mb-5 align-self-end">
              <div class="border-gradient">
                <div class="card p-5 bg-dark border-dark" data-aos="zoom-in" data-aos-delay="150">
                  <h5 class="mb-0">Advanced</h5>
                  <h3 class="text-primary my-3">$1999</h3>
                  <p>Team Access</p>
                  <p>No Ads</p>
                  <p>Extreme Support</p>
                  <a class="btn btn-secondary btn-medium" href="#contact">Get Started</a>
                </div>
              </div>
            </div>
          </div>
          <div id="yearly" class="hide row mt-5" style="height:660px;">
            <!-- Table 1 -->
            <div class="col-lg-4 mb-5 align-self-start">
              <div class="border-gradient">
                <div class="card p-5 bg-dark border-dark" data-aos="zoom-in">
                  <h5 class="mb-0">Free</h5>
                  <h3 class="text-primary my-3">$0</h3>
                  <p>Single Access</p>
                  <p>With Ads</p>
                  <p>48h Support</p>
                  <a class="btn btn-secondary btn-medium" href="#contact">Get Started</a>
                </div>
              </div>
            </div>
            <!-- Table 2 -->
            <div class="col-lg-4 mb-5 align-self-center">
              <div class="border-gradient">
                <div class="card p-5 bg-dark border-dark" data-aos="zoom-in" data-aos-delay="100">
                  <h5 class="mb-0">Standard</h5>
                  <h3 class="text-primary my-3">$1999</h3>
                  <p>Single Access</p>
                  <p>No Ads</p>
                  <p>24h Support</p>
                  <a class="btn btn-secondary btn-medium" href="#contact">Get Started</a>
                </div>
              </div>
            </div>
            <!-- Table 3 -->
            <div class="col-lg-4 mb-5 align-self-end">
              <div class="border-gradient">
                <div class="card p-5 bg-dark border-dark" data-aos="zoom-in" data-aos-delay="150">
                  <h5 class="mb-0">Advanced</h5>
                  <h3 class="text-primary my-3">$9999</h3>
                  <p>Team Access</p>
                  <p>No Ads</p>
                  <p>Extreme Support</p>
                  <a class="btn btn-secondary btn-medium" href="#contact">Get Started</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Team -->
      <section id="team" class="text-center">
        <div class="container">
          <div class="row mb-3">
            <div class="col">
              <h3 class="mb-4">Team of Specialists</h3>
              <img class="divider mb-5" src="{{ asset('/') }}front-end/images/divider.png" alt="Team" />
            </div>
          </div>
          <div class="row">
            <!-- Team Member 1 -->
            <div class="col-auto mb-4">
           
              <div class="border-square" style="width: 15rem;">
                <div class="team-member-style-3" data-aos="zoom-in" data-aos-delay="0">
                  <img src="{{ asset('/') }}front-end/images/team/herbert.png" class="rounded-circle" alt="Team member">
                  <div class="member-social">
                    <a href="#" class="btn btn-facebook btn-circle"></a>
                    <a href="#" class="btn btn-twitter btn-circle"></a>
                    <a href="#" class="btn btn-instagram btn-circle"></a>
                  </div>
                  <h6 class="member-name">Abdullah Al Masud </h6>
                  <span class="member-title">CEO & Founder, Web Developer TwinsTech</span>
                </div>
              </div>
            </div>
            <!-- Team Member 1 -->
            <div class="col-auto mb-4">
           
              <div class="border-square" style="width: 15rem;">
                <div class="team-member-style-3" data-aos="zoom-in" data-aos-delay="100">
                  <img src="{{ asset('/') }}front-end/images/team/anton.png"  class="rounded-circle" alt="Team member">
                  <div class="member-social">
                    <a href="#" class="btn btn-facebook btn-circle"></a>
                    <a href="#" class="btn btn-twitter btn-circle"></a>
                    <a href="#" class="btn btn-instagram btn-circle"></a>
                  </div>
                  <h6 class="member-name">Al-Amin Hossain (Amit) </h6>
                  <span class="member-title">Co-CEO & Founder TwinsTech</span>
                </div>
              </div>
            </div>
            <!-- Team Member 1 -->
            <div class="col-auto mb-4">
           
              <div class="border-square" style="width: 15rem;">
                <div class="team-member-style-3" data-aos="zoom-in" data-aos-delay="200">
                  <img src="{{ asset('/') }}front-end/images/team/anton.png" class="rounded-circle" alt="Team member">
                  <div class="member-social">
                    <a href="#" class="btn btn-facebook btn-circle"></a>
                    <a href="#" class="btn btn-twitter btn-circle"></a>
                    <a href="#" class="btn btn-instagram btn-circle"></a>
                  </div>
                  <h6 class="member-name">Forhad Alam </h6>
                  <span class="member-title">Chief Marketing Executive TwinsTech </span>
                </div>
              </div>
            </div>
            <!-- Team Member 1 -->
            <div class="col-auto mb-4">
           
              <div class="border-square" style="width: 15rem;">
                <div class="team-member-style-3" data-aos="zoom-in" data-aos-delay="200">
                  <img src="{{ asset('/') }}front-end/images/team/herbert.png" class="rounded-circle" alt="Team member">
                  <div class="member-social">
                    <a href="#" class="btn btn-facebook btn-circle"></a>
                    <a href="#" class="btn btn-twitter btn-circle"></a>
                    <a href="#" class="btn btn-instagram btn-circle"></a>
                  </div>
                  <h6 class="member-name">Enamul Haque Rhidoy  </h6>
                  <span class="member-title">Php, Laravel, Vue.js Expert </span>
                </div>
              </div>
            </div>
            <!-- Team Member 1 -->
            <div class="col-auto mb-4">
           
              <div class="border-square" style="width: 15rem;">
                <div class="team-member-style-3" data-aos="zoom-in" data-aos-delay="200">
                  <img src="{{ asset('/') }}front-end/images/team/alda.png" class="rounded-circle" alt="Team member">
                  <div class="member-social">
                    <a href="#" class="btn btn-facebook btn-circle"></a>
                    <a href="#" class="btn btn-twitter btn-circle"></a>
                    <a href="#" class="btn btn-instagram btn-circle"></a>
                  </div>
                  <h6 class="member-name">Rukaiya Ratri </h6>
                  <span class="member-title">Video Editing Expert    TwinsTech</span>
                </div>
              </div>
            </div>
            <!-- Team Member 1 -->
            <div class="col-auto mb-4">
           
              <div class="border-square" style="width: 15rem;">
                <div class="team-member-style-3" data-aos="zoom-in" data-aos-delay="200">
                  <img src="{{ asset('/') }}front-end/images/team/adela.png" class="rounded-circle" alt="Team member">
                  <div class="member-social">
                    <a href="#" class="btn btn-facebook btn-circle"></a>
                    <a href="#" class="btn btn-twitter btn-circle"></a>
                    <a href="#" class="btn btn-instagram btn-circle"></a>
                  </div>
                  <h6 class="member-name">Khusbunnahar Anita  </h6>
                  <span class="member-title">Web Designer and Developer</span>
                </div>
              </div>
            </div>
            
          </div>
          </div>
        </div>
        
      </section>

     <!-- Achievements -->
     <section id="achievements" class="px-lg-5">
        <div class="container-fluid">
          <div class="row" style="height:400px;">
            <div class="offset-lg-1 col-lg-4 pr-lg-5 align-self-center" data-aos="fade-right">
              <h5 class="text-primary mb-3">We are proud</h5>
              <h3 class="mt-1">What we have achieved so far</h3>
            </div>
            <!-- Counter 1 -->
            <div class="col-lg-2 align-self-start">
              <div class="border-gradient">
                <div class="counter bg-dark" data-aos="zoom-in" data-aos-delay="0">
                  <span class="timer" data-from="1" data-to="20" data-speed="3000"></span>
                  <h6 class="timer-title">Projects Done</h6>
                </div>
              </div>
            </div>
            <!-- Counter 2 -->
            <div class="col-lg-2 align-self-center">
              <div class="border-gradient">
                <div class="counter bg-dark" data-aos="zoom-in" data-aos-delay="100">
                  <span class="timer" data-from="1" data-to="20" data-speed="3000"></span>
                  <h6 class="timer-title">Specialists</h6>
                </div>
              </div>
            </div>
            <!-- Counter 3 -->
            <div class="col-lg-2 align-self-end">
              <div class="border-gradient">
                <div class="counter bg-dark" data-aos="zoom-in" data-aos-delay="200">
                  <span class="timer" data-from="1" data-to="2" data-speed="3000"></span>
                  <h6 class="timer-title">Years of Experience</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



      <!-- Customers -->
      <section id="customers" class="text-white">
        <div class="figures d-none d-xl-block">
          <img class="figure-1" src="{{ asset('/') }}front-end/images/testimonials/01.png" alt="Figure Cando">
          <img class="figure-2" src="{{ asset('/') }}front-end/images/testimonials/02.png" alt="Figure Cando">
          <img class="figure-3" src="{{ asset('/') }}front-end/images/testimonials/03.png" alt="Figure Cando">
          <img class="figure-4" src="{{ asset('/') }}front-end/images/testimonials/04.png" alt="Figure Cando">
          <img class="figure-5" src="{{ asset('/') }}front-end/images/testimonials/05.png" alt="Figure Cando">
          <img class="figure-6" src="{{ asset('/') }}front-end/images/testimonials/06.png" alt="Figure Cando">
        </div>
        <div class="container">
          <div class="row mb-3 text-center">
            <div class="col">
              <h3 class="mb-4">Our customers say</h3>
              <img class="divider mb-5" src="images/index-data/divider.png" alt="Team" />
            </div>
          </div>
          <div class="row">
            <div class="col" data-aos="zoom-in" data-aos-delay="100">
              <!-- Opinions Carousel -->
              <div class="owl-testimonials-style-2 owl-carousel owl-theme">
                <!-- Opinion 1 -->
                <div class="item testimonial">
                  <span class="quote-message text-white">"We love the app. This should go up for an award or something!<br> Great response and exceptional quality."</span>
                  <div class="quote-info text-white">
                    <h6 class="quote-author text-white">Anna / Italy</h6>
                  </div>
                </div>
                <!-- Opinion 2 -->
                <div class="item testimonial">
                  <span class="quote-message text-white">"The application is wonderful and great to work with.<br> I could not be happier with my decision to download it."</span>
                  <div class="quote-info text-white">
                    <h6 class="quote-author text-white">Marcelo / Brazil</h6>
                  </div>
                </div>
                
                <!-- Opinion 3 -->
                <div class="item testimonial">
                  <span class="quote-message text-white">"We are amazed by the performance of iPhone app.<br> You have delivered a high-quality application"</span>
                  <div class="quote-info text-white">
                    <h6 class="quote-author text-white">Hana / Germany</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Achievements -->
      <section id="quote" class="pb-120 pt-120">
        <div class="container">
          <div class="row">
            <!-- Counter 1 -->
            <div class="col">
              <div data-aos="zoom-in" data-aos-delay="0">
                <div class="card border-darker bg-darker p-5 parallax" style="background-image:url(images/index-data/cta/quote.png);">
                  <div class="row">
                    <div class="col-md-4">
                      <h4 class="mt-0">Get started today</h4>
                      <p class="lead">Get 14 days trial for our standard plan plus a free analysis from our specialists.</p>
                    </div>
                    <div class="offset-md-2 col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" id="URLInput" placeholder="your website url">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" id="EmailInput" placeholder="your email">
                      </div>
                      <a href="#" class="btn btn-large btn-primary">Submit</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </main>

    
    

    <div class="back-to-top">
    	<a class="backToTop" href="#hero"><i class="fas fa-chevron-up"></i></a>
    </div>

@endsection