<br>
    <hr>
    <div class="d-flex justify-content-center"><h2>Booking Information</h2></div>
    <hr style="width:50%;text-align:center;margin-left:350px">
    <div class="container">
        <div class="row">
            <div class="col-mid-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Click on the Add Booking button to insert the booking data </h5>    
                        <a href="<?php echo base_url('booking/add'); ?>" class="btn btn-primary float-right"> Add Booking </a>
                        
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> Booking Number </th>
                                    <th> Membership No. </th>
                                    <th> Performance No. </th>
                                    <th> No. of Seats </th>
                                    <th> Edit </th>
                                    <th> Delete </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($booking as $row): ?>
                                
                                <tr>
                                    <td> <?php   echo $row->booking_id; ?> </td>
                                    <td> <?php   echo $row->member_id; ?></td>
                                    <td> <?php   echo $row->performance_id; ?> </td>
                                    <td> <?php   echo $row->no_of_seats; ?></td>
                                    
                                    <td>  
                                        <a href="<?php echo base_url('booking/edit/'.$row->booking_id) ?>" class="btn btn-success btm-sm" > EDIT </a> 
                                    </td>
 
                                    <td>   
                                        <a href="<?php echo base_url('booking/delete/'.$row->booking_id)  ?>" class="btn btn-danger btm-sm"> DELETE
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

   
