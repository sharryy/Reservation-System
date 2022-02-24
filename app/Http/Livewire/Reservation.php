<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Str;

class Reservation extends Component
{
    use WithFileUploads;

    public $arrival_date = '';
    public $departure_date = '';
    public $amount = '';
    public $name = '';
    public $birthday = '';
    public $cnic = '';
    public $cnic_picture = '';
    public $rating = '';


    public $show_amount_field = false;
    public $show_details_field = false;
    public $show_pic_field = false;
    public $show_rating_field = false;

    public $room_type = '';

    protected $rules = [
        'arrival_date' => 'required|date',
        'departure_date' => 'required|date|after_or_equal:arrival_date',
        'amount' => 'required|numeric|min:0',
        'name' => 'required|string',
        'birthday' => 'required|date',
        'cnic' => 'required|string|min:13|max:13',
        'cnic_picture' => 'required|image|mimes:jpeg,png',
        'rating' => 'numeric|in:1,2,3,4,5',
    ];

    protected $validationAttributes = [
        'arrival_date' => 'Arrival Date',
        'departure_date' => 'Departure Date',
        'amount' => 'Amount',
        'name' => 'Name',
        'birthday' => 'Birthday',
        'cnic' => 'CNIC',
        'cnic_picture' => 'CNIC Picture',
    ];

    public function updatedArrivalDate($value)
    {
        $this->validateDateField($value, $reset_key = 'arrival_date');
    }

    public function updatedName($value)
    {
        $validated = Str::title($value);
        if ($validated !== $value) $this->addError('name', 'Name must be in title case.');
        else $this->resetErrorBag('name');
    }

    public function updatedCnic()
    {
        $this->validateOnly('cnic');
        $this->show_pic_field = true;
    }

    public function updatedCnicPicture()
    {
        $this->show_rating_field = true;
        if ($this->validateOnly('cnic_picture')) {
            $this->resetErrorBag('cnic_picture');
        }
    }

    public function updatedRating()
    {
        $this->validateOnly('rating');
    }

    public function render()
    {
        return view('livewire.reservation');
    }

    public function updatedDepartureDate($value)
    {
        if ($this->validateDateField($value, $reset_key = 'departure_date')) {
            $this->validateArrivalAndDepartureDate($value);
        }
    }

    public function updatedBirthday($value)
    {
        $this->validateDateField($value, $reset_key = 'birthday');
    }

    public function updatedAmount($value)
    {
        $this->show_details_field = true;
        if ($value < 10000) $this->room_type = 'Studio';
        else if ($value <= 25000) $this->room_type = 'Executive Suite';
        else if ($value >= 50000) $this->room_type = 'Cabana';
        else $this->addError('amount', "Amount mustn't be between 25000 and 50000.");
    }

    public function save()
    {
        $this->validate();

        $cnic_path = $this->cnic_picture->storeAs('cnic_pictures', 'cnic.jpg');

        $response = \App\Models\Reservation::create([
            'arrival_date' => $this->arrival_date,
            'departure_date' => $this->departure_date,
            'total_amount' => $this->amount,
            'name' => $this->name,
            'birthday' => $this->birthday,
            'cnic' => $this->cnic,
            'room_type' => $this->room_type,
            'cnic_image_path' => $cnic_path,
            'rating' => $this->rating
        ]);

        if ($response) {
            $this->reset('arrival_date', 'departure_date', 'amount', 'name', 'birthday', 'cnic', 'cnic_picture');
            $this->redirect('/reservations');
        }

        dd($response->toArray());
    }

    public function validateArrivalAndDepartureDate($value)
    {
        $difference = Carbon::parse($value)->diffInDays(Carbon::parse($this->arrival_date));
        if ($difference > 7) {
            $this->addError('departure_date', 'Departure date must be within 7 days of arrival date.');
        } else {
            $this->show_amount_field = true;
            $this->resetErrorBag('departure_date');
        }
    }

    public function validateDateField($value, $reset_key = '')
    {
        try {
            $corrected_date = Carbon::parse($value)->format('m/d/Y');
            $this->resetErrorBag($reset_key);
            if ($corrected_date != $value) {
                $this->addError($reset_key, 'Invalid date format. Use MM/DD/YYYY');
            } else {
                return true;
            }
        } catch (\Exception $e) {
            $this->addError($reset_key, 'Please Dont write shit.');
        }
    }
}
