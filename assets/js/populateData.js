var raceCounter = -1;
(function poll() {
    setTimeout(function() {
        $.ajax({
            url: "/index.php/Races/getRaceCountJSON/",
            success: function(data) {
                if(raceCounter == -1){
                    raceCounter = parseInt(data);
                }
                else{
                    if(parseInt(data)>raceCounter){
                        raceCounter = parseInt(data);
                        alert("Lisati uus võistlus!");
                    }
                }
            },
            dataType: "json",
            complete: poll
        });
    }, 5000);
}) ();

$("#activeRace").change(function() {
    var selectedMark = $(activeRace).val();
    if (selectedMark != "") {
        console.log(selectedMark);
        $.ajax({
            type: "GET",
            url: "/index.php/Addresults/getRacesJSON/"+selectedMark,
            dataType: "json",
            success: function(data) {
                $("#raceClasses").empty();
                var dataNodes = data.map(function(item) {
                    return "<option value='" + item.id + "'>" + item.agegroup + "</option>";
                });

                $("#raceClasses").append(dataNodes);
            },
            error: function(data){
                $("#raceClasses").empty();
            }
        });
    }
});


var start = 5; // Start from
var amount = 5; // Load step
var pageNr = 2; // Shown in the URL, Initially added on "load_more_button" click

function syncRacesToURL(){
    var currentURL = window.location.href;
    if(currentURL.indexOf('page_nr')> -1){
        var currentPage = parseInt(currentURL.split("#")[1].split('=')[1]);

        pageNr = currentPage + 1; // For history.pushState
        var newAmount = (currentPage -1) * 5; // For page 3, We need additional 10 Items (not 15)

        loadRaces(start, newAmount, false);

        start = pageNr * 5 - start;


    }

}
syncRacesToURL();

function noMoreResults() {
    $('#race-result-container').append(
        '<div class="alert alert-info"> Rohkem tulemusi kuvamiseks pole. </div>'
    );
    $('#load_more_button').hide();

}

function loadRaces(startFrom, amount, incrementPages) {
    return $.ajax({
        type: "GET",
        url: '/index.php/Races/loadMoreRaces/'+startFrom+'/'+amount,
        dataType: 'json',
        success: function(data) {

            if(incrementPages) {
                pageNr = pageNr +1;
                start = start + 5;
            }

            $('#load-more-loader').addClass('hidden');

            if(data.length === 0) {
                return noMoreResults();
            }
            history.pushState({}, "page nr", "#page_nr=" + (pageNr-1));
            var listNodes = data.map(function(item) {
                return '<li title="'+ item.name +'" class="list-group-item result-container__list-element clickable" onclick="openRace(this)">'
                    + item.name + ' ' + item.date +
                    '</li>';
            });
            $('#race-result-container .list-group').append(listNodes);
        },
        error: function(data){
            alert("bad network");
        }
    });
}



$('#load_more_button').click(function() {

    $('#load-more-loader').removeClass('hidden');

    loadRaces(start, amount, true);

});

function openRace(element) {
    window.location.href = 'http://biathlon.cs.ut.ee/index.php/raceview/showdata/' + element.getAttribute("title");
}