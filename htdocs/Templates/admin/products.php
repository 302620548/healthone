<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-size: 1.25rem;
            background-color: #f6f8fa;
        }

        table {
            wdith: 100px;
            border-collapse: collapse;
            border: 1px solid black;
            background-color: lightgray;
        }
        td {
            border: 1px solid black;
            width: 100px;
        }


    </style>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
    </svg>

</head>
<?php
include_once('defaults/head.php');
?>
<body>
<?php
include_once ('defaults/New header.php');
global $pdo;
?>
<div class="container">

    <div class="container">
        <div class="d-flex bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                <button type="button" class="btn btn-secondary" onclick="showUserCreateBox()">+ Add</button>
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
                <tr>
.                    <td>Hello!</td>
                    <td scrope="col">Het werkt! denk ik....</td>
                    <td scrope="col">Het werkt! denk ik....</td>
                    <td scrope="col">Het werkt! denk ik....</td>
                    <td scrope="col">Het werkt! denk ik....</td>
                    <td scrope="col">Het werkt! denk ik....</td>

                </tr>
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
