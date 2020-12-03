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

    tem1Chart.update()
    tem2Chart.update()
    tem3Chart.update()
    tem4Chart.update()
  }
})



fetch('/api/device/1/temperature')
  .then(function(response) {
        return response.json();
    })
  .then(function(data) {

    const tem1Chart = buildChart('Temperatura 1', 'tem1', data.id, data.tem1);
    const tem2Chart = buildChart('Temperatura 2', 'tem2', data.id, data.tem2);
    const tem3Chart = buildChart('Temperatura 3', 'tem3', data.id, data.tem3);
    const tem4Chart = buildChart('Temperatura 4', 'tem4', data.id, data.tem4);


  });



function buildChart(title, tag, labels, data) {

  const temOptions = {
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
    options: temOptions
  });

}
