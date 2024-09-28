<?php $this->load->view('template/header'); ?>



<section class="edit-section">
    <?php $this->load->view('template/navbar'); ?>
    <section class="edit-section">
        <form action="<?= base_url() ?>User/update/<?= $data['id'] ?>" method="post">
            <input type="text" name="first_name" placeholder="Enter your new firstname" value="<?= $data['first_name'] ?>">
            <input type="text" name="last_name" placeholder="Enter your new lastname" value="<?= $data['last_name'] ?>">
            <input type=" text" name="email" placeholder="Enter your new email" value="<?= $data['email'] ?>">
            <input type=" text" name="gender" placeholder="Enter your new gender" value="<?= $data['gender'] ?>">
            <input type="submit" value="Update">
        </form>
    </section>
</section>

<?php $this->load->view('template/footer'); ?>