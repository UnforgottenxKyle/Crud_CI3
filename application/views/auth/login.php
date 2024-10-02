<?php $this->load->view('template/header') ?>

<main style="background-image:url(<?= base_url('/assets/img/sdca1.jpg') ?>)">


    <section class="register-section">
        <h1>LOGIN HERE</h1>
        <?php if($this->session->flashdata('message')):?>
            <div class="message" style="background: green;">
                <?= $this->session->flashdata('message'); ?>
            </div>
        <?php endif?>
        <?php if ($this->session->flashdata('error')) { ?>
            <?= '<p class="message">' . $this->session->flashdata('error') . '</p>' ?>
        <?php } ?>
        <?php echo validation_errors(); ?>
        <form action="<?= base_url() ?>User/login" method="post">
            <label>EMAIL </label><br>
            <input type="email" name="email" placeholder="Enter your email" required /><br>
            <label>PASSWORD </label><br>
            <input type="password" name="password" placeholder="Enter your password" required /><br>

            <input type="submit" class="button" name="Create" value="SUBMIT">
            <p>Don't have an account yet? <a href="<?= base_url() ?>User/register">REGISTER</a></p>
        </form>
    </section>
</main>
<?php $this->load->view('template/footer') ?>