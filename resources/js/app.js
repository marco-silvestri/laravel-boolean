require('./bootstrap');

$(document).ready(function(){

    var filter = $('#filter'),
        apiUrl = window.location.protocol + '//' + window.location.host + '/api/students/genders';

    var destination = $('.students');

    var source = $('#student-template').html();
    var template = Handlebars.compile(source);

    filter.on('change', function() {
        var gender = $(this).val();

        $.ajax({
            url: apiurl,
            method: 'POST',
            data: {
                filter: gender
            }  
        }).done(function(res){ 
            if (res.response.length > 0) {
                //reset view
                destination.html('');

                for (var i = 0; i < res.response.length; i++){
                    var thisItem = res.response[i];
                    var dataTemplate = {
                        slug : item.slug,
                        img : item.img,
                        nome : item.nome,
                        assunzione : (item.genere == 'm') ? 'Assunto' : 'assunta', //Operatore ternario 
                        azienda : item.azienda,
                        ruolo : item.ruolo,
                        descrizione : item.descrizione
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
    });

console.log('boom');

});