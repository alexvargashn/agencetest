function relatorico() {
    alert("relatorico");
    tabularDataConsultores(
        getDTConsultoresPorNombre(
            ajaxReporteConsultores().consultores));
}

function getConsultores() {
    let consultores = [];
    $('#consultores option:selected').each(function(i, selected) {
        consultores[i] = $(selected).val();
    });
    return consultores;
}

function getDTConsultoresPorNombre(consultores) {
    let ordenada = consultores.reduce(function(resultado, actual) {
        resultado[actual.nombreusuario] = resultado[actual.nombreusuario] || [];
        resultado[actual.nombreusuario].push(actual);
        return resultado;
    }, {});
    return ordenada;
}

function tabularDataConsultores(consultores) {
    let html = '';
    let tabla = $('#tabConsultores');
    tabla.html('');
    let j = 0;

    for (i in consultores) {
        let [sumGanancia, sumCostoFijo, sumComision, sumLucro] = [0, 0, 0, 0];
        html += generarEncabezadoConsultor(i);
        html += generarComienzoCuerpoTablaConsultor(j);
        consultores[i].forEach(dato => {
            html += generartrConsultor(dato);
            sumGanancia += dato.ganancia;
            sumCostoFijo += dato.costofijo;
            sumComision += dato.comision;
            sumLucro += dato.lucro;
        });
        html += getFinalTR(sumGanancia, sumCostoFijo, sumComision, sumLucro);;
        html += generarCierreTablaConsultor();
        tabla.append(html);
        $('.tablaConsultores-' + j).DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": false,
            "autoWidth": false,
            "responsive": true
        });
        html = '';
        j++;
    }
}

function getFinalTR(sumGanancia, sumCostoFijo, sumComision, sumLucro) {
    let html = '<tr class="card-header" style="background-color: rgb(176, 182, 191);">';
    html += '<td style="font-weight: bold;">Saldo</td>';
    html += '<td><i><b>' + gettdMoneda(sumGanancia) + '</i></b></td>';
    html += '<td><i><b>' + gettdMoneda(sumCostoFijo) + '</i></b></td>';
    html += '<td><i><b>' + gettdMoneda(sumComision) + '</i></b></td>';
    html += '<td style="color:blue;"><i><b>' + gettdMoneda(sumLucro) + '</i></b></td>';
    html += '</tr>';
    return html;
}

function gettdMoneda(valor) {
    const moneda = function(number) {
        return new Intl.NumberFormat('pt-BR', {
            style: 'currency',
            currency: 'BRL',
            minimumFractionDigits: 2
        }).format(number);
    };
    return moneda(valor);
}

function getFonColor(valor) {
    return valor < 0 ? 'style="color:red;"' : 'style="color:black;"';
}

function generarEncabezadoConsultor(nombreconsultor) {
    let html = '';
    if (nombreconsultor != null) {
        html += '<div class="card">';
        html += '<div class="card-header">';
        html += '<h3 class="card-title">';
        html += nombreconsultor;
        html += '</h3>';
        html += '</div>';
    }
    return html;
}

function generarComienzoCuerpoTablaConsultor(i) {
    let html = '<div class="card-body">';
    html += '<table class="table table-bordered tablaConsultores-' + i + '" > ';
    html += '<thead>';
    html += '<tr>';
    html += '<th>Período</th>';
    html += '<th>Ganancias</th>';
    html += '<th>Costo Fijo</th>';
    html += '<th>Comisión</th>';
    html += '<th>Lucro</th>';
    html += '</tr>';
    html += '</thead>';
    html += '<tbody>';
    return html;
}

function generartrConsultor(consultor) {
    let html = '';
    if (consultor != null) {
        html += '<tr>';
        html += '<td>' + consultor.periodo + '</td>';
        html += '<td ' + getFonColor(consultor.ganancia) + '>' + gettdMoneda(consultor.ganancia) + '</td>';
        html += '<td ' + getFonColor(consultor.costofijo) + '>' + gettdMoneda(consultor.costofijo) + '</td>';
        html += '<td ' + getFonColor(consultor.comision) + '>' + gettdMoneda(consultor.comision) + '</td>';
        html += '<td ' + getFonColor(consultor.lucro) + '>' + gettdMoneda(consultor.lucro) + '</td>';
        html += '</tr>';
    }
    return html;
}

function generarCierreTablaConsultor() {
    let html = '</tr>';
    html += '</tbody>';
    html += '</table>';
    html += '</div>';
    html += '</div>';
    return html;
}