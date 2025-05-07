    <?php

    $is_invalid = false;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $mysqli = require __DIR__ . "/database.php";
        
        // Use prepared statements to prevent SQL injection
        $stmt = $mysqli->prepare("SELECT * FROM user WHERE email = ?");
        $stmt->bind_param("s", $_POST["email"]);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $user = $result->fetch_assoc();
        
        if ($user) {
            if (password_verify($_POST["password"], $user["password_hash"])) {
                session_start();
                session_regenerate_id();
                $_SESSION["user_id"] = $user["id"];
                header("Location: dashboard.php");
                exit;
            }
        }
        
        $is_invalid = true;
    }

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                background: url('background-image.jpg') no-repeat center center fixed;
                background-size: cover;
                height: 100vh;
            }
            .login-container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100%;
            }
            .login-form {
                background: rgba(255, 255, 255, 0.9);
                padding: 30px;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }
        </style>
    </head>
    <body>
        
        <div class="login-container">
            <form class="login-form" method="post">
                <h1 class="text-center">Barangay Admin</h1>
                
                <?php if ($is_invalid): ?>
                    <div class="alert alert-danger" role="alert">Invalid login</div>
                <?php endif; ?>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required
                        value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
                
                <p class="text-center mt-3"><a href="forgot-password.php">Forgot password?</a></p>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>