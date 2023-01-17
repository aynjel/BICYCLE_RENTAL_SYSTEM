
<!-- Signin -->
<div class="modal fade" id="signin" data-backdrop="static" data-keyboard="true" tabindex="-1"
    aria-labelledby="signinLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <form action="signin_process.php" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="signinLabel">
                        Sign In
                    </h3>
                    <button type="button" class="btn bg-light btn-close" data-dismiss="modal">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="email" class="form-label"><i class="fa fa-envelope"></i> Email</label>
                        <input type="email" class="single-input-primary border-secondary" placeholder="Email"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required
                            class="single-input" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"><i class="fa fa-lock"></i> Password</label>
                        <input type="password" class="single-input-primary border-secondary" placeholder="Password"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required
                            class="single-input" id="password" name="password">
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
