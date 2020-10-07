<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="{{url('/user/store')}}" method="post">
        <table>
            <tr>
                <td>用户名</td>
                <td><input type="text" name="user_name"></td>
            </tr>
            <tr>
                <td>邮箱</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>密码</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>注册时间</td>
                <td><input type="text" name="reg_time"></td>
            </tr>
            <tr>
                <td>最后登录时间</td>
                <td><input type="text" name="last_login"></td>
            </tr>
            <tr>
                <td>最后登录IP</td>
                <td><input type="text" name="last_ip"></td>
            </tr>
            <tr>
                <td>登录次数</td>
                <td><input type="text" name="login_count"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="添加"></td>
            </tr>
        </table>
    </form>
</body>
</html>