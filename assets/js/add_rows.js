var i=1;
var race_ages = [
    { value: 'N13', display_name: 'N13'},
    { value: 'M13', display_name: 'M13'},
    { value: 'N15', display_name: 'N15'},
    { value: 'M15', display_name: 'M15'},
    { value: 'N17', display_name: 'N17'},
    { value: 'M17', display_name: 'M17'},
    { value: 'N19', display_name: 'N19'},
    { value: 'M19', display_name: 'M19' },
    { value: 'N21', display_name: 'N21'},
    { value: 'M21', display_name: 'M21' },
    { value: 'N', display_name: 'Naised' },
    { value: 'M', display_name: 'Mehed' },
    { value: 'N40', display_name: 'N40'},
    { value: 'M40', display_name: 'M40' },
    { value: 'N50', display_name: 'N50'},
    { value: 'M50', display_name: 'M50' },
    { value: 'N60', display_name: 'N60'},
    { value: 'M60', display_name: 'M60' },
    { value: 'N-Ama', display_name: 'N-Har' },
    { value: 'M-Ama', display_name: 'M-Har' },
];

$("#add_results_row").click(function(){
   addNewRow('Koht', 'Bib', 'Eesnimi', 'Perenimi', 'Klubi', 'L1', 'L2', 'P1', 'P2', 'Kokku', 'Algus', 'Lopp');
});

$("#add_race_row").click(function(){
    addNewRow({label: 'Vanuseklass', list: race_ages}, 'Distants');
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
        if(typeof(arg) === 'string' || typeof(arg) === 'number') {
            var nameArray = arg+ "[]";
            return "<td><input type='text' placeholder='"+arg+"' name='"+nameArray+"' class='form-control'/></td>";
        } else {
            // Currently only handling list types
            var tdNode = $('<td></td>');
            var emptySelect = $("<select class='form-control' name='"+arg.label+'[]'+"' />");
            var listOptions = arg.list.map(function(li) {
                return "<option value=" + li.value + ">" + li.display_name + "</option>";
            });

            var completedSelect = emptySelect.append(listOptions);
            return tdNode.append(completedSelect);
        }

    });

    $('#addr' + i).append(newCells);
    var tdNode = $('<td></td>');
    var deleteNode = $('<span class="glyphicon glyphicon-remove clickable alert-danger"></span>');
    $('#addr' + i).append(tdNode.append(deleteNode));

    $(deleteNode).click(function() {
        this.parentElement.parentElement.remove();
    });
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