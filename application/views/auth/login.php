<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Login</h3>
                </div>
                <div class="card-body">
                <?= $this->session->flashdata('message'); ?>
                    <form method="post" action="<?= base_url('Auth/cek_login') ?>">
                        <div class="form-floating mb-3">
                            <input class="form-control" name="email" id="inputEmail" type="email"
                                placeholder="name@example.com" />
                            <label for="inputEmail">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="password" id="inputPassword" type="password"
                                placeholder="Password" />
                            <label for="inputPassword">Password</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <a class="small text-decoration-none" href="#">Forgot Password?</a>
                            <button class="btn btn-primary px-4 py-2" type="submit">Login</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="<?= base_url('Auth/registrasi') ?>" class="text-decoration-none" >Need an account? Sign up!</a></div>
                </div>
            </div>
        </div>
    </div>
</div>