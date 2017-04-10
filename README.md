[![Latest Stable Version](https://poser.pugx.org/yiisoft/yii2-app-advanced/v/stable.png)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://poser.pugx.org/yiisoft/yii2-app-advanced/downloads.png)](https://packagist.org/packages/yiisoft/yii2-app-advanced)


DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```

Online Site
-------------------
Online Site deployed on heroku
<br>
<a href='https://opensooq.herokuapp.com/backend/web/index.php'>CAN SHOW FROM HERE</a>

please login with this users
<strong>For Admin: ( To Show Duplication menue)</strong>
<ul>
<li>username:saeedh password:123456</li>
<li>username:admin  password:admin123</li>
</ul>
<strong>For normal user:</strong>
<ul>
<li>username:saeedh1 password:123456</li>
</ul>

INSTRUCTIONS
-------------------
<ol>
<li>Clone this repo or download it</li>
<li>Add the folder to localhost</li>
<li>In this repo you can find database in db/smalltest.sql</li>
<li>Run script to create database with data</li>
<li>
You can add new user by click on sign up or sign in with this users (saeedh with password 123456) OR (admin with password admin123)
</li>
<li>
You can change any user to Admin by change user table in data base and add IsAdmin field to true

</li>
</ol>
