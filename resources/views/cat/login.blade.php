<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Nhập </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

    <style>

            h1{
                color: red;
            }
            .content{
                    background-image: url("https://kenh14cdn.com/2018/3/25/c2wcnrlusaa1zei-1521987168609372487302.jpg");
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    height: 720px;
                    width: 1360px;
                padding: 10px 60px;
                }
        .home ul li{
            text-decoration: none;
            list-style: none;
            padding: 5px 0px;
        }
    </style>

</head>
<body>
<div class="content">
    <h1><p>Login</p></h1>
    <form action="">
        <div class="form-group">
            <label>Username</label>
            <input type="text" placeholder="Tên đăng nhập">
            <br>
            <label>Password</label>
            <input type="password" placeholder="Mật khẩu ">
        </div>
        <div class="button">
            <input type="submit" value="Login" class="btn btn-info" onclick="after('Bạn vừa đăng nhập thành công')">
            <input type="register" value="Register" class="btn btn-info">
        </div>
    </form>
<div class="home">
    <ul>
        <li><a href="/home">Home </a></li>
        <li><a href="/register">Register </a></li>
        <li><a href="/login">Login </a></li>
    </ul>
</div>
</div>

</body>
</html>