<div>
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4 col-xm-12">
            <div class="card overflow-hidden sales-card bg-primary-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-12 text-white"> الإيرادات الكُلْيَة خلال رمضان 23</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white" style="direction: ltr">
                                    {{number_format($projects[0]->sum('AMT'),3,'. ', ', ')}}
                                    <span class="tx-12">دب</span>
                                </h4>
                                <p class="mb-0 tx-12 text-white op-7">رمضان 2023</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-xm-12">
            <div class="card overflow-hidden sales-card bg-danger-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-12 text-white">الإيرادات الكُلْيَة خلال رمضان 22</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white" style="direction: ltr">
                                    {{number_format($projects[1]->sum('AMT'),3,'. ', ', ')}}
                                    <span class="tx-12">دب</span>
                                </h4>
                                <p class="mb-0 tx-12 text-white op-7">رمضان 2022</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-xm-12">
            <div class="card overflow-hidden sales-card bg-warning-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-12 text-white">نسبة النمو/الانخفاض</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white" style="direction: ltr">
                                    {{number_format(((($projects[0]->sum('AMT') - $projects[1]->sum('AMT'))/$projects[1]->sum('AMT'))*100),2,'. ',', ')}}
                                    <span class="tx-12">%</span>
                                </h4>
                                <p class="mb-0 tx-12 text-white op-7">رمضان 2023-2022</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
