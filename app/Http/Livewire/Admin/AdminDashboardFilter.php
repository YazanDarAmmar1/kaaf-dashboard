<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;

class AdminDashboardFilter extends Component
{
    public $start_at;
    public $end_at;
    public $past_start_at;
    public $past_end_at;

    public function getListeners()
    {
        return [
            'changeDateStart',
            'changePastDateStart',
        ];
    }

    public function rules()
    {
        $rules = [];
        $rules['start_at'] = 'nullable';
        $rules['end_at'] = 'nullable';
        $rules['past_start_at'] = 'nullable';
        $rules['past_end_at'] = 'nullable';

        return $rules;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.admin.admin-dashboard-filter');
    }

    public function changeDateStart($dates)
    {

        $this->start_at = Carbon::parse($dates[0])->addDays(1);
        $this->end_at = Carbon::parse($dates[1]);

        $this->past_start_at = Carbon::parse($this->start_at)->subDays(355);
        $this->past_end_at = Carbon::parse($this->end_at)->subDays(355);


        $this->filterStart();
    }

    public function changePastDateStart($dates)
    {
        $this->past_start_at = Carbon::parse($dates[0])->toDateString();
        $this->past_end_at = Carbon::parse($dates[1])->toDateString();
        $this->filterStart();
    }


    public function filterStart()
    {
        $input = $this->validate();
        $this->emit('filterStart', $input);
    }
}
