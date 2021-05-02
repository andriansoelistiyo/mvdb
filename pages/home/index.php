<!DOCTYPE html>
<html>

<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ./meta --->

    <!-- title -->
    <title>Dashboard Project</title>
    <!-- ./title -->

    <!-- css plugins -->
    <link rel="stylesheet" href="../../assets/plugins/bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/plugins/fontawesome-free-5.15.2-web/css/all.min.css">
    <!-- ./css plugins -->

    <!-- css foundations -->
    <link rel="stylesheet" href="../../assets/css/foundations/color.css">
    <link rel="stylesheet" href="../../assets/css/foundations/helper.css">
    <link rel="stylesheet" href="../../assets/css/foundations/spacingMargin.css">
    <link rel="stylesheet" href="../../assets/css/foundations/spacingPadding.css">
    <link rel="stylesheet" href="../../assets/css/foundations/typography.css">
    <!-- ./css foundations -->

    <!-- css components -->
    <link rel="stylesheet" href="../../assets/css/components/summary.css">
    <link rel="stylesheet" href="../../assets/css/components/amcharts.css">
    <!-- ./css components -->
</head>

<body class="layout-dashboard">
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="../../assets/img/pertamina-logo.png" width="auto" height="30" class="d-inline-block align-top" alt="pertamina logo">
        </a>
    </nav>

    <div class="container-fluid">
        <!-- first row -->
        <div class="section mt-16">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header font-weight-bold fs-heading04">
                            PRODUKSI MINYAK LIMAU April 2020 s/d April 2021 (BOPD)
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <p class="font-weight-bold fs-heading04">3,407.03 [<i class="fas fa-circle text-danger px-8"></i> 80.37%]</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="fs-body02 mb-8">Status produksi</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="font-weight-bold fs-body02 mb-8">: 18 April 2021</p>
                                            <p class="font-weight-bold fs-body02 mb-8"><i class="fas fa-long-arrow-alt-down text-danger pr-8"></i> 80.37%</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="fs-body02 mb-8">Produksi kemarin</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="font-weight-bold fs-body02 mb-8">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="fs-body02 mb-8">Rata rata April 2021</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="font-weight-bold fs-body02 mb-8">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="fs-body02 mb-8">MTD</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="font-weight-bold fs-body02 mb-8">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="fs-body02 mb-8">Tertinggi April 2021</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="font-weight-bold fs-body02 mb-8">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="fs-body02 mb-8">YTD</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="font-weight-bold fs-body02 mb-8">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="fs-body02 mb-8">Target April 2021</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="font-weight-bold fs-body02 mb-8">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="fs-body02 mb-8">Target rata-rata April 2021</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="font-weight-bold fs-body02 mb-8">: 3,477.11</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <p class="font-weight-bold fs-heading04 text-center">Yearly</p>
                                    <div id="line_chart-1"></div>
                                </div>
                                <div class="col-3">
                                    <p class="font-weight-bold fs-heading04 text-center">Weekly</p>
                                    <div id="line_chart-2"></div>
                                </div>
                                <div class="col-3">
                                    <p class="font-weight-bold fs-heading04 text-center">Yearly</p>
                                    <div id="gauge-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./first row -->

        <!-- second row -->
        <div class="section mt-16">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header font-weight-bold fs-heading04">
                            PRODUKSI GAS LIMAU April 2020 s/d April 2021 (BOPD)
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <p class="font-weight-bold fs-heading04">3,407.03 [<i class="fas fa-circle text-success px-8"></i> 80.37%]</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="fs-body02">Status produksi</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="font-weight-bold fs-body02 mb-8">: 18 April 2021</p>
                                            <p class="font-weight-bold fs-body02 mb-8"><i class="fas fa-long-arrow-alt-up text-success pr-8"></i> 80.37%</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="fs-body02 mb-8">Produksi kemarin</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="font-weight-bold fs-body02 mb-8">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="fs-body02 mb-8">Rata rata April 2021</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="font-weight-bold fs-body02 mb-8">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="fs-body02 mb-8">MTD</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="font-weight-bold fs-body02 mb-8">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="fs-body02 mb-8">Tertinggi April 2021</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="font-weight-bold fs-body02 mb-8">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="fs-body02 mb-8">YTD</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="font-weight-bold fs-body02 mb-8">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="fs-body02 mb-8">Target April 2021</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="font-weight-bold fs-body02 mb-8">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="fs-body02 mb-8">Target rata-rata April 2021</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="font-weight-bold fs-body02 mb-8">: 3,477.11</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <p class="font-weight-bold fs-heading04 text-center">Yearly</p>
                                    <div id="line_chart-3"></div>
                                </div>
                                <div class="col-3">
                                    <p class="font-weight-bold fs-heading04 text-center">Weekly</p>
                                    <div id="line_chart-4"></div>
                                </div>
                                <div class="col-3">
                                    <p class="font-weight-bold fs-heading04 text-center">Yearly</p>
                                    <div id="gauge-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./second row -->
    </div>

    <!-- library bootstrap script -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/bootstrap-4.0.0-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="../../assets/plugins/bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- ./library bootstrap script -->

    <!-- library CDN amcharts script -->
    <script src="https://cdn.amcharts.com/lib/4/core.js" type="text/javascript"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js" type="text/javascript"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js" type="text/javascript"></script>
    <!-- ./library CDN amcharts script -->

    <!-- list amcharts -->
    <script src="../../assets/js/amcharts/line_chart-1.js" type="text/javascript" charset="utf-8"></script>
    <script src="../../assets/js/amcharts/line_chart-2.js" type="text/javascript" charset="utf-8"></script>
    <script src="../../assets/js/amcharts/line_chart-3.js" type="text/javascript" charset="utf-8"></script>
    <script src="../../assets/js/amcharts/line_chart-4.js" type="text/javascript" charset="utf-8"></script>
    <script src="../../assets/js/amcharts/gauge-1.js" type="text/javascript" charset="utf-8"></script>
    <script src="../../assets/js/amcharts/gauge-2.js" type="text/javascript" charset="utf-8"></script>
    <!-- ./list amcharts -->
</body>

</html>