<?php

namespace App\Http\Livewire\Admin;

use App\Models\KY_View\V_GLCSH_TR;
use Livewire\Component;

class AdminDashboardMorrisChart extends Component
{
    public function render()
    {
        $amount = new V_GLCSH_TR();
        return view('livewire.admin.admin-dashboard-morris-chart', [
            'amount' => $amount,
        ]);
    }
}
