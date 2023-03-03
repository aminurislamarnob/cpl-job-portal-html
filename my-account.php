<?php include('template-parts/header.php'); ?>
<!--Breadcrumb Area Started-->
<div class="breadcrumb-area gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <span>Home / My-Account:</span>
                    <h2>My Account</h2>
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
                    <div class="info-box-area dash-padding bg-white">
                        <div class="row no-gutters infobox-row">
                            <div class="col-md-3">
                                <div class="info-box">
                                    <div class="info-title">Applied Job</div>
                                    <div class="icon">
                                        <i class="fas fa-user-tie"></i>
                                    </div>
                                    <div class="info-count">30+</div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="info-box bg-yellow">
                                    <div class="info-title">Pending Request</div>
                                    <div class="icon">
                                        <i class="fas fa-spinner"></i>
                                    </div>
                                    <div class="info-count">30+</div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="info-box bg-info-blue">
                                    <div class="info-title">Applicable Job</div>
                                    <div class="icon">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <div class="info-count">30+</div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="info-box bg-info-red">
                                    <div class="info-title">Disapproval</div>
                                    <div class="icon">
                                        <i class="far fa-trash-alt"></i>
                                    </div>
                                    <div class="info-count">30+</div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-area mb-20 dash-padding bg-white">
                        <h4 class="dash-title"><span>Recent</span> Approval List</h4>
                        <div class="table-responsive">
                            <table id="example" class="jsDataTable display table-green" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Company Name</th>
                                        <th>Job title</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Cloud Production BD	</td>
                                        <td>Javascript Developer Wanted	</td>
                                        <td><button class="cp-dash-btn"><i class="far fa-eye"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>Cloud Production BD	</td>
                                        <td>Javascript Developer Wanted	</td>
                                        <td><button class="cp-dash-btn"><i class="far fa-eye"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>  
                    </div>


                    <div class="table-area dash-padding bg-white">
                        <h4 class="dash-title"><span>Recent</span> Disapproval list</h4>
                        <div class="table-responsive">
                            <table id="example" class="jsDataTable display table-violate" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Company Name</th>
                                        <th>Job title</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Cloud Production BD	</td>
                                        <td>Javascript Developer Wanted	</td>
                                        <td><button class="cp-dash-btn"><i class="far fa-eye"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>Cloud Production BD	</td>
                                        <td>Javascript Developer Wanted	</td>
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