
    <div class="container">
        <div class="row">
            <div class="col-mid-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Insert the performance data </h5>    
                       
                    </div>

                    <div class="card-body">
                        <form action="<?php echo base_url('performance/store') ?>" method="POST">
                            <div class="form-group">
                                <label for="">Performance Number </label>
                                <input type="text" name="performance_id"  class="form-control">
                                <small><?php echo form_error('performance_id'); ?> </small>
                            </div>
                            
                            <div class="form-group">
                                <label for="">Cinema </label>
                                <input type="text" name="cinema_name" class="form-control">
                                <small><?php echo form_error('cinema_name'); ?>    </small>
                            </div>
                              

                            <div class="form-group">
                                <label for="">Screen Number </label>
                                <input type="text" name="screen_id" class="form-control">
                                <small> <?php echo form_error('screen_id'); ?> </small>
                            </div>

                            <div class="form-group">
                                <label for="">Film </label>
                                <input type="text" name="film_name" class="form-control">
                                <small> <?php echo form_error('film_name'); ?> </small>
                            </div>
                            <div class="form-group">
                                <label for="">Date </label>
                                <input type="text" name="performance_date" class="form-control">
                                <small> <?php echo form_error('performance_date'); ?> </small>
                            </div>

                            
                            <div class="form-group">
                                <label for="">Time </label>
                                <input type="text" name="performance_time" class="form-control">
                                <small> <?php echo form_error('performance_time'); ?> </small>
                            </div>

                            
                            <div class="form-group">
                                <label for="">Remaining Seats </label>
                                <input type="text" name="seats_left" class="form-control">
                                <small> <?php echo form_error('seats_left'); ?> </small>
                            </div>

                            
                            <div class="form-group">
                                <br>
                                <button class="btn btn-primary">SAVE</button>
                                <a href="<?php echo base_url('performance'); ?>" class="btn btn-danger float-right">BACK </a>
                            </div>


                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

   
