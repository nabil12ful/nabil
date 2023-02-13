<x-frontend>
    <!-- HERO AREA -->
    <section class="hero-area" id="hero-area">
        <div class="container">
            <div class="hero-content d-flex justify-content-center">
                <div class="row d-flex align-items-center justify-content-center">

                    <div class="col-xl-6 order-xl-last image-block">
                        <div class="image-wrapper" data-tilt data-tilt-max="10">
                            <ul class="hero-icons">
                                <li>
                                    <i class="fab fa-php"></i>
                                </li>
                                <li>
                                    <i class="fab fa-laravel"></i>
                                </li>
                                <li>
                                    <i class="fab fa-git-alt"></i>
                                </li>
                                <li>
                                    <i class="fab fa-npm"></i>
                                </li>
                            </ul>
                            <img class="img-fluid" src="{{ asset('upload/basic/'.getAppData()->image) }}" alt="hero main image">
                        </div> <!-- .image-wrapper -->
                    </div> <!-- .image-block -->

                    <div class="col-xl-6 order-xl-first content-block">
                        <h1 class="hero-head"><small>Hello, I'm</small>Nabil<strong>Hamada</strong></h1>
                        <p>
                            I develop websites using ..
                        </p>
                        <div id="tech-tools" class="tech-tools">
                            @foreach (getLangs() as $lang)
                                <span>{{ $lang->name }}</span>
                            @endforeach
                        </div>
                        <div class="link-group">
                            <a class="btn-main" href="tel:{{ getContact()->phone }}">Contact Me</a>
                            <ul class="hero-social list-inline">
                                @if (!is_null(getContact()->facebook))
                                <li class="list-inline-item"><a href="{{ getContact()->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                @endif
                                @if (!is_null(getContact()->twitter))
                                <li class="list-inline-item"><a href="{{ getContact()->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                @endif
                                @if (!is_null(getContact()->linkedin))
                                <li class="list-inline-item"><a href="{{ getContact()->linkedin }}"><i class="fab fa-linkedin"></i></a></li>
                                @endif
                                @if (!is_null(getContact()->instagram))
                                <li class="list-inline-item"><a href="{{getContact()->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                @endif
                            </ul> <!-- .hero-social -->
                        </div> <!-- .link-group -->
                    </div> <!-- .content-block -->

                </div> <!-- .row -->
            </div> <!-- .hero-content -->
        </div> <!-- .container -->
        <div class="design-elements">
            <img class="de-hero-1 elem-updown" src="image/design-elements/hero-element-1.png" alt="hero element 1">
            <img class="de-hero-2 elem-move" src="image/design-elements/hero-element-2.png" alt="hero element 2">
            <img class="de-hero-3 elem-updown" src="image/design-elements/hero-element-3.png" alt="hero element 3">
            <img class="de-hero-4 elem-updown" src="image/design-elements/hero-element-4.png" alt="hero element 4">
            <img class="de-hero-5 elem-move" src="image/design-elements/hero-element-5.png" alt="hero element 5">
        </div> <!-- .design-elements -->
    </section> <!-- .hero-area -->

    <!-- INTRO SECTION -->
    <section class="intro-section section-block">
        <div class="container">
            <div class="section-title">
                <h2>{{ getMyWorld()->title }}</h2>
                <p class="lead">
                    {{getMyWorld()->desc}}
                </p>
            </div><!-- .section-title -->
            <div class="row">
                <div class="col-xl-4 col-lg-6" data-aos="fade-up">
                    <div class="item-wrapper">
                        <div class="icon-box"><i class="{{ getMyWorld()->icon1 }}"></i></div>
                        <div class="content-wrapper">
                            <h3>{{getMyWorld()->title1}}</h3>
                            <p>
                                {{getMyWorld()->desc1}}
                            </p>
                        </div> <!-- .content-wrapper -->
                    </div> <!-- .item-wrapper -->
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1200">
                    <div class="item-wrapper">
                        <div class="icon-box"><i class="{{ getMyWorld()->icon2 }}"></i></div>
                        <div class="content-wrapper">
                            <h3>{{ getMyWorld()->title2 }}</h3>
                            <p>
                                {{getMyWorld()->desc2}}
                            </p>
                        </div> <!-- .content-wrapper -->
                    </div> <!-- .item-wrapper -->
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1200">
                    <div class="item-wrapper">
                        <div class="icon-box"><i class="{{getMyWorld()->icon3}}"></i></div>
                        <div class="content-wrapper">
                            <h3>{{getMyWorld()->title3}}</h3>
                            <p>
                                {{getMyWorld()->desc3}}
                            </p>
                        </div> <!-- .content-wrapper -->
                    </div> <!-- .item-wrapper -->
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->

        <div class="design-elements">
            <img class="de-intro-1 elem-updown" src="image/design-elements/intro-element-1.png" alt="intro element 1">
        </div> <!-- .design-elements -->

    </section> <!-- .intro-section -->

    <!-- ABOUT SECTION -->
    <section class="about-section section-block" id="about-section" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 image-block" data-aos="fade-right" data-aos-delay="200" data-aos-duration="2000">
                    <div class="img-wrapper about-img-wrap" data-tilt data-tilt-max="10">
                        <img class="about-img-1 img-fluid" src="{{asset('upload/about/'.getAbout()->image1)}}" alt="about image">
                        <img class="about-img-2 img-fluid" src="{{asset('upload/about/'.getAbout()->image2)}}" alt="about image 2">
                    </div>
                </div>
                <div class="col-xl-6 content-block" data-aos="fade-right" data-aos-delay="400" data-aos-duration="2000">
                    <h2><span>About Me</span>{{getAbout()->title}}</h2>
                    <p>
                        {{getAbout()->desc}}
                    </p>
                    <div class="personal-details row">
                        <div class="col-md-6">
                            <ul class="personal-info">
                                <li>
                                    <h4>Name</h4>
                                    <p>{{getAbout()->name}}</p>
                                </li>
                                <li>
                                    <h4>Email</h4>
                                    <p>{{getContact()->email}}</p>
                                </li>
                                <li>
                                    <h4>Phone</h4>
                                    <p>{{getContact()->phone}}</p>
                                </li>
                                <li>
                                    <h4>Address</h4>
                                    <p>{{getContact()->address}}</p>
                                </li>
                            </ul> <!-- .personal-info -->
                        </div> <!-- .col-md-6 -->
                        <div class="col-md-6">
                            <ul class="personal-info">
                                <li>
                                    <h4>Age</h4>
                                    <p>{{ getAbout()->age }} Years</p>
                                </li>
                                <li>
                                    <h4>Education</h4>
                                    <p>{{getAbout()->edu}}</p>
                                </li>
                                <li>
                                    <h4>Freelance</h4>
                                    <p>{{getAbout()->freelance == 1 ? 'Available' : 'Unavailable'}}</p>
                                </li>
                                <li>
                                    <h4>Hiring</h4>
                                    <p>{{getAbout()->hiring == 1 ? 'Available' : 'Unavailable'}}</p>
                                </li>
                            </ul> <!-- .personal-info -->
                        </div> <!-- .col-md-6 -->
                    </div> <!-- .personal-details -->
                    <a class="btn-main" href="{{getAbout()->cv}}">Download CV</a>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
        <div class="design-elements">
            <img class="de-about-1 elem-updown" src="image/design-elements/about-element-1.png" alt="about element 1">
            <img class="de-about-2 elem-updown" src="image/design-elements/about-element-2.png" alt="about element 2">
        </div> <!-- .design-elements -->
    </section> <!-- .about-section -->

    <!-- SKILL SECTION -->
    <section class="skill-section section-block" id="skill-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 content-block" data-aos="fade-down" data-aos-duration="2000">
                    <h2><span>My Skills</span>I'm great in what I do and I'm loving it</h2>
                    {{-- <p class="lead">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p> --}}
                </div>
                <div class="col-xl-6 progress-block">
                    @foreach (getSkills() as $skill)
                    <div class="progress-wrapper">
                        <h4>{{$skill->name}}</h4>
                        <p class="progress-value">{{$skill->value}}%</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="{{$skill->value}}"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="progress-wrapper">
                        <h4>Competitive Programming</h4>
                        <p class="progress-value">84%</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="84"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div> --}}
                    {{-- <div class="progress-wrapper">
                        <h4>Algorithm &amp; Data Structure</h4>
                        <p class="progress-value">50%</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress-wrapper">
                        <h4>Game Development</h4>
                        <p class="progress-value">75%</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress-wrapper">
                        <h4>Web Application</h4>
                        <p class="progress-value">96%</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="96"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div> --}}
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </section> <!-- .skill-section -->

    <!-- PORTFOLIO SECTION -->
    <section class="portfolio-section section-block" id="portfolio-section">
        <div class="container">
            <div class="section-title">
                <h2>Portfolio</h2>
                {{-- <p class="lead">
                    Duis aute irure dolor in reprehen pteur sint occaecat cupidatat non
                    proident, sunt in culim id est.
                </p> --}}
            </div><!-- .section-title -->
            <div class="button-group filter-button-group">
                <button class="active" data-filter="*">All</button>
                @foreach (getServices() as $service)
                    <button class="" data-filter=".{{str_replace(' ', '_', $service->name)}}">{{$service->name}}</button>
                @endforeach
                {{-- <button class="" data-filter=".programming">Programming</button>
                <button class="" data-filter=".development">Development</button>
                <button class="" data-filter=".design">Design</button>
                <button class="" data-filter=".application">Application</button> --}}
            </div>
            <div class="row grid" data-aos="fade-up" data-aos-duration="2000">
                @foreach (getServices() as $service)
                    <div class="col-lg-4 col-md-6 grid-item {{str_replace(' ', '_', $service->name)}}">
                        @foreach ($service->projects as $project)
                            <div class="box">
                            <img src="{{ asset('upload/project/'.$project->image) }}" alt="portfolio image">
                            <div class="box-content">
                                <span class="category">{{ $project->service->name }}</span>
                                <h3 class="title">{{ $project->name }}</h3>
                            </div>
                            <div class="icon-box"><a href="#" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal{{ $project->id }}"><i class="bi bi-plus-lg"></i></a></div>

                            <!-- Modal -->
                            <div class="modal fade" id="portfolioModal{{ $project->id }}" tabindex="-1" aria-labelledby="portfolioModal6"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                                    <div class="modal-content">

                                        <div class="modal-body">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"><i class="bi bi-x"></i></button>
                                            <div class="row item-content">
                                                <div class="col-xl-12">
                                                    <img src="{{ asset('upload/project/'.$project->image) }}" alt="portfolio image">
                                                </div>
                                                <div class="col-xl-8">
                                                    <div class="content-wrapper">
                                                        <h2 class="item-title">{{ $project->name }}</h2>
                                                        <p>
                                                            {{ $project->description }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="meta-wrapper">
                                                        <ul class="item-meta">
                                                            <li>Project Type: <span class="meta-value">{{ $project->service->name }}</span>
                                                            </li>
                                                            {{-- <li>Client: <span class="meta-value">Juwel Khan</span></li>
                                                            <li>Duration: <span class="meta-value">2 Weeks</span></li>
                                                            <li>Task: <span class="meta-value">UI/UX, Frontend</span></li>
                                                            <li>Budget: <span class="meta-value">$2000</span></li> --}}
                                                        </ul>
                                                    </div> <!-- .meta-wrapper -->
                                                </div>
                                            </div> <!-- .row -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                @endforeach
            </div> <!-- .row -->
        </div> <!-- .container -->
        <div class="design-elements">
            <img class="de-portfolio-1 elem-updown" src="image/design-elements/portfolio-element-1.png"
                alt="portfolio element 1">
            <img class="de-portfolio-2 elem-updown" src="image/design-elements/portfolio-element-2.png"
                alt="portfolio element 2">
        </div> <!-- .design-elements -->
    </section> <!-- .portfolio-section -->

    <!-- SERVICE SECTION -->
    <section class="service-section section-block" id="service-section">
        <div class="container">
            <div class="section-title dark">
                <h2>Service</h2>
                {{-- <p class="lead">
                    Duis aute irure dolor in reprehen pteur sint occaecat cupidatat non
                    proident, sunt in culim id est.
                </p> --}}
            </div><!-- .section-title -->
            <div class="row">
                @php
                    $dur = 0;
                @endphp
                @foreach (getServices() as $service)
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="{{ $dur }}">
                    <div class="content-wrapper service-tilt" data-tilt data-tilt-max="15">
                        <div class="icon-box"><i class="{{ $service->icon }}"></i></div>
                        <h3>{{ $service->name }}</h3>
                        <p>
                            {{ $service->description }}
                        </p>
                    </div>
                </div>
                @php $dur += 200; @endphp
                @endforeach
                {{-- <div class="col-xl-4 col-lg-6" data-aos="fade-up">
                    <div class="content-wrapper service-tilt" data-tilt data-tilt-max="15">
                        <div class="icon-box"><i class="pe-7s-monitor"></i></div>
                        <h3>Desktop Apps</h3>
                        <p>
                            Yeprehe nderit in voluptate velit esse prehen pteur sint occaecat cupidat
                            cillum dolore eu fugiat nulla pan
                            proide ulpa rum.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="content-wrapper service-tilt" data-tilt data-tilt-max="15">
                        <div class="icon-box"><i class="pe-7s-joy"></i></div>
                        <h3>Mobile Apps</h3>
                        <p>
                            Nulla sit amet maximus mass abitur et pharetra metus nec hendrerit enim iam condime justo at
                            luctus ore pag torem comodo.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="content-wrapper service-tilt" data-tilt data-tilt-max="15">
                        <div class="icon-box"><i class="pe-7s-display2"></i></div>
                        <h3>Web Development</h3>
                        <p>
                            Donec sed magna uspen disse ac males uasuda lacus orekom nipsume dolor sit amet ectetur adip
                            iscing elit eget ullamc dana.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="content-wrapper service-tilt" data-tilt data-tilt-max="15">
                        <div class="icon-box"><i class="pe-7s-lock"></i></div>
                        <h3>Security System</h3>
                        <p>
                            Det esse prehen pteur sint occaecat cupidat cillum dolore eu fugiat nulla kopa samsu kopa kidye
                            je tare pan ontor ja ulpa rum.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="800">
                    <div class="content-wrapper service-tilt" data-tilt data-tilt-max="15">
                        <div class="icon-box"><i class="pe-7s-edit"></i></div>
                        <h3>Custom Algorithm</h3>
                        <p>
                            Quisque ultricies nibh eu sapien convallis, at sollicitudin lacus mattis. Ut fringilla, eros
                            vitae consequa proide nesha.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="1000">
                    <div class="content-wrapper service-tilt" data-tilt data-tilt-max="15">
                        <div class="icon-box"><i class="pe-7s-coffee"></i></div>
                        <h3>Web Consulting</h3>
                        <p>
                            Aliquam aliquam mi nisl, quis condim entum felis auctor vita sellus egestas eros scelerisque
                            suscipit impe rdiet eque nulla.
                        </p>
                    </div>
                </div> --}}
            </div><!-- .row -->
        </div> <!-- .container -->
        <div class="design-elements">
            <img class="de-service-1 elem-updown" src="image/design-elements/service-element-1.png"
                alt="service element 1">
            <img class="de-service-2 elem-updown" src="image/design-elements/service-element-2.png"
                alt="service element 2">
            <img class="de-service-3 elem-updown" src="image/design-elements/service-element-3.png"
                alt="service element 3">
        </div> <!-- .design-elements -->
    </section> <!-- .service-section -->

    <!-- FEATURES SECTION -->
    <section class="features-section section-block" id="features-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 image-block" data-aos="fade-right" data-aos-duration="1500">
                    <div class="image-wrapper">
                        <img class="img-fluid feature-photo" src="{{ asset('upload/whowork/'.getWhoWork()->image) }}" alt="features photo" data-tilt
                            data-tilt-max="10">
                    </div> <!-- .image-wrapper -->
                </div> <!-- .image-block -->
                <div class="col-xl-6 content-block" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="400">
                    <h2 class="block-title"><span>Why work with me</span>{{ getWhoWork()->title }}</h2>
                    <p>
                        {{getWhoWork()->desc}}
                    </p>
                    <ul class="features-list">
                        <li class="d-flex align-items-start">
                            <div class="icon-block">
                                <div class="icon-box"><i class="{{ getWhoWork()->icon1 }}"></i></div>
                            </div>
                            <div class="content-wrapper">
                                <h4>{{ getWhoWork()->title1 }}</h4>

                                <p>
                                    {{getWhoWork()->desc1}}
                                </p>
                            </div>

                        </li>
                        <li class="d-flex align-items-start">
                            <div class="icon-block">
                                <div class="icon-box"><i class="{{ getWhoWork()->icon2 }}"></i></div>
                            </div>
                            <div class="content-wrapper">
                                <h4>{{ getWhoWork()->title2 }}</h4>

                                <p>
                                    {{getWhoWork()->desc2}}
                                </p>
                            </div>

                        </li>
                        <li class="d-flex align-items-start">
                            <div class="icon-block">
                                <div class="icon-box"><i class="{{ getWhoWork()->icon3 }}"></i></div>
                            </div>
                            <div class="content-wrapper">
                                <h4>{{ getWhoWork()->title3 }}</h4>

                                <p>
                                    {{getWhoWork()->desc3}}
                                </p>
                            </div>

                        </li>
                    </ul>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </section> <!-- .features-section -->

    <!-- TESTIMONIAL SECTION -->
    {{-- <section class="testimonial-section section-block" id="testimonial-section">
        <div class="container">
            <div class="section-title dark">
                <h2>Testimonials</h2>
                <p class="lead">
                    Duis aute irure dolor in reprehen pteur sint occaecat cupidatat non
                    proident, sunt in culim id est.
                </p>
            </div><!-- .section-title -->
            <div class="testimonial-carousel swiper">
                <div class="swiper-wrapper">
                    <div class="testimonial-item swiper-slide">
                        <div class="item-wrapper">
                            <div class="quote-icon">
                                <img src="image/quote-icon.png" alt="quote icon">
                            </div>
                            <p>
                                Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. Duis aute ir cm id est laborum.
                            </p>
                            <div class="quote-author d-flex align-items-center justify-content-center">
                                <div class="image-block">
                                    <img class="img-fluid" src="image/testimonial/testimonial-author-1.jpg"
                                        alt="testimonial author">
                                </div>
                                <h4>James Anderson<span>Web Developer</span></h4>
                            </div>

                        </div> <!-- .item wrapper -->
                    </div> <!-- .testimonial-item -->
                    <div class="testimonial-item swiper-slide">
                        <div class="item-wrapper">
                            <div class="quote-icon">
                                <img src="image/quote-icon.png" alt="quote icon">
                            </div>
                            <p>
                                Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. Duis aute ir cm id est laborum.
                            </p>
                            <div class="quote-author d-flex align-items-center justify-content-center">
                                <div class="image-block">
                                    <img class="img-fluid" src="image/testimonial/testimonial-author-3.jpg"
                                        alt="testimonial author">
                                </div>
                                <h4>Dona Josefine<span>Web Developer</span></h4>
                            </div>

                        </div> <!-- .item wrapper -->
                    </div> <!-- .testimonial-item -->
                    <div class="testimonial-item swiper-slide">
                        <div class="item-wrapper">
                            <div class="quote-icon">
                                <img src="image/quote-icon.png" alt="quote icon">
                            </div>
                            <p>
                                Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. Duis aute ir cm id est laborum.
                            </p>
                            <div class="quote-author d-flex align-items-center justify-content-center">
                                <div class="image-block">
                                    <img class="img-fluid" src="image/testimonial/testimonial-author-4.jpg"
                                        alt="testimonial author">
                                </div>
                                <h4>Mark Anthony <span>Web Developer</span></h4>
                            </div>

                        </div> <!-- .item wrapper -->
                    </div> <!-- .testimonial-item -->
                    <div class="testimonial-item swiper-slide">
                        <div class="item-wrapper">
                            <div class="quote-icon">
                                <img src="image/quote-icon.png" alt="quote icon">
                            </div>
                            <p>
                                Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. Duis aute ir cm id est laborum.
                            </p>
                            <div class="quote-author d-flex align-items-center justify-content-center">
                                <div class="image-block">
                                    <img class="img-fluid" src="image/testimonial/testimonial-author-2.jpg"
                                        alt="testimonial author">
                                </div>
                                <h4>Sanjida Ema<span>Web Developer</span></h4>
                            </div>

                        </div> <!-- .item wrapper -->
                    </div> <!-- .testimonial-item -->
                </div> <!-- .swiper-wrapper -->
                <div class="swiper-pagination"></div>
            </div> <!-- .testimonial-carousel -->
        </div> <!-- .container -->
    </section> <!-- .testimonial-section -->

    <!-- BLOG SECTION -->
    <section class="blog-section section-block" id="blog-section">
        <div class="container">
            <div class="section-title">
                <h2>From My Blog</h2>
                <p class="lead">
                    Duis aute irure dolor in reprehen pteur sint occaecat cupidatat non
                    proident, sunt in culim id est.
                </p>
            </div><!-- .section-title -->
            <div class="row">
                <div class="col-lg-6 large-post" data-aos="fade-right" data-aos-duration="1200">

                    <!-- Modal -->
                    <div class="modal fade" id="blogModal1" tabindex="-1" aria-labelledby="blogModal1"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                            <div class="modal-content">

                                <div class="modal-body">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"><i class="bi bi-x"></i></button>
                                    <div class="row blog-content">
                                        <div class="col-xl-12">
                                            <img class="img-fluid" src="image/blog/blog_full_01.jpg"
                                                alt="blog post image 01">
                                        </div>
                                        <div class="col-xl-8 offset-xl-2">
                                            <div class="content-wrapper">
                                                <h2 class="blog-title">Javascript algorythm and data structure for beginner
                                                </h2>
                                                <ul
                                                    class="blog-meta d-md-flex align-items-center justify-content-md-center">
                                                    <li><a href="#"><i class="bi bi-folder-fill"></i> Javascript</a>
                                                    </li>
                                                    <li><i class="bi bi-calendar3"></i> October 21, 2021</li>
                                                    <li><i class="bi bi-clock"></i> 10 min</li>
                                                </ul>
                                                <p>
                                                    Sed vitae nulla eu velit fringilla hendrerit. Fusce luctus rhoncus
                                                    blandit. Nulla vel varius felis. Integer felis urna, auctor hendrerit
                                                    ante vitae, scelerisque bibendum quam. Proin libero leo, pulvinar nec
                                                    iaculis ac, sodales nec tellus. Sed ut suscipit erat. Integer aliquam
                                                    erat eget hendrerit ultricies. In pharetra eu ante consequat tincidunt.
                                                    Curabitur vulputate ligula risus, ac auctor magna vulputate sit amet.
                                                    Sed finibus neque neque, euismod porta felis vehicula at. Donec a sem id
                                                    augue sagittis tincidunt non sit amet risus.
                                                </p>
                                                <p>
                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet,
                                                    consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                    officia deserunt mollit anim id est laborum.
                                                </p>
                                                <p>
                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                                    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                                                    id est laborum.
                                                </p>
                                                <p>
                                                    Vestibulum aliquet pulvinar neque sed ullamcorper. Ut vitae fringilla
                                                    ex. Nam id dui dignissim, maximus ligula id, tempus metus. Sed commodo
                                                    dui vitae dui pulvinar, eu dignissim turpis luctus. Mauris consectetur
                                                    leo est, non finibus tellus posuere quis. Integer mollis felis a
                                                    tristique facilisis. Nam convallis est id iaculis mattis.
                                                </p>
                                                <div class="post-footer row">
                                                    <div class="blog-tags col-lg-8 d-md-flex align-items-md-center">
                                                        <h4>Tags:</h4>
                                                        <ul class="tag-list list-inline">
                                                            <li class="list-inline-item"><a href="#">Web Design</a>
                                                            </li>
                                                            <li class="list-inline-item"><a href="#">Social
                                                                    Media</a></li>
                                                            <li class="list-inline-item"><a href="#">Application</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="blog-share col-lg-4 d-flex align-items-center justify-content-xxl-end">
                                                        <h4>Share:</h4>
                                                        <ul class="tag-list list-inline">
                                                            <li class="list-inline-item">
                                                                <a class="facebook-share" href="#"><i
                                                                        class="bi bi-facebook"></i></a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a class="twitter-share" href="#"><i
                                                                        class="bi bi-twitter"></i></a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a class="linkedin-share" href="#"><i
                                                                        class="bi bi-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div> <!-- .row -->
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="content-wrapper">
                        <div class="post-content">
                            <ul class="post-meta">
                                <li class="post-date">
                                    <i class="pe-7s-clock"></i>
                                    October 23, 2021
                                </li>
                                <li class="post-cat">
                                    <a href="#"><i class="pe-7s-folder"></i> Web Design</a>
                                </li>
                            </ul>
                            <h3><a href="#" data-bs-toggle="modal" data-bs-target="#blogModal1">Javascript
                                    algorythm and data structure for beginners</a></h3>



                        </div>
                        <div class="image-wrapper">
                            <img class="img-fluid" src="image/blog/post-thumbnail-01.jpg" alt="post thumnail">
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 post-group">
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                            <!-- Modal -->
                            <div class="modal fade" id="blogModal2" tabindex="-1" aria-labelledby="blogModal2"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                                    <div class="modal-content">

                                        <div class="modal-body">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"><i class="bi bi-x"></i></button>
                                            <div class="row blog-content">
                                                <div class="col-xl-12">
                                                    <img class="img-fluid" src="image/blog/blog_full_03.jpg"
                                                        alt="blog post image 02">
                                                </div>
                                                <div class="col-xl-8 offset-xl-2">
                                                    <div class="content-wrapper">
                                                        <h2 class="blog-title">Typescript algorythm and data structure for
                                                            beginner</h2>
                                                        <ul
                                                            class="blog-meta d-md-flex align-items-center justify-content-md-center">
                                                            <li><a href="#"><i class="bi bi-folder-fill"></i>
                                                                    Javascript</a></li>
                                                            <li><i class="bi bi-calendar3"></i> October 21, 2021</li>
                                                            <li><i class="bi bi-clock"></i> 10 min</li>
                                                        </ul>
                                                        <p>
                                                            Sed vitae nulla eu velit fringilla hendrerit. Fusce luctus
                                                            rhoncus blandit. Nulla vel varius felis. Integer felis urna,
                                                            auctor hendrerit ante vitae, scelerisque bibendum quam. Proin
                                                            libero leo, pulvinar nec iaculis ac, sodales nec tellus. Sed ut
                                                            suscipit erat. Integer aliquam erat eget hendrerit ultricies. In
                                                            pharetra eu ante consequat tincidunt. Curabitur vulputate ligula
                                                            risus, ac auctor magna vulputate sit amet. Sed finibus neque
                                                            neque, euismod porta felis vehicula at. Donec a sem id augue
                                                            sagittis tincidunt non sit amet risus.
                                                        </p>
                                                        <p>
                                                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                            cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit
                                                            amet, consectetur adipisicing elit, sed do eiusmod tempor
                                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                            veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                            aliquip ex ea commodo consequat. Excepteur sint occaecat
                                                            cupidatat non proident, sunt in culpa qui officia deserunt
                                                            mollit anim id est laborum.
                                                        </p>
                                                        <p>
                                                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                                            cupidatat non proident, sunt in culpa qui officia deserunt
                                                            mollit anim id est laborum.
                                                        </p>
                                                        <p>
                                                            Vestibulum aliquet pulvinar neque sed ullamcorper. Ut vitae
                                                            fringilla ex. Nam id dui dignissim, maximus ligula id, tempus
                                                            metus. Sed commodo dui vitae dui pulvinar, eu dignissim turpis
                                                            luctus. Mauris consectetur leo est, non finibus tellus posuere
                                                            quis. Integer mollis felis a tristique facilisis. Nam convallis
                                                            est id iaculis mattis.
                                                        </p>
                                                        <div class="post-footer row">
                                                            <div
                                                                class="blog-tags col-lg-8 d-md-flex align-items-md-center">
                                                                <h4>Tags:</h4>
                                                                <ul class="tag-list list-inline">
                                                                    <li class="list-inline-item"><a href="#">Web
                                                                            Design</a></li>
                                                                    <li class="list-inline-item"><a href="#">Social
                                                                            Media</a></li>
                                                                    <li class="list-inline-item"><a
                                                                            href="#">Application</a></li>
                                                                </ul>
                                                            </div>
                                                            <div
                                                                class="blog-share col-lg-4 d-flex align-items-center justify-content-xxl-end">
                                                                <h4>Share:</h4>
                                                                <ul class="tag-list list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a class="facebook-share" href="#"><i
                                                                                class="bi bi-facebook"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a class="twitter-share" href="#"><i
                                                                                class="bi bi-twitter"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a class="linkedin-share" href="#"><i
                                                                                class="bi bi-linkedin"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> <!-- .row -->
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="content-wrapper">
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li class="post-date">
                                            <i class="pe-7s-clock"></i>
                                            October 23, 2021
                                        </li>
                                        <li class="post-cat">
                                            <a href="#"><i class="pe-7s-folder"></i> Web Design</a>
                                        </li>
                                    </ul>
                                    <h3><a href="#" data-bs-toggle="modal" data-bs-target="#blogModal2">Design a
                                            wesite using Figma easily</a></h3>
                                </div>
                                <div class="image-wrapper">
                                    <img class="img-fluid" src="image/blog/post-thumbnail-03.jpg" alt="post thumnail">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                            <!-- Modal -->
                            <div class="modal fade" id="blogModal3" tabindex="-1" aria-labelledby="blogModal3"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                                    <div class="modal-content">

                                        <div class="modal-body">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"><i class="bi bi-x"></i></button>
                                            <div class="row blog-content">
                                                <div class="col-xl-12">
                                                    <img class="img-fluid" src="image/blog/blog_full_04.jpg"
                                                        alt="blog post image 03">
                                                </div>
                                                <div class="col-xl-8 offset-xl-2">
                                                    <div class="content-wrapper">
                                                        <h2 class="blog-title">Javascript algorythm and data structure for
                                                            beginner</h2>
                                                        <ul
                                                            class="blog-meta d-md-flex align-items-center justify-content-md-center">
                                                            <li><a href="#"><i class="bi bi-folder-fill"></i>
                                                                    Javascript</a></li>
                                                            <li><i class="bi bi-calendar3"></i> October 21, 2021</li>
                                                            <li><i class="bi bi-clock"></i> 10 min</li>
                                                        </ul>
                                                        <p>
                                                            Sed vitae nulla eu velit fringilla hendrerit. Fusce luctus
                                                            rhoncus blandit. Nulla vel varius felis. Integer felis urna,
                                                            auctor hendrerit ante vitae, scelerisque bibendum quam. Proin
                                                            libero leo, pulvinar nec iaculis ac, sodales nec tellus. Sed ut
                                                            suscipit erat. Integer aliquam erat eget hendrerit ultricies. In
                                                            pharetra eu ante consequat tincidunt. Curabitur vulputate ligula
                                                            risus, ac auctor magna vulputate sit amet. Sed finibus neque
                                                            neque, euismod porta felis vehicula at. Donec a sem id augue
                                                            sagittis tincidunt non sit amet risus.
                                                        </p>
                                                        <p>
                                                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                            cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit
                                                            amet, consectetur adipisicing elit, sed do eiusmod tempor
                                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                            veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                            aliquip ex ea commodo consequat. Excepteur sint occaecat
                                                            cupidatat non proident, sunt in culpa qui officia deserunt
                                                            mollit anim id est laborum.
                                                        </p>
                                                        <p>
                                                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                                            cupidatat non proident, sunt in culpa qui officia deserunt
                                                            mollit anim id est laborum.
                                                        </p>
                                                        <p>
                                                            Vestibulum aliquet pulvinar neque sed ullamcorper. Ut vitae
                                                            fringilla ex. Nam id dui dignissim, maximus ligula id, tempus
                                                            metus. Sed commodo dui vitae dui pulvinar, eu dignissim turpis
                                                            luctus. Mauris consectetur leo est, non finibus tellus posuere
                                                            quis. Integer mollis felis a tristique facilisis. Nam convallis
                                                            est id iaculis mattis.
                                                        </p>
                                                        <div class="post-footer row">
                                                            <div
                                                                class="blog-tags col-lg-8 d-md-flex align-items-md-center">
                                                                <h4>Tags:</h4>
                                                                <ul class="tag-list list-inline">
                                                                    <li class="list-inline-item"><a href="#">Web
                                                                            Design</a></li>
                                                                    <li class="list-inline-item"><a href="#">Social
                                                                            Media</a></li>
                                                                    <li class="list-inline-item"><a
                                                                            href="#">Application</a></li>
                                                                </ul>
                                                            </div>
                                                            <div
                                                                class="blog-share col-lg-4 d-flex align-items-center justify-content-xxl-end">
                                                                <h4>Share:</h4>
                                                                <ul class="tag-list list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a class="facebook-share" href="#"><i
                                                                                class="bi bi-facebook"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a class="twitter-share" href="#"><i
                                                                                class="bi bi-twitter"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a class="linkedin-share" href="#"><i
                                                                                class="bi bi-linkedin"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> <!-- .row -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="content-wrapper">
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li class="post-date">
                                            <i class="pe-7s-clock"></i>
                                            October 23, 2021
                                        </li>
                                        <li class="post-cat">
                                            <a href="#"><i class="pe-7s-folder"></i> Web Design</a>
                                        </li>
                                    </ul>
                                    <h3><a href="#" data-bs-toggle="modal" data-bs-target="#blogModal3">Break on
                                            through to the other side</a></h3>
                                </div>
                                <div class="image-wrapper">
                                    <img class="img-fluid" src="image/blog/post-thumbnail-04.jpg" alt="post thumnail">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="800">
                            <!-- Modal -->
                            <div class="modal fade" id="blogModal4" tabindex="-1" aria-labelledby="blogModal4"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                                    <div class="modal-content">

                                        <div class="modal-body">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"><i class="bi bi-x"></i></button>
                                            <div class="row blog-content">
                                                <div class="col-xl-12">
                                                    <img class="img-fluid" src="image/blog/blog_full_05.jpg"
                                                        alt="blog post image 04">
                                                </div>
                                                <div class="col-xl-8 offset-xl-2">
                                                    <div class="content-wrapper">
                                                        <h2 class="blog-title">Javascript algorythm and data structure for
                                                            beginner</h2>
                                                        <ul
                                                            class="blog-meta d-md-flex align-items-center justify-content-md-center">
                                                            <li><a href="#"><i class="bi bi-folder-fill"></i>
                                                                    Javascript</a></li>
                                                            <li><i class="bi bi-calendar3"></i> October 21, 2021</li>
                                                            <li><i class="bi bi-clock"></i> 10 min</li>
                                                        </ul>
                                                        <p>
                                                            Sed vitae nulla eu velit fringilla hendrerit. Fusce luctus
                                                            rhoncus blandit. Nulla vel varius felis. Integer felis urna,
                                                            auctor hendrerit ante vitae, scelerisque bibendum quam. Proin
                                                            libero leo, pulvinar nec iaculis ac, sodales nec tellus. Sed ut
                                                            suscipit erat. Integer aliquam erat eget hendrerit ultricies. In
                                                            pharetra eu ante consequat tincidunt. Curabitur vulputate ligula
                                                            risus, ac auctor magna vulputate sit amet. Sed finibus neque
                                                            neque, euismod porta felis vehicula at. Donec a sem id augue
                                                            sagittis tincidunt non sit amet risus.
                                                        </p>
                                                        <p>
                                                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                            cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit
                                                            amet, consectetur adipisicing elit, sed do eiusmod tempor
                                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                            veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                            aliquip ex ea commodo consequat. Excepteur sint occaecat
                                                            cupidatat non proident, sunt in culpa qui officia deserunt
                                                            mollit anim id est laborum.
                                                        </p>
                                                        <p>
                                                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                                            cupidatat non proident, sunt in culpa qui officia deserunt
                                                            mollit anim id est laborum.
                                                        </p>
                                                        <p>
                                                            Vestibulum aliquet pulvinar neque sed ullamcorper. Ut vitae
                                                            fringilla ex. Nam id dui dignissim, maximus ligula id, tempus
                                                            metus. Sed commodo dui vitae dui pulvinar, eu dignissim turpis
                                                            luctus. Mauris consectetur leo est, non finibus tellus posuere
                                                            quis. Integer mollis felis a tristique facilisis. Nam convallis
                                                            est id iaculis mattis.
                                                        </p>
                                                        <div class="post-footer row">
                                                            <div
                                                                class="blog-tags col-lg-8 d-md-flex align-items-md-center">
                                                                <h4>Tags:</h4>
                                                                <ul class="tag-list list-inline">
                                                                    <li class="list-inline-item"><a href="#">Web
                                                                            Design</a></li>
                                                                    <li class="list-inline-item"><a href="#">Social
                                                                            Media</a></li>
                                                                    <li class="list-inline-item"><a
                                                                            href="#">Application</a></li>
                                                                </ul>
                                                            </div>
                                                            <div
                                                                class="blog-share col-lg-4 d-flex align-items-center justify-content-xxl-end">
                                                                <h4>Share:</h4>
                                                                <ul class="tag-list list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a class="facebook-share" href="#"><i
                                                                                class="bi bi-facebook"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a class="twitter-share" href="#"><i
                                                                                class="bi bi-twitter"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a class="linkedin-share" href="#"><i
                                                                                class="bi bi-linkedin"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> <!-- .row -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="content-wrapper">
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li class="post-date">
                                            <i class="pe-7s-clock"></i>
                                            October 23, 2021
                                        </li>
                                        <li class="post-cat">
                                            <a href="#"><i class="pe-7s-folder"></i> Web Design</a>
                                        </li>
                                    </ul>
                                    <h3><a href="#" data-bs-toggle="modal" data-bs-target="#blogModal4">Imagine
                                            there is no heaven</a></h3>
                                </div>
                                <div class="image-wrapper">
                                    <img class="img-fluid" src="image/blog/post-thumbnail-05.jpg" alt="post thumnail">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1000">
                            <!-- Modal -->
                            <div class="modal fade" id="blogModal5" tabindex="-1" aria-labelledby="blogModal5"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                                    <div class="modal-content">

                                        <div class="modal-body">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"><i class="bi bi-x"></i></button>
                                            <div class="row blog-content">
                                                <div class="col-xl-12">
                                                    <img class="img-fluid" src="image/blog/blog_full_06.jpg"
                                                        alt="blog post image 05">
                                                </div>
                                                <div class="col-xl-8 offset-xl-2">
                                                    <div class="content-wrapper">
                                                        <h2 class="blog-title">Javascript algorythm and data structure for
                                                            beginner</h2>
                                                        <ul
                                                            class="blog-meta d-md-flex align-items-center justify-content-md-center">
                                                            <li><a href="#"><i class="bi bi-folder-fill"></i>
                                                                    Javascript</a></li>
                                                            <li><i class="bi bi-calendar3"></i> October 21, 2021</li>
                                                            <li><i class="bi bi-clock"></i> 10 min</li>
                                                        </ul>
                                                        <p>
                                                            Sed vitae nulla eu velit fringilla hendrerit. Fusce luctus
                                                            rhoncus blandit. Nulla vel varius felis. Integer felis urna,
                                                            auctor hendrerit ante vitae, scelerisque bibendum quam. Proin
                                                            libero leo, pulvinar nec iaculis ac, sodales nec tellus. Sed ut
                                                            suscipit erat. Integer aliquam erat eget hendrerit ultricies. In
                                                            pharetra eu ante consequat tincidunt. Curabitur vulputate ligula
                                                            risus, ac auctor magna vulputate sit amet. Sed finibus neque
                                                            neque, euismod porta felis vehicula at. Donec a sem id augue
                                                            sagittis tincidunt non sit amet risus.
                                                        </p>
                                                        <p>
                                                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                            cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit
                                                            amet, consectetur adipisicing elit, sed do eiusmod tempor
                                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                            veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                            aliquip ex ea commodo consequat. Excepteur sint occaecat
                                                            cupidatat non proident, sunt in culpa qui officia deserunt
                                                            mollit anim id est laborum.
                                                        </p>
                                                        <p>
                                                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                                            cupidatat non proident, sunt in culpa qui officia deserunt
                                                            mollit anim id est laborum.
                                                        </p>
                                                        <p>
                                                            Vestibulum aliquet pulvinar neque sed ullamcorper. Ut vitae
                                                            fringilla ex. Nam id dui dignissim, maximus ligula id, tempus
                                                            metus. Sed commodo dui vitae dui pulvinar, eu dignissim turpis
                                                            luctus. Mauris consectetur leo est, non finibus tellus posuere
                                                            quis. Integer mollis felis a tristique facilisis. Nam convallis
                                                            est id iaculis mattis.
                                                        </p>
                                                        <div class="post-footer row">
                                                            <div
                                                                class="blog-tags col-lg-8 d-md-flex align-items-md-center">
                                                                <h4>Tags:</h4>
                                                                <ul class="tag-list list-inline">
                                                                    <li class="list-inline-item"><a href="#">Web
                                                                            Design</a></li>
                                                                    <li class="list-inline-item"><a href="#">Social
                                                                            Media</a></li>
                                                                    <li class="list-inline-item"><a
                                                                            href="#">Application</a></li>
                                                                </ul>
                                                            </div>
                                                            <div
                                                                class="blog-share col-lg-4 d-flex align-items-center justify-content-xxl-end">
                                                                <h4>Share:</h4>
                                                                <ul class="tag-list list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a class="facebook-share" href="#"><i
                                                                                class="bi bi-facebook"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a class="twitter-share" href="#"><i
                                                                                class="bi bi-twitter"></i></a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a class="linkedin-share" href="#"><i
                                                                                class="bi bi-linkedin"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> <!-- .row -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="content-wrapper">
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li class="post-date">
                                            <i class="pe-7s-clock"></i>
                                            October 23, 2021
                                        </li>
                                        <li class="post-cat">
                                            <a href="#"><i class="pe-7s-folder"></i> Web Design</a>
                                        </li>
                                    </ul>
                                    <h3><a href="#" data-bs-toggle="modal" data-bs-target="#blogModal5">When the
                                            musics over turn off the light</a></h3>
                                </div>
                                <div class="image-wrapper">
                                    <img class="img-fluid" src="image/blog/post-thumbnail-06.jpg" alt="post thumnail">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
        <div class="design-elements">
            <img class="de-blog-1 elem-updown" src="image/design-elements/blog-element-1.png" alt="blog element 1">
            <img class="de-blog-2 elem-updown" src="image/design-elements/blog-element-2.png" alt="blog element 2">
        </div> <!-- .design-elements -->
    </section> <!-- .blog-section --> --}}

    <!-- PARTNER SECTION -->
    {{-- <section class="partner-section" id="partner-section">
        <div class="container">

            <div class="section-title dark visually-hidden">
                <h2>Partners</h2>
            </div><!-- .section-title -->

            <div class="partnerCarousel">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-wrapper">
                            <img src="image/partner/partner_logo_1.png" alt="partner logo 01">
                        </div> <!-- .image-wrapper -->
                    </div><!-- .swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-wrapper">
                            <img src="image/partner/partner_logo_2.png" alt="partner logo 02">
                        </div> <!-- .image-wrapper -->
                    </div><!-- .swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-wrapper">
                            <img src="image/partner/partner_logo_3.png" alt="partner logo 03">
                        </div> <!-- .image-wrapper -->
                    </div><!-- .swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-wrapper">
                            <img src="image/partner/partner_logo_4.png" alt="partner logo 04">
                        </div> <!-- .image-wrapper -->
                    </div><!-- .swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-wrapper">
                            <img src="image/partner/partner_logo_5.png" alt="partner logo 05">
                        </div> <!-- .image-wrapper -->
                    </div><!-- .swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-wrapper">
                            <img src="image/partner/partner_logo_6.png" alt="partner logo 06">
                        </div> <!-- .image-wrapper -->
                    </div><!-- .swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-wrapper">
                            <img src="image/partner/partner_logo_7.png" alt="partner logo 07">
                        </div> <!-- .image-wrapper -->
                    </div><!-- .swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-wrapper">
                            <img src="image/partner/partner_logo_8.png" alt="partner logo 08">
                        </div> <!-- .image-wrapper -->
                    </div><!-- .swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-wrapper">
                            <img src="image/partner/partner_logo_9.png" alt="partner logo 09">
                        </div> <!-- .image-wrapper -->
                    </div><!-- .swiper-slide -->
                </div> <!-- .swiper-wrapper -->
            </div> <!-- .partnerCarousel -->
        </div> <!-- .container -->
    </section> <!-- .partner section --> --}}

    <!-- CONTACT SECTION -->
    <section class="contact-section section-block" id="contact-section">
        <div class="container">
            <div class="section-title">
                <h2>Get in Touch</h2>
                {{-- <p class="lead">
                    Duis aute irure dolor in reprehen pteur sint occaecat cupidatat non
                    proident, sunt in culim id est.
                </p> --}}
            </div><!-- .section-title -->

            <div class="row contact-options">
                <div class="col-lg-4 d-flex justify-content-xxl-center align-items-xl-center" data-aos="fade-down"
                    data-aos-duration="1000">
                    <div class="icon-box"><i class="pe-7s-map-marker"></i></div>
                    <div class="content-wrapper">
                        <h4>Address</h4>
                        <address>{{ getContact()->address }}</address>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-xxl-center align-items-xl-center" data-aos="fade-down"
                    data-aos-duration="1000" data-aos-delay="200">
                    <div class="icon-box"><i class="pe-7s-call"></i></div>
                    <div class="content-wrapper">
                        <h4>Phone</h4>
                        <a href="tel:{{ getContact()->phone }}">{{ getContact()->phone }}</a>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-xxl-center align-items-xl-center" data-aos="fade-down"
                    data-aos-duration="1000" data-aos-delay="400">
                    <div class="icon-box"><i class="pe-7s-mail"></i></div>
                    <div class="content-wrapper">
                        <h4>Email</h4>
                        <a href="mailto:{{ getContact()->email }}">{{ getContact()->email }}</a>
                    </div>
                </div>
            </div> <!-- .row -->

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">
                    <div class="map-wrapper" id="mapwrapper">

                    </div>
                </div>
                <div class="col-lg-6 form-block" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">
                    <h3>Write me a message</h3>
                    <div class="form-message">
                        <p></p>
                    </div>
                    <form class="row g-3" id="fungi-contact" method="POST">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <label for="inputName" class="form-label visually-hidden">Name</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Name*"
                                    name="inputName" required>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="input-group mb-3">
                                <label for="inputEmail" class="form-label visually-hidden">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="inputEmail"
                                    placeholder="Email*" required>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <label for="inputMessage" class="form-label visually-hidden">Message</label>
                            <textarea class="form-control mb-3" id="inputMessage" name="inputMessage" placeholder="Your message here*"
                                required></textarea>
                            <button type="submit" class="btn btn-main" name="submit">Send Message</button>
                        </div>
                    </form> <!-- .row -->
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
        <div class="design-elements">
            <img class="de-contact-1 elem-updown" src="image/design-elements/contact-element-1.png"
                alt="contact element 1">
            <img class="de-contact-2 elem-updown" src="image/design-elements/contact-element-2.png"
                alt="contact element 2">
        </div> <!-- .design-elements -->
    </section> <!-- .contact-section -->
</x-frontend>
