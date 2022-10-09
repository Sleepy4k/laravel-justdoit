function createChart(chart, type, title, subTitle, xAxisCategories, yAxisTitle, seriesData) {
    Highcharts.chart(chart, {
        chart: {
            type: type
        },
        title: {
            text: title
        },
        subtitle: {
            text: subTitle
        },
        xAxis: {
            categories: xAxisCategories
        },
        yAxis: {
            title: {
                text: yAxisTitle
            }
        },
        legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'bottom'
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: true
            },
            series: {
                allowPointSelect: true
            }
        },
        series: seriesData,
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });   
}