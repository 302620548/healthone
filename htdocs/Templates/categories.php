<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>
<?php
if (isMember()){
    include_once ('member/defaults/New header.php');
}else {
    include_once ('defaults/New header.php');
}
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
            <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
        </ol>
    </nav>

<div class="row gy-3 ">

    <?php global $categories ?>
    <?php foreach ($categories as $category):?>
        <div class="col-sm-4 col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <a href="/category/<?= $category->id ?>">
                        <img class="product-img img-responsive center-block" src='/img/<?= $category->picture ?>'/>

                    </a>
                    <div class="card-title mb-3"><?= $category->name ?>
                    </div>
                </div>
            </div>

        </div>
    <?php endforeach;?>

</div>
    <hr>
    <?php
    include_once('defaults/footer.php');

    ?>

</body>
</html>
</html>