<?php include('template-parts/header.php'); ?>
<!--Breadcrumb Area Started-->
<div class="breadcrumb-area gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <span>Home / Disapproval Job List:</span>
                    <h2>Pending Job list</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb Area End-->

<!--Job seeker panel Started-->
<div class="job-seeker-panel gray-bg pb-70">
    <div class="container">
        <div class="row">
            <!-- dashboard-box-shadow pr-10-->
            <div class="col-md-3">
            <?php include('template-parts/left-sidebar.php'); ?>
            </div>
            <div class="col-md-9">
                <div class="dashboard-area ml-10">

                    <!--Recruiter Add New Job Started-->
                    <div class="add-profile-container dash-padding bg-white">
                        <div class="form-card">
                            <div class="form-timeline">
                                <div class="form-body bg-gray">
                                    <ul class="timeline-buttons nav nav-tabs cbp_tmtimeline row timeline_buttons no-gutters">
                                        <li class="nav-item col p-0">
                                            <a class="profile_step_title_1 active" data-toggle="tab" href="#profileStepOne">
                                                <div class="icon-bg">
                                                    <div class="cbp_tmicon cbp_timeline_theme_color mx-auto"><i class="fas fa-user-tie"></i></div>
                                                </div>
                                                <div class="p-details timeline-table-title text-center">
                                                    <h6>Personal Details</h6>
                                                    <p>Enter your first time personal details</p>
                                                </div>
                                            </a>
                                            
                                        </li>
                                        <li class="nav-item col p-0">
                                            <a class="profile_step_title_2" data-toggle="tab" href="#ProfileStepTwo">
                                                <div class="icon-bg">
                                                    <div class="cbp_tmicon mx-auto"><i class="fas fa-user-graduate"></i></div>
                                                </div>
                                                <div class="edu-training timeline-table-title text-center">
                                                    <h6>Education/Training</h6>
                                                    <p>Enter your first time Education/Training details</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item col p-0">
                                            <a class="profile_step_title_3" data-toggle="tab" href="#ProfileStepThree">
                                                <div class="icon-bg">
                                                    <div class="cbp_tmicon cbp_timeline_perple_color mx-auto"><i class="fas fa-briefcase"></i></div>
                                                </div>
                                                <div class="employment-title timeline-table-title text-center">
                                                    <h6>Employment</h6>
                                                    <p>Enter your first time Employment details</p>
                                                </div> 
                                            </a>
                                        </li>
                                        <li class="nav-item col p-0">
                                            <a class="profile_step_title_4" data-toggle="tab" href="#profileStepFour">
                                                <div class="icon-bg">
                                                    <div class="cbp_tmicon mx-auto cbp_timeline_green_color"><i class="far fa-heart"></i></div>
                                                </div>
                                                <div class="pref-title timeline-table-title text-center">
                                                    <h6>Preferrence</h6>
                                                    <p>Enter your first time Employment details</p>
                                                </div> 
                                            </a>
                                        </li>
                                    </ul> 
                                </div>
                            </div>
                            <div class="form-body">
                            <form  class="form_validation" id="jobRelated" method="POST">
                                <div class="tab-content">
                                    <!--Step 1 Form-->
                                    <div role="tabpanel" class="tab-pane fade show active" id="profileStepOne">
                                        <div class="form-card">
                                            <div class="header">
                                                <h2><strong>Personal</strong> Details</h2>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group form-float">
                                                            <label for="">First Name</label>
                                                            <input type="text" class="form-control" placeholder="First Name" name="" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-float">
                                                            <label for="">Last Name</label>
                                                            <input type="text" class="form-control" placeholder="Last Name" name="" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-float">
                                                            <label for="">Middle Name</label>
                                                            <input type="text" class="form-control" placeholder="Middle Name" name="" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-float">
                                                            <label for="">Date of Birth</label>
                                                            <input type="text" class="form-control datepicker" placeholder="yyyy/mm/dd">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Gender</label>
                                                            <div class="radio_buttons">
                                                                <div class="radio inlineblock">
                                                                    <input type="radio" name="gender" id="male" class="with-gap" value="male">
                                                                    <label for="male">Female</label>
                                                                </div>                               
                                                                <div class="radio inlineblock">
                                                                    <input type="radio" name="gender" id="female" class="with-gap" value="female">
                                                                    <label for="female">Female</label>
                                                                </div>
                                                                <div class="radio inlineblock">
                                                                    <input type="radio" name="gender" id="other" class="with-gap" value="other">
                                                                    <label for="other">Other</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-float">
                                                            <label for="">Nationality</label>
                                                            <input type="text" class="form-control" placeholder="Nationality" name="" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-float">
                                                            <label for="">Other Nationality(If have any)</label>
                                                            <input type="text" class="form-control" placeholder="Other Nationality" name="" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row"> 
                                                    <div class="col-12">
                                                        <label for="">Current Address</label>
                                                    </div>   
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <select class="form-control selectpicker" name="">
                                                                <option value="" selected>-- Select Country --</option>
                                                                <option value="Entry">Bangladesh</option>
                                                                <option value="Mid">Japan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <select class="form-control selectpicker" name="">
                                                                <option value="" selected>-- Select Region --</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Prefecture" name="" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Current Address Details" name="" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row"> 
                                                    <div class="col-12">
                                                        <label for="">Permanent Address</label>
                                                    </div>   
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <select class="form-control selectpicker" name="">
                                                                <option value="" selected>-- Select Country --</option>
                                                                <option value="Entry">Bangladesh</option>
                                                                <option value="Mid">Japan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <select class="form-control selectpicker" name="">
                                                                <option value="" selected>-- Select Region --</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Prefecture" name="" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Email</label>
                                                            <input type="email" class="form-control" placeholder="Email" name="" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Contact No</label>
                                                            <input type="text" class="form-control" placeholder="Contact No" name="" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Online Interview</label>
                                                            <div class="radio_buttons">
                                                                <div class="radio inlineblock m-r-20">
                                                                    <input type="radio" name="gender" id="yes" class="with-gap" value="yes" checked="">
                                                                    <label for="yes">Yes</label>
                                                                </div>                                
                                                                <div class="radio inlineblock">
                                                                    <input type="radio" name="gender" id="no" class="with-gap" value="no">
                                                                    <label for="no">No</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Permission To Work In Abroad</label>
                                                            <select class="form-control selectpicker" name="">
                                                                <option value="" selected>-- Select Permission --</option>
                                                                <option value="Entry">Yes</option>
                                                                <option value="Mid">No</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Personal Description</label>
                                                            <textarea class="form-control no-resize" name="" id="" cols="30" rows="4" placeholder="Personal Description"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-float">
                                                            <label for="">Profile Photo</label>
                                                            <input type="file" class="dropify">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Online Interview Tools</label>
                                                            <div class="radio_buttons">
                                                                <div class="radio inlineblock m-r-20">
                                                                    <input type="radio" name="tools" id="Skype" class="with-gap" value="Skype" checked="">
                                                                    <label for="Skype">Skype</label>
                                                                </div>  
                                                                <div class="radio inlineblock m-r-20">
                                                                    <input type="radio" name="tools" id="Line" class="with-gap" value="Line" checked="">
                                                                    <label for="Line">Line</label>
                                                                </div>  
                                                                <div class="radio inlineblock m-r-20">
                                                                    <input type="radio" name="tools" id="Viber" class="with-gap" value="Viber" checked="">
                                                                    <label for="Viber">Viber</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group text-right">
                                                    <button class="profile_step_one_btn btn btn-raised btn-info waves-effect btn-lg text-left"><strong>Next Step</strong><br>Confirm Your Details</button>
                                                </div>
                                        </div>
                                    </div>
                                    <!--End Step 1 Form-->

                                    <!--Step 2 Form-->
                                    <div role="tabpanel" class="tab-pane fade" id="ProfileStepTwo">
                                        <div class="form-card">
                                            <div class="header">
                                                <h2><strong>Education</strong>/Traning</h2>
                                            </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group form-float">
                                                            <label for="">Latest Education</label>
                                                            <input type="text" class="form-control" placeholder="Latest Education" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group form-float">
                                                            <label for="">Result</label>
                                                            <select class="form-control selectpicker" name="">
                                                                <option value="" selected>-- Select Result --</option>
                                                                <option value="A+">A+</option>
                                                                <option value="B+">B+</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group form-float">
                                                            <label for="">Duration</label>
                                                            <select class="form-control selectpicker" name="">
                                                                <option value="" selected>-- Select Duration --</option>
                                                                <option value="1 Year">1 Year</option>
                                                                <option value="2 Year">2 Year</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group form-float">
                                                            <label for="">Passing Year</label>
                                                            <select class="form-control selectpicker" name="">
                                                                <option value="" selected>-- Passing Year --</option>
                                                                <option value="1 Year">2020</option>
                                                                <option value="2 Year">2019</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group form-float">
                                                            <label for="">Institute Name</label>
                                                            <input type="text" class="form-control" placeholder="Institute Name" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group form-float">
                                                            <label for="">Language ability</label>
                                                            <select class="form-control selectpicker" name="">
                                                                <option value="" selected>-- Select Language --</option>
                                                                <option value="1 Year">IELTS</option>
                                                                <option value="2 Year">TOFEL</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group form-float">
                                                            <label for="">Score</label>
                                                            <select class="form-control selectpicker" name="">
                                                                <option value="" selected>-- Select Score --</option>
                                                                <option value="1 Year">9</option>
                                                                <option value="2 Year">8</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group form-float">
                                                            <label for="">Level</label>
                                                            <select class="form-control selectpicker" name="">
                                                                <option value="" selected>-- Select Level --</option>
                                                                <option value="Beginner">Beginner</option>
                                                                <option value="Intermediate">Intermediate</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-4">
                                                        <div class="form-group form-float">
                                                            <label for="">Certificate</label>
                                                            <input type="text" class="form-control" placeholder="Enter the Course title" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group form-float">
                                                            <label for="">Certified</label>
                                                            <input type="text" class="form-control" placeholder="Certified" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group form-float">
                                                            <label for="">Year of achieved</label>
                                                            <select class="form-control selectpicker" name="">
                                                                <option value="" selected>-- Select Year --</option>
                                                                <option value="2020">2020</option>
                                                                <option value="2019">2019</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group text-left">
                                                            <button class="profile_step_two_prev btn btn-raised btn-success waves-effect btn-lg text-left" type="submit"><strong>Previous Step</strong><br>Personal Information</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group text-right">
                                                            <button class="profile_step_two_btn btn btn-raised btn-info waves-effect btn-lg text-left"><strong>Next Step</strong><br>Confirm Your Details</button>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <!--End Step 2 Form-->

                                    <!--Step 3 Form-->
                                    <div role="tabpanel" class="tab-pane fade" id="ProfileStepThree">
                                        <div class="form-card">
                                            <div class="header">
                                                <h2><strong>Employment</strong> Details</h2>
                                            </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="">Types of employement</label>
                                                            <div class="radio_buttons">
                                                                <div class="radio inlineblock m-r-20">
                                                                    <input type="radio" name="employement" id="full-time" class="with-gap" value="full-time" checked="">
                                                                    <label for="full-time">Full Time</label>
                                                                </div>                                
                                                                <div class="radio inlineblock">
                                                                    <input type="radio" name="employement" id="part-time" class="with-gap" value="part-time">
                                                                    <label for="part-time">Part Time</label>
                                                                </div>
                                                                <div class="radio inlineblock">
                                                                    <input type="radio" name="employement" id="Contactual" class="with-gap" value="Contactual">
                                                                    <label for="Contactual">Contactual</label>
                                                                </div>
                                                                <div class="radio inlineblock">
                                                                    <input type="radio" name="employement" id="Intern" class="with-gap" value="Intern">
                                                                    <label for="Intern">Intern</label>
                                                                </div>
                                                                <div class="radio inlineblock">
                                                                    <input type="radio" name="employement" id="Freelance" class="with-gap" value="Freelance">
                                                                    <label for="Freelance">Freelance</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="">Designation</label>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group form-float">
                                                            <input type="text" class="form-control" placeholder="Designation" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group form-float">
                                                            <select class="form-control selectpicker" name="">
                                                                <option value="" selected>-- Select Industry --</option>
                                                                <option value="Software">Software</option>
                                                                <option value="Networking">Network</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <select class="selectpicker" multiple="multiple" title="Job Category(Please select category and sub-category from here)">
                                                                <option>IT</option>
                                                                <option>Programmer</option>
                                                                <option>Web Developer</option>
                                                            </select>  
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group form-float">
                                                            <label for="">Career Level</label>
                                                            <select class="form-control selectpicker" name="">
                                                                <option value="" selected>-- Career Level --</option>
                                                                <option value="1 Year">Web Developer</option>
                                                                <option value="2 Year">HR</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group form-float">
                                                            <label for="">Company Name</label>
                                                            <input type="text" class="form-control" placeholder="Company Name" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group form-float">
                                                            <label for="">Country Worked In</label>
                                                            <select class="form-control selectpicker" name="">
                                                                <option value="" selected>-- Select Country --</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="Japan">Japan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group form-float">
                                                            <label for="">Location of HQ</label>
                                                            <select class="form-control selectpicker" name="">
                                                                <option value="" selected>-- Select HQ --</option>
                                                                <option value="Bangladesh">Dhaka</option>
                                                                <option value="Japan">Mirpur</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group form-float">
                                                            <label for="">Employement Duration Start To</label>
                                                            <input type="text" class="form-control datepicker" placeholder="yyyy/mm/dd">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group form-float">
                                                            <label for="">Employement Duration End To</label>
                                                            <input type="text" class="form-control datepicker" placeholder="yyyy/mm/dd">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group text-left">
                                                            <button class="profile_step_three_prev btn btn-raised btn-success waves-effect btn-lg text-left"><strong>Previous Step</strong><br>Education Information</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group text-right">
                                                            <button class="profile_step_three_btn btn btn-raised btn-info waves-effect btn-lg text-left"><strong>Next Step</strong><br>Confirm Your Details</button>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <!--End Step 3 Form-->

                                    <!--Step 4 Form-->
                                    <div role="tabpanel" class="tab-pane fade" id="profileStepFour">
                                        <div class="form-card">
                                            <div class="header">
                                                <h2><strong>Preferrence</strong> Details</h2>
                                            </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                    <div class="form-group">
                                                            <label for="">Types of employement</label>
                                                            <div class="radio_buttons">
                                                                <div class="radio inlineblock m-r-20">
                                                                    <input type="radio" name="employement" id="full-time1" class="with-gap" value="full-time1" checked="">
                                                                    <label for="full-time1">Full Time</label>
                                                                </div>                                
                                                                <div class="radio inlineblock">
                                                                    <input type="radio" name="employement" id="part-time2" class="with-gap" value="part-time2">
                                                                    <label for="part-time2">Part Time</label>
                                                                </div>
                                                                <div class="radio inlineblock">
                                                                    <input type="radio" name="employement" id="Contactual3" class="with-gap" value="Contactual3">
                                                                    <label for="Contactual3">Contactual</label>
                                                                </div>
                                                                <div class="radio inlineblock">
                                                                    <input type="radio" name="employement" id="Intern4" class="with-gap" value="Intern4">
                                                                    <label for="Intern4">Intern</label>
                                                                </div>
                                                                <div class="radio inlineblock">
                                                                    <input type="radio" name="employement" id="Freelance5" class="with-gap" value="Freelance5">
                                                                    <label for="Freelance5">Freelance</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="">Desired Designation</label>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group form-float">
                                                            <input type="text" class="form-control" placeholder="Designation" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group form-float">
                                                            <select class="form-control selectpicker" name="">
                                                                <option value="" selected>-- Select Industry --</option>
                                                                <option value="Software">Software</option>
                                                                <option value="Networking">Network</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <select class="selectpicker" multiple="multiple" title="Job Category(Please select category and sub-category from here)">
                                                                <option>IT</option>
                                                                <option>Programmer</option>
                                                                <option>Web Developer</option>
                                                            </select>  
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group form-float">
                                                            <label for="">Desired Career Level</label>
                                                            <select class="form-control selectpicker" name="">
                                                                <option value="" selected>-- Career Level --</option>
                                                                <option value="1 Year">Web Developer</option>
                                                                <option value="2 Year">HR</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group form-float">
                                                            <label for="">Desired Salary</label>
                                                            <select class="form-control selectpicker" name="">
                                                                <option value="" selected>-- Salary --</option>
                                                                <option value="1 Year">10000-12000</option>
                                                                <option value="2 Year">10000-13000</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group form-float">
                                                            <label for="">Desired Start Date</label>
                                                            <select class="form-control selectpicker" name="">
                                                                <option value="" selected>-- Desired Start Date --</option>
                                                                <option value="1 Year">3 days</option>
                                                                <option value="2 Year">7 days</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group text-left">
                                                            <button class="profile_step_four_prev btn btn-raised btn-success waves-effect btn-lg text-left"><strong>Previous Step</strong><br>Employement</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group text-right">
                                                            <button class="profile_step_four_btn btn btn-raised btn-info waves-effect btn-lg text-left" type="submit"><strong>Finish</strong><br>Confirm Your Details</button>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <!--End Step 4 Form-->

                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!--End Recruiter Add New Job-->             
                </div>
            </div>
        </div>
    </div>
</div>
<!--Job seeker panel End-->


<?php include('template-parts/footer.php'); ?>