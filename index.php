<?php include('template-parts/header.php'); ?>

<section class="slider-area">
    <div class="slider-item" style="background-image: url(assets/img/slide-bg.jpg);">
        <div class="slide-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7 order-mo-2">
                    <div class="slider-content wow fadeInUp" data-wow-delay="0.5s">
                        <div class="slider-heading">
                            <h2>Find a <br>Job Near You</h2>
                        </div>
                        <div class="slider-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="slider-btns">
                            <a href="#" class="cp-btn box-btn bg-red">I Want to hire</a>
                            <a href="#" class="cp-btn border-btn ml-15 bg-green">i want to work</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight col-md-5 order-mo-1 text-right" data-wow-delay="0.6s">
                    <div class="slider-image">
                        <img src="assets/img/slide-1.svg" alt="Slider Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="job-search-area">
    <div class="container">
        <div class="job-area-container transform-minus-120">
            <div class="job-search-form">
                <div class="row">
                    <div class="col-12">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <input class="form-control" type="text" id="" name="" placeholder="Keyword or Job Title">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <select class="selectpicker" multiple="multiple" title="Job Category...">
                                                <option value="Entry">Entry Level</option>
                                                <option value="Mid">Medium Level</option>
                                                <option value="Senior">Senior Level</option>
                                            </select> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <select class="selectpicker" name="" id="">
                                            <option value="" selected>Job Level</option>
                                            <option value="Entry">Entry Level</option>
                                            <option value="Mid">Medium Level</option>
                                            <option value="Senior">Senior Level</option>
                                        </select>  
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <select class="selectpicker" name="" id="">
                                            <option value="" selected>Job Type</option>
                                            <option value="Full Time">Full Time</option>
                                            <option value="Part Time">Part Time</option>
                                            <option value="Contractual">Contractual</option>
                                        </select>  
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <select class="selectpicker" name="" id="">
                                            <option value="" selected>Language</option>
                                            <option value="English">English</option>
                                            <option value="Japanese">Japanese</option>
                                            <option value="Bangla">Bangla</option>
                                        </select>  
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="submit" class="cp-btn primary-bg b-0" value="Find Job"> 
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="job-category-tab">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="job-category-tabs">
                            <ul class="nav nav-tab" id="catTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-links active" id="arrival-tab" data-toggle="tab" href="#arrival" role="tab" aria-controls="arrival-tab" aria-selected="true">New Arrival</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-links" id="job-cat-tab" data-toggle="tab" href="#job-cat" role="tab" aria-controls="job-cat-tab" aria-selected="false">Job Category</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-links" id="industry-tab" data-toggle="tab" href="#industry" role="tab" aria-controls="industry-tab" aria-selected="false">Industry</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-links" id="language-tab" data-toggle="tab" href="#language" role="tab" aria-controls="language-tab" aria-selected="false">Language</a>
                                </li>
                            </ul>
                        </div>
                        <!-- <h4>JOB CATEGORY</h4> -->
                        <div class="tab-content category-tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="arrival" role="tabpanel" aria-labelledby="arrival-tab">
                                <div class="job-category-list">
                                    <ul>
                                        <li><a href="#">Executive</a></li>
                                        <li><a href="#">IT (PC, Web, Unix)</a></li>
                                        <li><a href="#">IT (Mainframe)</a></li>
                                        <li><a href="#">IT (Hardware/Network)</a></li>
                                        <li><a href="#">IT (ontrol Systems)</a></li>
                                        <li><a href="#">IT (Other)</a></li>
                                        <li><a href="#">Electronics (Appliance/Semiconductor)</a></li>
                                        <li><a href="#">Manufacturing (Automobile Equipment)</a></li>
                                        <li><a href="#">Medical/Pharmaceutical/Food</a></li>
                                        <li><a href="#">Equipment/Real Estate</a></li>
                                        <li><a href="#">Consulting</a></li>
                                        <li><a href="#">Legal</a></li>
                                        <li><a href="#">Finance/Accounting</a></li>
                                        <li><a href="#">Administrative</a></li>
                                        <li><a href="#">Customer Service</a></li>
                                        <li><a href="#">Finance/Bank/Securities</a></li>
                                        <li><a href="#">Insurance</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="job-cat" role="tabpanel" aria-labelledby="job-cat-tab">
                                <div class="job-category-list">
                                    <ul>
                                        <li><a href="#">Executive</a></li>
                                        <li><a href="#">IT (PC, Web, Unix)</a></li>
                                        <li><a href="#">IT (Mainframe)</a></li>
                                        <li><a href="#">IT (Hardware/Network)</a></li>
                                        <li><a href="#">IT (ontrol Systems)</a></li>
                                        <li><a href="#">IT (Other)</a></li>
                                        <li><a href="#">Electronics (Appliance/Semiconductor)</a></li>
                                        <li><a href="#">Manufacturing (Automobile Equipment)</a></li>
                                        <li><a href="#">Medical/Pharmaceutical/Food</a></li>
                                        <li><a href="#">Equipment/Real Estate</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="industry" role="tabpanel" aria-labelledby="industry-tab">
                                <div class="job-category-list">
                                    <ul>
                                        <li><a href="#">Electronics (Appliance/Semiconductor)</a></li>
                                        <li><a href="#">Manufacturing (Automobile Equipment)</a></li>
                                        <li><a href="#">Medical/Pharmaceutical/Food</a></li>
                                        <li><a href="#">Equipment/Real Estate</a></li>
                                        <li><a href="#">Consulting</a></li>
                                        <li><a href="#">Legal</a></li>
                                        <li><a href="#">Finance/Accounting</a></li>
                                        <li><a href="#">Administrative</a></li>
                                        <li><a href="#">Customer Service</a></li>
                                        <li><a href="#">Finance/Bank/Securities</a></li>
                                        <li><a href="#">Insurance</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="language" role="tabpanel" aria-labelledby="language-tab">
                                <div class="job-category-list">
                                    <ul>
                                        <li><a href="#">Executive</a></li>
                                        <li><a href="#">IT (PC, Web, Unix)</a></li>
                                        <li><a href="#">IT (Mainframe)</a></li>
                                        <li><a href="#">IT (Hardware/Network)</a></li>
                                        <li><a href="#">IT (ontrol Systems)</a></li>
                                        <li><a href="#">IT (Other)</a></li>
                                        <li><a href="#">Electronics (Appliance/Semiconductor)</a></li>
                                        <li><a href="#">Manufacturing (Automobile Equipment)</a></li>
                                        <li><a href="#">Medical/Pharmaceutical/Food</a></li>
                                        <li><a href="#">Equipment/Real Estate</a></li>
                                        <li><a href="#">Consulting</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




    <!-- <section class="counter-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-title text-center">
                        <h2 class="wow fadeInUp">Latest Project Activitives</h2>
                        <p class="wow fadeInUp">Here is a showcase of our latest projects that went live, let's highlight your next product here</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="project-counter text-center">
                        <div class="counter-icon icon-small">
                            <img src="assets/img/web-design.png" alt="Projects Completed">
                        </div>
                        <span class="count">1500</span>
                        <h5>Projects Completed</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="project-counter text-center">
                        <div class="counter-icon">
                            <img src="assets/img/startup.png" alt="Projects Ongoing">
                        </div>
                        <span class="count">250</span>
                        <h5>Projects Ongoing</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="project-counter text-center">
                        <div class="counter-icon">
                            <img src="assets/img/team.png" alt="Happy Clients">
                        </div>
                        <span class="count">650</span>
                        <h5>Happy Clients</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="project-counter text-center">
                        <div class="counter-icon">
                            <img src="assets/img/award.png" alt="Award Won">
                        </div>
                        <span class="count">150</span>
                        <h5>Award Won</h5>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="cta-area bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cta-box bg-image wow fadeInUp">
                        <h3>Get Cloud Job Mobile App</h3>
                        <p>Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry.</p>
                        <a href="#" class="revo-btn box-btn">Join with us</a>
                        <div class="slider-btns">
                            <a href="#" class="cp-btn box-btn">I Want to hire</a>
                            <a href="#" class="cp-btn border-btn ml-15">i want to work</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                </div>
            </div>
        </div>
    </section> -->

<?php include('template-parts/footer.php'); ?>
     