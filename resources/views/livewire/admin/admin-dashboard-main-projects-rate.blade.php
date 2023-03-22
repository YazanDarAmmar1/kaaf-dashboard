<div>
    <div class="card">
        <div class="card-body">
            <div class="main-content-label mg-b-5">
                المشروعات الرئيسية
            </div>
            <p class="mg-b-20">نسبة التحصيل حسب كل مشروع رئيس.</p>
            <div class="ht-200 ht-sm-300" id="flotPie2"></div>
        </div>
    </div>
</div>
@push('js')
    <!-- Internal Chart flot js -->
    <script>
        $(function () {
            'use strict';

            var piedata = [{
                label: 'الإعلامية',
                data: [[1, {{$mainBranch->AMT ?? 0}}]],
                color: '#531a71'
            }, {
                label: 'كُتيب رمضان',
                data: [
                    [1, {{$book->AMT ?? 0}}]],
                color: '#185abd'
            }, {
                label: 'المراكز',
                data: [
                    [1, {{$branch->AMT ?? 0}}]],
                color: '#e163f1'
            }, {
                label: 'زكاة خارج',
                data: [
                    [1, {{$zakatOutBahrain->AMT ?? 0}}]],
                color: '#c5ac03'
            }, {
                label: 'زكاة داخل',
                data: [
                    [1, {{$zakatInBahrain->AMT ?? 0}}]],
                color: '#ff0000'
            }];
            $.plot('#flotPie2', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.5,
                        label: {
                            show: true,
                            radius: 2 / 3,
                            formatter: labelFormatter,
                            threshold: 0.1
                        }
                    }
                },
                grid: {
                    borderWidth: 1,
                    borderColor: 'rgba(171, 167, 167,0.2)',
                    hoverable: true
                },
            });

            function labelFormatter(label, series) {
                return '<div style="font-size:8pt; text-align:center; padding:2px; color:white;">' + label + '<br/>' + Math.round(series.percent) + '%</div>';
            }
        });
    </script>
@endpush
