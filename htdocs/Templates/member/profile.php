<!DOCTYPE html>
<html>
<?php
include_once ('defaults/head.php');
?>
<head>
    <style>
        td {
            color: white; !important;
        }
    </style>
</head>
<body>
    <?php
    include_once ('defaults/New header.php');
    ?>
    <div class="container">
            <br>
            <table class="table align-middle table-dark">
                <tbody>
                <tr>
                    <td>Email</td>
                    <td><?=$_SESSION['user']->email?></td>
                </tr>
                <tr>
                    <td>Voornaam</td>
                    <td><?=$_SESSION['user']->first_name?></td>
                </tr>
                <tr>
                    <td>Achternaam</td>
                    <td><?=$_SESSION['user']->last_name?></td>
                </tr>
                </tbody>
            </table>


            <a type="button" class="btn-success btn-sm px-3" href="/member/editprofile">Profiel aanpassen</a>
            <a type="button" class="btn-danger btn-sm px-3" href="/member/changepassword">Wachtwoord aanpassen</a>

            <hr>
            <?php include_once('defaults/footer.php');
            ?>

    </div>
</body>
</html>