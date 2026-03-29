<?php include 'User.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Form PHP - Brone</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <form method="POST" action="">
        <input type="text" name="firstname" placeholder="Firstname" required>
        <input type="text" name="lastname" placeholder="Lastname" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <textarea name="address" placeholder="Address" required></textarea>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {

        // ambil data & amankan
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname  = htmlspecialchars($_POST['lastname']);
        $phone     = htmlspecialchars($_POST['phone']);
        $address   = htmlspecialchars($_POST['address']);

        $user = new User($firstname, $lastname, $phone, $address);

        echo "<div class='result'>";
        echo "<h3>Data Berhasil Disimpan</h3>";
        echo "<p>Hi, my name is <b>" . $user->getFullName() . "</b></p>";
        echo "<p>Phone Number: " . $user->phoneNumber . "</p>";
        echo "<p>Address: " . $user->address . "</p>";
        echo "<a href='index.php'>Reset</a>";
        echo "</div>";
    }
    ?>

</div>

</body>
</html>
