<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

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

    public $show_amount_field = false;
    public $show_details_field = false;
    public $show_pic_field = false;

    protected $room_type = '';

    protected $rules = [
        'arrival_date' => 'required|date',
        'departure_date' => 'required|date|after_or_equal:arrival_date',
        'amount' => 'required|numeric',
        'name' => 'required|string',
        'birthday' => 'required|date',
        'cnic' => 'required|string',
        'cnic_picture' => 'required|image|mimes:jpeg,png',
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

    public function mount()
    {
        $this->arrival_date = Carbon::today()->format('Y-m-d');
    }

    public function render()
    {
        return view('livewire.reservation');
    }

    public function updatedDepartureDate($value)
    {
        $difference = Carbon::parse($value)->diffInDays(Carbon::parse($this->arrival_date));
        if ($difference > 7) {
            $this->addError('departure_date', 'Departure date must be within 7 days of arrival date.');
        } else {
            $this->show_amount_field = true;
            $this->resetErrorBag();
        }
    }


    public
    function updatedAmount($value)
    {
        $this->show_details_field = true;
//        if ($value < 10000) {
//            $this->room_type = 'Studio';
//        } else if ($value <= 25000) {
//            $this->room_type = 'Executive Suite';
//        } else if ($value > 50000) {
//            $this->room_type = 'Cabana';
//        } else {
//            $this->room_type = 'Unknown';
//        }
    }

    public
    function updatedCnic()
    {
        $this->show_pic_field = true;
    }

    public
    function save()
    {
        dd($this->arrival_date, $this->departure_date, $this->amount, $this->name, $this->birthday, $this->cnic, $this->cnic_picture);
    }
}
