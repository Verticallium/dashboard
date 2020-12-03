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

    light1Chart.update()
    light2Chart.update()
    light3Chart.update()
    light4Chart.update()
  }
})



fetch('/api/device/1/lighting')
  .then(function(response) {
        return response.json();
    })
  .then(function(data) {

    const light1Chart = buildChart('Luminaria 1', 'light1', data.id, data.light1);
    const light2Chart = buildChart('Luminaria 2', 'light2', data.id, data.light2);
    const light3Chart = buildChart('Luminaria 3', 'light3', data.id, data.light3);
    const light4Chart = buildChart('Luminaria 4', 'light4', data.id, data.light4);


  });



function buildChart(title, tag, labels, data) {

  const lightOptions = {
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
    options: lightOptions
  });

}
