<?php 
    $layoutPath = 'views/layouts/app.php';
    if (defined($layoutPath)) {
?>

<div class="container text-center">
    <!-- Centered Heading with Custom Font -->
    <h1>About SoftPHP Framework</h1>
    
    <!-- Two Buttons Below the Heading -->
    <div class="mt-4">
        <p>
            This is minified MVC architecture which uses plain PHP to separate models, views and controllers, the project structure is looking as follows
        </p>
       <pre 
        style="
            height: 500px; 
            overflow-y:auto; 
            text-align: left; 
            padding-top: 20px;
            border: 3px dashed;"
        >
        D:.
        │   .gitignore
        │   .htaccess
        │   composer.json
        │   index.php
        │   LICENSE
        │   readme.md
        │
        ├───app
        │   ├───Controllers
        │   │       Controller.php
        │   │       HomeController.php
        │   │       SamplesController.php
        │   │       UsersControllers.php
        │   │
        │   ├───Models
        │   │       Sample.php
        │   │       User.php
        │   │
        │   └───Providers
        │           FileServiceProvider.php
        │           RouteServiceProvider.php
        │           SessionServiceProvider.php
        │           ViewServiceProvider.php
        │
        ├───config
        │       db.php
        │
        │
        └───views
            ├───helpers
            │       not-found.php
            │
            ├───home
            │       documentation.php
            │       landing-page.php
            │       learn-more.php
            │
            ├───inc
            │       footer.php
            │       navbar.php
            │
            ├───layouts
            │       app.php
            │
            ├───sample
            │       view-sample.php
            │
            └───users
                    view-users.php
       </pre>
    </div>
</div>

<?php
    } else {
        define($layoutPath, true); 
    }

    $contentFile = 'views/home/learn-more.php'; 
    include_once $layoutPath;
?>
