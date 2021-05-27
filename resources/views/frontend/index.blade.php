@extends('frontend.layouts.app')
@section('content')

<div class="iot-main-banner">
    <div class="container">
        <div class="iot-banner-content">
            <span>Internet of Things</span>
            <h2>We get it! IoT growth is happening</h2>
            <p>At this point, it may seem like overkill to point out the continued growth bound to happen in the
                Internet of Things space for the years to come and how it will create new opportunities for
                companies, both established and new, from a hardware and software perspective.</p>
            <a class="btn btn-primary" href="/contact/">Get Started</a>
        </div>
        <div class="iot-banner-image"><img src="{{ asset('frontend/images/iot-main-img1.png') }}"
                class="animate__animated animate__fadeInUp animate__delay-0.8s" alt="image"><img
                src="images/iot-shape1.png" class="animate__animated animate__zoomIn" alt="image"></div>
        <div class="animate-border"><span></span><span></span><span></span><span></span></div>
    </div>
</div>
<div class="repair-partner-area bg-f9fafb">
    <div class="container"></div>
</div>
<div class="iot-services-area pt-80 pb-50">
    <div class="container justify-content-center">
        <div class="section-title">
            <h2>Our Featured Services that We Provide</h2>
            <div class="bar"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-repair-services bg1">
                    <div class="icon"><i class="flaticon-software"></i></div>
                    <h3>Software Development <br> IoT Solutions</h3>
                    <p>Lorem ipsum eiusmod dolor sit amet elit, adipiscing, sed do eiusmod tempor incididunt ut
                        labore dolore magna aliqua.</p>
                    <a href="/service-details/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <polyline points="12 5 19 12 12 19" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-repair-services bg2">
                    <div class="icon"><i class="flaticon-gear"></i></div>
                    <h3>Smart Home, Office <br> IoT Solutions</h3>
                    <p>Lorem ipsum eiusmod dolor sit amet elit, adipiscing, sed do eiusmod tempor incididunt ut
                        labore dolore magna aliqua.</p>
                    <a href="/service-details/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <polyline points="12 5 19 12 12 19" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-repair-services bg3">
                    <div class="icon"><i class="flaticon-skyline"></i></div>
                    <h3>Smart City <br>IoT Solutions</h3>
                    <p>Lorem ipsum eiusmod dolor sit amet elit, adipiscing, sed do eiusmod tempor incididunt ut
                        labore dolore magna aliqua.</p>
                    <a href="/service-details/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <polyline points="12 5 19 12 12 19" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-repair-services bg4">
                    <div class="icon"><i class="flaticon-car-insurance"></i></div>
                    <h3>Automative <br> IoT Solutions</h3>
                    <p>Lorem ipsum eiusmod dolor sit amet elit, adipiscing, sed do eiusmod tempor incididunt ut
                        labore dolore magna aliqua.</p>
                    <a href="/service-details/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <polyline points="12 5 19 12 12 19" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-repair-services bg5">
                    <div class="icon"><i class="flaticon-factory"></i></div>
                    <h3>Industrial <br> IoT Solutions</h3>
                    <p>Lorem ipsum eiusmod dolor sit amet elit, adipiscing, sed do eiusmod tempor incididunt ut
                        labore dolore magna aliqua.</p>
                    <a href="/service-details/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <polyline points="12 5 19 12 12 19" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-repair-services bg6">
                    <div class="icon"><i class="flaticon-chip"></i></div>
                    <h3>System on Chip <br> IoT Solutions</h3>
                    <p>Lorem ipsum eiusmod dolor sit amet elit, adipiscing, sed do eiusmod tempor incididunt ut
                        labore dolore magna aliqua.</p>
                    <a href="/service-details/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <polyline points="12 5 19 12 12 19" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="iot-cta-area bg-0f054b">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="cta-iot-img"><img src="{{ asset('frontend/images/cta-shape2.png') }}"
                        class="animate__animated animate__fadeInUp animate__delay-0.6s" alt="image"></div>
            </div>
            <div class="col-lg-6">
                <div class="cta-iot-content">
                    <h3>Connect and Manage your IoT at Scale</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                        viverra maecenas accumsan lacus vel facilisis.</p>
                    <a class="btn btn-primary" href="/contact/">Get Started!</a>
                </div>
            </div>
        </div>
    </div>
    <div class="circle-box"><img src="{{ asset('frontend/images/circle.png') }}" alt="image"></div>
    <div class="cta-shape"><img src="{{ asset('frontend/images/cta-shape.png') }}" alt="image"></div>
