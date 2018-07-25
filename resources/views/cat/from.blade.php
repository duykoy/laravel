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
    <h1>Nhập thông tin của mèo cần bán</h1>
    <form action="stort" method="POST">
        {{csrf_field()}}
        <div>
            <label>Tên</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Mô tả</label>
            <input type="text" name="description">
        </div>
        <div>
            <label>Ảnh đại diện</label>
            <input type="text" name="image">
        </div>
        <div>
            <label>Gía tiền</label>
            <input type="text" name="price">
        </div>
        <div>
            <input type="submit" value="Lưu thông tin cần mua">
            <input type="reset" value="Làm lại">
        </div>
    </form>

</body>
</html>