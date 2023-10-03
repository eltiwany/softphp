# SoftPHP
    A minified MVC architecture which uses plain PHP to separate models, views and controllers to follow best design and development practices

# Project Sturcture
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
