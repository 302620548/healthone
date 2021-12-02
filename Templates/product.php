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
    global $product;
    try {
        $db = new PDO("mysql:host=localhost;dbname=healthone","root", "");
        $query = $db->prepare('SELECT * FROM review where product_id =' . $product->id);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as &$data) {
            echo $data ["name"] . " <br>  ";
            echo $data ["description"] . " <br> ";
            echo $data ["date"] . " <br> <br> ";
        }
        echo "</table>";
    } catch(PDOException $e) {
        die("Error!: " . $e->getMessage());
    }
    ?>

</div>


<hr>
<?php
include_once('defaults/footer.php');

?>

</body>
</html>
</html>