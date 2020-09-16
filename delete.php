<?php
    foreach ($aBooks as $book) {
        echo '<li><a href="book.php?id=' . $book['id'] . '">' . $book['title'] . '</a></li>';
}
?>