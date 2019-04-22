// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'horizontalBar',
  data: {
    labels: ["پاکستان تحريک انصاف‬‎", "پاکِستان پیپلز پارٹی", "پاکستان مسلم لیگ ن", "جماعتِ اسلامی پاکستان", "پاکستان مسلم لیگ ق", "جمیعت علمائے اسلام ف‬", "متحدہ قومی موومنٹ‬ پاکِستان", "عوامی نيشنل پارٹی", "پاکستان مسلم لیگ ف", "پاک سر زمین پارٹی‬‎", "پاکستان عوامی تحريک","عوامی ورکرز پارٹی","تحریک لبیک پاکستان","بلوچستان نيشنل پارٹی","پشتونخوا ملی عوامی پارٹی","پاکستان گرین پارٹی‎"],
    datasets: [{
      label: "Votes",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: [4215, 5312, 6251, 7841, 9821, 14984, 5000, 14000, 2000, 1000, 1200, 17000, 5000,6000,7000, 1100],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          
        },
        gridLines: {
          display: true
        },
        ticks: {
          maxTicksLimit: 9
        }
      }],
      yAxes: [{
        ticks: {
          min: 5,
          max: 20000000,
          maxTicksLimit: 15
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: true
    }
  }
});
