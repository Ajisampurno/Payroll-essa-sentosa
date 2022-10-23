$(document).ready(function(){
    
    $("#table-analisa").hide();
    $("#table-normalisasi").hide();
    $("#table-perangkingan").hide();

    $(".analisa").click(function(){
        $("#table-analisa").fadeToggle();
    });
    $(".normalisasi").click(function(){
        $("#table-normalisasi").fadeToggle();
    });
    $(".perangkingan").click(function(){
        $("#table-perangkingan").fadeToggle();
    });
});