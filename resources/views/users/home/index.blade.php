<!-- Hero Section Begin -->
<section class="hero-section" id="hero">
    <div class="hs-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="{{ asset('gym/img/hero/hero-1.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="hi-text">
                            <span>Shape your body</span>
                            <h1>Be <strong>strong</strong> traning hard</h1>
                            <a href="#" class="primary-btn">Get info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs-item set-bg" data-setbg="{{ asset('gym/img/hero/hero-2.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="hi-text">
                            <span>Shape your body</span>
                            <h1>Be <strong>strong</strong> traning hard</h1>
                            <a href="#" class="primary-btn">Get info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- About Us Section Begin -->
<section class="choseus-section spad" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>About Us</span>
                    <h2>WHO WE ARE</h2>
                    <p style="color: white; font-size: 19px; margin-top: 20px">Founded by Gamelab Indonesia in 2011, GYM
                        GAMELAB empowers people to become the best version of themselves.<br>
                        Our team of expert trainers will uplift, inspire, and empower you using our modern equipment.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-034-stationary-bike"></span>
                    <h4>Modern equipment</h4>
                    <p>Enjoy the best service from us. We provide the latest equipment with the best quality.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-033-juice"></span>
                    <h4>Healthy nutrition plan</h4>
                    <p>We provide services to create a healthy food plan for you. Make sure your food has good
                        nutrition.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-002-dumbell"></span>
                    <h4>Proffesional training plan</h4>
                    <p>We have professional trainers who will provide the best training plan for your health.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-014-heart-beat"></span>
                    <h4>Unique to your needs</h4>
                    <p>We have a unique method and plan to make your health targets achieved perfectly.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->

<!-- Our Class Section Begin -->
<section class="classes-section spad" id="ourclass">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Our Classes</span>
                    <h2>WHAT WE CAN OFFER</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="class-item">
                    <div class="ci-pic">
                        <img src="{{ asset('gym/img/classes/class-1.jpg') }}" alt="">
                    </div>
                    <div class="ci-text">
                        <span>STRENGTH</span>
                        <h5>Weightlifting</h5>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#Modal1"
                            style="text-decoration: none; color: white"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="class-item">
                    <div class="ci-pic">
                        <img src="{{ asset('gym/img/classes/class-2.jpg') }}" alt="">
                    </div>
                    <div class="ci-text">
                        <span>Cardio</span>
                        <h5>Indoor cycling</h5>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#Modal2"
                            style="text-decoration: none; color: white"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="class-item">
                    <div class="ci-pic">
                        <img src="{{ asset('gym/img/classes/class-3.jpg') }}" alt="">
                    </div>
                    <div class="ci-text">
                        <span>STRENGTH</span>
                        <h5>Kettlebell power</h5>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#Modal3"
                            style="text-decoration: none; color: white"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="class-item">
                    <div class="ci-pic">
                        <img src="{{ asset('gym/img/classes/class-4.jpg') }}" alt="">
                    </div>
                    <div class="ci-text">
                        <span>Cardio</span>
                        <h4>Skipping</h4>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#Modal4"
                            style="text-decoration: none; color: white"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="class-item">
                    <div class="ci-pic">
                        <img src="{{ asset('gym/img/classes/class-5.jpg') }}" alt="">
                    </div>
                    <div class="ci-text">
                        <span>Training</span>
                        <h4>Boxing</h4>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#Modal5"
                            style="text-decoration: none; color: white"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 1 -->
        <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="ModalLabel1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="ModalLabel1">Weightlifting</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Lifting weights itself is a form of sport or strength training that requires excellent
                            coordination,
                            balance, balance, speed and of course strength. Lifting weights is a great way to enhance
                            your cardio training.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 2 -->
        <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="ModalLabel2" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="ModalLabel2">Indoor Cycling</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Indoor cycling is a rhythmic and dynamic cardiovascular workout that engages the entire body.
                            By pedaling to the beat, you elevate your heart rate and strengthen your cardiovascular
                            system</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 3 -->
        <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="ModalLabel3" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="ModalLabel3">Kettlebell Power</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Like dumbbells, though, kettlebells are effective ways to build strength, since you can
                            continually challenge your muscles with them by adding more weight or increasing
                            repetitions.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 4 -->
        <div class="modal fade" id="Modal4" tabindex="-1" aria-labelledby="ModalLabel4" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="ModalLabel4">Skipping</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Skipping is a sport that is believed to be effective for increasing height and losing weight.
                            Skipping is an activity using a rope that is held with both hands and then swung from head
                            to toe while jumping over it.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 5 -->
        <div class="modal fade" id="Modal5" tabindex="-1" aria-labelledby="ModalLabel5" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="ModalLabel5">Boxing</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Boxing is a sport and martial art in which two participants of similar weight compete against
                            each other using their
                            fists in a series of matches at one or three minute intervals called rounds.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Our Class Section End -->

<!-- Pricing Section Begin -->
<section class="pricing-section spad" id="packages">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Our Packages</span>
                    <h2>Choose member packages</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-8">
                <div class="ps-item">
                    <h3>1 MONTH</h3>
                    <div class="pi-price">
                        <h2>150.000 <sup>IDR</h2>
                        <span>30 days</span>
                    </div>
                    <ul>
                        <li>Free riding</li>
                        <li>Unlimited equipments</li>
                        <li>Personal trainer</li>
                        <li>Weight losing classes</li>
                        <li>Month to mouth</li>
                        <li>No time restriction</li>
                    </ul>
                    <a href="#packages" class="primary-btn pricing-btn" style="text-decoration: none">Enroll now</a>
                    <a href="#packages" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="ps-item">
                    <h3>3 MONTH</h3>
                    <div class="pi-price">
                        <h2>375.000 <sup>IDR</h2>
                        <span>90 days</span>
                    </div>
                    <ul>
                        <li>Free riding</li>
                        <li>Unlimited equipments</li>
                        <li>Personal trainer</li>
                        <li>Weight losing classes</li>
                        <li>Month to mouth</li>
                        <li>No time restriction</li>
                    </ul>
                    <a href="#packages" class="primary-btn pricing-btn" style="text-decoration: none">Enroll now</a>
                    <a href="#packages" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="ps-item">
                    <h3>6 MONTH</h3>
                    <div class="pi-price">
                        <h2>650.000 <sup>IDR</h2>
                        <span>180 days</span>
                    </div>
                    <ul>
                        <li>Free riding</li>
                        <li>Unlimited equipments</li>
                        <li>Personal trainer</li>
                        <li>Weight losing classes</li>
                        <li>Month to mouth</li>
                        <li>No time restriction</li>
                    </ul>
                    <a href="#packages" class="primary-btn pricing-btn" style="text-decoration: none">Enroll now</a>
                    <a href="#packages" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Section End -->

<!-- Gallery Section Begin -->
<div class="gallery-section">
    <div class="gallery">
        <div class="grid-sizer"></div>
        <div class="gs-item grid-wide set-bg" data-setbg="{{ asset('gym/img/gallery/gallery-1.jpg') }}">
            <a href="{{ asset('gym/img/gallery/gallery-1.jpg') }}" class="thumb-icon image-popup"><i
                    class="fa fa-picture-o"></i></a>
        </div>
        <div class="gs-item set-bg" data-setbg="{{ asset('gym/img/gallery/gallery-2.jpg') }}">
            <a href="{{ asset('gym/img/gallery/gallery-2.jpg') }}" class="thumb-icon image-popup"><i
                    class="fa fa-picture-o"></i></a>
        </div>
        <div class="gs-item set-bg" data-setbg="{{ asset('gym/img/gallery/gallery-3.jpg') }}">
            <a href="{{ asset('gym/img/gallery/gallery-3.jpg') }}" class="thumb-icon image-popup"><i
                    class="fa fa-picture-o"></i></a>
        </div>
        <div class="gs-item set-bg" data-setbg="{{ asset('gym/img/gallery/gallery-4.jpg') }}">
            <a href="{{ asset('gym/img/gallery/gallery-4.jpg') }}" class="thumb-icon image-popup"><i
                    class="fa fa-picture-o"></i></a>
        </div>
        <div class="gs-item set-bg" data-setbg="{{ asset('gym/img/gallery/gallery-5.jpg') }}">
            <a href="{{ asset('gym/img/gallery/gallery-5.jpg') }}" class="thumb-icon image-popup"><i
                    class="fa fa-picture-o"></i></a>
        </div>
        <div class="gs-item grid-wide set-bg" data-setbg="{{ asset('gym/img/gallery/gallery-6.jpg') }}">
            <a href="{{ asset('gym/img/gallery/gallery-6.jpg') }}" class="thumb-icon image-popup"><i
                    class="fa fa-picture-o"></i></a>
        </div>
    </div>
</div>

<!-- Team Section Begin -->
<section class="team-section spad" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="team-title">
                    <div class="section-title">
                        <span>Our Team</span>
                        <h2>The Builders</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="ts-slider owl-carousel">
                <div class="col-lg-4">
                    <div class="ts-item set-bg" data-setbg="{{ asset('gym/img/team/team-1.jpg') }}">
                        <div class="ts_text">
                            <h4>Fernando</h4>
                            <span>Fullstack Team</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ts-item set-bg" data-setbg="{{ asset('gym/img/team/team-2.jpg') }}">
                        <div class="ts_text">
                            <h4>Yuzika</h4>
                            <span>Fullstack Team</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ts-item set-bg" data-setbg="{{ asset('gym/img/team/team-3.jpg') }}">
                        <div class="ts_text">
                            <h4>Jatmiko</h4>
                            <span>Fullstack Team</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section End -->
