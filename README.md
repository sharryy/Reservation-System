# Laravel TDD Example

This application is a quick demo of Test-Driven Development (TDD) using **Laravel**, **Livewire** and **Bootstrap**. Application is developed using [Laravel](https://www.laravel.com) as backend framework. To bring little reactivity in front-end, [Livewire](https://www.laravel-livewire.com) is used. All test cases have been written using livewire since main component uses livewire.

## How to Use it.

When open in browser, you will see dashboard which contains **Reservation** button in navbar. Clicking this will open a form where you can add new reservation. Some fields are validated when the input field is out of `focus` to avoid too many requests. e.g amount and date fields are validated when you click outside them. Pressing reserve button will store the reservation in database which is temporarily sqlite and redirect to the page again.
Alternatively, you can click **Reserve Now** button on dashboard below slider to open the page. Tests can be run using `php artisan test` command.

### Installation

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


