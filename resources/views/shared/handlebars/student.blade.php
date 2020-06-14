<script id="student-template" type="text/x-handlebars-template">
    <div class="student">
        <div class="card"> 
            <div class="card-body">
            <img class="portrait" src="@{{ img }}" alt="@{{ nome }}">
                <div class="info">
                    <h3 class="card-title">@{{ nome }} (@{{ eta }})</h3>
                    <h4 class="card-subtitle">@{{ assunzione }} da @{{ azienda }} come @{{ ruolo }}</h4>
                    <h5>@{{ descrizione }}</h5>
                    <a href="students/show/@{{ slug }}">Dettagli</a>
                </div>
            </div>
        </div>
    </div>
</script>