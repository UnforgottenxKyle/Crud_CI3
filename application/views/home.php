<?php $this->load->view('template/header'); ?>



<?php $this->load->view('template/navbar'); ?>
<?php if (!$this->session->is_login) { ?>
    <?php redirect('User/index') ?>
<?php } ?>


<section class="table-section">
<?php if ($this->session->flashdata('welcome')) { ?>
    <?php echo '<div class="p-3 mb-2 bg-success text-white text-center">'.$this->session->flashdata('welcome').'</div>' ?>
<?php } ?>
<?php if ($this->session->flashdata('deleted')) { ?>
    <?php echo '<div class="p-3 mb-2 bg-success text-white text-center">'.$this->session->flashdata('deleted').'</div>' ?>
<?php } ?>
<?php if ($this->session->flashdata('updated')) { ?>
    <?php echo '<div class="p-3 mb-2 bg-success text-white text-center">'.$this->session->flashdata('updated').'</div>' ?>
<?php } ?>
<?php if ($this->session->flashdata('update_error')) { ?>
    <?php echo '<div class="p-3 mb-2 bg-danger text-white text-center">'.$this->session->flashdata('update_error').'</div>' ?>
    
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
                <tr class="text-center" style="display:flex flex-direction: column">
                    <td><?= $data['first_name']; ?></td>
                    <td><?= $data['last_name']; ?></td>
                    <td><?= $data['email']; ?></td>
                    <td><?= $data['gender']; ?></td>
                    <td>
                        <a href="<?= base_url() ?>User/edit/<?= $data['id']; ?>">
                            <button class="btn btn-success" style="width:49%">Edit</button>
                        </a>
                        
                            
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $data['id']; ?>" style="width:49%">Delete</button>
                            
                            <!-- Modal -->
                            
                            <div class="modal fade" id="deleteModal<?= $data['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel<?= $data['id']; ?>" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="deleteModalLabel<?= $data['id']; ?>">Delete Data</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h1 class="fs-5">Are you sure you want to delete this <?= $data['email']; ?>?</h1>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <a href="<?= base_url() ?>User/delete/<?= $data['id']; ?>">
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                        </div>
                        </div>
                        
                        
                            
                    
                    
                    <!-- <select name="is_valid" id="">
                            <option value="1">1</option>
                            <option value="0">0</option>
                        </select> -->
                    </td>
                </tr>
            <?php } ?>
    </table>
  
        
    
    </div>  
</section>


<?php $this->load->view('template/footer'); ?>