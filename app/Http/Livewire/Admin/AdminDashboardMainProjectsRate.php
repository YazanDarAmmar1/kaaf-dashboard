<?php

namespace App\Http\Livewire\Admin;

use App\Models\KY_View\V_GLCSH_TR;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminDashboardMainProjectsRate extends Component
{

    public $view_data;

    public function mount()
    {
        $mainProject = V_GLCSH_TR::whereIn('main_project', [21, 19, 230, 2, 6])->select(['main_project', 'main_project_dscr', DB::raw("SUM(AMT) as AMT")])->groupBy(['main_project', 'main_project_dscr'])->paginate(10);

        $book = $mainProject->where('main_project', 19)->first();
        $mainBranch = $mainProject->where('main_project', 230)->first();
        $branch = $mainProject->where('main_project', 21)->first();
        $zakatOutBahrain = $mainProject->where('main_project', 6)->first();
        $zakatInBahrain = $mainProject->where('main_project', 2)->first();

        $this->view_data = [
            'book' => $book,
            'mainBranch' => $mainBranch,
            'branch' => $branch,
            'zakatOutBahrain' => $zakatOutBahrain,
            'zakatInBahrain' => $zakatInBahrain,
        ];
    }

    public function render()
    {
        return view('livewire.admin.admin-dashboard-main-projects-rate', $this->view_data);
    }
}
