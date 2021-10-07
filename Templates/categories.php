<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>

<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
        </ol>
    </nav>

    <?php foreach ($categories as $category): ?>
    <div class="col-sm-4 col-sm-3">
        <div class="card">
            <div class="card-body text-center">
                <a href="/categories/<?= $category ->id ?>">
                    <img src="" alt="">
                </a>
            </div>
        </div>
    </div>
    ?>

    <hr>
    <?php
    include_once('defaults/footer.php');

    ?>
</div>

</body>
</html>

