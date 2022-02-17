<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>

<?php
include_once ('defaults/New header.php');
?>

<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">sportcenter</a></li>
            <li class="breadcrumb-item"><a href="/register">Register</a></li>

        </ol>
    </nav>

</div>
<div class="container">

    <form method="POST">
        <div class="container">
            <p>Please fill in this form to create an account.</p>

            <form method="POST">
                <div class="row">
                <div class="col-md-6">
                    <label for="first-name" class="form-label">First name</label>
                    <input type="text" placeholder="Enter your first name" class="form-control" name="first-name" id="l_name" required>
                </div>
                <div class="col-md-6">
                    <label for="last-name" class="form-label">Last name</label>
                    <input type="text" placeholder="Enter your last name" class="form-control" name="last-name" id="f_name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="text" placeholder="Enter Email" class="form-control" name="email" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                    <input type="password" placeholder="Enter Password" class="form-control" name="password" id="password" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                    <input type="password" placeholder="Repeat Password" class="form-control" name="password-repeat" id="password-repeat" required>
                </div>
                <div>
                    <hr>
                    <p>By creating an account you agree to our <a href="/termsAndPrivacy/">Terms & Privacy</a>.</p>
                </div>
                <div>
                    <p>Already have an account? <a href="/login/">Sign in</a>.</p>
                </div>

                <button type="submit" name="register" class="btn btn-primary">Submit</button>
                </div>
            </form>
</div>




<hr>
<?php
include_once('defaults/footer.php');

?>

</body>
</html>