<?php 
    $layoutPath = 'views/layouts/app.soft.php';
    if (defined($layoutPath)) {
?>

<div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
    <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Coming Soon</h1>
</div>
<div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
    <img class="rounded-lg-3" src="bootstrap-docs.png" alt="" width="720">
</div>

<?php
    } else {
        define($layoutPath, true); 
    }

    $contentFile = __FILE__; 
    include_once $layoutPath;
?>
