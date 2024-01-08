<?php
    include "conn.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Quote of the Day</title>
</head>


<body>

    <?php
        include "navbar.php";
    ?>

    <?php
    
    $get_query = "SELECT * FROM `quotes` ORDER BY rand() ";
    $res_query = mysqli_query($conn,$get_query);
    
    while($quotes_res = mysqli_fetch_assoc($res_query)){
        $quote_id = $quotes_res['id'];
        $quote_name = $quotes_res['quote'];
        $quote_author = $quotes_res['author'];

        echo "
        <div class='container'>
        <p>$quote_name</p>
        <p>- $quote_author</p>
    </div>
        ";
    }
    ?>


    <?php

        if (isset($_GET['search'])) {
            $search_query = mysqli_real_escape_string($conn, $_GET['search']);
            $get_query = "SELECT * FROM `quotes` WHERE `quote` LIKE '%$search_query%' OR `author` LIKE '%$search_query%' ORDER BY rand()";
        } else {
            $get_query = "SELECT * FROM `quotes` ORDER BY rand()";
        }

        $res_query = mysqli_query($conn, $get_query);

        while ($quotes_res = mysqli_fetch_assoc($res_query)) {
            $quote_id = $quotes_res['id'];
            $quote_name = $quotes_res['quote'];
            $quote_author = $quotes_res['author'];

            echo "
            <div class='container'>
                <p>$quote_name</p>
                <p>- $quote_author</p>
            </div>
            ";
        }
        
    ?>


    <script src="app.js"></script>
</body>

</html>