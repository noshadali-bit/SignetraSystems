<?php
ob_start();

// ================= HELPERS =================
function get_client_ip() {
    return $_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN';
}

// ================= COMMON =================
$ip = get_client_ip();
// $to = "signetra@webdemos-crops-tech.it.com";
// $to = "harrydeveloper4@gmail.com";
$to = "Shantan.V@signetrasystems.com";

/* =====================================================
   FORM 1
===================================================== */
if(isset($_POST['form1_submit'])) {

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $org = $_POST['organisation'] ?? '';
    $role = $_POST['role'] ?? '';
    $desc = $_POST['description'] ?? '';

    $subject = "Get in Touch Inquiry - $name";

    $message = "
    <h2>Get in Touch Inquiry</h2>
    <b>Name:</b> $name <br>
    <b>Email:</b> $email <br>
    <b>Organisation:</b> $org <br>
    <b>Role:</b> $role <br>
    <b>Description:</b> $desc <br>
    <b>IP:</b> $ip <br>
    ";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: signetra@webdemos-crops-tech.it.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    if(mail($to, $subject, $message, $headers)) {
        header("Location: thankyou.php");
        exit;
    } else {
        echo "Mail Failed";
    }
}

/* =====================================================
   FORM 2
===================================================== */
if(isset($_POST['form2_submit'])) {

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $company = $_POST['company'] ?? '';
    $type = $_POST['enquiry_type'] ?? '';
    $subjectText = $_POST['subject'] ?? '';
    $msg = $_POST['message'] ?? '';

    $subject = "Homepage Form Inquiry - $name";

    $message = "
    <h2>Homepage Form Inquiry</h2>
    <b>Name:</b> $name <br>
    <b>Email:</b> $email <br>
    <b>Company:</b> $company <br>
    <b>Type:</b> $type <br>
    <b>Subject:</b> $subjectText <br>
    <b>Message:</b> $msg <br>
    <b>IP:</b> $ip <br>
    ";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: signetra@webdemos-crops-tech.it.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    if(mail($to, $subject, $message, $headers)) {
        header("Location: thankyou.php");
        exit;
    } else {
        echo "Mail Failed";
    }
}


/* =====================================================
   FORM 3 (WITH CV ATTACHMENT FIX)
===================================================== */
if(isset($_POST['form3_submit'])) {

    $name = $_POST['fullname'] ?? '';
    $job = $_POST['jobtitle'] ?? '';
    $org = $_POST['organisation'] ?? '';
    $exp = $_POST['experience'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $note = $_POST['note'] ?? '';

    $file = $_FILES['cv'];

    $subject = "Lets Build Together - $name";

    $fileName = $file['name'];
    $fileTmp  = $file['tmp_name'];
    $fileType = $file['type'];

    $fileData = file_get_contents($fileTmp);

    $boundary = md5(time());

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From: signetra@webdemos-crops-tech.it.com\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"".$boundary."\"\r\n";

    // BODY START
    $body = "--$boundary\r\n";

    $body .= "Content-Type: text/html; charset=UTF-8\r\n\r\n";
    $body .= "
    <h2>Lets Build Together</h2>
    <b>Name:</b> $name <br>
    <b>Job Title:</b> $job <br>
    <b>Organisation:</b> $org <br>
    <b>Experience:</b> $exp <br>
    <b>Email:</b> $email <br>
    <b>Phone:</b> $phone <br>
    <b>Note:</b> $note <br>
    <b>IP:</b> $ip <br>
    ";

    // FILE ATTACHMENT
    if(!empty($fileTmp)) {

        $body .= "\r\n--$boundary\r\n";
        $body .= "Content-Type: $fileType; name=\"$fileName\"\r\n";
        $body .= "Content-Disposition: attachment; filename=\"$fileName\"\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= chunk_split(base64_encode($fileData)) . "\r\n";
    }

    $body .= "--$boundary--";

    $headers .= "\r\n";

    if(mail($to, $subject, $body, $headers)) {
        header("Location: thankyou.php");
        exit;
    } else {
        echo "Mail Failed";
    }
}

?>