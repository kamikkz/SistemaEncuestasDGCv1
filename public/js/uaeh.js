$(document).ready(inicializar);
function inicializar(){
    $('select').selectpicker();//uso de plugin
    $("#subprogramaOPC1").hide();//Esconder divs
    $("#subprogramaOPC2").hide();//Esconder divs
    $("#subprogramaOPC3").hide();//Esconder divs
    $("#subprogramaOPC4").hide();//Esconder divs
    $('#kami').DataTable();//tablas
    $('select').selectpicker();//selects
}

function pertenece01() {
    var select = document.getElementById("sino01");

    if(select.value=='S'){
        document.getElementById('no01no').disabled = true;
        document.getElementById('goal_pdis_id').disabled = false;
        $("#subprogramaOPC1").show();
        $("#subprogramaOPC2").hide();
    }else if(select.value=='N') {
        document.getElementById('no01no').disabled = false;
        document.getElementById('goal_pdis_id').disabled = true;
        $("#subprogramaOPC2").show();
        $("#subprogramaOPC1").hide();
    }else{
        alert("Acción no autorizada");
    }
}
function pertenece02() {
    var select = document.getElementById("sino02");

    if(select.value=='S'){
        document.getElementById('no02no').disabled = true;
        document.getElementById('objective_pdis_id').disabled = false;
        $("#subprogramaOPC3").show();
        $("#subprogramaOPC4").hide();
    }else if(select.value=='N') {
        document.getElementById('no02no').disabled = false;
        document.getElementById('objective_pdis_id').disabled = true;
        $("#subprogramaOPC4").show();
        $("#subprogramaOPC3").hide();
    }else{
        alert("Acción no autorizada");
    }
}