<?php

namespace App\Http\Livewire\Admin;

use App\Models\KY_View\V_GLCSH_TR;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class AdminDashboardMainProjects extends Component
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
        $project = $this->getProject();
        $project = $project->select(['main_project', 'main_project_dscr', 'MAIN_PRJCT_COST', DB::raw("SUM(AMT) as AMT")])->groupBy(['main_project', 'main_project_dscr', 'MAIN_PRJCT_COST']);

        $view_data = [
            'mainProject' => $project->paginate(3),
        ];

        return view('livewire.admin.admin-dashboard-main-projects', $view_data);
    }

    public function getProject()
    {
        $main_project = V_GLCSH_TR::whereIn('main_project', [21, 19, 230, 2, 6, 233, 18, 25, 26]);
        $item = $this->input;

        if (isset($item['start_at'])) {
            $start_at = Carbon::parse($item['start_at'])->toDateString();
            $main_project = $main_project->where('TR_DT', '>=', $start_at);
        }
        if (isset($item['end_at'])) {
            $end_at = Carbon::parse($item['end_at'])->toDateString();
            $main_project = $main_project->where('TR_DT', '<=', $end_at);
        }

        return $main_project;
    }

    public function filterProject($options)
    {
        $this->input = $options;
    }

}
