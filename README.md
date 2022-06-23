## Laravel Weather Package

A simple laravel package that consumes a third-party API to display current local times in a selection of different time zones consuming is https://worldtimeapi.org/

### Api used

WorldTimeAPI: https://worldtimeapi.org/  


## Installation

install laravel package using following command
```
$ composer create-project laravel/laravel <your-app-name>
```

You can install this package via composer:
```bash
$ composer require dfytech/worldtime
```

Install DfytechWeather configuration
```bash
$ php artisan worldtime:install
```

Publishing vendor
```bash
$ php artisan vendor:publish --tag=worldtime
```

## Use

Package is avilable at:
```
http://<domain>/worldtime 

```
