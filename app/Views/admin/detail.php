<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User Detail</h1>

    <div class="row">
        <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 pt-3 pb-3">
            <div class="container text-center">
                <form class="" action="/profile" method="post">
                    <div class="row">
                        <div class="col-md-4 rounded d-block mx-auto">
                            <img src="<?= base_url('/img/' . $user->user_image); ?>" class=" img-fluid rounded-start" alt="<?= $user->username; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" readonly name="username" value="<?= $user->username; ?>">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="text" class="form-control" readonly value="<?= $user->email; ?>">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="fullname">Fullname</label>
                                <input type="text" class="form-control" readonly name="fullname" value="<?= $user->fullname; ?>">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <label for="role">Role</label>
                            <input type="text" class="form-control" readonly name="role" value="<?= $user->name; ?>">
                            </span>
                        </div>
                    </div>
                    <small class="text-muted">Since <?= date('d F Y'); ?></small>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

</div>
<?= $this->endSection(); ?>