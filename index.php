<?php
include "Database.php";
include "Classhandle.php";

$data = new DatabaseConnection();
$classhandle = new Classhandle($data);

if (isset($_POST['submit'])) {
    $classhandle->addData($_POST['nama'], $_POST['email'], $_POST['umur'], $_POST['subscribe'], $_POST['gender']);
}

if (isset($_POST['hapus'])) {
    $classhandle->removeData($_POST['hapus']);
}

$info = $classhandle->getData();
$data->closeConnection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="style.css">
    <title>Uas Pemweb</title>
</head>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="halloween-theme.css"> <!-- Link to the Halloween theme CSS -->
    <title>Main Page</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Spooky Enclave</h1>
            <img src="jpg.JPEG" alt="Halloween Icon" class="halloween-decoration">
        </div>

        <div class="content">
            <h2>Greetings from the Eerie Enclave!</h2>

            <!-- Movie Data Entry Form -->
            <form method="post">
                <label for="nama">Name:</label>
                <input type="text" id="nama" name="nama" required><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>

                <label for="umur">Age:</label>
                <input type="number" id="umur" name="umur" required><br>

                <input type="checkbox" id="subscribe" name="subscribe">
                <label for="subscribe">Subscribe to Ahmad Rizki Maulana</label><br>

                <label for="gender">Gender:</label>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label><br>

                <input type="submit" name="submit" value="Submit">
            </form>

            <!-- Data Deletion Form -->
            <form method="post">
                <label for="hapus">Hapus Data (berdasarkan nama):</label>
                <input type="text" id="hapus" name="hapus" required>
                <button type="submit">Hapus</button>
            </form>

            <!-- Display Data Table -->
            <table id="dataTable" border="1">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Umur</th>
                    <th>Subscribe</th>
                    <th>Gender</th>
                </tr>
                <?php
                foreach ($info as $row) {
                    echo "
                    <tr>
                        <td>{$row['nama']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['Umur']}</td>
                        <td>{$row['subscribe']}</td>
                        <td>{$row['gender']}</td>
                    </tr>";
                }
                ?>
            </table>
        </div>

        <div class="footer">
            <p class="halloween-text">Stay tuned for more spooky updates!</p>
        </div>
    </div>
</body>

</html>


    <script src="beta.js"></script>
</body>
</html>
