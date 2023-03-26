<div>
    @push('css')
        <style>
            #card-table {
                transition: 0.8s;
                transform: translateY(-150px);
                opacity: 1;
            }


            #card-table.shown {
                transform: translateY(0px);
                pointer-events: all;
            }

            #divFilter {
                color: #361136;
                transition: 0.8s;
                transform: translateY(-1000px);
                opacity: 0;
            }

            #table-project {
                transition: 0.8s;
                transform: translateX(-1000px);
                opacity: 0;
                display: none;
            }

            #table-project.shown {
                transition: 0.8s;
                transform: translateX(0px) !important;
                opacity: 1;
                display: block;
            }

            #divFilter.shown {
                transform: translateX(0);
                opacity: 1;
                pointer-events: all;
            }


            @media only screen and (max-width: 600px) {
                #card-table {
                    transition: 0.8s;
                    transform: translateY(-1000px);
                    opacity: 1;
                }
            }

            @media only screen and (max-width: 1000px) {
                #card-table {
                    transition: 0.8s;
                    transform: translateY(-140px);
                    opacity: 1;
                }
            }
        </style>

    @endpush

    <div>
        <div class="card breadcrumb-header">
            <div class="card-header row">
                <div class="col-lg-10 col-10 mt-1">
                    <h2 class="tx-24">لوحـة التحكم لمشروعات رمضان 2023</h2>
                </div>
                <div class="col-lg-2 col-2 d-flex flex-row justify-content-end">
                    <div>
                        <button id="search-btn" class="btn btn-primary input-search">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

            </div>

        </div>
        @livewire('admin.admin-dashboard-filter')
        <!-- row -->
        <div id="card-table">
            @livewire('admin.admin-dashboard-income-counter')
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 col-12">
                    @livewire('admin.admin-dashboard-main-projects')
                </div>
{{--                <div class="col-md-12 col-lg-12 col-xl-12 col-12">--}}
{{--                    @livewire('admin.admin-dashboard-main-projects-rate')--}}
{{--                </div>--}}

                <div class="col-md-12 col-lg-12 col-xl-12 col-12">
                    @livewire('admin.admin-dashboard-morris-chart')
                </div>
            </div>
            <div class="d-flex flex-warp justify-content-center mb-3">
                <button id="displayBtn" type="button" class="btn  btn-primary rounded-pill">
                    المزيد من التفاصيل
                </button>
            </div>

            <div class="row" id="table-project">
                <div class="col-md-12 col-lg-12 col-xl-12 col-12 ">
                    @livewire('admin.admin-dashboard-projects')
                </div>
                {{--            <div class="col-md-6 col-lg-6 col-xl-6 col-12">--}}
                {{--                @livewire('admin.admin-dashboard-items')--}}
                {{--            </div>--}}
            </div>

        </div>

    </div>
</div>

@push('js')
    <script>
        $btn = document.getElementById('search-btn');
        $div = document.getElementById('divFilter')
        $table = document.getElementById('card-table')
        $($btn).click(function () {
            $div.classList.toggle("shown");
            $table.classList.toggle("shown");
        });
    </script>


    <!-- Internal Flot js -->
    <script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>

    <script>
        var div2 = document.getElementById("table-project");
        $('#displayBtn').on('click', () => {
            div2.classList.toggle("shown");
            $("html, body").animate({scrollTop: document.body.scrollHeight}, "slow");
        })
    </script>

@endpush
