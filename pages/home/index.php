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
    <!-- ./css plugins -->

    <!-- css foundations -->
    <link rel="stylesheet" href="../../assets/css/foundations/color.css">
    <link rel="stylesheet" href="../../assets/css/foundations/helper.css">
    <link rel="stylesheet" href="../../assets/css/foundations/spacingMargin.css">
    <link rel="stylesheet" href="../../assets/css/foundations/spacingPadding.css">
    <link rel="stylesheet" href="../../assets/css/foundations/typography.css">
    <!-- ./css foundations -->

    <!-- css components -->
    <link rel="stylesheet" href="../../assets/css/components/amcharts.css">
    <!-- ./css components -->
</head>

<body class="layout-dashboard">
    <div class="row">
        <div class="col-4">
            <div id="line_chart-1"></div>
        </div>
        <div class="col-4">
            <div id="line_chart-2"></div>
        </div>
        <div class="col-4">
            <div id="gauge-1"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <div id="line_chart-3"></div>
        </div>
        <div class="col-4">
            <div id="line_chart-4"></div>
        </div>
        <div class="col-4">
            <div id="gauge-2"></div>
        </div>
    </div>

    <!-- library bootstrap script -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/bootstrap-4.0.0-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="../../assets/plugins/bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- ./library bootstrap script -->

    <!-- library amcharts script -->
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <!-- ./library amcharts script -->

    <!-- list amcharts -->
    <script src="../../assets/js/amcharts/line_chart-1.js" type="text/javascript" charset="utf-8"></script>
    <script src="../../assets/js/amcharts/line_chart-2.js" type="text/javascript" charset="utf-8"></script>
    <script src="../../assets/js/amcharts/line_chart-3.js" type="text/javascript" charset="utf-8"></script>
    <script src="../../assets/js/amcharts/line_chart-4.js" type="text/javascript" charset="utf-8"></script>
    <script src="../../assets/js/amcharts/gauge-1.js" type="text/javascript" charset="utf-8"></script>
    <script src="../../assets/js/amcharts/gauge-2.js" type="text/javascript" charset="utf-8"></script>
    <!-- ./list amcharts -->

    <!-- custom jquery script -->
    <script type="text/javascript">
        $(document).on('ready', function() {
            $(".center").slick({
                dots: true,
                arrows: true,
                infinite: true,
                centerMode: true,
                slidesToShow: 1,
                slidesToScroll: 1
            });
        });
    </script>
    <!-- ./custom jquery script -->
</body>

</html>