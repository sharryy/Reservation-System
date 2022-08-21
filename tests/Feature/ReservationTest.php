<?php

namespace Tests\Feature;

use App\Http\Livewire\Reservation;
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;
use Livewire\Livewire;
use Tests\TestCase;

class ReservationTest extends TestCase
{
    /** @test */
    function it_checks_if_arrival_date_is_required()
    {
        Livewire::test(Reservation::class)
            ->set('arrival_date', null)
            ->call('save')
            ->assertHasErrors('arrival_date');
    }

    /** @test */
    function it_checks_if_arrival_date_is_less_than_today()
    {
        Livewire::test(Reservation::class)
            ->set('arrival_date', Carbon::now()->subDay(10))
            ->call('save')
            ->assertHasErrors('arrival_date');
    }

    /** @test */
    function it_checks_if_arrival_date_is_greater_than_today()
    {
        Livewire::test(Reservation::class)
            ->set('arrival_date', Carbon::now()->addDay(10))
            ->call('save')
            ->assertHasNoErrors('arrival_date');
    }

    /** @test */
    function it_tests_if_arrival_date_is_not_in_dd_mm_yyyy_format()
    {
        Livewire::test(Reservation::class)
            ->set('arrival_date', Carbon::now()->format('d f m Y'))
            ->assertHasErrors('arrival_date');
    }

    /** @test */
    function it_checks_if_arrival_date_contain_alphanumeric_characters()
    {
        Livewire::test(Reservation::class)
            ->set('arrival_date', "abcded/12/2020")
            ->assertHasErrors('arrival_date');
    }

    /** @test */
    function it_checks_if_departure_date_is_required()
    {
        Livewire::test(Reservation::class)
            ->set('departure_date', null)
            ->call('save')
            ->assertHasErrors('departure_date');
    }

    /** @test */
    function it_checks_if_departure_date_is_in_dd_mm_yyyy_format()
    {
        Livewire::test(Reservation::class)
            ->set('departure_date', "25-05-2022")
            ->assertHasErrors('departure_date');
    }

    /** @test */
    function it_checks_if_departure_date_is_not_in_dd_mm_yyyy_format()
    {
        Livewire::test(Reservation::class)
            ->set('departure_date', 'Sep 12 2020')
            ->assertHasErrors('departure_date');
    }

    /** @test */
    function it_checks_if_departure_date_contain_alphanumeric_characters()
    {
        $this->expectException(\Exception::class);

        Livewire::test(Reservation::class)
            ->set('departure_date', "date/12/2020")
            ->assertHasErrors('departure_date');
    }

    /** @test */
    function it_checks_if_arrival_date_is_before_departure_date()
    {
        Livewire::test(Reservation::class)
            ->set('arrival_date', Carbon::now()->format('d-m-Y'))
            ->set('departure_date', Carbon::now()->addDays(3)->format('d-m-Y'))
            ->assertHasNoErrors()
            ->set('departure_date', Carbon::now()->subDays(10)->format('d-m-Y'))
            ->assertHasErrors('departure_date');
    }

    /** @test */
    function if_checks_if_departure_date_is_within_seven_days_of_arrival_date()
    {
        Livewire::test(Reservation::class)
            ->set('arrival_date', Carbon::now()->format('d-m-Y'))
            ->set('departure_date', Carbon::now()->addDays(7)->format('d-m-Y'))
            ->assertHasNoErrors()
            ->set('departure_date', Carbon::now()->addDays(8)->format('d-m-Y'))
            ->assertHasErrors('departure_date');
    }

    /** @test */
    function it_checks_if_amount_is_required()
    {
        Livewire::test(Reservation::class)
            ->set('amount', null)
            ->call('save')
            ->assertHasErrors('amountdsfsd');
    }

    /** @test */
    function it_checks_if_amount_is_a_negative_number()
    {
        Livewire::test(Reservation::class)
            ->set('amount', -5)
            ->call('save')
            ->assertHasErrors('amount');
    }

