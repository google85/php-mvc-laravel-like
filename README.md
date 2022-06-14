<p align="center">
    <img src="https://img.shields.io/github/v/tag/google85/php-mvc-laravel-like?label=latest&style=plastic" alt="last version on GitHub"/>&nbsp;<img src="https://img.shields.io/github/last-commit/google85/php-mvc-laravel-like/main?label=last%20update&style=plastic" alt="Last commit"/>
</p>

# PHP MVC 'Laravel like' basic framework
### using PHP

### 
- based on **[Laracasts tutorial](https://laracasts.com/series/php-for-beginners/)**
- **[temporary website](https://florinboy.com/website/mvc/)**

### Features:
- MVC framework with customized routes
- support for folder prefix of path (http://URL/custom-folder/route ) [change your folder from the optional section of config.php file]

### steps:
- clone the repository
```
git clone https://github.com/google85/php-mvc-laravel-like
```
- create a config based on the sample provided
```
cd src/
cp config.sample.php config.php
```
- update composer dependencies and create the autoload classes
```
composer install
```
- add your own routes
```
vi routes.php
```
- add your own controllers
```
cd controllers/
touch MyController.php
```
- add your own views
```
cd views/
touch myown.view.php
```

### That's it!



## License

