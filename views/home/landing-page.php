<?php 
    $layoutPath = 'views/layouts/app.php';
    if (defined($layoutPath)) {
?>

<div class="col-lg-8 p-3 p-lg-5 pt-lg-3">
    <h1 class="display-4 fw-bold lh-1 text-body-emphasis">SoftNet Minified MVC Framework for PHP (SoftPHP)</h1>
    <p class="lead">
        A minified MVC architecture which uses plain PHP to separate models, views and controllers to follow best design and development practices
    </p>    
    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
    <a href="./learn-more" class="btn btn-outline-success btn-lg px-4">Project Structure</a>
    <a href="./sample-data" class="btn btn-outline-primary btn-lg px-4">Sample Data</a>
    <a href="./api/sample-data" class="btn btn-outline-danger btn-lg px-4">Sample API</a>
    <a href="./documentation" class="btn btn-dark btn-lg px-4">Documentation</a>
    </div>
</div>
<div class="col-lg-3 offset-lg-1 p-0 overflow-hidden shadow-lg">
    <img class="rounded-lg-3" src="" alt="" width="400">
</div>

<?php
    } else {
        define($layoutPath, true); 
    }

    $contentFile = 'views/home/landing-page.php'; 
    include_once $layoutPath;
?>
