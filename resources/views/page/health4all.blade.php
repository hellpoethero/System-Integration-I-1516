<form action="http://localhost/health4all/home/login" method="post" accept-charset="utf-8" class="form-signin" role="form" id="form">

    <input hidden="" type="text" class="form-control" placeholder="Username" name="username" value="admin" required="" autofocus=""><br>
    <input hidden="" type="password" class="form-control" placeholder="Password" name="password" value="password" required=""><br>

</form>

<script>
    window.onload = function() {
        document.getElementById("form").submit();
    }

</script>