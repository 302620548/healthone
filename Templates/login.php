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
    <?php
    global $product;
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">sportcenter</a></li>
            <li class="breadcrumb-item"><a href="/login">Login</a></li>

        </ol>
    </nav>

</div>
<div class="container">

    <form method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>

        <button type="submit" name="login" class="btn btn-primary">Submit</button>
    </form>

</div>




<hr>
<?php
include_once('defaults/footer.php');

?>

</body>
</html>