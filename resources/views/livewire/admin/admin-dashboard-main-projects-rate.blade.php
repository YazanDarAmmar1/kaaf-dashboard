<div>
    @push('css')
        <!-- Internal Morris Css-->
        <link href="{{URL::asset('assets/plugins/morris.js/morris.css')}}" rel="stylesheet">
    @endpush
    <div class="card">

        <div class="card-body">
            <div class="main-content-label mg-b-5">
                المشروعات الرئيسية
            </div>
            <p class="mg-b-20">نسبة التحصيل حسب كل مشروع رئيس.</p>
            <div class="table-responsive">
                <div id="echart1" class="ht-300"></div>
            </div>
        </div>
    </div>
</div>
@push('js')
    <!--Internal  Datepicker js -->
    <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!-- Internal Select2 js-->
    <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <!--Internal Echart Plugin -->
    <script src="{{URL::asset('assets/plugins/echart/echart.js')}}"></script>
    <!-- Internal Chart flot js -->
    <script>
        var data = @json($mainProject);
        var dataName = [];
        var dataCost = [];
        var dataAmount = [];
        for (var i = 0; i < data.length; i++) {
            dataName.push(data[i]['main_project_dscr']);
            dataCost.push(data[i]['MAIN_PRJCT_COST']);
            dataAmount.push(data[i]['AMT']);
        }

        $(function (e) {
            'use strict'
            /*----Echart2----*/
            var chartdata = [{
                name: 'قيمة التسويق',
                type: 'bar',
                barMaxWidth: 20,
                data: dataCost
            }, {
                name: 'المحصل',
                type: 'bar',
                barMaxWidth: 20,
                data: dataAmount
            }];
            var chart = document.getElementById('echart1');
            var barChart = echarts.init(chart);
            var option = {
                valueAxis: {
                    axisLine: {
                        lineStyle: {
                            color: 'rgba(171, 167, 167,0.2)'
                        }
                    },
                    splitArea: {
                        show: true,
                        areaStyle: {
                            color: ['rgba(171, 167, 167,0.2)']
                        }
                    },
                    splitLine: {
                        lineStyle: {
                            color: ['rgba(171, 167, 167,0.2)']
                        }
                    }
                },
                grid: {
                    top: '6',
                    right: '0',
                    bottom: '17',
                    left: '60',
                },
                xAxis: {
                    data: dataName,
                    axisLine: {
                        lineStyle: {
                            color: 'rgba(171, 167, 167,0.2)'
                        }
                    },
                    splitLine: {
                        lineStyle: {
                            color: 'rgba(171, 167, 167,0.2)'
                        }
                    },
                    axisLabel: {
                        fontSize: 10,
                        color: '#5f6d7a'
                    }
                },
                tooltip: {
                    trigger: 'axis',
                    position: ['35%', '32%'],
                },
                yAxis: {
                    splitLine: {
                        lineStyle: {
                            color: 'rgba(171, 167, 167,0.2)'
                        }
                    },
                    axisLine: {
                        lineStyle: {
                            color: 'rgba(171, 167, 167,0.2)'
                        }
                    },
                    axisLabel: {
                        fontSize: 10,
                        color: '#5f6d7a'
                    }
                },
                series: chartdata,
                color: ['#285cf7', '#f7557a']
            };
            barChart.setOption(option);
        });
    </script>
@endpush
