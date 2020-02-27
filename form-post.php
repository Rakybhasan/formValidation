<?php
 require 'db.php';

// echo $password;
// die();

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  // $upper = preg_match('@[A-Z]@', $password);
  // $lower = preg_match('@[a-z]@', $password);
  // $number = preg_match('@[0-9]@', $password);
  // $special = preg_match('@[!#$%&^*()]@', $password);
  $gender = $_POST['gender'];
  $hobbies = $_POST['hobbies'];
  $after_implode_hobbies = implode("," , $hobbies);
  $country = $_POST['country'];
  $subject = $_POST['subject'];
  $after_implode_subject = implode(',' , $subject);
  $dob = $_POST['dob'];
  $message = $_POST['message'];





     if(empty($name)){
       echo "bainchod nam lekh";
     }elseif(empty($email)){
       echo "bhai email likho";
     }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
       echo "thik thak email lekh";
     }elseif(empty($password)){
       echo " password dao";
     }
     // elseif (!$upper || !$lower || !$number || !$special || strlen($password) < 8){
     //   echo "password a boro haat r choto haat lagbe number lagbe special character(!#$%&^*()) ebong 8ta lagbe";
     // }
     elseif(empty($gender)){
       echo "Select gender";
     }elseif(empty($hobbies)){
       echo "hobby select koro";
     }elseif(empty($country)){
       echo "country select koro";
     }elseif(empty($subject)){
       echo "subject select koro";
     }elseif(empty($dob)){
       echo "jonmo tarikh nai beta?";
     }elseif(empty($message)){
       echo "message lekh";
     }
     // }elseif(str_word_count($message) < 5 || str_word_count($message) > 10 ){
     //   echo "msg 300r kom o 10 er beshi hoa lagbe";
     // }













     else {
       $insert = "INSERT INTO users(name,email,password,gender,hobbies,country,subject,dob,message) VALUES('$name', '$email' , '$password', '$gender', '$after_implode_hobbies', '$country', '$after_implode_subject', '$dob', '$message')";
       $insert_result = mysqli_query($dbcon,$insert);
       $success = "Form submitted successfully";
      header('location:form.php?success=' . $success);
     }
  ?>
