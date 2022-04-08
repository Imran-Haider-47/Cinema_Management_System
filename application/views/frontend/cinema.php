    <br>
    <hr>
    <div class="d-flex justify-content-center"><h2>Cinema Information</h2></div>
    <hr style="width:50%;text-align:center;margin-left:350px">
    <div class="container">
        <div class="row">
            <div class="col-mid-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Click on the Add Cinema button to insert the cinema data </h5>    
                        <a href="<?php echo base_url('cinema/add'); ?>" class="btn btn-primary float-right"> Add Cinema </a>
                        
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> Cinema ID </th>
                                    <th> Cinema Name </th>
                                    <th> Location </th>
                                    <th> Address </th>
                                    <th> Manager </th>
                                    <th> Edit </th>
                                    <th> Delete </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($cinema as $row): ?>
                                
                                <tr>
                                    <td> <?php   echo $row->cinema_id; ?></td>
                                    <td> <?php   echo $row->cinema_name; ?> </td>
                                    <td> <?php   echo $row->location; ?> </td>
                                    <td> <?php   echo $row->address; ?></td>
                                    <td> <?php   echo $row->manager; ?> </td>
                                    
                                    <td>  
                                        <a href="<?php echo base_url('cinema/edit/'.$row->cinema_id) ?>" class="btn btn-success btm-sm" > EDIT </a> 
                                    </td>
 
                                    <td>   
                                        <a href="<?php echo base_url('cinema/delete/'.$row->cinema_id)  ?>" class="btn btn-danger btm-sm"> DELETE
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

   
