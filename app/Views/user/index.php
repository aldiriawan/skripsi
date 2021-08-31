<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">My Profile</h1>
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url('/img/' . user()->user_image); ?>" class="card-img" alt="<?= user()->username; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="<?= base_url('user/edit'); ?>" class="card-link">Edit Profile</a>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <?= user()->username; ?>
                                </li>
                                <?php if (user()->fullname) : ?>
                                    <li class="list-group-item">
                                        <?= user()->fullname; ?>
                                    </li>
                                <?php endif; ?>
                                <li class="list-group-item">
                                    <?= user()->email; ?>
                                </li>
                                <li class="list-group-item">
                                    <small class="text-muted">Since <?= date('d F Y'); ?></small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>