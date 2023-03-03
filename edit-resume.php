<?php include('template-parts/header.php'); ?>
<!--Breadcrumb Area Started-->
<div class="breadcrumb-area gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <span>Home / Edit Resume:</span>
                    <h2>Edit Resume</h2>
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
                    <div class="dash-padding bg-white mb-20">
                        <div class="row no-gutters align-items-center">
                            <div class="col">
                                <h4 class="dash-title m-0"><span>Resume</span> Overview</h4>
                            </div>
                            <div class="col">
                                <div class="resume-download text-right">
                                    <a href="#" class="btn btn-info waves-effect waves-float btn-sm waves-green icon-btn">English<i class="fas fa-cloud-download-alt"></i></a>
                                    <a href="#" class="btn btn-success waves-effect waves-float btn-sm waves-green icon-btn">Japanese<i class="fas fa-cloud-download-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
                    <div class="dash-padding bg-white mb-20">
                        <div class="resume-edit-area">
                            <div class="resume-header">
                                <div class="row no-gutters align-items-end">
                                    <div class="col-md-8">
                                        <div class="resume-header-left">
                                            <h1>Aminur Islam</h1>
                                            <div class="resume-header-contact">
                                                <ul>
                                                    <li><strong>Contact:</strong> <span>+88 01707000000</span></li>
                                                    <li><strong>Email:</strong> <span>aminur.cloudproduction@gmail.com</span></li>
                                                    <li><strong>Postal address:</strong> <span>358/3, Road-12, Mirpur DOHS, Dhaka, Bangladesh</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="resume-header-right text-right">
                                            <div class="profile-photo profile-edit-btn">
                                                <img src="https://via.placeholder.com/150" alt="Aminur islam">
                                                <button type="button" class="btn btn-info btn-icon float-right m-r-20" data-toggle="modal" data-target="#PersonalDetailsModal"><i class="fas fa-pen"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="resume-table-details active-btn-hover">
                                <div class="title-with-edit-btn">
                                    <h4 class="dash-title m-0"><span>Personal</span> Details</h4>
                                    <button type="button" class="btn btn-info btn-icon float-right m-r-20" data-toggle="modal" data-target="#PersonalDetailsModal"><i class="fas fa-pen"></i></button>
                                </div>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>Name</td>
                                                <td>Aminur Islam</td>
                                            </tr>
                                            <tr>
                                                <td>Date Of Birth</td>
                                                <td>10/17/1993</td>
                                            </tr>
                                            <tr>
                                                <td>Nationality</td>
                                                <td>Bangladesh</td>
                                            </tr>
                                            <tr>
                                                <td>Other Nationality</td>
                                                <td>Japan</td>
                                            </tr>
                                            <tr>
                                                <td>Contact No</td>
                                                <td>+88 01707000000</td>
                                            </tr>
                                            <tr>
                                                <td>Gender</td>
                                                <td>Male</td>
                                            </tr>
                                            <tr>
                                                <td>Online Interview</td>
                                                <td>No</td>
                                            </tr>
                                            <tr>
                                                <td>Online Interview Tools</td>
                                                <td>Online</td>
                                            </tr>
                                            <tr>
                                                <td>Permission To Work In Abroad</td>
                                                <td>Yes</td>
                                            </tr>
                                            <tr>
                                                <td>Current Address</td>
                                                <td>358/3, Road-12, Mirpur DOHS, Dhaka<br>
                                                Country: Bangladesh, Region: Dhaka, Prefecture: Mirpur
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Permanent Address</td>
                                                <td>358/3, Road-12, Mirpur DOHS, Dhaka<br>
                                                Country: Bangladesh, Region: Dhaka, Prefecture: Mirpur
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="education-info">
                                <div class="resume-table-details mt-35 active-btn-hover">
                                    <h4 class="dash-title mb-10"><span>Education/Traning</span> Details</h4>
                                    <div class="title-with-edit-btn">
                                        <div class="resume-subtitle">Academic 01:</div>
                                        <button type="button" class="btn btn-info btn-icon first-btn" data-toggle="modal" data-target="#AcademicModal1"><i class="fas fa-pen"></i></button>
                                        <button class="btn btn-danger btn-icon"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td>Exam/Degree Title</td>
                                                    <td>BSC in Software Eng.</td>
                                                </tr>
                                                <tr>
                                                    <td>Result</td>
                                                    <td>4.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Passing Year</td>
                                                    <td>2018</td>
                                                </tr>
                                                <tr>
                                                    <td>Institute Name</td>
                                                    <td>DIU</td>
                                                </tr>
                                                <tr>
                                                    <td>Duration</td>
                                                    <td>4 Years</td>
                                                </tr>
                                                <tr>
                                                    <td>Language Ability</td>
                                                    <td>Good</td>
                                                </tr>
                                                <tr>
                                                    <td>Score</td>
                                                    <td>5</td>
                                                </tr>
                                                <tr>
                                                    <td>Level</td>
                                                    <td>01</td>
                                                </tr>
                                                <tr>
                                                    <td>Certificate</td>
                                                    <td>Yes</td>
                                                </tr>
                                                <tr>
                                                    <td>Certified</td>
                                                    <td>Yes</td>
                                                </tr>
                                                <tr>
                                                    <td>Year Of Achieved</td>
                                                    <td>4Years</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="resume-table-details active-btn-hover">
                                    <div class="title-with-edit-btn">
                                        <div class="resume-subtitle">Academic 02:</div>
                                        <button type="button" class="btn btn-info btn-icon first-btn" data-toggle="modal" data-target="#AcademicModal1"><i class="fas fa-pen"></i></button>
                                        <button class="btn btn-danger btn-icon"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td>Exam/Degree Title</td>
                                                    <td>BSC in Software Eng.</td>
                                                </tr>
                                                <tr>
                                                    <td>Result</td>
                                                    <td>4.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Passing Year</td>
                                                    <td>2018</td>
                                                </tr>
                                                <tr>
                                                    <td>Institute Name</td>
                                                    <td>DIU</td>
                                                </tr>
                                                <tr>
                                                    <td>Duration</td>
                                                    <td>4 Years</td>
                                                </tr>
                                                <tr>
                                                    <td>Language Ability</td>
                                                    <td>Good</td>
                                                </tr>
                                                <tr>
                                                    <td>Score</td>
                                                    <td>5</td>
                                                </tr>
                                                <tr>
                                                    <td>Level</td>
                                                    <td>01</td>
                                                </tr>
                                                <tr>
                                                    <td>Certificate</td>
                                                    <td>Yes</td>
                                                </tr>
                                                <tr>
                                                    <td>Certified</td>
                                                    <td>Yes</td>
                                                </tr>
                                                <tr>
                                                    <td>Year Of Achieved</td>
                                                    <td>4Years</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="education-info">
                                <div class="resume-table-details mt-35 active-btn-hover">
                                    <h4 class="dash-title mb-10"><span>Employment</span> History</h4>
                                    <div class="title-with-edit-btn">
                                        <div class="resume-subtitle">Employment 01:</div>
                                        <button type="button" class="btn btn-info btn-icon first-btn" data-toggle="modal" data-target="#EmploymentModal1"><i class="fas fa-pen"></i></button>
                                        <button class="btn btn-danger btn-icon"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td>Types Of Employment</td>
                                                    <td>Full Time</td>
                                                </tr>
                                                <tr>
                                                    <td>Designation</td>
                                                    <td>Wordpress Developer</td>
                                                </tr>
                                                <tr>
                                                    <td>Industry</td>
                                                    <td>Software</td>
                                                </tr>
                                                <tr>
                                                    <td>Job Category</td>
                                                    <td>Programmer</td>
                                                </tr>
                                                <tr>
                                                    <td>Carrer Level</td>
                                                    <td>Web Developer</td>
                                                </tr>
                                                <tr>
                                                    <td>Company Name</td>
                                                    <td>Cloud Production Ltd.</td>
                                                </tr>
                                                <tr>
                                                    <td>Currently Worked In</td>
                                                    <td>Bangladesh</td>
                                                </tr>
                                                <tr>
                                                    <td>Location Of HQ</td>
                                                    <td>Bangladesh</td>
                                                </tr>
                                                <tr>
                                                    <td>Start Date</td>
                                                    <td>From : 23 Jan 2019</td>
                                                </tr>
                                                <tr>
                                                    <td>End Date</td>
                                                    <td>To : 24 Jan 2020</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="resume-table-details active-btn-hover">
                                    <div class="title-with-edit-btn">
                                        <div class="resume-subtitle">Employment 02:</div>
                                        <button type="button" class="btn btn-info btn-icon first-btn" data-toggle="modal" data-target="#EmploymentModal1"><i class="fas fa-pen"></i></button>
                                        <button class="btn btn-danger btn-icon"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>Types Of Employment</td>
                                                        <td>Full Time</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Designation</td>
                                                        <td>Wordpress Developer</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Industry</td>
                                                        <td>Software</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Job Category</td>
                                                        <td>Programmer</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Carrer Level</td>
                                                        <td>Web Developer</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Company Name</td>
                                                        <td>Cloud Production Ltd.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Currently Worked In</td>
                                                        <td>Bangladesh</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Location Of HQ</td>
                                                        <td>Bangladesh</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Start Date</td>
                                                        <td>From : 23 Jan 2019</td>
                                                    </tr>
                                                    <tr>
                                                        <td>End Date</td>
                                                        <td>From : 01 Feb 2020</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                    </div>
                                </div>
                            </div>



                            <div class="education-info">
                                <div class="resume-table-details mt-35 active-btn-hover">
                                    <div class="title-with-edit-btn">
                                        <h4 class="dash-title mb-10"><span>Preference</span> Details</h4>
                                        <button type="button" class="btn btn-info btn-icon float-right m-r-20" data-toggle="modal" data-target="#PreferenceModal"><i class="fas fa-pen"></i></button>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td>Types Of Employment</td>
                                                    <td>Full Time</td>
                                                </tr>
                                                <tr>
                                                    <td>Desired Designation</td>
                                                    <td>Software Dev</td>
                                                </tr>
                                                <tr>
                                                    <td>Industry</td>
                                                    <td>The company</td>
                                                </tr>
                                                <tr>
                                                    <td>Desired Carrer Level</td>
                                                    <td>Advance</td>
                                                </tr>
                                                <tr>
                                                    <td>Job Category</td>
                                                    <td>Job category name</td>
                                                </tr>
                                                <tr>
                                                    <td>Desired Salary</td>
                                                    <td>10 Feb 2020</td>
                                                </tr>
                                            </tbody>
                                        </table>
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
<!--Job seeker panel End-->








