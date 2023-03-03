<?php include('template-parts/header.php'); ?>
<!--Breadcrumb Area Started-->
<div class="breadcrumb-area gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <span>Home / Applicable Job List:</span>
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

                    <div class="table-area mb-20 dash-padding bg-white">
                        <h4 class="dash-title"><span>Applicable</span> Job List</h4>
                        <div class="table-responsive">
                            <table id="example" class="jsDataTable display table-green" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Job Title</th>
                                        <th>Status</th>
                                        <th>Message</th>
                                        <th>Deadline</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Software Developer Wanted</td>
                                        <td>Acive</td>
                                        <td>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.	</td>
                                        <td>25 January 2020	</td>
                                        <td><button class="cp-dash-btn"><i class="far fa-eye"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>Software Developer Wanted</td>
                                        <td>Acive</td>
                                        <td>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.	</td>
                                        <td>25 January 2020	</td>
                                        <td><button class="cp-dash-btn"><i class="far fa-eye"></i></button></td>
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
<!--Job seeker panel End-->


<?php include('template-parts/footer.php'); ?>