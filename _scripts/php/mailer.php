<?php





    // Added input sanitizing to prevent injection
// If a bot enters data into the hidden url input then the form won't send but the bot won't know.
if(isset($_POST['url']) && $_POST['url'] == ''){
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.

        $subject = trim($_POST["subject"]);
        $message = trim($_POST["message"]);

        // Check that data was sent to the mailer.

        if ( empty($subject) OR empty($message) ) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops, something went wrong.";
            echo " Please makes sure to select whether your idea is something to start, stop, or continue and that you typed your idea into the comment field.";

            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address or addresses.
        //$recipient = "trentgaffney@gmail.com, tr.gaffney@northeastern.edu";
        //$recipient = "Trent Gaffney <trentgaffney@gmail.com>, Trent Work <tr.gaffney@northeastern.edu>";
      //  $recipient = "Rebecca Anzuoni <r.anzuoni@northeastern.edu>";
    //  $recipient = "Rebecca Anzuoni <r.anzuoni@northeastern.edu>, Brian Sullivan <br.sullivan@northeastern.edu>";
        $recipient = "Trent Gaffney <trentgaffney@gmail.com>";
        // Set the email subject.
        $subject = "\n$subject\n";

        // Build the email content.
        $email_content .= "\n$message\n";

        // Build the email headers.
        //$email_headers = "marcom@northeastern.edu";
        $email_headers = "From: Anonymous <anonymous@northeastern.edu>";

        // Send the email.
        if (mail( $recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Your ideas were submitted!";
            echo " Thanks for taking the time to share your ideas. Your feedback is important to the future of our department. Feel free to make more suggestions.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "PHP2 Oops, something went wrong.";
            echo "Please makes sure to select whether your idea is something to start, stop, or continue and that you typed your idea into the comment field.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }
}else {
  echo "SPAM";
}

?>
