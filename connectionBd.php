<?php
header('Content-Type: application/json');
$servername = "mysql-serious.alwaysdata.net";
$username = "serious";
$password = "minerim974";
$dbname = "serious_bd";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully\n";

for($i = 1; $i < 2; ++$i ){
    $sql = "select img_blob, text_text from images, text where images.img_id = $i and images.img_id = text.img_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $out = array(
                0 => $i,
                1 => $row["img_blob"],
                2 => $row["text_text"]
            );
            echo json_encode($out[0]);
            //echo json_encode($row["img_blob"]);
            echo json_encode($out[2]);
        }
    } else {
        echo json_encode("0 results");
    }
}

$conn->close();