    /** @test */
    function it_checks_if_amount_is_not_greater_than_25000_but_less_than_49999()
    {
        Livewire::test(Reservation::class)
            ->set('amount', 25000)
            ->assertHasNoErrors('amount')
            ->set('amount', 25001)
            ->assertHasErrors('amount');
    }

    /** @test */
    function it_checks_if_amount_is_less_than_50000()
    {
        Livewire::test(Reservation::class)
            ->set('amount', 50001)
            ->assertHasNoErrors('amount')
            ->set('amount', 49999)
            ->assertHasErrors('amount');
    }

    /** @test */
    function it_checks_if_amount_is_valid_between_1_and_25000()
    {
        Livewire::test(Reservation::class)
            ->set('amount', rand(1, 25000))
            ->assertHasNoErrors('amount');
    }

    /** @test */
    function it_checks_if_amount_is_greater_than_50000()
    {
        Livewire::test(Reservation::class)
            ->set('amount', 60000)
            ->assertHasNoErrors('amount');
    }

    /** @test */
    function it_checks_if_name_is_required()
    {
        Livewire::test(Reservation::class)
            ->set('name', null)
            ->call('save')
            ->assertHasErrors('name');
    }

    /** @test */
    function it_checks_if_name_is_not_in_title_case()
    {
        Livewire::test(Reservation::class)
            ->set('name', 'john doe')
            ->assertHasErrors('name_title');
    }

    /** @test */
    function it_checks_if_name_is_in_title_case()
    {
        Livewire::test(Reservation::class)
            ->set('name', 'John Doe')
            ->assertHasNoErrors('name_title');
    }

    /** @test */
    function it_checks_if_name_contains_non_alphabets()
    {
        Livewire::test(Reservation::class)
            ->set('name', 'John Doe@123(!')
            ->assertHasErrors('name_alpha');
    }

    /** @test */
    function it_checks_real_time_typing_of_name_input_in_title_case()
    {
        Livewire::test(Reservation::class)
            ->set('name', 'John Doe')
            ->assertHasNoErrors(['name_title','name_alpha'])
            ->set('name', 'John Doe some non title thing')
            ->assertHasErrors('name_title')
            ->set('name', 'John Doe some non title thing !!!!')
            ->assertHasErrors(['name_alpha','name_title']);
    }

    /** @test */
    function it_checks_if_birthday_is_required()
    {
        Livewire::test(Reservation::class)
            ->set('birthday', null)
            ->call('save')
            ->assertHasErrors('birthday');
    }

    /** @test */
    function it_checks_if_birthday_is_in_dd_mm_yyyy_format()
    {
        Livewire::test(Reservation::class)
            ->set('birthday', Carbon::now()->format('d-m-Y'))
            ->assertHasNoErrors('birthday');
    }

    /** @test */
    function it_checks_if_birthday_is_not_in_dd_mm_yyyy_format()
    {
        Livewire::test(Reservation::class)
            ->set('birthday', Carbon::now()->format('d f m Y'))
            ->assertHasErrors('birthday')
            ->set('birthday', "invalid!@#123")
            ->assertHasErrors('birthday');
    }


    /** @test */
    function if_checks_if_cnic_is_required()
    {
        Livewire::test(Reservation::class)
            ->set('cnic', null)
            ->call('save')
            ->assertHasErrors('cnic');
    }

    /** @test */
    function it_checks_if_cnic_is_less_than_13_digits()
    {
        Livewire::test(Reservation::class)
            ->set('cnic', '12345678901')
            ->call('save')
            ->assertHasErrors('cnic');
    }

    /** @test */
    function it_checks_if_cnic_is_more_than_13_digits()
    {
        Livewire::test(Reservation::class)
            ->set('cnic', '123456789012123')
            ->call('save')
            ->assertHasErrors('cnic');
    }

    /** @test */
    function it_checks_if_cnic_contains_alphabets()
    {
        Livewire::test(Reservation::class)
            ->set('cnic', 'abcdefghijklmnopqrstuvwxyz')
            ->call('save')
            ->assertHasErrors('cnic');
    }

