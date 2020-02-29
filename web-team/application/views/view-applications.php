
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
                                    <li><a href="#">Application</a></li>
                                    <li class="active">View Applications</li>
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
                                <strong class="card-title">Applications</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Application no</th>
                                            <th>Job title</th>
                                            <th>candidate name</th>
                                            <th>status</th>
											<th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>$320,800</td>
											<td> <div>
											<a type="a" href="<?php echo base_url();?>index.php/welcome/view/1" class="btn btn-outline-info">view</a> <a type="a" href="<?php echo base_url();?>index.php/welcome/edit/1" class="btn btn-outline-info">Edit</a> <a type="a" class="btn btn-outline-danger">Delete</a></div></td>
                                        </tr>
                                       <tr>
									   <td colspan="5" class="text-center">No data at the moment</td>
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

