<?php
// POST isteği olup olmadığını kontrol et
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Alıcı e-posta adresi
    $to = "erenozatak30@gmail.com"; // Bu adresi kendi e-posta adresiniz ile değiştirin
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    // E-posta içeriği
    $fullMessage = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // E-posta gönderme
    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Mesaj başarıyla gönderildi!";
    } else {
        echo "Mesaj gönderilemedi. Lütfen tekrar deneyin.";
    }
}
?>
