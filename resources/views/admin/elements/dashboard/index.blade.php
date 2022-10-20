@extends('admin.layouts.app')

@section('title', 'Trang chủ')

@section('content')
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Tổng số đơn hàng</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $static['count_cart'] ?? 0 }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Tổng số đơn chưa thanh toán</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $static['count_complete'] ?? 0 }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Tổng số khách hàng</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $static['count_customer'] ?? 0 }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Tổng số lượng sản phẩm</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $static['count_product'] ?? 0 }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <canvas id="myChartContent" height="300" width="500"></canvas>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        let myChart = document.getElementById("myChartContent").getContext("2d");
        let massPopChart = new Chart(myChart, {
            type: 'line',
            data: {
                labels: [
                    'Tháng 1',
                    'Tháng 2',
                    'Tháng 3',
                    'Tháng 4',
                    'Tháng 5',
                    'Tháng 6',
                    'Tháng 7',
                    'Tháng 8',
                    'Tháng 9',
                    'Tháng 10',
                ],
                datasets: [{
                    label: 'Tăng trưởng người dùng',
                    data: [3, 5, 6, 10, 56, 30, 20, 3, 5, 6],
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                },
                    {
                        label: 'Tăng trưởng đơn hàng (%)',
                        data: [3, 20, 50, 30, 10, 5, 1, 3, 9, 7],
                        backgroundColor: '#3EC7C7FF',
                        borderColor: '#3EC7C7FF',
                    }],
            },
            options: {
                scales: {
                    y: {
                        title: {
                            display: true,
                            text: 'Value'
                        },
                        min: 0,
                        max: 100,
                        ticks: {
                            // forces step size to be 50 units
                            stepSize: 10
                        }
                    }
                }
            }
        });
    </script>
@endsection
