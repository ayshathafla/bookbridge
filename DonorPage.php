<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK BRIDGE - Donor Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(142, 192, 113);
            color: #062a15;
            margin: 0;
            padding: 0;
        }
        h1, p {
            text-align: center;
        }
        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: rgb(232, 240, 227);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label, input, select, button {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        input, select, button {
            padding: 8px;
            border: 1px solid #040404;
            border-radius: 4px;
        }
        button {
            background-color: rgb(40, 82, 16);
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: rgb(125, 166, 100);
        }
    </style>
</head>
<body>
    <h1>WELCOME DONORS</h1>
    <p>Your support to Book Bridge puts books in the hands of families who need them.</p>
    <p><b>Thank You!</b></p>

    <form id="donorForm" method="post" action="DonorPage.php">
        <label for="donorName">Donor Name:</label>
        <input type="text" id="donorName" name="donorName" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="bookName">Book Name:</label>
        <input type="text" id="bookName" name="bookName" required>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required>

        <label for="bookType">Book Type:</label>
        <select id="bookType" name="bookType">
            <option value="Programming">Programming</option>
            <option value="Educational" selected>Educational</option>
            <option value="Fiction">Fiction</option>
            <option value="History">History</option>
            <option value="Biography">Biography</option>
            <option value="Poetry">Poetry</option>
            <option value="Politics">Politics</option>
            <option value="Other">Other</option>
        </select>
        

        <button type="submit" name="submit">Make Donation</button>
    </form>

    <script>
        document.getElementById("donorForm").onsubmit = function() {
            alert("Thank you for your donation!");
        };
    </script>
</body>
</html>

<?php
$servername = "localhost";
$username = "donor";
$password = "txOPbEwC3RQv.ztn"; 
$database = "donorpage1";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])) {
    $donorName = mysqli_real_escape_string($conn, $_POST['donorName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $bookName = mysqli_real_escape_string($conn, $_POST['bookName']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    // $bookType = mysqli_real_escape_string($conn, $_POST['bookType']);

    $sql = "INSERT INTO donordetails (donorName, Email, bookName, Author) VALUES ('$donorName', '$email', '$bookName', '$author')";
    if (mysqli_query($conn, $sql)) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>