<!-----------------------
--------All Modals----------
-------------------------->


<!-- Personal Details Popup -->
<div class="modal fade popup-form" id="PersonalDetailsModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Personal Details</h4>
            </div>
            <div class="modal-body"> 
                <form action="">
                    <div class="row">
                        <div class="col">
                            <div class="form-group form-float">
                                <label for="">First name</label>
                                <input type="text" class="form-control" placeholder="First Name" name="" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group form-float">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" name="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group form-float">
                                <label for="">Middle Name</label>
                                <input type="text" class="form-control" placeholder="Middle Name" name="" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group form-float">
                                <label for="">Date of birth</label>
                                <input type="text" class="form-control datepicker" placeholder="yyyy/mm/dd" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group form-float">
                                <label for="">Nationality</label>
                                <input type="text" class="form-control" placeholder="Nationality" name="" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group form-float">
                                <label for="">Other Nationality(If have any)</label>
                                <input type="text" class="form-control" placeholder="Other Nationality(If have any)" name="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group form-float">
                                <label for="">Contact No</label>
                                <input type="text" class="form-control" placeholder="Contact No" name="" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Online Interview</label>
                                <div class="radio_buttons">
                                    <div class="radio inlineblock m-r-20">
                                        <input type="radio" name="inteview" id="Yes" class="with-gap" value="yes" checked="">
                                        <label for="Yes">Yes</label>
                                    </div>                                
                                    <div class="radio inlineblock">
                                        <input type="radio" name="inteview" id="No" class="with-gap" value="no">
                                        <label for="No">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Gender</label>
                                <select class="form-control selectpicker" name="" required>
                                    <option value="" selected>-- Select Gender --</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Permission To Work In Abroad</label>
                                <select class="form-control selectpicker" name="" required>
                                    <option value="" selected>-- Permission To Work In Abroad --</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="National/PR">National/PR</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group form-float">
                                <label for="">Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="" required>
                            </div>
                            <div class="form-group">
                                <label for="">Online Interview Tools</label>
                                <div class="radio_buttons">
                                    <div class="radio inlineblock m-r-20">
                                        <input type="radio" name="tools" id="Yes" class="with-gap" value="Skype" checked="">
                                        <label for="Skype">Skype</label>
                                    </div>
                                    <div class="radio inlineblock m-r-20">
                                        <input type="radio" name="tools" id="Yes" class="with-gap" value="Line" checked="">
                                        <label for="Line">Line</label>
                                    </div>
                                    <div class="radio inlineblock m-r-20">
                                        <input type="radio" name="tools" id="Yes" class="with-gap" value="Viber" checked="">
                                        <label for="Viber">Viber</label>
                                    </div>
                                    <div class="radio inlineblock m-r-20">
                                        <input type="radio" name="tools" id="Yes" class="with-gap" value="Whatsapp" checked="">
                                        <label for="Whatsapp">Whatsapp</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group form-float">
                                <label for="">Profile Photo</label>
                                <input type="file" class="dropify">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Personal Description</label>
                                <textarea class="form-control no-resize" name="" id="" cols="30" rows="3" placeholder="Personal Description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row modal-footer-btn">
                        <div class="col-12 text-right">
                            <button class="btn bg-theme btn-lg waves-effect">Update</button>
                            <button type="button" class="btn btn-lg btn-danger waves-effect" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Personal Details Popup -->