</div>
<div class="funfacts-area ptb-80">
    <div class="container">
        <div class="section-title">
            <h2>We always try to understand users expectation</h2>
            <div class="bar"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-6">
                <div class="funfact">
                    <h3>180K</h3>
                    <p>Downloaded</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6">
                <div class="funfact">
                    <h3>20K</h3>
                    <p>Feedback</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6">
                <div class="funfact">
                    <h3>500+</h3>
                    <p>Workers</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6">
                <div class="funfact">
                    <h3>70+</h3>
                    <p>Contributors</p>
                </div>
            </div>
        </div>
        <div class="contact-cta-box">
            <h3>Have any question about us?</h3>
            <p>Don&#x27;t hesitate to contact us</p>
            <a class="btn btn-primary" href="/contact/">Contact Us</a>
        </div>
        <div class="map-bg"><img src="{{ asset('frontend/images/map.png') }}" alt="map"></div>
    </div>
</div>
<div class="iot-features-area ptb-80 bg-f7fafd">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 iot-features-content">
                <h3>App Development for Connected Devices</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                    viverra maecenas accumsan lacus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                    viverra maecenas accumsan lacus.</p>
                <a class="btn btn-primary" href="/iot/#">Explore More</a>
            </div>
            <div class="col-lg-6 iot-features-image"><img src="{{ asset('frontend/images/iot-feature-image1.png') }}"
                    class="animate__animated animate__fadeInUp animate__delay-0.6s" alt="image"></div>
        </div>
    </div>
</div>
<div class="iot-features-area ptb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 iot-features-image"><img src="{{ asset('frontend/images/iot-feature-image2.png') }}"
                    class="animate__animated animate__fadeInUp animate__delay-0.6s" alt="image"></div>
            <div class="col-lg-6 iot-features-content">
                <h3>How Can Your City Use IoT Technology?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                    viverra maecenas accumsan lacus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                    viverra maecenas accumsan lacus.</p>
                <a class="btn btn-primary" href="/iot/#">Explore More</a>
            </div>
        </div>
    </div>
