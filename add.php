<?php
include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Add Quotes</title>
</head>

<body>

    <?php

    include "navbar.php";

    ?>

    <?php

    if (isset($_POST['submit-quote'])) {
        $quote = $_POST['quote'];
        $author = $_POST['author'];
        $insert_query = "INSERT INTO `quotes`(`quote`, `author`) VALUES ('$quote','$author')";

        $res = mysqli_query($conn, $insert_query);

        if ($res) {
            echo "<script>alert('Quote Inserted Successfully')</script>";
        }
    }

    ?>

    <div class="container1">
        <form action="" method="post">
            <input type="text" placeholder="Enter the Quote" name="quote" class="w-100">
            <br>
            <input type="text" placeholder="Author" name="author" class="w-100">
            <br>
            <input type="submit" name="submit-quote" id="add-quote" class="btn btn-secondary">
        </form>

    </div>
    <script>
        const button = document.getElementById('add-quote');


        button.addEventListener("click", function () {
            console.log('tapped');
        })s
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>