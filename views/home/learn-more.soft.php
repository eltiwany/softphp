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
        │       params.php
        │       
        ├───public
        │   │   sample-data.php
        │   │   
        │   ├───css
        │   │       bootstrap.min.css
        │   │       
        │   └───js
        │           bootstrap.min.js
        │           jquery.slim.min.js
        │           popper.min.js
        │
        ├───routes
        │       api.php
        │       web.php
        │       
        ├───vendor
        │   │   autoload.php
        │   │   
        │   └───composer
        │           autoload_classmap.php
        │           autoload_namespaces.php
        │           autoload_psr4.php
        │           autoload_real.php
        │           autoload_static.php
        │           ClassLoader.php
        │           LICENSE
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

    $contentFile = __FILE__; 
    include_once $layoutPath;
?>
