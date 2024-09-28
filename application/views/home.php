<?php $this->load->view('template/header'); ?>



<?php $this->load->view('template/navbar'); ?>

<section class="table-section">
    <table>
        <thead>
            <tr>
                <th>FIRSTNAME</th>
                <th>LASTNAME</th>
                <th>EMAIL</th>
                <th>GENDER</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datas as $data) { ?>
                <tr>
                    <td><?= $data['first_name']; ?></td>
                    <td><?= $data['last_name']; ?></td>
                    <td><?= $data['email']; ?></td>
                    <td><?= $data['gender']; ?></td>
                    <td>
                        <a href="<?= base_url() ?>User/edit/<?= $data['id']; ?>">Edit</a>
                        <a href="<?= base_url() ?>User/delete/<?= $data['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>


<?php $this->load->view('template/footer'); ?>