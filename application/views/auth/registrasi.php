<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="<?= base_url('auth/cek_regis') ?>">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputName" name="nama" type="text"
                                placeholder="Enter your name" />
                            <label for="inputName">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputEmail" type="email" name="email"
                                placeholder="name@example.com" />
                            <label for="inputEmail">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputPassword" name="password1" type="password"
                                placeholder="Create a password" />
                            <label for="inputPassword">Password</label>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid"><button class="btn btn-primary btn-block py-3" type="submit">Create
                                    Account</button></div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a class="text-decoration-none" href="<?= base_url('Auth/') ?>">Have an account? Go
                            to login</a></div>
                </div>
            </div>
        </div>
    </div>
</div>