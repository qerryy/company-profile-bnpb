<?php 
    if (isset($_SESSION['user_id'])) {
        header('Location: '. BASEURL .'/middleware/notify');
        exit;
    }
?>

<div class="container mb-5">

    <div class="row">
        <div class="col-11 col-md-8 col-lg-6 px-0 mx-auto">
            <?php Flasher::alert(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-11 col-md-8 col-lg-6 mx-auto my-5 px-3 px-md-5 bg-white shadow border rounded">
            <h3 class="pt-4 text-uppercase border-bottom text-center">Login</h3>
            <form action="<?= BASEURL; ?>/auth/login" method="POST" class="pb-5 pt-3">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>

                <div class="mb-5">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>
</div>
