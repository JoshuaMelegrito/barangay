<?php

$email = $_POST["email"];

// Generate a token and its hash
$token = bin2hex(random_bytes(16));
$token_hash = hash("sha256", $token);
$expiry = date("Y-m-d H:i:s", time() + 60 * 30); // Token valid for 30 minutes

// Include database connection
$mysqli = require __DIR__ . "/database.php";

try {
    // Prepare the SQL statement
    $sql = "UPDATE user
            SET reset_token_hash = ?,
                reset_token_expires_at = ?
            WHERE email = ?";

    $stmt = $mysqli->prepare($sql);
    if ($stmt === false) {
        throw new Exception("MySQL prepare error: " . $mysqli->error);
    }

    $stmt->bind_param("sss", $token_hash, $expiry, $email);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // Include PHPMailer
        $mail = require __DIR__ . "/mailer.php"; // Ensure this returns a PHPMailer object

        $mail->setFrom('arnaldomagtibay@gmail.com', 'BarangayGrpp'); // Set the sender's email and name
        $mail->addAddress($email); // Add a recipient
        $mail->Subject = "Password Reset";
        $mail->isHTML(true); // Set email format to HTML
        $mail->Body = <<<END
        Click <a href="http://localhost/user/login/reset-password.php?token=$token">here</a> 
        to reset your password.
        END;

        // Attempt to send the email
        try {
            $mail->send();
            header("location: message.html");
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";
        }
    } else {
        echo "No user found with that email address or update failed.";
    }

    // Close the statement
    $stmt->close();
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