<!-- Address Details Popup -->
<div class="modal fade popup-form" id="AddressDetailsModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Address Details</h4>
            </div>
            <div class="modal-body"> 
            <form action="">
                <div class="row">
                    <div class="col-6">
                        <div class="current-address">
                            <div class="card">
                                <div class="header pt-0">
                                    <h2><strong>Current </strong>Address</h2>
                                </div>
                            </div>
                            <div class="current-address-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group form-float">
                                                <select class="form-control selectpicker" name="">
                                                    <option value="" selected>-- Select Country --</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Japan">Japan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group form-float">
                                                <select class="form-control selectpicker" name="">
                                                    <option value="" selected>-- Select Region --</option>
                                                    <option value="Mirpur">Mirpur</option>
                                                    <option value="Dhanmondi">Dhanmondi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group form-float">
                                                <input type="text" class="form-control" placeholder="Prefecture" name="" required>
                                            </div>  
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group form-float">
                                                <input type="text" class="form-control" placeholder="Current Address Details" name="" required>
                                            </div>  
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="current-address">
                            <div class="card">
                                <div class="header pt-0">
                                    <h2><strong>Permanent </strong>Address</h2>
                                </div>
                            </div>
                            <div class="permanent-address-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group form-float">
                                                <select class="form-control selectpicker" name="">
                                                    <option value="" selected>-- Select Country --</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Japan">Japan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group form-float">
                                                <select class="form-control selectpicker" name="">
                                                    <option value="" selected>-- Select Region --</option>
                                                    <option value="Mirpur">Mirpur</option>
                                                    <option value="Dhanmondi">Dhanmondi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group form-float">
                                                <input type="text" class="form-control" placeholder="Prefecture" name="" required>
                                            </div>  
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row modal-footer-btn">
                    <div class="col-12">
                        <div class="col-12 text-right">
                            <button class="btn bg-theme btn-lg waves-effect">Update</button>
                            <button type="button" class="btn btn-lg btn-danger waves-effect" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- End Address Details Popup -->



