    
    <br>
    <div class="d-flex justify-content-center"><h1>Welcome to GP3 System</h1></div>
    <hr>
    <div class="d-flex justify-content-center"><h2>Members Information</h2></div>
    <hr style="width:50%;text-align:center;margin-left:350px">
    <div class="container">
        <div class="row">
            <div class="col-mid-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Click on the Add Member button to insert the member data </h5>    
                        <a href="<?php echo base_url('member/add'); ?>" class="btn btn-primary float-right"> Add Member </a>
                         
                        
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> Member ID </th>
                                    <th> Name </th>
                                    <th> Title </th>
                                    <th> Joined Date </th>
                                    <th> Status </th>
                                    <th> Edit </th>
                                    <th> Delete </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($member as $row): ?>
                                
                                <tr>
                                    <td> <?php   echo $row->member_id; ?></td>
                                    <td> <?php   echo $row->member_name; ?> </td>
                                    <td> <?php   echo $row->title; ?> </td>
                                    <td> <?php   echo $row->joined_date; ?></td>
                                    <td> <?php   echo $row->status; ?> </td>
                                    
                                    <td>  
                                        <a href="<?php echo base_url('member/edit/'.$row->member_id) ?>" class="btn btn-success btm-sm" > EDIT </a> 
                                    </td>
 
                                    <td>   
                                        <a href="<?php echo base_url('member/delete/'.$row->member_id)  ?>" class="btn btn-danger btm-sm"> DELETE
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

   
