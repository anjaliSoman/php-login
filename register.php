<?php require 'connection.php';
?>

<?php require 'header.php';
?>

<div class="container">
    <div class="row  align-items-center mt-5 p-0 m-0">
        <div class="col-12 col-sm-5 ">
            <img src="images/registration.avif" alt="Registration-image" class="img-fluid">
        </div>
        <div class="col-12 col-sm-7  row justify-content-center">
            <div class="text-primary col-12 col-sm-3  mx-auto text-center mb-5">
                <h1>Register</h1>
            </div>
            <div class="col-12 col-sm-10 ">
                <form action="" method="">
                    <div>
                        <input type="text" placeholder="FirstName" class="form-control border border-primary mb-3">
                    </div>
                    <div>
                        <input type="text" placeholder="LastName" class="form-control border border-primary mb-3">
                    </div>
                    <div>
                        <input type="email" placeholder="Email" class="form-control border border-primary mb-3">
                    </div>
                    <div>
                        <input type="file" name="image" class="form-control border border-primary mb-3">
                    </div>
                    <div>
                        <input type="password" placeholder="Password" class="form-control border border-primary mb-3">
                    </div>
                    <div>
                        <input type="password" placeholder="Confirm Password" class="form-control border border-primary mb-3">
                    </div>
                    <div>
                        <!-- <input type="text" value="Choose a security question" class="form-control"> -->
                        <select class="form-select border border-primary mb-3" aria-label="Default select example" >
                            <option selected>Choose a security question</option>
                            <option value="1">Your nick name</option>
                            <option value="2">Your pet name</option>
                            <option value="3">Your favourite 4 digit number</option>
                        </select>
                    </div>
                    <div>                    
                        <fieldset disabled>
                            <input type="text" id="disabledTextInput" class="form-control border border-primary mb-3" placeholder="Your answer">
                        </fieldset>
                    </div>
                    <div>
                        <input type="submit" value="Register" class="form-control btn btn-primary border border-primary mb-3">
                    </div>
                    <div>
                        <input type="submit" value="Already have an account?" class="form-control btn btn-success border border-primary mb-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php';
?>