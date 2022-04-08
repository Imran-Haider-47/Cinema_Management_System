<br>
    <hr>
    <div class="d-flex justify-content-center"><h2>Performance Information</h2></div>
    <hr style="width:50%;text-align:center;margin-left:350px">
    <div class="container">
        <div class="row">
            <div class="col-mid-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Click on the Add Performance button to insert the performance data </h5>    
                        <a href="<?php echo base_url('performance/add'); ?>" class="btn btn-primary float-right"> Add Performance </a>
                        
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> Performance Number </th>
                                    <th> Cinema </th>
                                    <th> Screen </th>
                                    <th> Film </th>
                                    <th> Date </th>
                                    <th> Time </th>
                                    <th> Remaining Seats </th>
                                    <th> Edit </th>
                                    <th> Delete </th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($performance as $row): ?>
                                
                                <tr>
                                    <td> <?php   echo $row->performance_id; ?> </td>
                                    <td> <?php   echo $row->cinema_name; ?></td>
                                    <td> <?php   echo $row->screen_id; ?> </td>
                                    <td> <?php   echo $row->film_name; ?></td>
                                    <td> <?php   echo $row->performance_date; ?></td>
                                    <td> <?php   echo $row->performance_time; ?></td>
                                    <td> <?php   echo $row->seats_left; ?></td>
                                    
                                    <td>  
                                        <a href="<?php echo base_url('performance/edit/'.$row->performance_id) ?>" class="btn btn-success btm-sm" > EDIT </a> 
                                    </td>
 
                                    <td>   
                                        <a href="<?php echo base_url('performance/delete/'.$row->performance_id)  ?>" class="btn btn-danger btm-sm"> DELETE
                                    </td>

                                </tr>
                                
                                <?php endforeach ?>
                                
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

   
