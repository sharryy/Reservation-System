# Laravel TDD Example

This application is a quick demo of Test-Driven Development (TDD) using Laravel, Livewire and Bootstrap. 


## Installation

- Clone the repo and `cd` into it or alternatively download the zip file and `cd` into it
- Run `composer install` to install required dependencies
- Rename or copy `.env.example` file to `.env`
- Run `php artisan key:generate`to set application key.
- Change `DB_CONNECTION` to `sqlite` in `.env`
- Run `touch database/database.sqlite` to generate local sqlite file.
- Run `php artisan serve` to start Laravel Development Server.
- Visit `http://127.0.0.1:8000/` in your browser

To run all the tests, either run `php artisan serve` or `vendor/bin/phpunit` inside the directory.


#### The design is based upon following theme from [Probootstrap](https://probootstrap.com/atlantis-hotel-free-html5-template-using-bootstrap-framework).


