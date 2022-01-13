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
    global $product, $name, $reviews;
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">sportcenter</a></li>
            <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
            <li class="breadcrumb-item"><a href="/categories/<?= $product->category_id ?>"><?= $name ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $product->name?></li>

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
                    <a href="/review/<?=$product->id?>">review</a>
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

    </div>


<hr>
<?php
include_once('defaults/footer.php');

?>

</body>
</html>
</html>