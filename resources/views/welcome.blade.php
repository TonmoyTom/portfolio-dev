@extends('layouts.frontend')

@section('content')
<section id="banner_part">
    <div class="banner_item" style="background: url({{ asset('frontend/images/bg.jpg')}})">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="banner_content ">
                        <h4>My Name Is Tonmoy</h4>
                        <div class="typed">
                            <h2 class="ah-headline">
                                <span class="color">A PROFFESIONAL</span>
                                <span class="ah-words-wrapper">
                                   <b class="is-visible">Web Designer </b>
                                   <b>Web Developer</b>
                                   <b>UI/UX DESIGNER </b>
                                </span>
                            </h2>
                        </div>
                        <div class="header_social_link">
                            <a href="https://www.facebook.com/KamrulZamanTonmoy" target="_blank">facebook</a>
                            <a href="https://www.facebook.com/KamrulZamanTonmoy" target="_blank" >twitter</a>
                            <a href="https://www.linkedin.com/in/kamrul-zaman-tonmoy-5a8642208/" target="_blank">Linkedin</a>
                            <a href="https://github.com/TonmoyTom" target="_blank">github</a>
                        </div>
                        <a href="{{ asset('frontend/images/cv.pdf')}}" target="_blank">Download CV </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!--  banner part  end  -->
  
  <!--  about part start   -->
  <section id="about_part">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-8 col-md-10 text-center">
                <div class="section_header">
                    <div class="sec_head_bg">
                        <h2>About Us</h2>
                        <i class="fas fa-anchor"></i>
                    </div>
                    <p>Providing the best quality of performance to accomplish the goal of the organization with utmost care as well as to achieve the professional skill and expertise for the betterment of the organization.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="about_inner">
                    <h3>My Name Is Tonmoy</h3>
                    <span>Designer,Developer & Markter</span>
                    <p>I am web designer. I usually work on the website. I work on the
                        website for 1 year. I have good skills on the website. I am usually a
                        student. I study at the university. I love working online as well as
                        studying. I do my job very well. </p>
                    <p>Well-versed in numerous
                        programming languages including HTML5, PHP OOP, CSS, MySQL.
                        Strong background in project management and customer
                        relations...</p>
                    <div class="social_media">
                        <a href="https://www.facebook.com/KamrulZamanTonmoy" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.facebook.com/KamrulZamanTonmoy" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/kamrul-zaman-tonmoy-5a8642208/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://github.com/TonmoyTom" target="_blank"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about_skill">
                    <h3>Awesome skills</h3>
                    <div class="skills">
                        <div class="skill">
                            <div class="skill-title">
                                PHP & Laravel
                            </div>
                            <div class="skill-bar" data-bar="95"><span></span></div>
                        </div>
                        <div class="skill">
                            <div class="skill-title">
                               HTML5,CSS3 & Bootstrap
                            </div>
                            <div class="skill-bar" data-bar="100"><span></span></div>
                        </div>
                        <div class="skill">
                            <div class="skill-title">
                                Javascript & JQuery
                            </div>
                            <div class="skill-bar" data-bar="80"><span></span></div>
                        </div>
                        <div class="skill">
                            <div class="skill-title">
                               WordPress
                            </div>
                            <div class="skill-bar" data-bar="95"><span></span></div>
                        </div>
                        <div class="skill">
                            <div class="skill-title">
                                Digital Marketing 
                            </div>
                            <div class="skill-bar" data-bar="90"><span></span></div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!--  about part end   -->
  
  <!--    counter part start -->
  <section id="counter_part">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="counter_inner">
                    <i class="fab fa-accusoft"></i>
                    <span class="counter">10</span>
                    <h4>Project Done</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter_inner">
                    <i class="far fa-smile"></i>
                    <span class="counter">05</span>
                    <h4>Happy Client</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter_inner">
                    <i class="fas fa-users"></i>
                    <span class="counter">10</span>
                    <h4>Our Team</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter_inner">
                    <i class="far fa-clock"></i>
                    <span class="counter">24</span>
                    <h4>Work Hours</h4>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!--    counter part end -->
  
  <!-- portfolio part start  -->
  <section id="portfolio_part">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-8 col-md-10  text-center">
                <div class="section_header">
                    <div class="sec_head_bg ">
                        <h2>Our Portfolio</h2>
                        <i class="fas fa-anchor"></i>
                    </div>
                      <p>Providing the best quality of performance to accomplish the goal of the organization with utmost care as well as to achieve the professional skill and expertise for the betterment of the organization.</p>
                </div>
            </div>
        </div>
  
        <div class="row">
            <div class="col-12">
                <ul class="filter_menu">
                    <li data-filter="all" class="active">All</li>
                    <li data-filter="1">Web Design</li>
                    <li data-filter="2">Web Development</li>
                    <li data-filter="3">Digital Marketing</li>
                </ul>
            </div>
        </div>
        <div class="filtr-container">
            <div class="col-lg-4 col-sm-6  filtr-item" data-category="1">
                <div class="home_gallary_img">
                    <img src="{{ asset('frontend/images/p1.jpg')}}" class="img-fluid" alt="">
                    <div class="overly">
                        <div class="overly_content">
                            <h4>Web Design</h4>
                            <p>You will find all of Project on Gitub.</p>
                            <a href="frontend/images/portfolio-1.jpg')}}" class="venobox" data-gall="gallery01"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 filtr-item" data-category="1">
                <div class="home_gallary_img">
                    <img src="{{ asset('frontend/images/p2.jpg')}}" class="img-fluid" alt="">
                    <div class="overly">
                        <div class="overly_content">
                            <h4>Web Design</h4>
                            <p>You will find all of Project on Gitub.</p>
                            <a href="frontend/images/portfolio-2.jpg')}}" class="venobox" data-gall="gallery01"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 filtr-item" data-category="2">
                <div class="home_gallary_img">
                    <img src="{{ asset('frontend/images/p3.jpg')}}" class="img-fluid" alt="">
                    <div class="overly">
                        <div class="overly_content">
                            <h4>Web Development</h4>
                            <p>You will find all of Project on Gitub.</p>
                            <a href="frontend/images/portfolio-3.jpg')}}" class="venobox" data-gall="gallery01"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 filtr-item" data-category="2">
                <div class="home_gallary_img">
                    <img src="{{ asset('frontend/images/p1.jpg')}}" class="img-fluid" alt="">
                    <div class="overly">
                        <div class="overly_content">
                            <h4>Web Development</h4>
                            <p>You will find all of Project on Gitub.</p>
                            <a href="frontend/images/portfolio-4.jpg')}}" class="venobox" data-gall="gallery01"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 filtr-item" data-category="3">
                <div class="home_gallary_img">
                    <img src="{{ asset('frontend/images/p4.jpg')}}" class="img-fluid" alt="">
                    <div class="overly">
                        <div class="overly_content">
                            <h4>Digital Marketing</h4>
                            <p>You will find all of Project on Gitub.</p>
                            <a href="frontend/images/portfolio-5.jpg')}}" class="venobox" data-gall="gallery01"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 filtr-item" data-category="3">
                <div class="home_gallary_img">
                    <img src="{{ asset('frontend/images/p3.jpg')}}" class="img-fluid" alt="">
                    <div class="overly">
                        <div class="overly_content">
                            <h4>Digital Marketing</h4>
                            <p>You will find all of Project on Gitub.</p>
                            <a href="frontend/images/portfolio-6.jpg')}}" class="venobox" data-gall="gallery01"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- portfolio part end  -->
  
  <!--    service part start -->
  <section id="service_part">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-8 col-md-10 text-center">
                <div class="section_header">
                    <div class="sec_head_bg">
                        <h2>Our Services</h2>
                        <i class="fas fa-anchor"></i>
                    </div>
                   <p>Providing the best quality of performance to accomplish the goal of the organization with utmost care as well as to achieve the professional skill and expertise for the betterment of the organization.</p>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-4 col-md-6">
                <div class="service_item">
                    <i class="fab fa-aws"></i>
                    <h3>web design</h3>
                    <p>A web designer works on the appearance, layout, and, in some cases, content of a website.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service_item">
                    <i class="fab fa-creative-commons"></i>
                    <h3>Creative Design</h3>
                    <p>Web design is the process of creating websites. It encompasses several different aspects, including webpage layout, content production, and graphic design.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service_item">
                    <i class="fab fa-accessible-icon"></i>
                    <h3>Digital Marketing</h3>
                    <p>Digital marketing is the act of promoting and selling products and services by leveraging online marketing tactics such as social media marketing, search marketing, and email marketing.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service_item">
                    <i class="fas fa-users"></i>
                    <h3>Custom Support</h3>
                    <p>Customer support is a service provided to help customers resolve any technical problems that they may have with a product or service.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service_item">
                    <i class="fab fa-android"></i>
                    <h3>Web Development</h3>
                    <p>Web development is the building and maintenance of websites.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service_item">
                    <i class="fas fa-sync"></i>
                    <h3>Strong Communication </h3>
                    <p>Strong communication skills is about being able to convey information to others in a simple and unambiguous way..</p>
                </div>
            </div>
        </div>
  
    </div>
  </section>
  <!--    service part start -->
  
  <!--   contact us part start -->
  <section id="contact_part">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-8 col-md-10 text-center">
                <div class="section_header">
                    <div class="sec_head_bg">
                        <h2>Contact us</h2>
                        <i class="fas fa-anchor"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem optio perspiciatis sint nulla animi laboriosam dignissimos, vitae quas necessitatibus voluptates accusantium.</p>
                </div>
            </div>
        </div>
  
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
                <div class="contact_form">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    <form action="{{route('contact')}}" method="POST"  >
                        @csrf
                      <div class="form-group">
                     
                        <input type="text"  placeholder="Name" class="form-control" name="name" style="color: #000;">
      
                       
                      </div>
                      <div class="form-group">
                        
                        <input type="text" placeholder="Email" class="form-control" name="email" style="color: #000;">
                      
      
                      
                      </div>
                      <div class="form-group">
                   
                        <input type="text" placeholder="Subject" class="form-control" name="subject" style="color: #000;">
                      
      
                      
                      </div>
                      <div class="form-group">
                        <textarea  name="message" placeholder="Message"  class="form-control" ></textarea><br> 
      

                      </div>

                  <div class="">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                 
                  </div>
                </form>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="contact_info">
                    <p><i class="fas fa-location-arrow"></i> 1-No Panowala Para,
                                                                23-No North Agrabad,<br>
                                                                Doublemooring,Chowmony,
                                                                Chittagong.</p>
                    <p><i class="fas fa-phone"></i> <a href="tell:+8801820-840336">+8801820-840336</a></p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:kamrulzamantonmoy@gmail.com">Kamrulzamantonmoy@gmail.com</a></p>
                    <div class="social_media">
                        <h4>Follow us:</h4>
                            <a href="https://www.facebook.com/KamrulZamanTonmoy" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.facebook.com/KamrulZamanTonmoy" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/in/kamrul-zaman-tonmoy-5a8642208/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://github.com/TonmoyTom" target="_blank"><i class="fab fa-github"></i></a>
                    </div>
  
                </div>
            </div>
        </div>
    </div>
  </section>
  <!--   contact us part end -->
  
@endsection
