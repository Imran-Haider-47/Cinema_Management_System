
    <div class="container">
        <div class="row">
            <div class="col-mid-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Edit the film data </h5>    
                       
                        
                    </div>

                    <div class="card-body">
                        <form action="<?php echo base_url('film/update/'.$film->film_id) ?>" method="POST">
                            <div class="form-group">
                                <label for="">Film Number </label>
                                <input type="text" name="film_id" value="<?= $film->film_id ?>" class="form-control">
                                <small> <?php echo form_error('film_id'); ?> </small>
                            </div>  
                            <div class="form-group">
                                <label for="">Released  </label>
                                <input type="text" name="released" value="<?= $film->released ?>"  class="form-control">
                                <small> <?php echo form_error('released'); ?> </small>
                            </div>

                            <div class="form-group">
                                <label for="">Film Title </label>
                                <input type="text" name="film_title" value="<?= $film->film_title ?>"  class="form-control">
                                <small> <?php echo form_error('film_title'); ?> </small>
                            </div>

                            <div class="form-group">
                                <label for="">Director </label>
                                <input type="text" name="director" value="<?= $film->director ?>" class="form-control">
                                <small> <?php echo form_error('director'); ?> </small>
                            </div>

                            
                            <div class="form-group">
                                <br>
                                <button class="btn btn-primary">Update</button>
                                <a href="<?php echo base_url('film'); ?>" class="btn btn-danger float-right">BACK </a>
                            </div>


                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

   
