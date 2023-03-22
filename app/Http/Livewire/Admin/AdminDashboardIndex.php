<?php

namespace App\Http\Livewire\Admin;

use App\Models\KY_View\V_GLCSH_TR;
use App\Models\KY_View\V_Project;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class AdminDashboardIndex extends Component
{
    public $select2;

    public function render()
    {
        return view('livewire.admin.admin-dashboard-index')->layout('layouts.master');
    }

}
