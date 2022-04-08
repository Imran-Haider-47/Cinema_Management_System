
    <div class="container">
        <div class="row">
            <div class="col-mid-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Edit the cinema data </h5>    
                       
                        
                    </div>

                    <div class="card-body">
                        <form action="<?php echo base_url('cinema/update/'.$cinema->cinema_id) ?>" method="POST">
                            <div class="form-group">
                                <label for="">Cinema Number </label>
                                <input type="text" name="cinemaID" value="<?= $cinema->cinema_id ?>" class="form-control">
                                <small> <?php echo form_error('CinemaID'); ?> </small>
                            </div>  
                            <div class="form-group">
                                <label for="">First Name </label>
                                <input type="text" name="cinemaName" value="<?= $cinema->cinema_name ?>"  class="form-control">
                                <small> <?php echo form_error('CinemaName'); ?> </small>
                            </div>

                            <div class="form-group">
                                <label for="">Location </label>
                                <input type="text" name="cinemaLocation" value="<?= $cinema->location ?>"  class="form-control">
                                <small> <?php echo form_error('cinemaLocation'); ?> </small>
                            </div>

                            <div class="form-group">
                                <label for="">Address </label>
                                <input type="text" name="cinemaAddress" value="<?= $cinema->address ?>" class="form-control">
                                <small> <?php echo form_error('cinemaAddress'); ?> </small>
                            </div>

                            <div class="form-group">
                                <label for="">Manager </label>
                                <input type="text" name="manager" value="<?= $cinema->manager ?>" class="form-control">
                                <small> <?php echo form_error('manager'); ?> </small>
                            </div>
                            <div class="form-group">
                                <br>
                                <button class="btn btn-primary">Update</button>
                                <a href="<?php echo base_url('cinema'); ?>" class="btn btn-danger float-right">BACK </a>
                            </div>


                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

   
