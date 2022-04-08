
    <div class="container">
        <div class="row">
            <div class="col-mid-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Insert the member data </h5>    
                       
                        
                    </div>

                    <div class="card-body">
                        <form action="<?php echo base_url('member/store') ?>" method="POST">
                            <div class="form-group">
                                <label for="">Member ID </label>
                                <input type="text" name="memberID" class="form-control">
                                <small><?php echo form_error('memberID'); ?>    </small>
                            </div>
                            <div class="form-group">
                                <label for="">Full Name </label>
                                <input type="text" name="memberName"  class="form-control">
                                <small><?php echo form_error('memberName'); ?> </small>
                            </div>

                            <div class="form-group">
                                <label for="">Title </label>
                                <input type="text" name="memberTitle" class="form-control">
                                <small> <?php echo form_error('memberTitle'); ?> </small>
                            </div>

                            <div class="form-group">
                                <label for="">Joined Date </label>
                                <input type="text" name="joinedDate" class="form-control">
                                <small> <?php echo form_error('joinedDate'); ?> </small>
                            </div>

                            <div class="form-group">
                                <label for="">Status </label>
                                <input type="text" name="status" class="form-control">
                                <small> <?php echo form_error('status'); ?> </small>
                            </div>
                            <div class="form-group">
                                <br>
                                <button class="btn btn-primary">SAVE</button>
                                <a href="<?php echo base_url('member'); ?>" class="btn btn-danger float-right">BACK </a>
                            </div>


                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

   
