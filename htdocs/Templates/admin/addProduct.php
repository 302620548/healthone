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
    <div class="row gy-3">
        <form method="post">
            <div class="mb-3">
                <label for="name" class="col-form-label">
                    Naam:
                </label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="description" class="col-form-label">
                    Beschrijving:
                </label>
                <input type="text" name="description" class="form-control" id="description">
            </div>

            <!--<div class="mb-3">
                <label for="picture" class="col-form-label">
                    Foto:
                </label>
                <input type="file" name="picture" class="form-control" id="description">
            </div>-->


            <?php
            try {
                $db = new PDO("mysql:host=localhost;dbname=healthone","root", "");
                $query = $db->prepare ("SELECT * FROM category");
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_ASSOC);

                ?>
                <select list="category_id" name="category_id">
                    <?php

                    foreach ($result as $data) {
                        echo "<option name='category_id' value=' ". $data['id'] . " '>" . $data['name'] . "</option>";
                    }
                    ?>
                </select>

                <?php
                if(isset($_POST['verzenden'])){
                    /*$allowed=['gif','png','jpg'];
                    $filename=$_FILES['picture'] ['name'];
                    $ext=pathinfo($filename,PATHINFO_EXTENSION);

                    if (!in_array($ext,$allowed) ||
                        exif_imagetype($_FILES['picture']['tmp_name'])===false){
                        $message ="Sorry Only gif, PNG , JPG files allowed";
                        return false;
                    }

                    $target_dir= "upload/";
                    $target_file = $_FILES['userfile'] ['name'];
                    do {
                        $target_file = $target_dir.md5 ($target_file).".$ext";
                    } while (file_exists($target_file));


                    if(move_uploaded_file(($_FILES['userfile']['tmp_name']) , $target_file)){
                        $message.="Upload succes!, file name is " .$target_file;
                        return true;
                    }else {
                        $message.="sorry, upload niet gelukt";
                        return false;
                    }*/

                    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
                    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
                    $category_id = filter_input(INPUT_POST, 'category_id', FILTER_SANITIZE_STRING);

                    $db = new PDO("mysql:host=localhost;dbname=healthone","root", "");
                    $query = $db->prepare ("INSERT INTO product(name, description, category_id) values (:name,:description,:category_id)");
                    $query->bindParam("name", $name);
                    $query->bindParam("description", $description);
                    $query->bindParam("category_id", $category_id);
                    if ($query->execute()) {
                        echo '<br> <br><div class="alert alert-secondary" role="alert">Product toegevoegd</div>';
                    }
                    else {
                        echo "Error";
                    }
                }

            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
            ?>

            <div class="modal-footer">
                <button type="submit" name="verzenden" class="btn btn-secondary">Add</button>
            </div>

        </form>
    </div>
</div>

<?php
include_once ('defaults/footer.php');
?>

</body>