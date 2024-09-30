<?php $this->load->view('template/header'); ?>



<?php $this->load->view('template/navbar'); ?>
<?php if (!$this->session->is_login) { ?>
    <?php redirect('User/index') ?>
<?php } ?>


<section class="table-section">
<?php if ($this->session->flashdata('welcome')) { ?>
    <?php echo '<div class="p-3 mb-2 bg-success text-white text-center">'.$this->session->flashdata('welcome').'</div>' ?>
<?php } ?>



    <table class="table table-striped table-hover">
            <tr class="text-center">
                <th>FIRSTNAME</th>
                <th>LASTNAME</th>
                <th>EMAIL</th>
                <th>GENDER</th>
                <th>ACTION</th>
            </tr>


            <?php foreach ($datas as $data) { ?>
                <tr >
                    <td><?= $data['first_name']; ?></td>
                    <td><?= $data['last_name']; ?></td>
                    <td><?= $data['email']; ?></td>
                    <td><?= $data['gender']; ?></td>
                    <td class="p-3">
                    <a href="<?= base_url() ?>User/edit/<?= $data['id']; ?>"><button class="btn btn-success" style="width:49%">Edit</button></a>
                    <a href="<?= base_url() ?>User/delete/<?= $data['id']; ?>"><button class="btn btn-danger" style="width:49%">Delete</button></a>
                        <!-- <select name="is_valid" id="">
                            <option value="1">1</option>
                            <option value="0">0</option>
                        </select> -->
                    </td>
                </tr>
            <?php } ?>

    </table>
</section>


<?php $this->load->view('template/footer'); ?>