</div>
{{-- <div class="team-area repair-team-area pt-80 pb-50 bg-f9f6f6">
    <div class="container">
        <div class="section-title">
            <h2>Our Awesome Team</h2>
            <div class="bar"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="single-team">
                    <div class="team-image"><img src="{{ asset('frontend/images/team1.jpg') }}" alt="image"></div>
                    <div class="team-content">
                        <div class="team-info">
                            <h3>Josh Buttler</h3>
                            <span>CEO &amp; Founder</span>
                        </div>
                        <ul>
                            <li>
                                <a target="_blank" href="/iot/#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/iot/#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/iot/#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                        <rect x="2" y="9" width="4" height="12" />
                                        <circle cx="4" cy="4" r="2" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/iot/#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M22.65 14.39L12 22.13 1.35 14.39a.84.84 0 0 1-.3-.94l1.22-3.78 2.44-7.51A.42.42 0 0 1 4.82 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.49h8.1l2.44-7.51A.42.42 0 0 1 18.6 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.51L23 13.45a.84.84 0 0 1-.35.94z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-team">
                    <div class="team-image"><img src="images/team2.jpg" alt="image"></div>
                    <div class="team-content">
                        <div class="team-info">
                            <h3>Alex Maxwel</h3>
                            <span>CEO &amp; Founder</span>
                        </div>
                        <ul>
                            <li>
                                <a target="_blank" href="/iot/#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/iot/#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/iot/#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                        <rect x="2" y="9" width="4" height="12" />
                                        <circle cx="4" cy="4" r="2" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/iot/#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M22.65 14.39L12 22.13 1.35 14.39a.84.84 0 0 1-.3-.94l1.22-3.78 2.44-7.51A.42.42 0 0 1 4.82 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.49h8.1l2.44-7.51A.42.42 0 0 1 18.6 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.51L23 13.45a.84.84 0 0 1-.35.94z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-team">
                    <div class="team-image"><img src="images/team3.jpg" alt="image"></div>
                    <div class="team-content">
                        <div class="team-info">
                            <h3>Janny Cotller</h3>
                            <span>CEO &amp; Founder</span>
                        </div>
                        <ul>
                            <li>
                                <a target="_blank" href="/iot/#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/iot/#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/iot/#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                        <rect x="2" y="9" width="4" height="12" />
                                        <circle cx="4" cy="4" r="2" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/iot/#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M22.65 14.39L12 22.13 1.35 14.39a.84.84 0 0 1-.3-.94l1.22-3.78 2.44-7.51A.42.42 0 0 1 4.82 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.49h8.1l2.44-7.51A.42.42 0 0 1 18.6 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.51L23 13.45a.84.84 0 0 1-.35.94z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-team">
                    <div class="team-image"><img src="images/team4.jpg" alt="image"></div>
                    <div class="team-content">
                        <div class="team-info">
                            <h3>Jason Statham</h3>
                            <span>CEO &amp; Founder</span>
                        </div>
                        <ul>
                            <li>
                                <a target="_blank" href="/iot/#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/iot/#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/iot/#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                        <rect x="2" y="9" width="4" height="12" />
                                        <circle cx="4" cy="4" r="2" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/iot/#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M22.65 14.39L12 22.13 1.35 14.39a.84.84 0 0 1-.3-.94l1.22-3.78 2.44-7.51A.42.42 0 0 1 4.82 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.49h8.1l2.44-7.51A.42.42 0 0 1 18.6 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.51L23 13.45a.84.84 0 0 1-.35.94z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <section class="feedback-area ptb-80 bg-f7fafd">
    <div class="container">
        <div class="section-title">
            <h2>What users Saying</h2>
            <div class="bar"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua.</p>
        </div>
        <div class="feedback-slides">
            <div class="client-feedback">
                <div>
                    <div class="slick-slider slick-initialized" dir="ltr">
                        <div class="slick-list">
                            <div class="slick-track" style="width:1700%;left:-100%">
                                <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1"
                                    aria-hidden="false"
                                    style="outline:none;width:5.882352941176471%;position:relative;left:0;opacity:1;transition:opacity 100ms linear, visibility 100ms linear">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="single-feedback">
                                                    <div class="client-img"><img src="{{ asset('frontend/images/client2.jpg') }}"
                                                            alt="image"></div>
                                                    <h3>David Gale</h3>
                                                    <span>Web Developer</span>
                                                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo
                                                        viverra maecenas accumsan lacus vel facilisis. Lorem
                                                        ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                        do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="1" class="slick-slide" tabindex="-1" aria-hidden="true"
                                    style="outline:none;width:5.882352941176471%;position:relative;left:-5px;opacity:0;transition:opacity 100ms linear, visibility 100ms linear">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="single-feedback">
                                                    <div class="client-img"><img src="{{ asset('frontend/images/client4.jpg') }}"
                                                            alt="image"></div>
                                                    <h3>Matt Damon</h3>
                                                    <span>Software Engineer</span>
                                                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo
                                                        viverra maecenas accumsan lacus vel facilisis. Lorem
                                                        ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                        do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="2" class="slick-slide" tabindex="-1" aria-hidden="true"
                                    style="outline:none;width:5.882352941176471%;position:relative;left:-10px;opacity:0;transition:opacity 100ms linear, visibility 100ms linear">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="single-feedback">
                                                    <div class="client-img"><img src="{{ asset('frontend/images/client1.jpg') }}"
                                                            alt="image"></div>
                                                    <h3>Nicky Parsons</h3>
                                                    <span>Fictional Character</span>
                                                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo
                                                        viverra maecenas accumsan lacus vel facilisis. Lorem
                                                        ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                        do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="3" class="slick-slide" tabindex="-1" aria-hidden="true"
                                    style="outline:none;width:5.882352941176471%;position:relative;left:-15px;opacity:0;transition:opacity 100ms linear, visibility 100ms linear">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="single-feedback">
                                                    <div class="client-img"><img src="{{ asset('frontend/images/client5.jpg') }}"
                                                            alt="image"></div>
                                                    <h3>Jason Momoa</h3>
                                                    <span>American Actor</span>
                                                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo
                                                        viverra maecenas accumsan lacus vel facilisis. Lorem
                                                        ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                        do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="4" class="slick-slide" tabindex="-1" aria-hidden="true"
                                    style="outline:none;width:5.882352941176471%;position:relative;left:-20px;opacity:0;transition:opacity 100ms linear, visibility 100ms linear">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="single-feedback">
                                                    <div class="client-img"><img src="{{ asset('frontend/images/client3.jpg') }}"
                                                            alt="image"></div>
                                                    <h3>Gennady Korotkevich</h3>
                                                    <span>Sport Programmer</span>
                                                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo
                                                        viverra maecenas accumsan lacus vel facilisis. Lorem
                                                        ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                        do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="5" class="slick-slide" tabindex="-1" aria-hidden="true"
                                    style="outline:none;width:5.882352941176471%;position:relative;left:-25px;opacity:0;transition:opacity 100ms linear, visibility 100ms linear">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="single-feedback">
                                                    <div class="client-img"><img src="{{ asset('frontend/images/client3.jpg') }}"
                                                            alt="image"></div>
                                                    <h3>Petr Mitrichev</h3>
                                                    <span>Russian Programmer</span>
                                                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo
                                                        viverra maecenas accumsan lacus vel facilisis. Lorem
                                                        ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                        do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="6" class="slick-slide" tabindex="-1" aria-hidden="true"
                                    style="outline:none;width:5.882352941176471%;position:relative;left:-30px;opacity:0;transition:opacity 100ms linear, visibility 100ms linear">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="single-feedback">
                                                    <div class="client-img"><img src="{{ asset('frontend/images/client2.jpg') }}"
                                                            alt="image"></div>
                                                    <h3>Reid W. Barton</h3>
                                                    <span>Mathematics</span>
                                                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo
                                                        viverra maecenas accumsan lacus vel facilisis. Lorem
                                                        ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                        do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="7" class="slick-slide" tabindex="-1" aria-hidden="true"
                                    style="outline:none;width:5.882352941176471%;position:relative;left:-35px;opacity:0;transition:opacity 100ms linear, visibility 100ms linear">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="single-feedback">
                                                    <div class="client-img"><img src="{{ asset('images/client1.jpg') }}"
                                                            alt="image"></div>
                                                    <h3>Lisa Sauermann</h3>
                                                    <span>Mathematician</span>
                                                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo
                                                        viverra maecenas accumsan lacus vel facilisis. Lorem
                                                        ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                        do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="client-thumbnails">
                <div>
                    <div class="slick-slider slick-initialized" dir="ltr">
                        <button class="prev-arrow slick-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <line x1="19" y1="12" x2="5" y2="12" />
                                <polyline points="12 19 5 12 12 5" />
                            </svg>
                        </button>
                        <div class="slick-list" style="padding:0px 50px">
                            <div class="slick-track" style="width:440%;left:-80%">
                                <div data-index="-6" tabindex="-1" class="slick-slide slick-cloned"
                                    aria-hidden="true" style="width:4.545454545454546%">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="img-fill"><img src="{{ asset('frontend/images/client1.jpg') }}"
                                                        alt="client"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="-5" tabindex="-1" class="slick-slide slick-cloned"
                                    aria-hidden="true" style="width:4.545454545454546%">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="img-fill"><img src="images/client5.jpg"
                                                        alt="client"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="-4" tabindex="-1" class="slick-slide slick-cloned"
                                    aria-hidden="true" style="width:4.545454545454546%">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="img-fill"><img src="{{ asset('frontend/images/client3.jpg') }}"
                                                        alt="client"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="-3" tabindex="-1" class="slick-slide slick-cloned"
                                    aria-hidden="true" style="width:4.545454545454546%">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="img-fill"><img src="{{ asset('frontend/images/client3.jpg') }}"
                                                        alt="client"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="-2" tabindex="-1" class="slick-slide slick-active slick-cloned"
                                    aria-hidden="false" style="width:4.545454545454546%">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="img-fill"><img src="{{ asset('frontend/images/client2.jpg') }}"
                                                        alt="client"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="-1" tabindex="-1" class="slick-slide slick-active slick-cloned"
                                    aria-hidden="false" style="width:4.545454545454546%">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="img-fill"><img src="{{ asset('frontend/images/client1.jpg') }}"
                                                        alt="client"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="0" class="slick-slide slick-active slick-center slick-current"
                                    tabindex="-1" aria-hidden="false"
                                    style="outline:none;width:4.545454545454546%">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="img-fill"><img src="{{ asset('frontend/images/client2.jpg') }}"
                                                        alt="client"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="1" class="slick-slide slick-active" tabindex="-1"
                                    aria-hidden="false" style="outline:none;width:4.545454545454546%">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="img-fill"><img src="{{ asset('frontend/images/client4.jpg') }}"
                                                        alt="client"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="2" class="slick-slide slick-active" tabindex="-1"
                                    aria-hidden="false" style="outline:none;width:4.545454545454546%">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="img-fill"><img src="{{ asset('frontend/images/client1.jpg') }}"
                                                        alt="client"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="3" class="slick-slide" tabindex="-1" aria-hidden="true"
                                    style="outline:none;width:4.545454545454546%">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="img-fill"><img src="images/client5.jpg"
                                                        alt="client"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="4" class="slick-slide" tabindex="-1" aria-hidden="true"
                                    style="outline:none;width:4.545454545454546%">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="img-fill"><img src="{{ asset('frontend/images/client3.jpg') }}"
                                                        alt="client"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="5" class="slick-slide" tabindex="-1" aria-hidden="true"
                                    style="outline:none;width:4.545454545454546%">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="img-fill"><img src="{{ asset('frontend/images/client3.jpg') }}"
                                                        alt="client"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="6" class="slick-slide" tabindex="-1" aria-hidden="true"
                                    style="outline:none;width:4.545454545454546%">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="img-fill"><img src="{{ asset('frontend/images/client2.jpg') }}"
                                                        alt="client"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="7" class="slick-slide" tabindex="-1" aria-hidden="true"
                                    style="outline:none;width:4.545454545454546%">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="img-fill"><img src="images/client1.jpg"
                                                        alt="client"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="8" tabindex="-1" class="slick-slide slick-center slick-cloned"
                                    aria-hidden="true" style="width:4.545454545454546%">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="img-fill"><img src="images/client2.jpg"
                                                        alt="client"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="9" tabindex="-1" class="slick-slide slick-cloned"
                                    aria-hidden="true" style="width:4.545454545454546%">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="img-fill"><img src="images/client4.jpg"
                                                        alt="client"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="10" tabindex="-1" class="slick-slide slick-cloned"
                                    aria-hidden="true" style="width:4.545454545454546%">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="img-fill"><img src="images/client1.jpg"
                                                        alt="client"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="11" tabindex="-1" class="slick-slide slick-cloned"
                                    aria-hidden="true" style="width:4.545454545454546%">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="img-fill"><img src="images/client5.jpg"
                                                        alt="client"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="12" tabindex="-1" class="slick-slide slick-cloned"
                                    aria-hidden="true" style="width:4.545454545454546%">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="img-fill"><img src="images/client3.jpg"
                                                        alt="client"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="13" tabindex="-1" class="slick-slide slick-cloned"
                                    aria-hidden="true" style="width:4.545454545454546%">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="img-fill"><img src="images/client3.jpg"
                                                        alt="client"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="14" tabindex="-1" class="slick-slide slick-cloned"
                                    aria-hidden="true" style="width:4.545454545454546%">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="img-fill"><img src="images/client2.jpg"
                                                        alt="client"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-index="15" tabindex="-1" class="slick-slide slick-cloned"
                                    aria-hidden="true" style="width:4.545454545454546%">
                                    <div>
                                        <div tabindex="-1" style="width:100%;display:inline-block">
                                            <div class="item">
                                                <div class="img-fill"><img src="images/client1.jpg"
                                                        alt="client"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="next-arrow slick-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12" />
                                <polyline points="12 5 19 12 12 19" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape1"><img src="{{ asset('frontend/images/shape1.png') }}" alt="shape"></div>
    <div class="shape2 rotateme"><img src="{{ asset('fronend/fonts/shape2.svg') }}" alt="shape"></div>
    <div class="shape4"><img src="{{ asset('frontend/fonts/shape4.svg') }}" alt="shape"></div>
    <div class="shape5"><img src="{{ asset('frontend/images/shape5.png') }}" alt="shape"></div>
    <div class="shape6 rotateme"><img src="{{ asset('frontend/fonts/shape4.svg') }}" alt="shape"></div>
    <div class="shape7"><img src="{{ asset('frontend/fonts/shape4.svg') }}" alt="shape"></div>
    <div class="shape8 rotateme"><img src="{{ asset('frontend/fonts/shape2.svg') }}" alt="shape"></div>
</section> --}}
<div class="iot-why-choose-us pt-80">
    <div class="container">
        <div class="section-title">
            <h2>Why We Are Best From Others</h2>
            <div class="bar"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-iot-box">
                    <div class="icon"><img src="images/icon1.png" alt="image"></div>
                    <h3>Digital Technology</h3>
                    <p>Lorem ipsum dolor sit amet elit, adipiscing, sed do eiusmod tempor incididunt ut labore
                        dolore magna aliqua.</p>
                    <a href="/iot/#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <polyline points="12 5 19 12 12 19" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-iot-box">
                    <div class="icon"><img src="images/icon2.png" alt="image"></div>
                    <h3>Business Protection</h3>
                    <p>Lorem ipsum dolor sit amet elit, adipiscing, sed do eiusmod tempor incididunt ut labore
                        dolore magna aliqua.</p>
                    <a href="/iot/#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <polyline points="12 5 19 12 12 19" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-iot-box">
                    <div class="icon"><img src="images/icon3.png" alt="image"></div>
                    <h3>Data Analysis</h3>
                    <p>Lorem ipsum dolor sit amet elit, adipiscing, sed do eiusmod tempor incididunt ut labore
                        dolore magna aliqua.</p>
                    <a href="/iot/#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <polyline points="12 5 19 12 12 19" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="blog-area pt-80 pb-50">
    <div class="container">
        <div class="section-title">
            <h2>The News from Our Blog</h2>
            <div class="bar"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="blog-image">
                        <a href="/blog-details/"><img src="images/blog1.jpg" alt="image"></a>
                        <div class="date">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>
                            March 15, 2021
                        </div>
                    </div>
                    <div class="blog-post-content">
                        <h3><a href="/blog-details/">The Security Risks of Changing Package Owners</a></h3>
                        <span>By <a href="#">Admin</a></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                        <a class="read-more-btn" href="/blog-details/">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12" />
                                <polyline points="12 5 19 12 12 19" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="blog-image">
                        <a href="/blog-details/"><img src="images/blog2.jpg" alt="image"></a>
                        <div class="date">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>
                            March 17, 2021
                        </div>
                    </div>
                    <div class="blog-post-content">
                        <h3><a href="/blog-details/">Tips to Protecting Your Business and Family</a></h3>
                        <span>By <a href="/iot/#">Smith</a></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                        <a class="read-more-btn" href="/blog-details/">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12" />
                                <polyline points="12 5 19 12 12 19" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="blog-image">
                        <a href="/blog-details/"><img src="images/blog3.jpg" alt="image"></a>
                        <div class="date">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>
                            March 19, 2021
                        </div>
                    </div>
                    <div class="blog-post-content">
                        <h3><a href="/blog-details/">Protect Your Workplace from Cyber Attacks</a></h3>
                        <span>By <a href="/iot/#">John</a></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                        <a class="read-more-btn" href="/blog-details/">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12" />
                                <polyline points="12 5 19 12 12 19" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
