<?php
class Classhandle {
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function addData($nama, $email, $umur, $subscribe, $gender) {
        $connection = $this->data->getConnection();

        $nama = $connection->real_escape_string($nama);
        $email = $connection->real_escape_string($email);
        $umur = $connection->real_escape_string($umur);
        $subscribe = $connection->real_escape_string($subscribe);
        $gender = $connection->real_escape_string($gender);

        $existingData = $connection->query("SELECT * FROM identitas WHERE nama = '$nama'");
        
        if ($existingData->num_rows == 0) {
            $query = "INSERT INTO identitas (nama, email, umur, subscribe, gender) VALUES (?, ?, ?, ?, ?)";
            
            $stmt = $connection->prepare($query);
            $stmt->bind_param("ssiss", $nama, $email, $umur, $subscribe, $gender);
            
            if ($stmt->execute()) {
                // Query executed successfully
            } else {
                // Handle error
            }

            $stmt->close();
        }
    }

    public function getData() {
        $connection = $this->data->getConnection();
        $result = $connection->query("SELECT * FROM identitas");

        $info = array();
        while ($row = $result->fetch_assoc()) {
            $info[] = $row;
        }
        return $info;
    }

    public function removeData($nama) {
        $connection = $this->data->getConnection();
        $nama = $connection->real_escape_string($nama);

        $query = "DELETE FROM identitas WHERE nama = ?";
        
        $stmt = $connection->prepare($query);
        $stmt->bind_param("s", $nama);
        
        if ($stmt->execute()) {
            // Query executed successfully
        } else {
            // Handle error
        }

        $stmt->close();
    }

    public function registerUser($username, $hashedPassword) {
        $connection = $this->data->getConnection();
        $username = $connection->real_escape_string($username);

        $query = "INSERT INTO akun (username, password) VALUES (?, ?)";
        
        $stmt = $connection->prepare($query);
        $stmt->bind_param("ss", $username, $hashedPassword);
        
        if ($stmt->execute()) {
            // Query executed successfully
        } else {
            // Handle error
        }

        $stmt->close();
    }

    public function validateUser($username, $password) {
        $connection = $this->data->getConnection();
        $username = $connection->real_escape_string($username);
        $password = $connection->real_escape_string($password);

        $query = "SELECT * FROM akun WHERE username = '$username'";
        $result = $connection->query($query);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return password_verify($password, $row['password']);
        } else {
            return false;
        }
    }
}
?>
