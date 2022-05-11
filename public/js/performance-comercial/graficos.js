function grafico(e) {
    // e.preventDefault();
    $('.modal').modal('show');
    let response = ajaxReporteConsultores();
    if (response.consultores.length > 0) {
        let _categories = getArrayCategories(response.periodos);
        let _series = getArraySeries(response.consultores, response.periodos);
        generarGraficoBarras(_categories, _series);
    } else {
        alert("No se encontraron datos en la consulta.");
    }
    setTimeout(function() {
        $("#graficoBarras").css("display", "block");
        $("#graficoPizza").css("display", "none");
        $("#tabConsultores").css("display", "none");
        $('.modal').modal('hide');
    }, 500);
}

function pizza(e) {
    //e.preventDefault();
    $('.modal').modal('show');
    let response = ajaxReporteConsultores();
    if (response.consultores.length > 0) {
        let gananciaTotal = 0;
        let consultoresPorNombre = getDTConsultoresPorNombre(response.consultores);
        let data = [];

        response.consultores.forEach(e => {
            gananciaTotal += e.ganancia;
        });

        for (i in consultoresPorNombre) {
            let ganancia = 0;
            consultoresPorNombre[i].forEach(consultor => {
                ganancia += consultor.ganancia;
            })
            data.push([i, ((ganancia / gananciaTotal) * 100)])
        }
        generarPizza(data);
    } else {
        alert("No se encontraron datos en la consulta");
    }
    setTimeout(function() {
        $("#graficoBarras").css("display", "none");
        $("#graficoPizza").css("display", "block");
        $("#tabConsultores").css("display", "none");
        $('.modal').modal('hide');
    }, 500);
}

function getArraySeries(consultores, periodos) {
    let series = [];
    let name = '';
    let data = [];
    let costoFijoPromedio = getCostoFijoPromedio(getSalarios(consultores));
    let serieCostoFijo = [];

    let consultoresPorNombre = getDTConsultoresPorNombre(consultores);
    for (i in consultoresPorNombre) {
        name = i;
        data = fullByNull(periodos);
        consultoresPorNombre[i].forEach(consultor => {
            periodos.forEach((periodo, index) => {
                if (consultor.tag === periodo.tag) {
                    data[index] = consultor.ganancia;
                }
            });
        });
        series.push({ name: name, data: data });
    }
    periodos.forEach(periodo => {
        serieCostoFijo.push(costoFijoPromedio);
    });
    series.push({
        type: 'spline',
        name: 'Costo Fijo Medio',
        data: serieCostoFijo,
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    })
    return series;
}

function fullByNull(periodos) {
    let cero = [];
    periodos.forEach(dato => {
        cero.push(null);
    });
    return cero;
}

function getArrayCategories(periodos) {
    let categories = [];
    periodos.forEach(element => {
        categories.push(element.tag);
    });
    return categories;
}

function generarGraficoBarras(_categories, _series) {
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
            categories: _categories,
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Ganancias (R$)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} R$</b></td></tr>',
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
        series: _series
    });

}

function generarPizza(_data) {
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
            name: 'Ganancia líquida',
            data: _data
        }]
    });
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
            text: 'Ganancias (R$)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} R$</b></td></tr>',
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
            data: [0, 78.8]

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