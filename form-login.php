<?php
ob_start();
session_start();
?>
<html>
<body>
    <form action="login.php?op=in" method="POST"class="margin-bottom-0">
        <table border="0" cellpadding="1">
            <tr>
                <td width="80">Username</td>
                <td width="200"><input type="text" size="25" maxlength="32" name="id_user" required /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" size="25" maxlength="255" name="password" required /></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">LOGIN</button></td>
            </tr>
        </table>
    </form>
</body>
</html>