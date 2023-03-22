<div>
        <div class="card card-table-two">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mb-1">أحدث البنود الرئيسية</h4>
                <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div>
            <span class="tx-12 tx-muted mb-3 ">هذه هي أحدث البنود الرئيسية تحصيلاً حتى اليوم.</span>
            <div class="table-responsive country-table">
                <table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
                    <thead>
                    <tr>
                        <th class="wd-lg-25p">رقم البند</th>
                        <th class="wd-lg-25p tx-right">اسم البند</th>
                        <th class="wd-lg-25p tx-right">المحصل</th>
                    </tr>
                    </thead>
                    <tbody wire:loading.remove>
                    @forelse($sum_name as $name)
                        <tr>
                            <td>{{$name->SUM_CD}}</td>
                            <td class="tx-right tx-medium tx-inverse">{{$name->sum_nm}}</td>
                            <td class="tx-right tx-medium tx-danger">{{$name->AMT}} دب </td>
                        </tr>
                    @empty
                    @endforelse
                    </tbody>
                </table>
                {{$sum_name->links()}}
            </div>
        </div>

</div>
