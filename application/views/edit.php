<?php $this->load->view('template/header'); ?>




<?php $this->load->view('template/navbar'); ?>
    <section class="edit-section">
        <form action="<?= base_url() ?>User/update/<?= $data['id'] ?>" method="post">
        <label class="form-label">FIRSTNAME</label>
        <input type="text" name="first_name" placeholder="Enter your new firstname" value="<?= $data['first_name']?>" class="form-control"><br>
        <label class="form-label">LASTNAME</label>
        <input type="text" name="last_name" placeholder="Enter your new lastname" value="<?= $data['last_name']?>" class="form-control"><br>
        <label class="form-label">EMAIL</label>
        <input type="text" name="email" placeholder="Enter your new email" value="<?= $data['email']?>" class="form-control"><br>
        <label class="form-label">GENDER</label>
        <input type="text" name="gender" placeholder="Enter your new gender" value="<?= $data['gender']?>" class="form-control"><br>
                
            
            <input type="submit" value="Update" class="btn btn-success btn-lg">
        </form>
    </section>






<?php $this->load->view('template/footer'); ?>