<script>
    am4core.ready(function() {
        // Themes begin
        am4core.useTheme(am4themes_red);
        am4core.useTheme(am4themes_animated);
        // Themes end

        // Create chart instance
        var chart = am4core.create("line-4", am4charts.XYChart);

        // Add data
        chart.data = [{
                date: "2012-07-27",
                value: 13,
                value2: 20,
            },
            {
                date: "2012-07-28",
                value: 11,
                value2: 20,
            },
            {
                date: "2012-07-29",
                value: 15,
                value2: 20,
            },
            {
                date: "2012-07-30",
                value: 16,
                value2: 20,
            },
            {
                date: "2012-07-31",
                value: 18,
                value2: 20,
            },
            {
                date: "2012-08-01",
                value: 13,
                value2: 20,
            },
            {
                date: "2012-08-02",
                value: 22,
                value2: 20,
            },
            {
                date: "2012-08-03",
                value: 23,
                value2: 20,
            },
            {
                date: "2012-08-04",
                value: 20,
                value2: 20,
            },
            {
                date: "2012-08-05",
                value: 17,
                value2: 20,
            },
            {
                date: "2012-08-06",
                value: 16,
                value2: 20,
            },
            {
                date: "2012-08-07",
                value: 18,
                value2: 20,
            },
            {
                date: "2012-08-08",
                value: 21,
                value2: 20,
            },
            {
                date: "2012-08-09",
                value: 26,
                value2: 20,
            },
            {
                date: "2012-08-10",
                value: 24,
                value2: 20,
            },
            {
                date: "2012-08-11",
                value: 29,
                value2: 20,
            },
            {
                date: "2012-08-12",
                value: 32,
                value2: 20,
            },
            {
                date: "2012-08-13",
                value: 18,
                value2: 20,
            },
        ];

        // Create axes
        var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
        // dateAxis.renderer.grid.template.location = 0;
        // dateAxis.renderer.minGridDistance = 30;

        var valueAxis1 = chart.yAxes.push(new am4charts.ValueAxis());
        valueAxis1.title.text = "[regular font-size: 14]Data Produksi";

        // var valueAxis2 = chart.yAxes.push(new am4charts.ValueAxis());
        // valueAxis2.title.text = "Market Days";
        // valueAxis2.renderer.opposite = true;
        // valueAxis2.renderer.grid.template.disabled = true;

        // Create series
        // Column Chart
        var series1 = chart.series.push(new am4charts.ColumnSeries());
        series1.dataFields.valueY = "value";
        series1.dataFields.dateX = "date";
        series1.yAxis = valueAxis1;
        series1.name = "Data Produksi";
        series1.tooltipText =
            "[regular font-size: 12]{name} ( {dateX} )\n[bold font-size: 12]{valueY}[/]";
        series1.fill = chart.colors.getIndex(0);
        series1.strokeWidth = 0;
        series1.clustered = false;
        series1.columns.template.width = am4core.percent(40);

        // Line Chart
        var series2 = chart.series.push(new am4charts.LineSeries());
        series2.dataFields.valueY = "value2";
        series2.dataFields.dateX = "date";
        series2.name = "Target";
        series2.strokeWidth = 3;
        series2.tensionX = 0.7;
        series2.yAxis = valueAxis1;
        series2.tooltipText =
            "[regular font-size: 12]{name} ( {dateX} )\n[bold font-size: 12]{valueY}[/]";
        series2.stroke = am4core.color("#1da1f2"); // blue
        series2.tooltip.getFillFromObject = false;
        series2.tooltip.background.fill = am4core.color("#1da1f2");
        series2.strokeDasharray = "3,3";

        // var bullet2 = series2.bullets.push(new am4charts.CircleBullet());
        // bullet2.circle.radius = 3;
        // bullet2.circle.strokeWidth = 2;
        // bullet2.circle.fill = am4core.color("#fff");

        // Add cursor
        chart.cursor = new am4charts.XYCursor();

        // Add legend
        chart.legend = new am4charts.Legend();
        chart.legend.position = "top";
    }); // end am4core.ready()
</script>