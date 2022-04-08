
    <div class="container">
        <div class="row">
            <div class="col-mid-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Insert the booking data </h5>    
                       
                    </div>

                    <div class="card-body">
                        <form action="<?php echo base_url('booking/store') ?>" method="POST">
                            
                            <div class="form-group">
                                <label for="">Booking Number </label>
                                <input type="text" name="booking_id"  class="form-control">
                                <small><?php echo form_error('booking_id'); ?> </small>
                            </div>

                            <div class="form-group">
                                <label for="">Membership Number </label>
                                <input type="text" name="member_id" class="form-control">
                                <small><?php echo form_error('member_id'); ?>    </small>
                            </div>
                              

                            <div class="form-group">
                                <label for="">Performance Number </label>
                                <input type="text" name="performance_id" class="form-control">
                                <small> <?php echo form_error('performance_id'); ?> </small>
                            </div>

                            <div class="form-group">
                                <label for="">Number of Seats </label>
                                <input type="text" name="no_of_seats" class="form-control">
                                <small> <?php echo form_error('no_of_seats'); ?> </small>
                            </div>

                            
                            <div class="form-group">
                                <br>
                                <button class="btn btn-primary">SAVE</button>
                                <a href="<?php echo base_url('booking'); ?>" class="btn btn-danger float-right">BACK </a>
                            </div>


                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

   
