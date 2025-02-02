var options = {
    series: [
      {
        name: "بازدید از صفحه",
        type: "bar",
        data: [34, 65, 46, 68, 49, 61, 42, 44, 78, 52, 63, 67],
      },
      {
        name: "کلیک",
        type: "area",
        data: [8, 12, 7, 17, 21, 11, 5, 9, 7, 29, 12, 35],
      },
      {
        name: "نسبت تبدیل",
        type: "area",
        data: [12, 16, 11, 22, 28, 25, 15, 29, 35, 45, 42, 48],
      },
    ],
    chart: { height: 313, type: "line", toolbar: { show: !1 } },
    stroke: { dashArray: [0, 0, 2], width: [0, 2, 2], curve: "smooth" },
    fill: {
      opacity: [1, 1, 1],
      type: ["solid", "gradient", "gradient"],
      gradient: {
        type: "vertical",
        inverseColors: !1,
        opacityFrom: 0.5,
        opacityTo: 0,
        stops: [0, 90],
      },
    },
    markers: { size: [0, 0], strokeWidth: 2, hover: { size: 4 } },
    xaxis: {
      categories: [
        "فروردین",
        "اردیبهشت",
        "خرداد",
        "تیر",
        "مرداد",
        "شهریور",
        "مهر",
        "آبان",
        "آذر",
        "دی",
        "بهمن",
        "اسفند",
      ],
      axisTicks: { show: !1 },
      axisBorder: { show: !1 },
    },
    yaxis: { min: 0, axisBorder: { show: !1 } },
    grid: {
      show: !0,
      strokeDashArray: 3,
      xaxis: { lines: { show: !1 } },
      yaxis: { lines: { show: !0 } },
      padding: { top: 0, right: -2, bottom: 0, left: 10 },
    },
    legend: {
      show: !0,
      horizontalAlign: "center",
      offsetX: 0,
      offsetY: 5,
      markers: { width: 9, height: 9, radius: 6 },
      itemMargin: { horizontal: 10, vertical: 0 },
    },
    plotOptions: {
      bar: { columnWidth: "30%", barHeight: "70%", borderRadius: 3 },
    },
    colors: ["#1a80f8", "#17c553", "#7942ed"],
    tooltip: {
      shared: !0,
      y: [
        {
          formatter: function (e) {
            return void 0 !== e ? e.toFixed(1) + "k" : e;
          },
        },
        {
          formatter: function (e) {
            return void 0 !== e ? e.toFixed(1) + "k" : e;
          },
        },
      ],
    },
  },
  chart = new ApexCharts(
    document.querySelector("#dash-performance-chart"),
    options
  );
chart.render();
class VectorMap {
  initWorldMapMarker() {
    new jsVectorMap({
      map: "world",
      selector: "#world-map-markers",
      zoomOnScroll: !0,
      zoomButtons: !1,
      markersSelectable: !0,
      markers: [
        { name: "کانادا", coords: [56.1304, -106.3468] },
        { name: "برزیل", coords: [-14.235, -51.9253] },
        { name: "روسیه", coords: [61, 105] },
        { name: "چین", coords: [35.8617, 104.1954] },
        { name: "ایالات متحده آمریکا", coords: [37.0902, -95.7129] },
      ],
      markerStyle: {
        initial: { fill: "#7f56da" },
        selected: { fill: "#1bb394" },
      },
      labels: { markers: { render: (e) => e.name } },
      regionStyle: {
        initial: { fill: "rgba(169,183,197, 0.3)", fillOpacity: 1 },
      },
    });
  }
  init() {
    this.initWorldMapMarker();
  }
}
document.addEventListener("DOMContentLoaded", function (e) {
  new VectorMap().init();
});
