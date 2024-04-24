<?php
if(isset($_POST['submit'])){
  $lname = mysqli_real_escape_string($conn, $_POST['lname']);
  $fname =   mysqli_real_escape_string($conn, $_POST['fname']);
  $mname =  mysqli_real_escape_string($conn, $_POST['mname']);
  
  $purpose =  mysqli_real_escape_string($conn, $_POST['purpose']);
  $addresses =  mysqli_real_escape_string($conn, $_POST['address']);

  $sql2 = "INSERT INTO clearance_tb ( f_name, m_name, l_name,  purpose, address)
  VALUES('$fname', '$mname', '$lname',   '$purpose', '$addresses')";

if ($conn->query($sql2) === TRUE) {

  header('location: ../users/users-dashboard.php');

  ?>
  <script>
  Swal.fire({
      title: '<?php echo "Nice!" ?>',
      text: '<?php echo "Request successfully submitted!" ?>',
      icon: "success"
    });
  </script>


<?php
} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
}

$conn->close();
}

?>