    /** @test */
    function it_tests_if_cnic_has_special_characters()
    {
        Livewire::test(Reservation::class)
            ->set('cnic', '34202-7818-444')
            ->call('save')
            ->assertHasErrors('cnic');
    }

    /** @test */
    function it_checks_if_cnic_is_valid_with_thirteen_digits()
    {
        Livewire::test(Reservation::class)
            ->set('cnic', '3420278184447')
            ->call('save')
            ->assertHasNoErrors('cnic');
    }

    /** @test */
    function it_checks_if_cnic_picture_is_required()
    {
        Livewire::test(Reservation::class)
            ->set('cnic_picture', null)
            ->call('save')
            ->assertHasErrors('cnic_picture');
    }

    /** @test */
    function it_checks_if_cnic_picture_is_other_than_png_or_jpeg()
    {
        $file = UploadedFile::fake()->create('cnic.pdf');

        Livewire::test(Reservation::class)
            ->set('cnic_picture', $file)
            ->call('save')
            ->assertHasErrors('cnic_picture');
    }

    /** @test */
    function it_checks_if_cnic_picture_is_in_png_format()
    {
        $file = UploadedFile::fake()->image('cnic.png');

        Livewire::test(Reservation::class)
            ->set('cnic_picture', $file)
            ->call('save')
            ->assertHasNoErrors('cnic_picture');
    }

    /** @test */
    function it_checks_if_cnic_picture_is_in_jpeg_format()
    {
        $file = UploadedFile::fake()->image('cnic.jpeg');

        Livewire::test(Reservation::class)
            ->set('cnic_picture', $file)
            ->call('save')
            ->assertHasNoErrors('cnic_picture');
    }

    /** @test */
    function it_checks_rating_field_is_not_required()
    {
        Livewire::test(Reservation::class)
            ->set('rating', null)
            ->call('save')
            ->assertHasNoErrors('rating');
    }

    /** @test */
    function it_checks_rating_field_is_not_numeric()
    {
        Livewire::test(Reservation::class)
            ->set('rating', 'abc')
            ->call('save')
            ->assertHasErrors('rating');
    }

    /** @test */
    function it_checks_rating_field_is_not_less_than_1()
    {
        Livewire::test(Reservation::class)
            ->set('rating', 0)
            ->call('save')
            ->assertHasErrors('rating');
    }

    /** @test */
    function it_checks_rating_field_is_not_more_than_5()
    {
        Livewire::test(Reservation::class)
            ->set('rating', 6)
            ->call('save')
            ->assertHasErrors('rating');
    }

    /** @test */
    function it_checks_rating_field_is_valid_between_1_and_5()
    {
        Livewire::test(Reservation::class)
            ->set('rating', rand(1, 5))
            ->call('save')
            ->assertHasNoErrors('rating');
    }

    /** @test */
    function it_checks_room_type_is_studio_if_amount_is_less_than_10000()
    {
        Livewire::test(Reservation::class)
            ->set('amount', rand(1, 9999))
            ->call('save')
            ->assertSet('room_type', 'Studio');
    }

    /** @test */
    function it_checks_room_type_is_executive_if_amount_is_greater_than_10000_but_less_than_equal_to_25000()
    {
        Livewire::test(Reservation::class)
            ->set('amount', rand(10000, 25000))
            ->call('save')
            ->assertSet('room_type', 'Executive Suite');
    }

    /** @test */
    function it_checks_room_type_is_cabana_if_amount_is_greater_than_50000()
    {
        Livewire::test(Reservation::class)
            ->set('amount', rand(50000, 100000))
            ->call('save')
            ->assertSet('room_type', 'Cabana');
    }

    /** @test */
    function it_checks_no_room_is_given_for_amount_between_25001_and_49999()
    {
        Livewire::test(Reservation::class)
            ->set('amount', rand(25001, 49999))
            ->call('save')
            ->assertSet('room_type', null);
    }
}
