<section class="home-section">
    <nav>
        <div class="logo">
            <h1>CRUD PROJECT</h1>
        </div>
        <div>
            <ul class="nav-links">
                <li><a><?= $this->session->last_name ?></a></li>
                <li><a href="<?= base_url('User/logout') ?>">LOGOUT</a></li>
            </ul>
        </div>
    </nav>
</section>