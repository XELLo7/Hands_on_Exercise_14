<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $age = isset($_POST['age']) ? htmlspecialchars($_POST['age']) : 'N/A';
        $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : 'N/A';
        $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'N/A';
        $address = isset($_POST['address']) ? htmlspecialchars($_POST['address']) : 'N/A';
        $contact = isset($_POST['no']) ? htmlspecialchars($_POST['no']) : 'N/A';
    } else {
        // Redirect back if accessed directly
        header("Location: index.html");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PHP Output No. 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 50%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body>
    <h1>PHP Output No. 1</h1>
    <table>
        <tr>
            <td width="150"><strong>Age:</strong></td>
            <td><?php echo $age; ?></td>
        </tr>
        <tr>
            <td><strong>Gender:</strong></td>
            <td><?php echo $gender; ?></td>
        </tr>
        <tr>
            <td><strong>Email:</strong></td>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <td><strong>Address:</strong></td>
            <td><?php echo $address; ?></td>
        </tr>
        <tr>
            <td><strong>Contact Number:</strong></td>
            <td><?php echo $contact; ?></td>
        </tr>
    </table>
    <a href="./">Return to Main Form</a>
</body>
</html>
