<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pencatatan SPP</title>
    <style>
        body {
            background: linear-gradient(135deg, #5b8ef5, #4ecdc4);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 60px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
            gap: 60px;
            backdrop-filter: blur(10px);
        }

        .logo-box {
            background: white;
            padding: 40px;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .logo-box:hover {
            transform: scale(1.05);
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.3);
        }

        .logo-box img {
            width: 200px;
            height: 200px;
            display: block;
        }

        .form-box form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .form-box input[type="email"],
        .form-box input[type="password"] {
            width: 250px;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
        }

        .remember {
            display: flex;
            align-items: center;
            color: white;
            margin-bottom: 15px;
        }

        .remember input {
            margin-right: 5px;
        }

        .btn {
            width: 250px;
            background-color: white;
            color: #5b8ef5;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #e0e0e0;
            transform: scale(1.02);
        }

        ::placeholder {
            color: #aaa;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <div class="logo-box">
                <!-- Logo selembar kertas dan pena berwarna -->
                <img src="https://cdn-icons-png.flaticon.com/512/2921/2921222.png" alt="Logo Pencatatan SPP">
            </div>
            <div class="form-box">
                <form action="/sesi/login" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="Masukkan Username">
                    <input type="password" name="password" placeholder="Masukkan Password">
                    <div class="remember">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    <button type="submit" class="btn">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
