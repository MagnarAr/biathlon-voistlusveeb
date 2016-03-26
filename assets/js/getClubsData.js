$.get('/assets/xml/klubid.xml')
    .done(function(data){
        // this function is executed if the request was sucessful

        addData(data);
    })
    .fail(function(){
        // this function is executed if the request fails
    })
;

function addData(data){
    // query the document to get the list element an store it for later use
    var list = $('dl');
// data is a xml document now, so we query it...
    $(data)
    // and search for all <field> elements
        .find('klubi')
        // now we can play with each <field>
        .each(function(index, element){
            // as example we query & store the field
            var field = $(element)
            // get the values we want
            var name = field.find('nimi').text()
            var value = field.find('tutvustus').text()
            // and append some html in the <dl> element we stored previously
            list
                .append('<dt>'+name+': </dt>')
                .append('<dd>'+value+'</dd>')
            ;
        })
    ;
}