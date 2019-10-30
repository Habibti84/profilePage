<?php
  session_start();
  include("dbConnect.php");
  include("NoGodCode/date.php");




  $date = $_POST['date'];
  $time = $_POST["time"];
  $ort = $_POST["ort"];
  $bemerkung = $_POST["bemerkungen"];


  $kunde = $_POST["kunde"];
  $_SESSION['kunde'] = $kunde;
  if($kunde == 'Beat Ursprung') {
    $kunde = 16;
  }
  else if($kunde == 'Rufin') {
    $kunde = 11;
  }
  else if($kunde == 'Berner') {
    $kunde = 12;
  }
  else if($kunde == 'Vlachos') {
    $kunde = 13;
  }



  $total = $time *35;
  if(isset($_POST["last"])) {
    $last = 1;
    //$mail = new PHPMailer(true);

/*
try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'Jacqueline Motzer';                     // SMTP username
    $mail->Password   = 'secret';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('jacqueline.motzer@gmail.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Abrechnung für den ' . ;
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}*/
  }
  else {
    $last = 0;
  }
  echo $date;
  echo $time;
  echo $ort;
  echo $bemerkung;
  echo $kunde;
  echo $last;

  // Wenn submit Button gedrückt wird
  if (isset($_POST["submit"])) {

    // Wenn Zeit, Datum & Kunde gewählt sind

            if ($result2 = $connect->query("INSERT INTO auftraege (datum, stunden, ort, bemerkung, letzter, total, id_kunde)
                    VALUES ('$date', '$time', '$ort', '$bemerkung', '$last', '$total', '$kunde')")) {
                      header("Location: admin.php");
                    }
            else {
              echo $connect->error;
              echo "Daten nicht eingetragen";
            }
          }



    else {
      echo "Fehler: ";
    }

    if(isset($_POST["einbezahlt"])) {
      if ($result2 = $connect->query("INSERT INTO auftraege (einbezahlt)
              VALUES (1) WHERE id_kunde = $kunde AND month(datum) = month($date)")) {
                header("Location: admin.php");
              }
    }





 ?>
