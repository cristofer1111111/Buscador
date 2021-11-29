const APP_URL ='http://127.0.0.1:8000/';

$('#buscador').change(function(){
    var buscador=$('#buscador').val();
    $.ajax({
        type:'get',
        url: APP_URL = 'get/search',
        data:{
            buscador :search
        }
    });
});
