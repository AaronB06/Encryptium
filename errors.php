<?php
    //define variables and set to empty values

    $l_name_error = $f_name_error = $m_name_error = $email_error = $p_number__error = $t_number_error = $r_pass_error = $f_name_error = $bday_error = $nationality_error = $c_status_error = $r_age_error = $gender_error = $voter_error = $h_number_error = $h_street_error = $barangay_error = $municipality_error = "";
    $l_name = $f_name= $m_name = $email = $p_number = $t_number_error = $r_pass_error = $f_name = $bday = $nationality = $c_status = $r_age = $gender = $voter = $h_number = $h_street = $barangay = $municipality = "";

    $flag = true;
    //form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["l_name"])) {
         $l_name_error = "Name is required";
         $flag = false;
    } 

    if (empty($_POST["l_name"])){
        $l_name_error = "Last Name is required";
        $flag = false;
    }              
    

}
?>

if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM registration_tb WHERE email='{$email}'")) > 0){
                     echo "<script>alert('{$email} - This email is taken already.');</script>";
                 } 