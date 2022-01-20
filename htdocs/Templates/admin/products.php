<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-size: 1.25rem;
            background-color: #f6f8fa;
        }

        table {
            border-collapse: collapse;
            border: 1px solid black;
            background-color: lightgray;
        }
        td {
            border: 1px solid black;
            width: 100px;
        }
    </style>

</head>
<?php
include_once('defaults/head.php');
?>
<body>
<?php
include_once ('defaults/New header.php');
global $pdo;
global $products;
?>
<div class="container">

    <div class="container">
        <div class="d-flex bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                <a type="button" href="addProduct" role="button" class="btn btn-primary">Add</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Afbeelding</th>
                    <th scope="col">Naam</th>
                    <th scope="col">Category</th>
                    <th scope="col">Aanpassen</th>
                    <th scope="col">Verwijderen</th>
                </tr>
                </thead>
                <tbody id="mytable">



                <?php
                $number = 1;
                foreach ($products as $product) {
                    ?>
                <tr>
                    <td><?=$number?></td>
                    <td scrope="col"><img class="img-fluid center-block" width="100px" src='/img/<?= $product->picture ?>'/></td>
                    <td scrope="col"><?=$product->name?></td>
                    <td scrope="col"><?=getCategoryName($product->category_id)?></td>
                    <td scrope="col"><a class="btn btn-success btn-sm px-3" href="/admin/editProduct/<?=$product->id?>">Edit</a></td>
                    <td scrope="col"><a class="btn btn-danger btn-sm px-3" href="/admin/deleteProduct/<?=$product->id?>">Delete</a></td>
                </tr>
                    <?php
                $number++;
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <?php
    include_once ('defaults/footer.php');
    ?>

</div>
</body>
</html>
