<?php 

    function check_input($data)
        {
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }
        
        $one = check_input($_POST['name']);
        $two = check_input($_POST['email']);
        $three = check_input($_POST['number']);
        $four  = check_input($_POST['address']);
        $five = check_input($_POST['city']);

    if ($one && $two && $three && $four && $five) {
        
        /*receive data and send them to your email*/
         if (isset($_POST['url']) && $_POST['url'] == ''){

             $name    = $_POST['name'];
             $email   = $_POST['email'];
             $number  = $_POST['number'];
             $address = $_POST['address'];
             $city    = $_POST['city'];

             $formcontent = "Name: ".$name."\r\n".
                            "Email: ".$email."\r\n".
                            "Number: ".$number."\r\n".
                            "Address: ".$address."\r\n".
                            "City: ".$city;

             /*please insert your email*/
             $recipient = "INSERT-EMAIL-HERE@RANDOMSITE.COM";
             $subject = "New Website Lead";
             $mailheader = "From: $email \r\n";
             
             
                mail($recipient, $subject, $formcontent ,$mailheader);
         }
    }
    
    /*redirect to index.php*/
      header('Location: index.php');   
?>