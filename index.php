<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Output 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        fieldset {
            margin-top: 20px;
            padding: 15px;
        }
        table {
            width: 100%;
        }
        td {
            padding: 8px;
        }
    </style>
</head>
<body>

    <h1>PHP Output No. 1</h1>
    
    <fieldset>
        <form action="redirect.php" method="POST">
            <table>
                <tr>
                    <td><label for="age">Age</label></td>
                    <td>
                        <input type="number" id="age" name="age" placeholder="Input Age" required min="1" />
                    </td>
                </tr>
                <tr>
                    <td><label for="gender">Gender</label></td>
                    <td>
                        <select name="gender" id="gender" required>
                            <option value="" disabled selected>Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>
                        <input type="email" id="email" name="email" placeholder="Enter Your Email" required />
                    </td>
                </tr>
                <tr>
                    <td><label for="address">Address</label></td>
                    <td>
                        <input type="text" id="address" name="address" placeholder="Enter Your Address" required />
                    </td>
                </tr>
                <tr>
                    <td><label for="contact">Contact Number</label></td>
                    <td>
                        <input type="tel" id="contact" name="no" placeholder="Enter Contact Number" required 
                               pattern="[0-9]{10,15}" title="Enter a valid contact number (10-15 digits)" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Submit Data">
                        <input type="reset" value="Cancel">
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>

</body>
</html>
