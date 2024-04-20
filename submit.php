<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Alıcı e-posta adresi
    $to = "arslankarabulut@outlook.com";

    // Konu
    $subject = "Yeni İletişim Formu Gönderildi";

    // E-posta içeriği
    $email_content = "İsim: $name\n";
    $email_content .= "E-posta: $email\n\n";
    $email_content .= "Mesaj:\n$message\n";

    // E-posta başlıkları
    $headers = "From: $name <$email>";

    // E-postayı gönder
    mail($to, $subject, $email_content, $headers);

    // Kullanıcıyı teyit et
    echo "<p>Mesajınız başarıyla gönderildi, en kısa zamanda size geri dönüş yapılacaktır. Teşekkürler!</p>";
}
?>

