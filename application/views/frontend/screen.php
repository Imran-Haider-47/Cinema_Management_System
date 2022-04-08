<br>
    <hr>
    <div class="d-flex justify-content-center"><h2>Screen Information</h2></div>
    <hr style="width:50%;text-align:center;margin-left:350px">
    <div class="container">
        <div class="row">
            <div class="col-mid-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Click on the Add Screen button to insert the screen data </h5>    
                        <a href="<?php echo base_url('screen/add'); ?>" class="btn btn-primary float-right"> Add Screen </a>
                        
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> Cinema </th>
                                    <th> Screen Number </th>
                                    <th> Seats </th>
                                    <th> Seat Price (£) </th>
                                    <th> Edit </th>
                                    <th> Delete </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($screen as $row): ?>
                                
                                <tr>
                                    <td> <?php   echo $row->cinema_name; ?></td>
                                    <td> <?php   echo $row->screen_id; ?> </td>
                                    <td> <?php   echo $row->seats; ?> </td>
                                    <td> <?php   echo $row->seat_price; ?></td>
                                    
                                    <td>  
                                        <a href="<?php echo base_url('screen/edit/'.$row->screen_id) ?>" class="btn btn-success btm-sm" > EDIT </a> 
                                    </td>
 
                                    <td>   
                                        <a href="<?php echo base_url('screen/delete/'.$row->screen_id)  ?>" class="btn btn-danger btm-sm"> DELETE
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

   
