<br>
    <hr>
    <div class="d-flex justify-content-center"><h2>Film Information</h2></div>
    <hr style="width:50%;text-align:center;margin-left:350px">
    <div class="container">
        <div class="row">
            <div class="col-mid-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Click on the Add Film button to insert the film data </h5>    
                        <a href="<?php echo base_url('film/add'); ?>" class="btn btn-primary float-right"> Add Film </a>
                        
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> Film Number </th>
                                    <th> Released  </th>
                                    <th> Film Title </th>
                                    <th> Director </th>
                                    <th> Edit </th>
                                    <th> Delete </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($film as $row): ?>
                                
                                <tr>
                                    <td> <?php   echo $row->film_id; ?></td>
                                    <td> <?php   echo $row->released; ?> </td>
                                    <td> <?php   echo $row->film_title; ?> </td>
                                    <td> <?php   echo $row->director; ?></td>
                                    
                                    <td>  
                                        <a href="<?php echo base_url('film/edit/'.$row->film_id) ?>" class="btn btn-success btm-sm" > EDIT </a> 
                                    </td>
 
                                    <td>   
                                        <a href="<?php echo base_url('film/delete/'.$row->film_id)  ?>" class="btn btn-danger btm-sm"> DELETE
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

   
