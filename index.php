<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <title>Individual project</title>
    </head>
    <body>
        <h1>Pan Tadeusz (full title: Master Thaddeus, or the Last Foray in Lithuania: A Nobility's Tale of the Years 1811–1812, in Twelve Books of Verse</h1>
        <h2>Table of contents</h2>
        <ul>
            <?php
                for ($b=1; $b<13; $b++) {
                    echo '<li><a href="./?book=k'.$b.'">Book'.$b.'</a></li>';
                }
            ?>
        </ul>
        <div>
            <?php
                $b = $_GET['book'];
                echo $b.".html";
                $book_content = file_get_contents("./$b.html");
                echo $book_content;

            ?>
        </div>
    </body>
</html>