<?php
    require 'connection.php';
?>
<?php
    require 'header.php';
?>
    
<div class="container">
    <div class="row  justify-content-center align-items-center mt-5 m-0 p-0 pt-5">
        <div class="col-12 col-sm-5">
            <img src="images/purple-login.avif" alt="Login Image" class="img-fluid">
        </div>
        <div class="col-12 col-sm-7 row justify-content-center m-0 p-0">
            <div class="text-primary col-12 col-sm-3 text-center mb-5">
            <h1>Login</h1>
            </div>
            <div class="col-12 col-sm-10">
                <form action="" method="">
                    <div>
                        <input type="email" placeholder="Email" required class="form-control border border-primary p-2 mb-3">
                    </div>
                    <div>
                        <input type="password" placeholder="Password" required class="form-control border border-primary p-2 mb-3">
                    </div>
                    <div>
                        <input type="submit" value="Login" class="form-control btn btn-primary p-2 mb-3">
                    </div>
                    <div>
                        <input type="submit" value="Create New Account" class="form-control btn btn-success p-2 mb-3">
                    </div>
                    <div class="col-12 col-sm-3 mx-auto text-center">
                        <a href="#" class="text-primary text-decoration-none fw-semibold">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
    require 'footer.php';
?>