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
            <li class="breadcrumb-item"><a href="/review/<?= $product->id ?>">Review</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <img class="img-fluid center-block" width="200px" src='/img/<?= $product->picture ?>'/>
                <div class="card-body">
                    <h5 class="card-title"><?= $product->name ?></h5>
                    <p class="card-text"><?= $product->description ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row gy-3">
        <p class="lead">Geef uw mening over dit sportapparaat</p>
        <form method="post">
            <div class="mb-3">
                <label for="name" class="col-form-label">
                    Review:
                </label>
                <input type="text" name="description" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Waardering:</label>
                <select class="custom-select mr-sm-2" name="stars" id="inlineFormCustomSelect">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="submit" name="verzenden" class="btn btn-secondary">Save Change</button>
            </div>
        </form>
    </div>

<hr>
<?php
include_once('defaults/footer.php');

?>

</div>





</body>
</html>