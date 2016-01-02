<form action="http://localhost/chikitsa/index.php/login/valid_signin" method="post" accept-charset="utf-8" id="form">

        <input type="hidden" name="username" id="username" class="form-control" value="admin"/>

        <input type="hidden" class="form-control" name="password" id="password" value="admin"/>
</form>

<script>
    window.onload = function() {
        document.getElementById("form").submit();
    }

</script>