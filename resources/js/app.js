require('./bootstrap');

$(document).ready(function(){

    var filter = $('#filter'),
        apiUrl = window.location.protocol + '//' + window.location.host + '/api/students/genders',
        destination = $('.student-container'),
        source = $('#student-template').html(),
        template = Handlebars.compile(source);

        getData(apiUrl, destination, 'all', template);

    filter.on('change', function() {
        var gender = $(this).val();
        getData(apiUrl, destination, gender, template);
    });
});

function getData(apiUrl, destination, gender, template){
    $.ajax({
        url: apiUrl,
        method: 'POST',
        data: {
            filter: gender
        }  
    }).done(function(res){ 
        //reset view
        destination.html('');
        if (res.response.length > 0) {
            for (var i = 0; i < res.response.length; i++){
                var thisItem = res.response[i];
                var dataTemplate = {
                    slug : thisItem.slug,
                    img : thisItem.img,
                    nome : thisItem.nome,
                    eta : thisItem.eta,
                    assunzione : (thisItem.genere == 'm') ? 'Assunto' : 'Assunta', //Operatore ternario 
                    azienda : thisItem.azienda,
                    ruolo : thisItem.ruolo,
                    descrizione : thisItem.descrizione
                }
                var output = template(dataTemplate);
                destination.append(output);
            }
            console.log(res.response);
        } else {
            console.log(res.error);
            
        }
    }).fail(function(){
        console.log('Api cannot be reached');
    })
}