<?php include('header.php');

if (isset($_POST['username'])) {
    if ($_POST['username'] == $_COOKIE['uname'] && $_POST['password'] == $_COOKIE['pass']) {

        $_SESSION['uname'] = $_POST['username'];
        $_SESSION['pword'] = $_POST['password'];
        header("location:about_us.php");
    }
}

?>


<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="text-center my-5">

                </div>
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4 text-center">Login</h1>
                        <form action="login.php" method="post" autocomplete="off">
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">Username</label>
                                <input type="text" class="form-control" name="username" required autofocus>
                            </div>

                            <div class="mb-3">
                                <label class="text-muted" for="password">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="mb-3">

                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary ms-auto" name="login" value="login">
                                    Login
                                </button>
                                <button type="reset" class="btn btn-danger ms-auto" name="reset" value="reset">
                                    Reset
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            Don't have an account? <a href="registration.php" class="text-dark">Create One</a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5 text-muted">
                    Copyright &copy; 2017-2021 &mdash; Your Company
                </div>
            </div>
        </div>
    </div>
</section>


</body>

</html>