/**
 * Created by magnar on 10/04/16.
 */

getLatestValues();
function supportsLocalStorage(){
    return ('localStorage' in window) && window['localStorage'] !== null;
}

function getLatestValues(){
    if(!supportsLocalStorage()) return false;

    if(localStorage['race_name'] !== null && localStorage['race_name'] !== undefined){
        document.getElementById("race_name").value = localStorage['raceName'];
    }
    if(localStorage['name'] !== null && localStorage['name'] !== undefined){
        document.getElementById("name").selectedIndex = localStorage['raceType'];
    }
    if(localStorage['race_date'] !== null && localStorage['race_date'] !== undefined){
        document.getElementById("race_date").value = localStorage['raceDate'];
    }

    var amount = parseInt(localStorage['groupsAmount']);
    for(var a = 1; a < amount; a++ ){
        addNewRow({label: 'Vanuseklass', list: race_ages}, 'Distants');
    }

    var tableRows = document.getElementById("raceTable").getElementsByTagName("tr");

    for(var b = 0; a < tableRows.length; b++ ){
        var cell_1 = tableRows[b].children[0].children[0];
        var cell_2 = tableRows[b].children[1].children[0];
        if(localStorage['group.'+b+'.age.index'] !== null){
            cell_1.selectedIndex = localStorage['group.'+b+'.age.index'];
        }
        if(localStorage['group.'+b+'.distance'] !== null){
            cell_2.value = localStorage['group.'+b+'.distance'];
        }
    }


}

function checkConnection(){
    var online = navigator.onLine;
    debugger;
    if(!online){
        saveFormValues();
        alert('Puudub internetiühendus!');
        return false;
    }
    clearOldData();
    return true;
}

function saveFormValues(){

    if(!supportsLocalStorage()) return false;
    localStorage['groupsAmount'] = document.getElementById("raceTable").getElementsByTagName("tr").length;
    localStorage['raceDate'] = document.getElementById("race_date").value;
    localStorage['raceType'] = document.getElementById("name").selectedIndex;
    localStorage['raceName'] = document.getElementById("race_name").value;
    var tableRows = document.getElementById("raceTable").getElementsByTagName("tr");

    for(var a = 0; a < tableRows.length; a++ ){
        var cell_1 = tableRows[a].children[0].children[0];
        var cell_2 = tableRows[a].children[1].children[0];
        localStorage['group.'+a+'.age.index'] = cell_1.selectedIndex;
        localStorage['group.'+a+'.distance'] = cell_2.value;
    }
    //debugger;
}

function clearOldData(){
    window.localStorage.clear();
}