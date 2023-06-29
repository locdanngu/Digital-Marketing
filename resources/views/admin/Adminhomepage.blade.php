
@extends('admin.Adminlayout')

@section('title', 'Admin Dashboard')

@section('body')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Trang điều hành</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Doanh thu năm {{ $currentYear }} : {{ number_format($dauvao, 0, ',', '.') }} đ</h3>
                        <div class="card-tools" style="width: 45%;">
                        <h3 class="card-title">Doanh thu tháng {{ $currentMonth }}/{{ $currentYear }} : {{ number_format($loi, 0, ',', '.') }} đ</h3>
                        </div>
                    </div>
                    <div class="position-relative mb-4 p-4">
                        <canvas id="thongkedauvao-chart" height="500"></canvas>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    
    <!-- /.content -->
</div>

@endsection

@section('js')
<script>
$(function() {
    'use strict'

    var ticksStyle = {
        fontColor: '#495057',
        fontStyle: 'bold'
    }

    var mode = 'index'
    var intersect = true

    var donTuvanCounts = <?php echo $dauvaoTotals; ?>;
    var $thongkedonChart = $('#thongkedauvao-chart')
    // eslint-disable-next-line no-unused-vars
    var thongkedonChart = new Chart($thongkedonChart, {
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
                'September', 'October', 'November', 'December'
            ],
            datasets: [{
                type: 'line',
                data: donTuvanCounts,

                backgroundColor: 'transparent',
                borderColor: '#007bff',
                pointBorderColor: '#007bff',
                pointBackgroundColor: '#007bff',
                fill: false
                // pointHoverBackgroundColor: '#007bff',
                // pointHoverBorderColor    : '#007bff'
            }, ]
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                mode: mode,
                intersect: intersect
            },
            hover: {
                mode: mode,
                intersect: intersect
            },
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    // display: false,
                    gridLines: {
                        display: true,
                        lineWidth: '4px',
                        color: 'rgba(0, 0, 0, .2)',
                        zeroLineColor: 'transparent'
                    },
                    ticks: $.extend({
                        beginAtZero: true,
                        suggestedMax: 200
                    }, ticksStyle)
                }],
                xAxes: [{
                    display: true,
                    gridLines: {
                        display: false
                    },
                    ticks: ticksStyle
                }]
            }
        }
    })
})
</script>

@endsection