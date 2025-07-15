<!doctype html>
<html lang="fa">
<head>
    <title>Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/scss/style.scss">
    <script src="../assets/js/jquery-3.0.0.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="assets/js/login.js"></script>
</head>
<body>
    <div class="box">
        <form action="" id="frmLogin">
            <table class="table table-bordered">
                <tr>
                    <td>نام کاربری</td>
                    <td>
                        <input type="text" class="form-control" name="txtUsername">
                    </td>
                </tr>
                <tr>
                    <td> رمز عبور</td>
                    <td>
                        <input type="password" class="form-control" name="txtPassword">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center">
                        <a href="">رمز عبور را فراموش کرده ام!</a>
                        <br><br>
                        <input type="submit" class="btn btn-success" value="ورود">

                        <div id="loading"></div>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>