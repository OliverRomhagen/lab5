<?php
$books = array();
$books[] = array("title" => "Wordpress for you", "author" => "Johan Kohlin");
$books[] = array("title" => "PHP the easy way", "author" => "John Bauer");
$books[] = array("title" => "The big bad wolf", "author" => "R. K. Rowling");
$books[] = array("title" => "No Idea", "author" => "Nolan Ideos");

if (isset($_GET) && !empty($_GET)) {


$searchtitle = trim($_GET['searchtitle']);
$searchtitle = addslashes($searchtitle);

$searchauthor = trim($_GET['searchauthor']);
$searchauthor = addslashes($searchauthor);

$id = array_search($searchtitle, array_column($books, 'title'));
$id2 = array_search($searchauthor, array_column($books, 'author'));

echo '<table cellpadding="6">';
echo '<tr><b><td>Title</td> <td>Author</td> <td>Reserve</td> </b> </tr>';
    
    if ($id !== FALSE) {
    $book = $books[$id];
    $title = $book['title'];
    $author = $book['author'];
    echo "<tr>";
        echo "<td> $title </td><td> $author </td>";
        echo '<td><a href="reserve.php?reservation=' .  urlencode($title) . '"> Reserve </a></td>';
    echo "</tr>";
    }

    if ($id2 !== FALSE) {
    $book = $books[$id2];
    $title = $book['title'];
    $author = $book['author'];
    echo "<tr>";
        echo "<td> $title </td><td> $author </td>";
        echo '<td><a href="reserve.php?reservation=' .  urlencode($author) . '"> Reserve </a></td>';
    echo "</tr>";
    }

    echo "</table>";
}



else

{
echo '<table cellpadding="6">';
    echo '<tr><b><td>Title</td> <td>Author</td> <td>Reserve</td> </b> </tr>';
    foreach ($books as $book) {
    $title = $book['title'];
    $author = $book['author'];
    echo "<tr>";
        echo "<td> $title </td><td> $author </td>";
        echo '<td><a href="reserve.php?reservation=' . urlencode($title) . '"> Reserve </a></td>';
    echo "</tr>";
    }
echo "</table>";
}