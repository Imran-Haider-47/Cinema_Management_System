
    <div class="container">
        <div class="row">
            <div class="col-mid-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Edit the screen data </h5>    
                       
                        
                    </div>

                    <div class="card-body">
                        <form action="<?php echo base_url('screen/update/'.$screen->screen_id) ?>" method="POST">
                            <div class="form-group">
                                <label for="">Cinema Name </label>
                                <input type="text" name="cinema_name" value="<?= $screen->cinema_name ?>" class="form-control">
                                <small> <?php echo form_error('cinema_name'); ?> </small>
                            </div>  
                            <div class="form-group">
                                <label for="">Screen Number </label>
                                <input type="text" name="screen_id" value="<?= $screen->screen_id ?>"  class="form-control">
                                <small> <?php echo form_error('screen_id'); ?> </small>
                            </div>

                            <div class="form-group">
                                <label for="">Seats </label>
                                <input type="text" name="seats" value="<?= $screen->seats ?>"  class="form-control">
                                <small> <?php echo form_error('seats'); ?> </small>
                            </div>

                            <div class="form-group">
                                <label for="">Seat Price </label>
                                <input type="text" name="seat_price" value="<?= $screen->seat_price ?>" class="form-control">
                                <small> <?php echo form_error('seat_price'); ?> </small>
                            </div>

                            
                            <div class="form-group">
                                <br>
                                <button class="btn btn-primary">Update</button>
                                <a href="<?php echo base_url('screen'); ?>" class="btn btn-danger float-right">BACK </a>
                            </div>


                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

   
