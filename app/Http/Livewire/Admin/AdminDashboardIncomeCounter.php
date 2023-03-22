<?php

namespace App\Http\Livewire\Admin;

use App\Models\KY_View\V_GLCSH_TR;
use Carbon\Carbon;
use Livewire\Component;

class AdminDashboardIncomeCounter extends Component
{
    public $input;

    public function getListeners()
    {
        return [
            'filterStart' => 'filterProject',
        ];
    }

    public function render()
    {
        $projects = $this->getCountProject();

        $view_data = [
            'projects' => $projects,
        ];

        return view('livewire.admin.admin-dashboard-income-counter', $view_data);
    }

    public function getCountProject()
    {
        $project = V_GLCSH_TR::where('TR_DT', '>=', "2023-03-05")->where('TR_DT', '<=', "2023-05-02");
        $project_past = V_GLCSH_TR::where('TR_DT', '>=', "2022-03-15")->where('TR_DT', '<=', "2022-05-11"); // GetMainCodeForLastRamadan

        $item = $this->input;

        if (isset($item['start_at']) || isset($item['past_start_at'])) {
            $start_at = Carbon::parse($item['start_at'])->toDateString();
            $past_start_at = Carbon::parse($item['past_start_at'])->toDateString();

            $project = $project->where('TR_DT', '>=', $start_at);
            $project_past = $project_past->where('TR_DT', '>=', $past_start_at);
        }
        if (isset($item['end_at']) || isset($item['past_end_at'])) {
            $end_at = Carbon::parse($item['end_at'])->toDateString();
            $past_end_at = Carbon::parse($item['past_end_at'])->toDateString();

            $project = $project->where('TR_DT', '<=', $end_at);
            $project_past = $project_past->where('TR_DT', '<=', $past_end_at);

        }

        return [$project, $project_past];
    }

    public function filterProject($options)
    {
        $this->input = $options;
    }
}
