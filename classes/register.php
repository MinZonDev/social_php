<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <style>
        /* Định dạng CSS cho giao diện đăng ký */
        /* Định dạng form và các thành phần bên trong */
        form {
            margin: auto;
            width: 50%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
    </style>
</head>
<body>
    <h2>Đăng ký tài khoản</h2>
    <form action="" method="POST">
        <label for="username">Tên người dùng:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Đăng ký">
    </form>
    <?php
    // Kiểm tra và hiển thị thông báo sau khi xử lý đăng ký
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($error_message)) {
            echo '<div class="error">' . $error_message . '</div>';
        } elseif (isset($success_message)) {
            echo '<div class="success">' . $success_message . '</div>';
        }
    }
    ?>
</body>
</html>
