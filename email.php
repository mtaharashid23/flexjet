<?php
  $action = $_GET['action'];  
  if($action == 'contact'){
   contactform();
  }
  if($action == 'flight'){
   flightform();
  }
  if($action == 'connected'){
   connectedform();
  }  
  function contactform(){
    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $country = $_POST['country'] ?? '';
    $zip = $_POST['zip'] ?? '';
    $fly_private = $_POST['fly_private'] ?? '';
    $program_interest = $_POST['program_interest'] ?? '';
    $question = $_POST['question'] ?? '';

    $message = "First Name: $first_name\r\n";
    $message .= "Last Name: $last_name\r\n";
    $message .= "Email: $email\r\n";
    $message .= "Phone: $phone\r\n";
    $message .= "Country: $country\r\n";
    $message .= "ZIP: $zip\r\n";
    $message .= "Currently Fly Private: $fly_private\r\n";
    $message .= "Interested Program: $program_interest\r\n";
    $message .= "Question: $question\r\n";

    $to = "info@airaffairaviation.com";
    $subject = "You've Got a New Inquiry via Contact Form";

    $send_email = mail($to, $subject, $message);

    echo ($send_email) ? 'success' : 'error';
  }
  function flightform(){
    $title = $_POST['title'] ?? '';
    $firstName = $_POST['firstName'] ?? '';
    $lastName = $_POST['lastName'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $requests = $_POST['requests'] ?? '';
    $flyOften = $_POST['flyOften'] ?? '';
    $currentSolution = $_POST['currentSolution'] ?? '';
    $referral = $_POST['referral'] ?? '';
    $marketing = $_POST['marketing'] ?? 'No';
    $flights = json_decode($_POST['flights'], true);

    $message  = "Title: $title\r\n";
    $message .= "Name: $firstName $lastName\r\n";
    $message .= "Email: $email\r\n";
    $message .= "Phone: $phone\r\n";
    $message .= "Fly Often: $flyOften\r\n";
    $message .= "Current Flying Solution: $currentSolution\r\n";
    $message .= "Referral: $referral\r\n";
    $message .= "Marketing Opt-in: $marketing\r\n";
    $message .= "Additional Requests: $requests\r\n\n";

    if ($flights && is_array($flights)) {
        foreach ($flights as $i => $flight) {
            $message .= "Flight #" . ($i + 1) . ":\r\n";
            $message .= "- From: " . $flight['from'] . "\r\n";
            $message .= "- To: " . $flight['to'] . "\r\n";
            $message .= "- Departure: " . $flight['departDate'] . "\r\n";
            $message .= "- Return: " . $flight['returnDate'] . "\r\n";
            $message .= "- Passengers: " . $flight['passengers'] . "\r\n\n";
        }
    }

    $to = "info@airaffairaviation.com";
    $subject = "New Flight Request from Air Affair";
    $send = mail($to, $subject, $message);

    echo $send ? 'success' : 'error';
  }
  function connectedform(){
    $email = $_POST['email'];
    $message = 'Email: '.$email."\r\n";
    // Set your email address where you want to receive emails . 
    $to = 'info@airaffairaviation.com';
    $subject = 'Let’s Stay in Touch – Updates from Air Affair';
    $send_email = mail($to,$subject,$message);
    echo ($send_email) ? 'success' : 'error';
  }
?>