<!-- Academic Details Popup -->
<div class="modal fade popup-form" id="AcademicModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Academic Information</h4>
            </div>
            <div class="modal-body"> 
                <form action="">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group form-float">
                                <label for="">Latest Education</label>
                                <input type="text" class="form-control" placeholder="Latest Education" name="" required>
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
                                <input type="text" class="form-control" placeholder="Institute Name" name="" required>
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
                                <input type="text" class="form-control" placeholder="Enter the Course title" name="" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group form-float">
                                <label for="">Certified</label>
                                <input type="text" class="form-control" placeholder="Certified" name="" required>
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
                    <div class="row modal-footer-btn">
                        <div class="col-12">
                            <div class="col-12 text-right">
                                <button class="btn bg-theme btn-lg waves-effect">Update</button>
                                <button type="button" class="btn btn-lg btn-danger waves-effect" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Academic Details Popup -->



<!-- Academic Details Popup -->
<div class="modal fade popup-form" id="EmploymentModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Edit Employeement History</h4>
            </div>
            <div class="modal-body"> 
                <form action="">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Types of employement</label>
                                <div class="radio_buttons">
                                    <div class="radio inlineblock m-r-20">
                                        <input type="radio" name="employement" id="" class="with-gap" value="yes" checked="">
                                        <label for="Full Time">Full Time</label>
                                    </div>                                
                                    <div class="radio inlineblock">
                                        <input type="radio" name="employement" id="" class="with-gap" value="no">
                                        <label for="Part Time">Part Time</label>
                                    </div>
                                    <div class="radio inlineblock">
                                        <input type="radio" name="employement" id="" class="with-gap" value="no">
                                        <label for="Contactual">Contactual</label>
                                    </div>
                                    <div class="radio inlineblock">
                                        <input type="radio" name="employement" id="" class="with-gap" value="no">
                                        <label for="Intern">Intern</label>
                                    </div>
                                    <div class="radio inlineblock">
                                        <input type="radio" name="employement" id="" class="with-gap" value="no">
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
                                <input type="text" class="form-control" placeholder="Designation" name="" required>
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
                                <input type="text" class="form-control" placeholder="Company Name" name="" required>
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
                                <input type="text" class="form-control datepicker" placeholder="yyyy/mm/dd" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group form-float">
                                <label for="">Employement Duration End To</label>
                                <input type="text" class="form-control datepicker" placeholder="yyyy/mm/dd" required>
                            </div>
                        </div>
                    </div>
                    <div class="row modal-footer-btn">
                        <div class="col-12">
                            <div class="col-12 text-right">
                                <button class="btn bg-theme btn-lg waves-effect">Update</button>
                                <button type="button" class="btn btn-lg btn-danger waves-effect" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Academic Details Popup -->

