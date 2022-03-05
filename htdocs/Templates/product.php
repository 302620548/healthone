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

    <?php
    global $product, $categoryId, $name, $reviews;
    ?>

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
            <li class="breadcrumb-item"><a href="/category/<?= $product->category_id ?>">Products</a></li>
            <li class="breadcrumb-item"><a href="/product/<?= $product->id ?>"><?= $product->name?></a></li>
        </ol>
    </nav>

</div>
<div class="container">

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <img class="img-fluid center-block" width="200px" src='/img/<?= $product->picture ?>'/>
                <div class="card-body">
                    <h5 class="card-title"><?= $product->name ?></h5>
                    <p class="card-text"><?= $product->description ?></p>
                    <?php
                    if (isMember()) {
                        ?><a type="button" href="/review/<?=$product->id?>" role="button" class="btn btn-primary">Add Review</a><?php
                    }?>


                </div>
            </div>
        </div>
    </div>

    <?php
    foreach ($reviews as $review) {
        echo "Naam: " . $review->name . " <br>  ";
        echo "Bericht: " . $review->description . " <br> ";
        echo "Waardering: " . $review->stars . " <br> ";
        echo $review->date  . " <br> <br> ";
    }
    echo "</table>";

    ?>
    <hr>
    <?php
    include_once('defaults/footer.php');

    ?>

    </div>




</body>
</html>
</html>