<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>
<body>
<?php
include_once ('defaults/New header.php');
global $pdo;
?>
<div class="container">

    <h4>ADMIN PAGE</h4>
    Hello! <?= $user->first_name ?>
    Fit en gezond zijn is geen vanzelfsprekendheid. We moeten er zelf wat voor doen. Goede, gezonde voeding is hiervoor de basis.
    Bewegen hoort hier ook bij. Regelmatig bewegen zorgt voor een goede doorbloeding en draagt bij aan ontspanning van lichaam en geest.
    Sporten is goed voor sterkere spieren en voor de conditie. Sporcenter HealthOne heeft verschillende sportapparaten om mee te kunnen werken aan je conditie.
    <hr>
    <?php
    include_once ('defaults/footer.php');
    ?>

</div>
</body>
</html>
