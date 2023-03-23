<div>
    @push('css')
        <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
        <style>
            /* Absolute Center Spinner */
            .loading {
                position: fixed;
                z-index: 999;
                height: 2em;
                width: 2em;
                overflow: visible;
                margin: auto;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
            }

            /* Transparent Overlay */
            .loading:before {
                content: '';
                display: block;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgb(72, 31, 102, 0.2);
            }

            /* :not(:required) hides these rules from IE9 and below */
            .loading:not(:required) {
                /* hide "loading..." text */
                font: 0/0 a;
                color: transparent;
                text-shadow: none;
                background-color: transparent;
                border: 0;
            }

            .loading:not(:required):after {
                content: '';
                display: block;
                font-size: 10px;
                width: 1em;
                height: 1em;
                margin-top: -0.5em;
                -webkit-animation: spinner 1500ms infinite linear;
                -moz-animation: spinner 1500ms infinite linear;
                -ms-animation: spinner 1500ms infinite linear;
                -o-animation: spinner 1500ms infinite linear;
                animation: spinner 1500ms infinite linear;
                border-radius: 0.5em;
                -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
                box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
            }

            /* Animation */

            @-webkit-keyframes spinner {
                0% {
                    -webkit-transform: rotate(0deg);
                    -moz-transform: rotate(0deg);
                    -ms-transform: rotate(0deg);
                    -o-transform: rotate(0deg);
                    transform: rotate(0deg);
                }
                100% {
                    -webkit-transform: rotate(360deg);
                    -moz-transform: rotate(360deg);
                    -ms-transform: rotate(360deg);
                    -o-transform: rotate(360deg);
                    transform: rotate(360deg);
                }
            }

            @-moz-keyframes spinner {
                0% {
                    -webkit-transform: rotate(0deg);
                    -moz-transform: rotate(0deg);
                    -ms-transform: rotate(0deg);
                    -o-transform: rotate(0deg);
                    transform: rotate(0deg);
                }
                100% {
                    -webkit-transform: rotate(360deg);
                    -moz-transform: rotate(360deg);
                    -ms-transform: rotate(360deg);
                    -o-transform: rotate(360deg);
                    transform: rotate(360deg);
                }
            }

            @-o-keyframes spinner {
                0% {
                    -webkit-transform: rotate(0deg);
                    -moz-transform: rotate(0deg);
                    -ms-transform: rotate(0deg);
                    -o-transform: rotate(0deg);
                    transform: rotate(0deg);
                }
                100% {
                    -webkit-transform: rotate(360deg);
                    -moz-transform: rotate(360deg);
                    -ms-transform: rotate(360deg);
                    -o-transform: rotate(360deg);
                    transform: rotate(360deg);
                }
            }

            @keyframes spinner {
                0% {
                    -webkit-transform: rotate(0deg);
                    -moz-transform: rotate(0deg);
                    -ms-transform: rotate(0deg);
                    -o-transform: rotate(0deg);
                    transform: rotate(0deg);
                }
                100% {
                    -webkit-transform: rotate(360deg);
                    -moz-transform: rotate(360deg);
                    -ms-transform: rotate(360deg);
                    -o-transform: rotate(360deg);
                    transform: rotate(360deg);
                }
            }
        </style>
    @endpush
    <div wire:loading>
        <div class="loading">Loading&#8230;</div>
    </div>
    <div class="card card-table-two">
        <h4 class="card-title mb-2">أحدث المشروعات</h4>

        <div class="mb-2">
            <label class="label">اسم المشروع الرئيسي</label>
            <select class="form-control" wire:model="selectMainProject" style="width: 100%;">
                <option label="الرجاء تحديد">
                </option>
                @foreach($projectMainCategories as $mainProject)
                    <option value="{{$mainProject->main_project}}">{{$mainProject->main_project_dscr}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-2">
            <label class="label">اسم المشروع</label>
            <select class="form-control border-primary select2" style="width: 100%" id="select2" multiple="multiple">
                <option label="تحديد"></option>
                @forelse($projectCategories as $cat)
                    <option value="{{$cat->SPD_ID}}">{{$cat->prj_nm}}</option>
                @empty
                @endforelse
            </select>
        </div>


        <div class="table-responsive country-table">
            <table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
                <thead>
                <tr>
                    <th class="wd-lg-25p">رقم المشروع</th>
                    <th class="wd-lg-25p tx-right">اسم المشروع</th>
                    <th class="wd-lg-25p tx-right">المشروع الرئيسي</th>
                    <th class="wd-lg-25p tx-right">المحصل</th>
                </tr>
                </thead>
                <tbody>
                @forelse($projects as $project)
                    <tr>
                        <td>{{$project->SPD_ID}}</td>
                        <td class="tx-right tx-medium tx-inverse">{{$project->prj_nm}}</td>
                        <td class="tx-right tx-medium tx-inverse">{{$project->main_project_dscr}}</td>
                        <td class="tx-right tx-medium tx-danger"
                            style="direction: ltr">{{number_format($project->AMT,'3','. ',', ')}} دب
                        </td>
                    </tr>
                @empty
                @endforelse
                </tbody>
            </table>
            {{$projects->links()}}
        </div>
    </div>

</div>
@push('js')
    <!--Internal  Datepicker js -->
    <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
    <!-- Internal Select2.min js -->
    <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <!--Internal Ion.rangeSlider.min js -->
    <!--Internal  jquery-simple-datetimepicker js -->
    <script src="{{URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
    <!-- Ionicons js -->
    <script src="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
    <!--Internal  pickerjs js -->
    <script src="{{URL::asset('assets/plugins/pickerjs/picker.min.js')}}"></script>
    <!-- Internal form-elements js -->
    <script src="{{URL::asset('assets/js/form-elements.js')}}"></script>

    <script>
        document.addEventListener('livewire:load', function (event) {
            window.Livewire.hook('message.processed', () => {
                $('#select2').select2();
                $('#select2').on('change', function (e) {
                    let elementName = $(this).attr('id');
                    var data = $(this).select2("val");
                @this.set(elementName, data);
                    livewire.emit('selectedProject', data)
                });
            });
        });
    </script>
@endpush
