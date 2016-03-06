var i=1;
$("#add_results_row").click(function(){
   addNewRow(i+1, '##', 'Eesnimi', 'Perenimi', 'Klubi', 'L', 'L', 'P', 'P', '0', 'hh:mm:ss', 'hh:mm:ss');
});

$("#add_race_row").click(function(){
    addNewRow('Vanuseklass', 'Distants');
});

$("#save_race").click(function(){
    var postHash = $('#tab_logic').children().closest('tbody').find('tr').map(function(i, row){
        var values = $(row).find('input').serializeArray();
        return {
            age: values[0].value,
            distance: values[1].value
        }
    });

    debugger;
});

$("#delete_row").click(function(){
    if(i>1){
        $("#addr"+(i-1)).html('');
        i--;
    }
});

function addNewRow() {
    $('#tab_logic').append('<tr id="addr'+(i)+'"></tr>');
    var newCells = Array.from(arguments).map(function(arg) {
        return "<td><input type='text' placeholder='"+arg+"' class='form-control'/></td>";
    });

    $('#addr' + i).append(newCells);
    i++;


}
/*
jQuery(function($){
    $('.table').footable();
});
*/
$("#totalmiss0").focus(function(){
    var total = 0;
    total += $("#prone1_0").val();
    $("#totalmiss0").val(total);
});