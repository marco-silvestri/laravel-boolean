<script id="student-template" type="text/x-handlebars-template">
<a href="students/show/@{{ slug }}" class="student">
    <img src="@{{ img }}" alt="@{{ nome }}">
    <div class="info">
        <h3>@{{ nome }} (@{{ eta }})</h3>
        <h4></h4>
    </div>
</a>
</script>