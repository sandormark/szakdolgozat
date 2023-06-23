<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'root';

//database user password
$pass = 'password';

// check the MySQL connection status

$conn = new mysqli($host, $user, $pass,"yourdb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}
$sql = 'SELECT * FROM student';

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->id . " " . $user->name;
    echo "<br>";
}



?>