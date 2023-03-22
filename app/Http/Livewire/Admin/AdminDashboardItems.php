<?php

namespace App\Http\Livewire\Admin;

use App\Models\KY_View\V_GLCSH_TR;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class AdminDashboardItems extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $input;

    public function getListeners()
    {
        return [
            'filterStart' => 'filterProject',
        ];
    }


    public function render()
    {
        $sum_name = $this->getProject();
        $sum_name = $sum_name->select(['SUM_CD', 'sum_nm', DB::raw("SUM(AMT) as AMT")])->groupBy(['SUM_CD', 'sum_nm'])->paginate(10);
        $view_data = [
            'sum_name' => $sum_name,
        ];
        return view('livewire.admin.admin-dashboard-items', $view_data);
    }

    public function getProject()
    {
        $main_project = V_GLCSH_TR::whereYear('TR_DT', 2023);
        $item = $this->input;
        if (isset($item['start_at'])) {
            $start_at = Carbon::parse($item['start_at']);
            $main_project = $main_project->where('TR_DT', '>=', $start_at);
        }
        if (isset($item['end_at'])) {
            $end_at = Carbon::parse($item['end_at']);
            $main_project = $main_project->where('TR_DT', '<=', $end_at);
        }

        return $main_project;
    }

    public function filterProject($options)
    {
        $this->input = $options;
    }
}
