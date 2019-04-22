// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
   labels: ["پاکستان تحريک انصاف‬‎", "پاکِستان پیپلز پارٹی", "پاکستان مسلم لیگ ن", "جماعتِ اسلامی پاکستان", "پاکستان مسلم لیگ ق", "جمیعت علمائے اسلام ف‬", "متحدہ قومی موومنٹ‬ پاکِستان", "عوامی نيشنل پارٹی", "پاکستان مسلم لیگ ف", "پاک سر زمین پارٹی‬‎", "پاکستان عوامی تحريک","عوامی ورکرز پارٹی","تحریک لبیک پاکستان","بلوچستان نيشنل پارٹی","پشتونخوا ملی عوامی پارٹی","پاکستان گرین پارٹی‎"],
    datasets: [{
      data: [12.21, 15.58, 11.25, 8.32, 11,12,13,11,12,13,14,15,16,17,18,19],
      backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745', 'purple', 'Khaki  ', 'crimson','darkgreen','darkorange','Chartreuse ','DarkCyan ','blue','brown','Aquamarine ','grey','lightblue'],
    }],
  },
});
