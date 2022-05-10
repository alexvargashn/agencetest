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
            consultores: getConsultores()
        },
        datatype: 'html',
        success: function(data) {
            console.log(data);
            responseReporte = data;
        }
    });
    return responseReporte;
}