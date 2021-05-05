am4core.ready(function () {
  // Themes begin
  am4core.useTheme(am4themes_green);
  am4core.useTheme(am4themes_animated);
  // Themes end

  // Create chart instance
  var chart = am4core.create("line_chart-1", am4charts.XYChart);

  // Add data
  chart.data = [
    {
      date: "2013-01-16",
      market1: 71,
      sales1: 5,
    },
    {
      date: "2013-01-17",
      market1: 74,
      sales1: 4,
    },
    {
      date: "2013-01-18",
      market1: 78,
      sales1: 5,
    },
    {
      date: "2013-01-19",
      market1: 85,
      sales1: 8,
    },
    {
      date: "2013-01-20",
      market1: 82,
      sales1: 9,
    },
    {
      date: "2013-01-21",
      market1: 83,
      sales1: 3,
    },
    {
      date: "2013-01-22",
      market1: 88,
      sales1: 5,
    },
    {
      date: "2013-01-23",
      market1: 85,
      sales1: 7,
    },
    {
      date: "2013-01-24",
      market1: 85,
      sales1: 9,
    },
    {
      date: "2013-01-25",
      market1: 80,
      sales1: 5,
    },
    {
      date: "2013-01-26",
      market1: 87,
      sales1: 4,
    },
    {
      date: "2013-01-27",
      market1: 84,
      sales1: 3,
    },
    {
      date: "2013-01-28",
      market1: 83,
      sales1: 5,
    },
    {
      date: "2013-01-29",
      market1: 84,
      sales1: 5,
    },
    {
      date: "2013-01-30",
      market1: 81,
      sales1: 4,
    },
  ];

  // Create axes
  var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
  //dateAxis.renderer.grid.template.location = 0;
  //dateAxis.renderer.minGridDistance = 30;

  var valueAxis1 = chart.yAxes.push(new am4charts.ValueAxis());
  valueAxis1.title.text = "Sales";

  var valueAxis2 = chart.yAxes.push(new am4charts.ValueAxis());
  valueAxis2.title.text = "Market Days";
  valueAxis2.renderer.opposite = true;
  valueAxis2.renderer.grid.template.disabled = true;

  // Create series
  var series1 = chart.series.push(new am4charts.ColumnSeries());
  series1.dataFields.valueY = "sales1";
  series1.dataFields.dateX = "date";
  series1.yAxis = valueAxis1;
  series1.name = "Target Sales";
  series1.tooltipText = "{name}\n[bold font-size: 20]${valueY}M[/]";
  series1.fill = chart.colors.getIndex(0);
  series1.strokeWidth = 0;
  series1.clustered = false;
  series1.columns.template.width = am4core.percent(40);

  // var series2 = chart.series.push(new am4charts.ColumnSeries());
  // series2.dataFields.valueY = "sales2";
  // series2.dataFields.dateX = "date";
  // series2.yAxis = valueAxis1;
  // series2.name = "Actual Sales";
  // series2.tooltipText = "{name}\n[bold font-size: 20]${valueY}M[/]";
  // series2.fill = chart.colors.getIndex(0).lighten(0.5);
  // series2.strokeWidth = 0;
  // series2.clustered = false;
  // series2.toBack();

  var series3 = chart.series.push(new am4charts.LineSeries());
  series3.dataFields.valueY = "market1";
  series3.dataFields.dateX = "date";
  series3.name = "Market Days";
  series3.strokeWidth = 2;
  series3.tensionX = 0.7;
  series3.yAxis = valueAxis2;
  series3.tooltipText = "{name}\n[bold font-size: 20]{valueY}[/]";
  series3.stroke = am4core.color("#1da1f2"); // blue
  series3.tooltip.getFillFromObject = false;
  series3.tooltip.background.fill = am4core.color("#1da1f2");

  var bullet3 = series3.bullets.push(new am4charts.CircleBullet());
  bullet3.circle.radius = 3;
  bullet3.circle.strokeWidth = 2;
  bullet3.circle.fill = am4core.color("#fff");

  // var series4 = chart.series.push(new am4charts.LineSeries());
  // series4.dataFields.valueY = "market2";
  // series4.dataFields.dateX = "date";
  // series4.name = "Market Days ALL";
  // series4.strokeWidth = 2;
  // series4.tensionX = 0.7;
  // series4.yAxis = valueAxis2;
  // series4.tooltipText = "{name}\n[bold font-size: 20]{valueY}[/]";
  // series4.stroke = chart.colors.getIndex(0).lighten(0.5);
  // series4.strokeDasharray = "3,3";

  // var bullet4 = series4.bullets.push(new am4charts.CircleBullet());
  // bullet4.circle.radius = 3;
  // bullet4.circle.strokeWidth = 2;
  // bullet4.circle.fill = am4core.color("#fff");

  // Add cursor
  chart.cursor = new am4charts.XYCursor();

  // Add legend
  chart.legend = new am4charts.Legend();
  chart.legend.position = "top";
}); // end am4core.ready()
