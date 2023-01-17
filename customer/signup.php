
<!-- signup -->
<div class="modal fade" id="signup" data-backdrop="static" data-keyboard="true" tabindex="-1"
    aria-labelledby="signupLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <form action="signup_process.php" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="signupLabel">
                        Sign Up
                    </h3>
                    <button type="button" class="btn bg-light btn-close" data-dismiss="modal">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="text" class="name"><i class="fa fa-user"></i> Name</label>
                            <input type="text" class="single-input-primary border-secondary" placeholder="Name"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required
                                class="single-input" id="name" name="name">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="email" class="form-label"><i class="fa fa-envelope"></i> Email</label>
                            <input type="email" class="single-input-primary border-secondary" placeholder="Email"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required
                                class="single-input" id="email" name="email">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label"><i class="fa fa-lock"></i> Password</label>
                            <input type="password" class="single-input-primary border-secondary" placeholder="Password"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required
                                class="single-input" id="password" name="password">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label"><i class="fa fa-lock"></i> Confirm Password</label>
                            <input type="password" class="single-input-primary border-secondary"
                                placeholder="Confirm Password" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Confirm Password'" required class="single-input"
                                id="confirm_password" name="confirm_password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Sign In
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- button to trigger modal-->
