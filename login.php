<!DOCTYPE html>
<html>

<body>
    <table width="100%" height="100%" border="1">
        <tr height="5%">
            <td align="center">
                <h1>Sistem Pembayaran SPP Siswa</h1>
                <h2>SMK Bina Sejahtera 1 Kota Bogor</h2>
                <br>
        </tr>
        <tr height="95%">
            <td valign="top" align="center">
            <h2>Login Form</h2>
            <form name="form_login" action="verification.php" method="POST">
                <br>
                Username : <input type="text" name="username" required>
                <br>
                <br>
                Password : <input type="password" name="password" required>
                <br><br>
                <input type="submit" name="login" value="Login">  <input type='reset' value='Reset' />
                <br><br>
            </form>
            </td>
        </tr>
    </table>
</body>

</html>
