function grafico() {
    alert("grafico");
    console.log(ajaxReporteConsultores());
}

function pizza() {
    alert("pizza");
    console.log(ajaxReporteConsultores());
}

Highcharts.chart('container', {
    chart: {
        type: 'column',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 15,
            depth: 50,
            viewDistance: 25
        }
    },
    lang: {
        downloadCSV: "DescargaR CSV",
        downloadPNG: "Descargar Imagen PNG",
        downloadJPEG: "Descargar Imagen JPEG",
        downloadPDF: "Descargar documento PDF",
        downloadSVG: "Descargar Imagen Vector SVG",
        downloadXLS: "Descargar XLS",
        printChart: "Imprimir gráfico",
        datatable: "Ver tabla de datos",
        viewData: "Ver tabla de datos",
        viewFullscreen: "Ver en pantalla completa",
        exitFullscreen: "Salir de la pantalla completa"
    },
    title: {
        text: 'Performance Comercial'
    },
    subtitle: {
        text: 'Ganancias periódicas por consultor'
    },
    xAxis: {
        categories: [
            'Jan-2007',
            'Fev-2007'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (mm)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
            name: 'Ana Paula Fontes Martins Chiodaro',
            data: [49.9, 71.5]

        }, {
            name: 'Renato Marcus Pereira',
            data: [83.6, 78.8]

        },
        {
            name: 'Marcos Marcus Pereira',
            data: [78.8]

        }, {
            type: 'spline',
            name: 'Costo Fijo Medio',
            data: [30, 30],
            marker: {
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[3],
                fillColor: 'white'
            }
        }
    ]
});

Highcharts.chart('container2', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45
        }
    },
    title: {
        text: 'Porcentaje de ganancias por consultor'
    },
    subtitle: {
        text: ''
    },
    plotOptions: {
        pie: {
            innerSize: 100,
            depth: 45
        }
    },
    series: [{
        name: 'Delivered amount',
        data: [
            ['Ana Paula Fontes Martins Chiodaro', 49],
            ['Renato Marcus Pereira', 51]
        ]
    }]
});