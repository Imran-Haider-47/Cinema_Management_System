
    <div class="container">
        <div class="row">
            <div class="col-mid-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Edit the member data </h5>    
                       
                        
                    </div>

                    <div class="card-body">
                        <form action="<?php echo base_url('member/update/'.$member->member_id) ?>" method="POST">
                            <div class="form-group">
                                <label for="">Member ID </label>
                                <input type="text" name="memberID" value="<?= $member->member_id ?>" class="form-control">
                                <small> <?php echo form_error('MemberID'); ?> </small>
                            </div>  
                            <div class="form-group">
                                <label for="">First Name </label>
                                <input type="text" name="memberName" value="<?= $member->member_name ?>"  class="form-control">
                                <small> <?php echo form_error('MemberName'); ?> </small>
                            </div>

                            <div class="form-group">
                                <label for="">Title </label>
                                <input type="text" name="memberTitle" value="<?= $member->title ?>"  class="form-control">
                                <small> <?php echo form_error('MemberTitle'); ?> </small>
                            </div>

                            <div class="form-group">
                                <label for="">Joined Date </label>
                                <input type="text" name="joinedDate" value="<?= $member->joined_date ?>" class="form-control">
                                <small> <?php echo form_error('joinedDate'); ?> </small>
                            </div>

                            <div class="form-group">
                                <label for="">Status </label>
                                <input type="text" name="status" value="<?= $member->status ?>" class="form-control">
                                <small> <?php echo form_error('MemberStatus'); ?> </small>
                            </div>
                            <div class="form-group">
                                <br>
                                <button class="btn btn-primary">Update</button>
                                <a href="<?php echo base_url('member'); ?>" class="btn btn-danger float-right">BACK </a>
                            </div>


                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

   
