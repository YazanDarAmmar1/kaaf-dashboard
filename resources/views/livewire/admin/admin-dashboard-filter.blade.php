<div>
    @push('css')
        <!--Internal  Datetimepicker-slider css -->
        <link href="{{URL::asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}"
              rel="stylesheet">
        <link href="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}"
              rel="stylesheet">
        <link href="{{URL::asset('assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">
    @endpush
    <div class="card bg-primary-light" id="divFilter" wire:ignore>
        <div class="card-body row">
            <div class="form-group col-lg-12">
                <label class="text-black">رمضان 2023</label>
                <div id="reportrange"
                     style="background: #fff; cursor: pointer; padding: 8px 10px; border: 1px solid #e1e5ef; width: 100%">
                    <i class="fa fa-calendar"></i>&nbsp;
                    <span></span> <i class="fa fa-caret-down"></i>
                </div>
            </div>

            {{--            <div class="form-group col-lg-6">--}}
            {{--                <label class="text-black">رمضان 2022</label>--}}
            {{--                <input type="text" id="datepicker" class="form-control">--}}
            {{--            </div>--}}

        </div>
    </div>
</div>
@push('js')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <script>
        $('#datepicker').daterangepicker();

        $(function () {


            $('#datepicker').daterangepicker({

                maxDate: '05/11/2022',
                minDate: '03/16/2022',

                startDate: '03/16/2022',
                endDate: '05/11/2022',


                opens: 'right',
            }, function (start, end, label) {
                $('#datepicker span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                livewire.emit('changePastDateStart', [start, end]);
            });
        });

        $(function () {


            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                livewire.emit('changeDateStart', [start, end]);
            }

            $('#reportrange').daterangepicker({

                maxDate: '05/02/2023',
                minDate: '03/05/2023',

                endDate: '05/02/2023',
                startDate: '03/05/2023',

                ranges: {
                    'اليوم': [moment(), moment()],
                    'أمس': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'قبل أسبوع': [moment().subtract(7, 'days'), moment()],
                    'تفريغ': [moment('03/05/2023'), moment('05/02/2023')],

                }
            }, cb);

            cb(startDate, endDate);

        });
    </script>
    </script>
@endpush
