@extends('unit.template')

@section('content')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Dashboard</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <div>
                <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">

            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <!-- Row -->
                            <div class="row">
                                <div class="col-8"><h2> <i class="font-14 text-danger"></i></h2>
                                    <h6>Barang</h6></div>
                                <div class="col-4 align-self-center text-right  p-l-0">
                                    <div id="sparklinedash3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <!-- Row -->
                            <div class="row">
                                <div class="col-8"><h2 class=""> <i class="font-14 text-success"></i></h2>
                                    <h6>Perbaikan</h6></div>
                                <div class="col-4 align-self-center text-right p-l-0">
                                    <div id="sparklinedash"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <!-- Row -->
                            <div class="row">
                                <div class="col-8"><h2>{{ $programs->count() }} <i class="ti-angle-up font-14 text-success"></i></h2>
                                    <h6>Prodi</h6></div>
                                <div class="col-4 align-self-center text-right p-l-0">
                                    <div id="sparklinedash2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <!-- Row -->
                            <div class="row">
                                <div class="col-12"><h2><i class=" font-14 text-danger"></i></h2>
                                    <h6>Toal Asset</h6></div>
                                <div class="col-4 align-self-center text-right p-l-0">
                                    <div id=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row -->
            <div class="row">
                <div class="col-lg-12 col-md-7">

                    <div class="card card-default">
                        <div class="card-header">
                            <div class="card-actions">
                                <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                            </div>
                            <h4 class="card-title m-b-0">Kondisi Barang</h4>
                        </div>
                        <div id="morris-area" hidden="hidden" style="height: 405px;"></div>
                        <div class="card-body collapse show">
                            <div id="chart_condition" class="ecomm-donute" style="height: 317px;"></div>
                            <ul class="list-inline m-t-20 text-center">

                            </ul>

                        </div>
                    </div>
                </div>
            </div>


            <!-- Row -->

            @section('extra-script')
                <script>
                    // Set paths
                    // ------------------------------

                    require.config({
                        paths: {
                            echarts: '{{ asset("employee/app-assets/vendors/js/charts/echarts") }}'
                        }
                    });


                    // Configuration
                    // ------------------------------

                    require(
                        [
                            'echarts',
                            'echarts/chart/pie',
                            'echarts/chart/funnel'
                        ],


                        // Charts setup
                        function (ec) {

                            // Initialize chart
                            // ------------------------------
                            var topCategoryChart = ec.init(document.getElementById('chart_condition'));


                            // Chart Options
                            // ------------------------------
                            var topCategoryChartOptions = {

                                // Add title
                                title: {
                                    text: 'Grafik Kondisi Barang',
                                    x: 'center',
                                    textStyle: {
                                        color: '#333333'
                                    },
                                    subtextStyle: {
                                        color: '#333333'
                                    }
                                },

                                // Add custom colors
                                color: ['#37BC9B', '#967ADC', '#F6BB42', '#DA4453', '#818a91'],

                                // Enable drag recalculate
                                calculable: true,

                                // Add series
                                series: [
                                    {
                                        name: 'Top Categories',
                                        type: 'pie',
                                        radius: ['40%', '50%'],
                                        center: ['50%', '60%'],
                                        itemStyle: {
                                            normal: {
                                                label: {
                                                    show: true,
                                                    textStyle: {
                                                        color: '#333333'
                                                    }
                                                },
                                                labelLine: {
                                                    show: true,
                                                    lineStyle: {
                                                        color: '#333333'
                                                    }
                                                }
                                            },
                                            emphasis: {
                                                label: {
                                                    show: true,
                                                    formatter: '{b}' + '\n\n' + '{c} ({d}%)',
                                                    position: 'center',
                                                    textStyle: {
                                                        fontSize: '12',
                                                        fontWeight: '500'
                                                    }
                                                }
                                            }
                                        },

                                        {{--data: @json($pie_data),--}}
                                    }
                                ]
                            };

                            // Apply options
                            // ------------------------------

                            topCategoryChart.setOption(topCategoryChartOptions);

                            // Resize chart
                            // ------------------------------

                            $(function () {

                                // Resize chart on menu width change and window resize
                                $(window).on('resize', resize);
                                $(".menu-toggle").on('click', resize);

                                // Resize function
                                function resize() {
                                    setTimeout(function() {

                                        // Resize chart
                                        topCategoryChart.resize();
                                    }, 200);
                                }
                            });
                        }
                    );
                </script>

@endsection
@endsection


