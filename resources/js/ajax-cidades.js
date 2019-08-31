/**
 * JS para popular o select de cidades a partir do select de estados
 */
$(function () {
  $('.select-estados').on('change', function(ev){
    let estadoId = ev.currentTarget.value;
    $.ajax({
      url: '/estados/'+estadoId+'/cidades',
      type: 'GET',
      dataType: 'json',
      success: function (data, textStatus, jqXHR) {
        let cidadesHtml = '';
        for (let [key, value] of Object.entries(data.data)) {
          cidadesHtml += '<option value="'+key+'">'+value+'</option>';
        }
        $('.select-cidades').html(cidadesHtml);
      },
    });
  })
});
