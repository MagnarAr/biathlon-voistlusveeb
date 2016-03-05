var i=1;
$("#add_row").click(function(){
    /*$('#addr'+i).html(
        "<td>"+ (i+1) +"</td>" +
        "<td><input name='user"+i+"' type='text' placeholder='User' class='form-control input-md'  /></td>" +
        "<td><input  name='pass"+i+"' type='text' placeholder='Password'  class='form-control input-md'></td>" +
        "<td><input  name='ip"+i+"' type='text' placeholder='IP'  class='form-control input-md'></td>" +
        "<td><input  name='country"+i+"' type='text' placeholder='Country'  class='form-control input-md'></td>" +
        "<td><input  name='ipDisp"+i+"' type='text' placeholder='IP details'  class='form-control input-md'></td>");*/
    $('#addr'+i).html(
        "<td><input type='text' name='place"+i+"'  placeholder='"+(i+1)+"' class='form-control'/></td>"+
        "<td><input type='text' name='bibno"+i+"'  placeholder='##' class='form-control'/></td>"+
        "<td><input type='text' name='first"+i+"' placeholder='Eesnimi' class='form-control'/></td>"+
        "<td><input type='text' name='last"+i+"' placeholder='Perenimi' class='form-control'/></td>"+
        "<td><input type='text' name='country"+i+"' placeholder='Klubi' class='form-control'/></td>"+
        "<!--- Trahvid -->"+
        "<td><input type='text' name='prone1_"+i+"'  placeholder='L' class='form-control'/></td>"+
        "<td><input type='text' name='prone2_"+i+"'  placeholder='L' class='form-control'/></td>"+
        "<td><input type='text' name='stand1_"+i+"'  placeholder='L' class='form-control'/></td>"+
        "<td><input type='text' name='stand2_"+i+"'  placeholder='L' class='form-control'/></td>"+
        "<!-- /trahvid -->"+
        "<td><input type='text' name='totalmiss"+i+"'  placeholder='0' class='form-control'/></td>"+
        "<td><input type='text' name='starttime"+i+"'  placeholder='hh:mm:ss' class='form-control'/></td>"+
        "<td><input type='text' name='endtime"+i+"'  placeholder='hh:mm:ss' class='form-control'/></td>"
    );

    $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
    i++;
});
$("#delete_row").click(function(){
    if(i>1){
        $("#addr"+(i-1)).html('');
        i--;
    }
});

jQuery(function($){
    $('.table').footable();
});

$("#totalmiss0").focus(function(){
    var total = 0;
    total += $("#prone1_0").val();
    $("#totalmiss0").val(total);
});