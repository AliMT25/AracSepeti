<?php
// 1. Hangi sayfanın istendiğini al
$sayfa = $_GET['sayfa'] ?? 'anasayfa';

// 2. Güvenlik ve Dosya Kontrolü
$izinli_sayfalar = [
    'anasayfa' => 'Ana Sayfa',
    'login' => 'Giriş Yap',
    'register' => 'Üye Ol',
    'ilan_ver' => 'Ücretsiz İlan Ver',
    'ilan_detay_mt25' => 'MT-25 İlan Detayı',
    'ilan_detay_rs200' => 'RS200 İlan Detayı',
    'ilan_detay_dogan' => 'Doğan İlan Detayı'
];

if (!array_key_exists($sayfa, $izinli_sayfalar)) {
    $sayfa = 'anasayfa';
}

// 3. Dosya yolunu ve başlığı oluştur
$dosya_yolu = "sayfalar/{$sayfa}.php";
$sayfa_basligi = $izinli_sayfalar[$sayfa];

// 4. Header'ı (Menü) çağır
include 'header.php';

// 5. İstenen sayfanın içeriğini çağır
if (file_exists($dosya_yolu)) {
    include $dosya_yolu;
} else {
    echo "<h1 class='text-danger'>Hata: {$sayfa}.php dosyası bulunamadı!</h1>";
}

// 6. Footer'ı çağır
include 'footer.php';
?>