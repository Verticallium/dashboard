/* eslint-disable object-shorthand */
/* global Chart, coreui, coreui.Utils.getStyle, coreui.Utils.hexToRgba */

/**
 * --------------------------------------------------------------------------
 * CoreUI Boostrap Admin Template (v3.0.0): main.js
 * Licensed under MIT (https://coreui.io/license)
 * --------------------------------------------------------------------------
 */

/* eslint-disable no-magic-numbers */
// Disable the on-canvas tooltip
Chart.defaults.global.pointHitDetectionRadius = 1
Chart.defaults.global.tooltips.enabled = false
Chart.defaults.global.tooltips.mode = 'index'
Chart.defaults.global.tooltips.position = 'nearest'
Chart.defaults.global.tooltips.custom = coreui.ChartJS.customTooltips
Chart.defaults.global.defaultFontColor = '#646470'
Chart.defaults.global.responsiveAnimationDuration = 1

document.body.addEventListener('classtoggle', event => {
  if (event.detail.className === 'c-dark-theme') {
    if (document.body.classList.contains('c-dark-theme')) {
      Chart.defaults.global.defaultFontColor = '#fff'
    } else {
      Chart.defaults.global.defaultFontColor = '#646470'
    }

    hum1Chart.update();
    hum2Chart.update();
    hum3Chart.update();
  }
})



fetch('/api/device/1/humidity')
  .then(function(response) {
        return response.json();
    })
  .then(function(data) {

    const hum1Chart = buildChart('Humedad 1', 'hum1', data.id, data.hum1);
    const hum2Chart = buildChart('Humedad 2', 'hum2', data.id, data.hum2);
    const hum3Chart = buildChart('Humedad 3', 'hum3', data.id, data.hum3);


  });



  function buildChart(title, tag, labels, data) {

    const humOptions = {
      maintainAspectRatio: false,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines: {
            drawOnChartArea: false
          }
        }],
        yAxes: [{
          ticks: {
            beginAtZero: true,
            maxTicksLimit: 5,
            stepSize: Math.ceil(250 / 5),
            //max: 250
          }
        }]
      },
      elements: {
        point: {
          radius: 0,
          hitRadius: 10,
          hoverRadius: 4,
          hoverBorderWidth: 3
        }
      },
      tooltips: {
        intersect: true,
        callbacks: {
          labelColor: function(tooltipItem, chart) {
            return { backgroundColor: chart.data.datasets[tooltipItem.datasetIndex].borderColor };
          }
        }
      }
    };


    return new Chart(document.getElementById(tag + '-chart'), {
      type: 'line',
      data: {
        labels: labels,
        datasets: [
          {
            label: title,
            backgroundColor: coreui.Utils.hexToRgba(coreui.Utils.getStyle('--info'), 10),
            borderColor: coreui.Utils.getStyle('--info'),
            pointHoverBackgroundColor: '#fff',
            borderWidth: 2,
            data: data
          }
        ]
      },
      options: humOptions
    });

  }
