<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minified PHP Framework</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <style>
        /* Apply the custom font to the heading */
        h1 {
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php include 'views/inc/navbar.php' ?>

    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <?php include $contentFile ?>
        </div>
    </div>

    <?php include 'views/inc/footer.php' ?>

    <!-- Link to Bootstrap JS and jQuery (required for some Bootstrap features) -->
    <script src="public/js/jquery.slim.min.js"></script>
    <script src="public/js/popper.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
</body>
</html>



