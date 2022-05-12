function ajaxReporteConsultores() {
    let responseReporte = null;
    $.ajax({
        headers: {
            'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')
        },
        url: "performancecomercial/reporte",
        type: "POST",
        async: false,
        cache: false,
        data: {
            _token: $token,
            _method: "POST",
            consultores: getConsultores(),
            periodo: getFechaInicioFin()
        },
        datatype: 'html',
        success: function(data) {
            data.success ? responseReporte = data : alert(data.error);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
    return responseReporte;
}

// Retorna fecha inicio y final para consulta
// en la base de datos como periodo
function getFechaInicioFin() {
    let periodo = $('#periodo').val().split('-');
    orden = (fecha) => {
        let dato = fecha.split('/');
        return dato[2].trim() + '-' + dato[1].trim() + '-' + dato[0].trim();
    }
    return [orden(periodo[0]), orden(periodo[1])];
}