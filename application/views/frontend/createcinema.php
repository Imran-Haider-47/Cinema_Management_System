
    <div class="container">
        <div class="row">
            <div class="col-mid-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Insert the cinema data </h5>    
                       
                        
                    </div>

                    <div class="card-body">
                        <form action="<?php echo base_url('cinema/store') ?>" method="POST">
                            <div class="form-group">
                                <label for="">Cinema Number </label>
                                <input type="text" name="cinemaID" class="form-control">
                                <small><?php echo form_error('cinemaID'); ?>    </small>
                            </div>
                            <div class="form-group">
                                <label for="">Cinema Name </label>
                                <input type="text" name="cinemaName"  class="form-control">
                                <small><?php echo form_error('cinemaName'); ?> </small>
                            </div>

                            <div class="form-group">
                                <label for="">Location </label>
                                <input type="text" name="cinemaLocation" class="form-control">
                                <small> <?php echo form_error('cinemaLocation'); ?> </small>
                            </div>

                            <div class="form-group">
                                <label for="">Address </label>
                                <input type="text" name="cinemaAddress" class="form-control">
                                <small> <?php echo form_error('cinemaAddress'); ?> </small>
                            </div>

                            <div class="form-group">
                                <label for="">Manager </label>
                                <input type="text" name="manager" class="form-control">
                                <small> <?php echo form_error('manager'); ?> </small>
                            </div>
                            <div class="form-group">
                                <br>
                                <button class="btn btn-primary">SAVE</button>
                                <a href="<?php echo base_url('cinema'); ?>" class="btn btn-danger float-right">BACK </a>
                            </div>


                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

   