<!-- Academic Details Popup -->
<div class="modal fade popup-form" id="PreferenceModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Preference Information</h4>
            </div>
            <div class="modal-body"> 
                <form action="">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Types of employement</label>
                                <div class="radio_buttons">
                                    <div class="radio inlineblock m-r-20">
                                        <input type="radio" name="employement" id="" class="with-gap" value="yes" checked="">
                                        <label for="Full Time">Full Time</label>
                                    </div>                                
                                    <div class="radio inlineblock">
                                        <input type="radio" name="employement" id="" class="with-gap" value="no">
                                        <label for="Part Time">Part Time</label>
                                    </div>
                                    <div class="radio inlineblock">
                                        <input type="radio" name="employement" id="" class="with-gap" value="no">
                                        <label for="Contactual">Contactual</label>
                                    </div>
                                    <div class="radio inlineblock">
                                        <input type="radio" name="employement" id="" class="with-gap" value="no">
                                        <label for="Intern">Intern</label>
                                    </div>
                                    <div class="radio inlineblock">
                                        <input type="radio" name="employement" id="" class="with-gap" value="no">
                                        <label for="Freelance">Freelance</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="">Desired Designation</label>
                        </div>
                        <div class="col-6">
                            <div class="form-group form-float">
                                <input type="text" class="form-control" placeholder="Designation" name="" required>
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
                    <div class="row modal-footer-btn">
                        <div class="col-12">
                            <div class="col-12 text-right">
                                <button class="btn bg-theme btn-lg waves-effect">Update</button>
                                <button type="button" class="btn btn-lg btn-danger waves-effect" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Academic Details Popup -->

<?php include('template-parts/footer.php'); ?>