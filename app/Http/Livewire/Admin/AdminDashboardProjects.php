<?php

namespace App\Http\Livewire\Admin;

use App\Models\KY_View\V_GLCSH_TR;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class AdminDashboardProjects extends Component
{
    public $search;
    public $input;
    public $select2;
    public $selectMainProject;

    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public function getListeners()
    {
        return [
            'filterStart' => 'filterProject',
            'selectedProject',
        ];
    }

    public function render()
    {
        $projectData = $this->getProject();

        $projectMainCategories = $projectData->select(['main_project', 'main_project_dscr'])->distinct()->get();
        $allProject = $projectData->select(['SPD_ID', 'prj_nm', 'main_project'])->distinct()->get();
        $project = $projectData->select(['SPD_ID', 'prj_nm', 'main_project', 'main_project_dscr', 'MRKT_COST', DB::raw("SUM(AMT) as AMT")])->groupBy(['SPD_ID', 'prj_nm', 'main_project', 'main_project_dscr', 'MRKT_COST']);

        if ($this->selectMainProject) {
            $project = $project->where('main_project', $this->selectMainProject);
            $allProject = $allProject->where('main_project', $this->selectMainProject);

        }
        if ($this->select2) {
            $project = $project->whereIn('SPD_ID', $this->select2);
        }

        $view_data = [
            'projectCategories' => $allProject,
            'projectMainCategories' => $projectMainCategories,
            'projects' => $project->paginate(8),
        ];

        return view('livewire.admin.admin-dashboard-projects', $view_data);
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

    public function selectedProject($data)
    {
        $this->select2 = $data;
    }
}
