<?php




echo "<ul>" ."<h2>Список посещённых страниц</h2>"."<ol>";

foreach ($_SESSION['visitedPages'] as $page) {

    echo "<li>" . htmlspecialchars($page) . "</li>";

}

echo "</ul>" . "</ol>";

?>