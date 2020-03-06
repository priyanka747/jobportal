
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Job</a></li>
                                    <li class="active">View jobs</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Job Offers</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>title</th>
                                            <th>Description</th>
                                            <th>location</th>
                                            <th>Salary</th>
											<th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>  <?php echo $jobs[0]['title']; ?></td>
                                            <td> <?php echo $jobs[0]['description']; ?></td>
                                            <td> <?php echo $jobs[0]['city']; ?>,<?php echo $jobs[0]['state']; ?></td>
                                            <td> $<?php echo $jobs[0]['salary']; ?></td>
											<td> <div><a type="a" href="<?php echo base_url();?>index.php/jobs/edit/<?php echo $jobs[0]['job_id']; ?>" class="btn btn-outline-info">Edit</a> <a type="a" class="btn btn-outline-danger">Delete</a></div></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>

