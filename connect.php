<?php 
if (isset($_POST['save'])) {
$slider1 = $_POST['slider1'];
$slider2 = $_POST['slider2'];
$slider3 = $_POST['slider3'];
$slider4 = $_POST['slider4'];
$slider5 = $_POST['slider5'];
$slider6 = $_POST['slider6'];

}
$server = "localhost";
$password = "";
$user = "root";
$dbName = "robotarm";
$connect = new mysqli($server,$user,$password,$dbName);
if($connect->connect_error) {
    die('connection failed'.$connect->connect_error);
}  else {
    echo "The database is successfully connected. ". "<br>";
}



if(isset($_POST['save'])){
    $sql = "insert into sliders (slider1, slider2, slider3, slider4, slider5, slider6, on_off)
    VALUES ($slider1 ,$slider2, $slider3, $slider4, $slider5, $slider6, 'on' )";
    if ($connect->query($sql) === TRUE) {
        echo "New record created successfully"."<br>";
      } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
      }
} 
$stmt = "SELECT * FROM sliders WHERE ID = (SELECT MAX(ID) FROM sliders) LIMIT 1";
$result = $connect->query($stmt);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "slider1: " . $row["slider1"]. "<br>"."slider2: " . $row["slider2"]. "<br>"."slider3: " . $row["slider3"]. "<br>"."slider4: " . $row["slider4"]. "<br>"."slider5: " . $row["slider5"]. "<br>"."slider6: " . $row["slider6"] . "<br>";
    }
  } else {
    echo "0 results";
  }

?>