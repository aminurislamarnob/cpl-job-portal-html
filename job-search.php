<?php include('template-parts/header.php'); ?>
<!--Breadcrumb Area Started-->
<div class="breadcrumb-area gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <span>According to your search criteria 49 available jobs matching:</span>
                    <h2>Programming, Software & IT</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb Area End-->

<!--Job Filter Started-->
<div class="job-filter-btn"><i class="fas fa-filter"></i> Filter</div>
<div class="job-filter">
    <h4 class="filter-title">Filter Job <span class="filter-close"><i class="fas fa-times"></i></span></h4>
    <div class="job-post-filter posted-job-filter">
        <h4>Date Posted</h4>
        <ul class="radios">
            <li>
                <input type="radio" class="custom-control-input" id="pastAll" name="period" value="all" checked="">
                <label class="custom-control-label" for="pastAll">24 hours</label>
            </li>
            <li>
                <input type="radio" class="custom-control-input" id="pastHour" name="period" value="1">
                <label class="custom-control-label" for="pastHour">24 hours</label>
            </li>
            <li>
                <input type="radio" class="custom-control-input" id="past3day" name="period" value="3">
                <label class="custom-control-label" for="past3day">3 days</label>
            </li>
            <li>
                <input type="radio" class="custom-control-input" id="past7day" name="period" value="7">
                <label class="custom-control-label" for="past7day">7 days</label>
            </li>
            <li>
                <input type="radio" class="custom-control-input" id="past30days" name="period" value="30">
                <label class="custom-control-label" for="past30days">30 days</label>
            </li>
        </ul>
    </div>
    <div class="job-post-filter experience-job-filter">
        <h4>Experience</h4>
        <ul class="radios">
            <li>
                <input type="radio" class="custom-control-input" id="ex1" name="experience" value="0~1">
                <label class="custom-control-label" for="ex1">Less than 1 year</label>
            </li>
            <li>
                <input type="radio" class="custom-control-input" id="ex2" name="experience" value="1~2">    
                <label class="custom-control-label" for="ex2">1~2 years</label>
            </li>
            <li>
                <input type="radio" class="custom-control-input" id="ex3" name="experience" value="3~5">
                <label class="custom-control-label" for="ex3">3~5 years</label>
            </li>
            <li>
                <input type="radio" class="custom-control-input" id="ex4" name="experience" value="6~9">
                <label class="custom-control-label" for="ex4">6~9 years</label>
            </li>
            <li>
                <input type="radio" class="custom-control-input" id="ex5" name="experience" value="10~50">
                <label class="custom-control-label" for="ex5">Over 10 years</label>
            </li>
        </ul>
    </div>
    <div class="job-post-filter salary-range-filter">
        <h4>Salary Range</h4>
        <ul class="radios">
            <li>
                <input type="radio" name="salary" class="custom-control-input" id="sal1" value="1-10000">
                <label class="custom-control-label" for="sal1">Less than 10000</label>
            </li>
            <li>
                <input type="radio" name="salary" class="custom-control-input" id="sal2" value="10000-20000">   
                <label class="custom-control-label" for="sal2">10000~20000</label>
            </li>
            <li>
                <input type="radio" name="salary" class="custom-control-input" id="sal3" value="20000-50000">
                <label class="custom-control-label" for="sal3">20000~50000 </label>
            </li>
            <li>
                <input type="radio" name="salary" class="custom-control-input" id="sal4" value="50000-100000">
                <label class="custom-control-label" for="sal4">50000~100000</label>
            </li>
            <li>
                <input type="radio" name="salary" class="custom-control-input" id="sal5" value="100000-10000000">
                <label class="custom-control-label" for="sal5">More than 100000</label>
            </li>
        </ul>
    </div>
    <div class="job-post-filter employee-type-filter">
        <h4>Employee Type</h4>
        <ul class="checkboxes">
            <li>
                <input type="checkbox" class="custom-control-input" id="direct">
                <label class="custom-control-label" for="direct">Direct</label>
            </li>
            <li>
                <input type="checkbox" class="custom-control-input" id="recruiter1">  
                <label class="custom-control-label" for="recruiter1">Recruiter</label>
            </li>
            <li>
                <input type="checkbox" class="custom-control-input" id="agency">
                <label class="custom-control-label" for="agency">Agency</label>
            </li>
        </ul>
    </div>
</div>
<!--Job Filter End-->


<!--Job Search Form-->
<section class="job-search-area job-search-page-form">
    <div class="container">
        <div class="job-area-container">
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
                                        <input class="form-control" type="text" id="" name="" placeholder="Job Category...">
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
        </div>
    </div>
</section>
<!--End Job Search Form-->

<!--Job Search List Started-->
<div class="all-job-list gray-bg pb-70">
    <div class="container">
        <div class="row no-gutters">
            <div class="col">
                <div class="cp-job-container">
                    <div class="jobs-list-body">
                        <div class="job-grid-header">
                            <div class="row">
                                <div class="col-lg-6 my-auto">
                                    <div class="available-show-title text-left"><span class="filter-active"><i class="fas fa-sliders-h"></i></span> Showing 1–12 of 46 Jobs</div>
                                </div>
                                <div class="col-lg-6 my-auto">
                                    <div class="job-list-view-type text-right">
                                        <div class="view-type-list active"><i class="fas fa-bars"></i></div>
                                        <div class="view-type-grid active"><i class="fas fa-th-large"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="job-search-results">

                                <?php for($i = 0; $i<12; $i++){ ?>
                                    <!--Job List Start-->
                                    <div class="cp-job-list">
                                        <div class="cp-job-body">
                                            <div class="cp-job-thumb">
                                                <img src="assets/img/company-logo.jpg" alt="Company Logo">
                                            </div>
                                            <div class="cp-job-meta">
                                                <div class="cp-job-info">
                                                    <h4><a href="job-details.php">Web designer wanted.</a></h4>
                                                    <div class="job-title-meta">
                                                        <div class="cp-job-li">
                                                            <span><i class="fas fa-briefcase"></i>Cloud job</span>
                                                            <span><i class="fas fa-map-marked"></i>Japan</span>
                                                        </div>
                                                        <div class="cp-job-li">
                                                            <span><i class="fas fa-user-tie"></i>Executive</span>
                                                            <span><i class="far fa-clock"></i>Part time</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cp-job-action">
                                                    <a href="job-details.php" class="cp-job-btn">View Details</a>
                                                    <a href="#" class="cp-job-btn">Apply now</a>
                                                    <p class="cp-job-deadline">Deadline: Feb 15, 2020</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Job List End-->
                                <?php } ?>

                                </div>
                                <div class="cp-pagination">
                                    <ul>
                                        <li class="prev page-number"><a href="#"><i class="fas fa-angle-left"></i></a></li>
                                        <li class="page-number"><a href="#">1</a></li>
                                        <li class="page-number"><a href="#">2</a></li>
                                        <li class="page-number page-active"><a href="#">3</a></li>
                                        <li class="page-number"><a href="#">4</a></li>
                                        <li class="next page-number"><a href="#"><i class="fas fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Job Search List Started-->


<?php include('template-parts/footer.php'); ?>