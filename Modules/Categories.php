<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getCategories()
{
    global $pdo;
    $categories = $pdo->query('SELECT * FROM category')-> fetchAll(PDO::FETCH_CLASS, 'Category');
    return $categories;

}

function getCategoryName(int $id)
{
    
}
