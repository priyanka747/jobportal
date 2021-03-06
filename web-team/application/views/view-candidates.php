
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
                                    <li><a href="#">Candidate</a></li>
                                    <li class="active">View Candidates</li>
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
                                <strong class="card-title">Candidates</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Email</th>
                                            <th>name</th>
											<th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $row_cnt=count($candidates);
                                        if($row_cnt>0){
                                        for($i=0;$i<$row_cnt;$i++){?>
                                        <tr>
                                            <td>  <?php echo $candidates[$i]['email']; ?></td>
                                            <td> <?php echo $candidates[$i]['firstname']; ?> <?php echo $candidates[0]['state']; ?></td>
											<td> <div><a type="a" href="<?php echo base_url();?>index.php/users/edit/<?php echo $candidates[$i]['id']; ?>" class="btn btn-outline-info">Edit</a> <a type="a" class="btn btn-outline-danger">Delete</a></div></td>
                                        </tr>
                                        <?php
                                        }
                                        }
                                        else
                                        {
                                        ?>
                                       <tr>
									   <td colspan="5" class="text-center">No data at the moment</td>
                                       </tr>
                                       <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>

