<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            wdith: 100px;
            border-collapse: collapse;
            border: 1px solid #ffffff;
        }
        td {
            border: 1px solid #ffffff;
            width: 100px;
        }
    </style>
</head>
<?php
include_once('defaults/head.php');
include_once('../Modules/Contacts.php');
?>

<body>

<?php
include_once ('defaults/New header.php');
?>
<div class="container">


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/contact">Contact</a></li>
        </ol>
    </nav>
    <h1>Openingstijden</h1>
    <div class="time-graph">
    <?php
    global $contacts;

        echo "<table>";
        foreach ($contacts as $contact) {
            echo "<td>" . $contact->day . " ";
            echo "<td>" . $contact->time . "<br>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
    </div>
    <h2>Contact</h2>
    <p>Telefoonnummer: 0152578924</p>
    <h2>Onze locatie!</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1329.858406702439!2d4.33134515325898!3d51.99512845798715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b44d61a108cf%3A0x9da6361d0a36ebd1!2sZuidhoornseweg%206A%2C%202625%20DV%20Den%20Hoorn!5e0!3m2!1snl!2snl!4v1634204330404!5m2!1snl!2snl" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <hr>
    <?php
    include_once('defaults/footer.php');

    ?>
</div>
</body>
</html>