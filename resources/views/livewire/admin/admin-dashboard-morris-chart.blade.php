<div>
    <div class="card overflow-hidden">
        <div class="table-responsive">
            <div class="card-body">
                <div class="main-content-label mg-b-5">
                    التحصيل اليومي الرمضاني
                </div>
                <p class="mg-b-20">التحصيل اليومي الرمضاني 2023-2022.</p>
                <div class="d-flex flex-wrap justify-content-center align-items-center">
                    <div class="div-color mr-1" style="width: 10px;height: 10px;background-color: red"></div>
                    <p class="mr-1" style="font-size: 12px;color: red;margin-top: 1.4%">رمضان 2023</p>

                    <div class="div-color mr-1" style="width: 10px;height: 10px;background-color: blue"></div>
                    <p class="mr-1" style="font-size: 12px;color: blue;margin-top: 1.4%">رمضان 2022</p>
                </div>
                <div class="chartjs-wrapper-demo">
                    <canvas id="chartLine1"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
    <!--Internal  Chart.bundle js -->
    <script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
    <!--Internal Chartjs js -->
    <script>
        /* LINE CHART */
        var ctx8 = document.getElementById('chartLine1');
        new Chart(ctx8, {
            type: 'line',
            data: {
                labels: ['05/03', '06/03', '07/03', '08/03', '09/03', '10/03', '11/03', '12/03', '13/03', '14/03', '15/03', '16/03', '17/03', '18/03', '19/03', '20/03', '21/03', '22/03', '23/03', '24/03', '25/03', '26/03', '27/03', '28/03', '29/03', '30/03', '01/04', '02/04', '03/04', '04/04', '05/04', '06/04', '07/04', '08/04', '09/04', '10/04', '11/04', '12/04', '13/04', '14/04', '15/04', '16/04', '17/04', '18/04', '19/04', '20/04', '21/04', '22/04', '23/04', '24/04', '25/04', '26/04', '27/04', '28/04', '29/04', '30/04', '01/05', '02/05'],
                datasets: [{
                    data: [{{$amount->getAmountByDay('05','03','2023')}}, {{$amount->getAmountByDay('06','03','2023')}}, {{$amount->getAmountByDay('07','03','2023')}}, {{$amount->getAmountByDay('08','03','2023')}}, {{$amount->getAmountByDay('09','03','2023')}}, {{$amount->getAmountByDay('10','03','2023')}}, {{$amount->getAmountByDay('11','03','2023')}}, {{$amount->getAmountByDay('12','03','2023')}},{{$amount->getAmountByDay('13','03','2023')}},{{$amount->getAmountByDay('14','03','2023')}},{{$amount->getAmountByDay('15','03','2023')}},{{$amount->getAmountByDay('16','03','2023')}},{{$amount->getAmountByDay('17','03','2023')}},{{$amount->getAmountByDay('18','03','2023')}},{{$amount->getAmountByDay('19','03','2023')}},{{$amount->getAmountByDay('20','03','2023')}},{{$amount->getAmountByDay('21','03','2023')}},{{$amount->getAmountByDay('22','03','2023')}},{{$amount->getAmountByDay('23','03','2023')}},{{$amount->getAmountByDay('24','03','2023')}},{{$amount->getAmountByDay('25','03','2023')}},{{$amount->getAmountByDay('26','03','2023')}},{{$amount->getAmountByDay('27','03','2023')}},{{$amount->getAmountByDay('28','03','2023')}},{{$amount->getAmountByDay('29','03','2023')}},{{$amount->getAmountByDay('30','03','2023')}},{{$amount->getAmountByDay('01','04','2023')}},{{$amount->getAmountByDay('02','04','2023')}},{{$amount->getAmountByDay('03','04','2023')}},{{$amount->getAmountByDay('04','04','2023')}},{{$amount->getAmountByDay('05','04','2023')}},{{$amount->getAmountByDay('06','04','2023')}},{{$amount->getAmountByDay('07','04','2023')}},{{$amount->getAmountByDay('08','04','2023')}},{{$amount->getAmountByDay('09','04','2023')}},{{$amount->getAmountByDay('10','04','2023')}},{{$amount->getAmountByDay('11','04','2023')}},{{$amount->getAmountByDay('12','04','2023')}},{{$amount->getAmountByDay('13','04','2023')}},{{$amount->getAmountByDay('14','04','2023')}},{{$amount->getAmountByDay('15','04','2023')}},{{$amount->getAmountByDay('16','04','2023')}},{{$amount->getAmountByDay('17','04','2023')}},{{$amount->getAmountByDay('18','04','2023')}},{{$amount->getAmountByDay('19','04','2023')}},{{$amount->getAmountByDay('20','04','2023')}},{{$amount->getAmountByDay('21','04','2023')}},{{$amount->getAmountByDay('22','04','2023')}},{{$amount->getAmountByDay('23','04','2023')}},{{$amount->getAmountByDay('24','04','2023')}},{{$amount->getAmountByDay('25','04','2023')}},{{$amount->getAmountByDay('26','04','2023')}},{{$amount->getAmountByDay('27','04','2023')}},{{$amount->getAmountByDay('28','04','2023')}},{{$amount->getAmountByDay('29','04','2023')}},{{$amount->getAmountByDay('30','04','2023')}},{{$amount->getAmountByDay('01','05','2023')}},{{$amount->getAmountByDay('02','05','2023')}}],
                    borderColor: '#f7557a ',
                    borderWidth: 1,
                    fill: true,

                }, {
                    data: [{{$amount->getAmountByDay('16','03','2022')}},{{$amount->getAmountByDay('17','03','2022')}},{{$amount->getAmountByDay('18','03','2022')}},{{$amount->getAmountByDay('19','03','2022')}},{{$amount->getAmountByDay('20','03','2022')}},{{$amount->getAmountByDay('21','03','2022')}},{{$amount->getAmountByDay('22','03','2022')}},{{$amount->getAmountByDay('23','03','2022')}},{{$amount->getAmountByDay('24','03','2022')}},{{$amount->getAmountByDay('25','03','2022')}},{{$amount->getAmountByDay('26','03','2022')}},{{$amount->getAmountByDay('27','03','2022')}},{{$amount->getAmountByDay('28','03','2022')}},{{$amount->getAmountByDay('29','03','2022')}},{{$amount->getAmountByDay('30','03','2022')}},{{$amount->getAmountByDay('01','04','2022')}},{{$amount->getAmountByDay('02','04','2022')}},{{$amount->getAmountByDay('03','04','2022')}},{{$amount->getAmountByDay('04','04','2022')}},{{$amount->getAmountByDay('05','04','2022')}},{{$amount->getAmountByDay('06','04','2022')}},{{$amount->getAmountByDay('07','04','2022')}},{{$amount->getAmountByDay('08','04','2022')}},{{$amount->getAmountByDay('09','04','2022')}},{{$amount->getAmountByDay('10','04','2022')}},{{$amount->getAmountByDay('11','04','2022')}},{{$amount->getAmountByDay('12','04','2022')}},{{$amount->getAmountByDay('13','04','2022')}},{{$amount->getAmountByDay('14','04','2022')}},{{$amount->getAmountByDay('15','04','2022')}},{{$amount->getAmountByDay('16','04','2022')}},{{$amount->getAmountByDay('17','04','2022')}},{{$amount->getAmountByDay('18','04','2022')}},{{$amount->getAmountByDay('19','04','2022')}},{{$amount->getAmountByDay('20','04','2022')}},{{$amount->getAmountByDay('21','04','2022')}},{{$amount->getAmountByDay('22','04','2022')}},{{$amount->getAmountByDay('23','04','2022')}},{{$amount->getAmountByDay('24','04','2022')}},{{$amount->getAmountByDay('25','04','2022')}},{{$amount->getAmountByDay('26','04','2022')}},{{$amount->getAmountByDay('27','04','2022')}},{{$amount->getAmountByDay('28','04','2022')}},{{$amount->getAmountByDay('29','04','2022')}},{{$amount->getAmountByDay('30','04','2022')}},{{$amount->getAmountByDay('01','05','2022')}},{{$amount->getAmountByDay('02','05','2022')}},{{$amount->getAmountByDay('03','05','2022')}},{{$amount->getAmountByDay('04','05','2022')}},{{$amount->getAmountByDay('05','05','2022')}},{{$amount->getAmountByDay('06','05','2022')}},{{$amount->getAmountByDay('07','05','2022')}},{{$amount->getAmountByDay('08','05','2022')}},{{$amount->getAmountByDay('09','05','2022')}},{{$amount->getAmountByDay('10','05','2022')}},{{$amount->getAmountByDay('11','05','2022')}},{{$amount->getAmountByDay('12','05','2022')}},{{$amount->getAmountByDay('13','05','2022')}},],
                    borderColor: '#007bff',
                    borderWidth: 1,
                    fill: true
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false,
                    labels: {
                        display: false,
                    }
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            fontSize: 10,
                            max: 200000,
                            fontColor: "#3c1360",
                        },
                        gridLines: {
                            display: true,
                            color: 'rgba(171, 167, 167,0.2)',
                            drawBorder: true
                        },
                    }],
                    xAxes: [{
                        ticks: {
                            beginAtZero: true,
                            fontSize: 11,
                            fontColor: "#3c1360",
                        },
                        gridLines: {
                            display: true,
                            color: 'rgba(171, 167, 167,0.2)',
                            drawBorder: true
                        },
                    }]
                }
            }
        });
    </script>
@endpush
