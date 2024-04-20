<?php
// Form verilerini al
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Gönderilecek e-posta adresi
$to = "arslankarabulut@outlook.com";

// E-posta başlığı
$subject = "Yeni İletişim Formu Gönderildi";

// E-posta içeriği
$body = "Adı: $name\nE-posta: $email\n\n$message";

// E-postayı gönder
$mail_sent = mail($to, $subject, $body);

// Gönderme durumunu kontrol et
if ($mail_sent) {
    echo "E-posta başarıyla gönderildi!";
} else {
    echo "E-posta gönderilirken bir hata oluştu.";
}
?>
