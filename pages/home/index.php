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
    <?php include "../../components/navbar/index.php"; ?>

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
                            <div class="media">
                                <div class="mr-32" style="min-width: 14%;">
                                    <p class="font-weight-bold fs-heading04 text-nowrap">3,407.03 [<i class="fas fa-circle text-danger px-8"></i> 80.37%]</p>
                                    <div class="row">
                                        <div class="col-8">
                                            <p class="fs-body03 mb-8 text-nowrap">Status produksi</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="font-weight-bold fs-body03 mb-8 text-nowrap">: 18 April 2021</p>
                                            <p class="font-weight-bold fs-body03 mb-8 text-nowrap"><i class="fas fa-long-arrow-alt-down text-danger pr-8"></i> 80.37%</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <p class="fs-body03 mb-8 text-nowrap">Produksi kemarin</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="font-weight-bold fs-body03 mb-8 text-nowrap">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <p class="fs-body03 mb-8 text-nowrap">Rata rata April 2021</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="font-weight-bold fs-body03 mb-8 text-nowrap">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <p class="fs-body03 mb-8 text-nowrap">MTD</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="font-weight-bold fs-body03 mb-8 text-nowrap">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <p class="fs-body03 mb-8 text-nowrap">Tertinggi April 2021</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="font-weight-bold fs-body03 mb-8 text-nowrap">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <p class="fs-body03 mb-8 text-nowrap">YTD</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="font-weight-bold fs-body03 mb-8 text-nowrap">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <p class="fs-body03 mb-8 text-nowrap">Target April 2021</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="font-weight-bold fs-body03 mb-8 text-nowrap">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <p class="fs-body03 mb-8 text-nowrap">Target rata-rata April 2021</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="font-weight-bold fs-body03 mb-8 text-nowrap">: 3,477.11</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="row">
                                        <div class="col">
                                            <p class="font-weight-bold fs-heading04 text-center">Yearly</p>
                                            <div id="line-1"></div>
                                        </div>
                                        <div class="col">
                                            <p class="font-weight-bold fs-heading04 text-center">Weekly</p>
                                            <div id="line-2"></div>
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
                            <div class="media">
                                <div class="mr-32" style="min-width: 14%;">
                                    <p class="font-weight-bold fs-heading04 text-nowrap">3,407.03 [<i class="fas fa-circle text-success px-8"></i> 80.37%]</p>
                                    <div class="row">
                                        <div class="col-8">
                                            <p class="fs-body03 mb-8 text-nowrap">Status produksi</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="font-weight-bold fs-body03 mb-8 text-nowrap">: 18 April 2021</p>
                                            <p class="font-weight-bold fs-body03 mb-8 text-nowrap"><i class="fas fa-long-arrow-alt-up text-success pr-8"></i> 80.37%</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <p class="fs-body03 mb-8 text-nowrap">Produksi kemarin</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="font-weight-bold fs-body03 mb-8 text-nowrap">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <p class="fs-body03 mb-8 text-nowrap">Rata rata April 2021</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="font-weight-bold fs-body03 mb-8 text-nowrap">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <p class="fs-body03 mb-8 text-nowrap">MTD</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="font-weight-bold fs-body03 mb-8 text-nowrap">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <p class="fs-body03 mb-8 text-nowrap">Tertinggi April 2021</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="font-weight-bold fs-body03 mb-8 text-nowrap">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <p class="fs-body03 mb-8 text-nowrap">YTD</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="font-weight-bold fs-body03 mb-8 text-nowrap">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <p class="fs-body03 mb-8 text-nowrap">Target April 2021</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="font-weight-bold fs-body03 mb-8 text-nowrap">: 3,477.11</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <p class="fs-body03 mb-8 text-nowrap">Target rata-rata April 2021</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="font-weight-bold fs-body03 mb-8 text-nowrap">: 3,477.11</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="row">
                                        <div class="col">
                                            <p class="font-weight-bold fs-heading04 text-center">Yearly</p>
                                            <div id="line-3"></div>
                                        </div>
                                        <div class="col">
                                            <p class="font-weight-bold fs-heading04 text-center">Weekly</p>
                                            <div id="line-4"></div>
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
            </div>
        </div>
        <!-- ./second row -->
    </div>

    <!-- library bootstrap -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/bootstrap-4.0.0-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="../../assets/plugins/bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- ./library bootstrap -->

    <!-- library CDN amcharts -->
    <script src="https://cdn.amcharts.com/lib/4/core.js" type="text/javascript"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js" type="text/javascript"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js" type="text/javascript"></script>
    <!-- ./library CDN amcharts -->

    <!-- custom themes amcharts -->
    <script src="../../assets/js/amcharts/custom_themes.js" type="text/javascript" charset="utf-8"></script>
    <!-- ./custom themes amcharts -->

    <?php include "../../components/charts/line-1.php"; ?>
    <?php include "../../components/charts/line-2.php"; ?>
    <?php include "../../components/charts/gauge-1.php"; ?>
    <?php include "../../components/charts/line-3.php"; ?>
    <?php include "../../components/charts/line-4.php"; ?>
    <?php include "../../components/charts/gauge-2.php"; ?>
</body>

</html>