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
            <?php
            if (isMember()){ ?>
                <li class="breadcrumb-item"><a href="member/home">Home</a></li>
                <?php
            }else { ?>
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <?php
            }
            ?>
            <li class="breadcrumb-item"><a href="/register">Register</a></li>
        </ol>
    </nav>

    <?php if (!empty($message)): ?>
        <div class="alert alert-secondary" role="alert">
            <?=$message?>
        </div>
    <?php endif;?>

    <form method="POST" action="/register">
        <div class="mb-3">
            <label for="name" class="form-label">Voornaam</label>
            <input type="text" class="form-control" id="first_name" name="firstName">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Achternaam</label>
            <input type="text" class="form-control" id="last_name" name="lastName">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>


    <hr>
    <?php
    include_once('defaults/footer.php');
    ?>

</div>




</body>
</html>