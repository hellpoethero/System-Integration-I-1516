
<!-- saved from url=(0050)http://localhost/openemr/interface/login/login.php -->
<html>
<body>

<form method="POST" id="form" action="http://localhost/openemr/interface/main/main_screen.php?auth=login&site=default" target="_top" name="login_form" onsubmit="return imsubmitted();">

<input type="hidden" name="new_login_session_management" value="1">

<input type="hidden" name="authProvider" value="Default">



<input class="entryfield" type="text" size="10" name="authUser" value="admin">
<input class="entryfield" type="password" size="10" name="clearPass" value="admin">
<input class="button large" type="submit" onclick="transmit_form()" value="Login">
</form>

<script>
    window.onload = function() {
        document.getElementById("form").submit();
        //document.getElementById("form").addEventListener("submit", window.location="http://www.google.com");
    }
</script>


</body></html>