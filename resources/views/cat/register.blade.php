<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <style>
        h1{
            color: blue;
        }
        .content {
            background-image: url("https://koreagram.net/assets/uploads/2018/04/28279804_1203742746422307_8092028718525972480_o.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 720px;
            width: 1360px;
            padding: 10px 30px;

        }
        .button{
            color: blue;
            padding: 0px 30px;
        }
       .underline ul li{
           text-decoration: none;
           list-style: none;
           padding: 0px 10px;
       }
    </style>
</head>
<body>
<div class="content">

        <h1>Register</h1>
        <form action="">
        <div class="form-group">
            <label>UserName :</label>
            <input type="text" placeholder="Nhập tên...">
            <br>
            <label>Password :</label>
            <input type="password" placeholder="Nhập mật khẩu...">
            <br>
            <label>C.Password :</label>
            <input type="password" placeholder="Nhập lại mật khẩu...">
            <br>
            <label>Balance :</label>
            <input type="text" placeholder="Nhập Balance...">
            <br>
            <label>Identity Card :</label>
            <input type="text" placeholder="Nhập thẻ căn cước...">
            <br>
            <label>Email :</label>
            <input type="text" placeholder="@gmail.com...">
            <br>
            <label> Gender:</label>
            <select>
                <option>nam</option>
                <option>nu</option>
            </select>

        </div>
        <div class="button">
            <input type="submit" value="Sumbit" class="btn btn-info" onclick="alert('Bạn vừa nhập thông tin thành công')">
            <input type="reset" value="Reset" class="btn btn-info" onclick="alert('Vui lòng nhập lại')">

        </div>
    </form>
    <div class="underline"><ul>
        <li><a href="/home">Home </a></li>
        <li><a href="/register">Register </a></li>
        <li><a href="/login">Login </a></li>
    </ul>
    </div>
</div>

</body>
</html>