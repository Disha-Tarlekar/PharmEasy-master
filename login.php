<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PharmEasy - Login</title>
    <link rel="icon" href="images/logo.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('https://img.pikbest.com/wp/202405/medical-drug-grade-manufacturing-on-blue-background-3d-rendered-medicine_9827806.jpg!bw700') no-repeat center center/cover;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        .form-control {
            border-radius: 10px;
        }
        .btn-custom {
            background-color: #28a745;
            color: white;
            border-radius: 10px;
            font-size: 16px;
            padding: 10px;
        }
        .btn-custom:hover {
            background-color: #218838;
        }
        .extra-links a {
            text-decoration: none;
            color: #007bff;
        }
        .extra-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="mb-4">Sign In</h2>
        <?php session_start(); include "includes/functions.php"; login(); message(); ?>
        <form method="post" action="login.php">
            <div class="mb-3">
                <input type="text" class="form-control" name="userEmail" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-custom w-100" name="login">Login</button>
        </form>
        <div class="extra-links mt-3">
            <a href="#"></a>
            <br>
            <a href="signUp.php">Don't have an account? Sign Up Here</a>
            <br>
            <a href="admin/login.php">Sign In For Admin</a>
        </div>
    </div>
</body>
</html>