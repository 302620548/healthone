<?php
function getContact():array
{
    global $pdo;
    $query = $pdo->prepare ("SELECT * FROM opening_hours");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_CLASS, 'Contact');

};
