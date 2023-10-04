<?php 
    $layoutPath = 'views/layouts/app.soft.php';
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
        │   index.soft.php
        │   LICENSE
        │   readme.md
        │
        ├───app
        │   ├───Controllers
        │   │       Controller.soft.php
        │   │       HomeController.soft.php
        │   │       SamplesController.soft.php
        │   │       UsersControllers.soft.php
        │   │
        │   ├───Models
        │   │       Sample.soft.php
        │   │       User.soft.php
        │   │
        │   └───Providers
        │           FileServiceProvider.soft.php
        │           RouteServiceProvider.soft.php
        │           SessionServiceProvider.soft.php
        │           ViewServiceProvider.soft.php
        │
        ├───config
        │       db.soft.php
        │
        │
        └───views
            ├───helpers
            │       not-found.soft.php
            │
            ├───home
            │       documentation.soft.php
            │       landing-page.soft.php
            │       learn-more.soft.php
            │
            ├───inc
            │       footer.soft.php
            │       navbar.soft.php
            │
            ├───layouts
            │       app.soft.php
            │
            ├───sample
            │       view-sample.soft.php
            │
            └───users
                    view-users.soft.php
       </pre>
    </div>
</div>

<?php
    } else {
        define($layoutPath, true); 
    }

    $contentFile = 'views/home/learn-more.soft.php'; 
    include_once $layoutPath;
?>
