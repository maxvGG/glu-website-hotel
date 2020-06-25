<?php 
$conn = new mysqli("localhost","root","","bookings");

if(isset($_POST['id_field']) && $_POST['id_field'] != '' ) {
    $id = $_POST['id_field'];
}
if(isset($_POST['Check_in']) && $_POST['Check_in'] != '' ) {
    $Check_in = $_POST['Check_in'];
}
if(isset($_POST['Check_out']) && $_POST['Check_out'] != '' ) {
    $Check_out = $_POST['Check_out'];
}
if(isset($_POST['adult']) && $_POST['adult'] != '' ) {
    $adult = $_POST['adult'];
}
if(isset($_POST['child']) && $_POST['child'] != '' ) {
    $child = $_POST['child'];
}
if(isset($_POST['submit'])) {
   $sql = $conn->prepare("INSERT INTO `booking`(hotel_id, check_in, check_out, adults,children) VALUES(?,?,?,?,?)");

   $sql->bind_param('issii', $id,$Check_in, $Check_out, $adult, $child);

   if($sql->execute() === false) {
    echo mysqli_error($conn);
    exit(__LINE__);
   } else {
       $sql->execute();
       $sql->close();
       header('Location: index.html');
   }
}

?>