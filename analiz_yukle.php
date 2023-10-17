<?php
session_start();
require_once './config/config.php';
require_once 'includes/auth_validate.php';
include_once 'includes/header.php';

?>

<?php
// SQL sorgusu oluştur
$sql = "SELECT * FROM customers";

// Sorguyu çalıştır
$result = $conn->query($sql);

// Sonuçları işle
if ($result->num_rows > 0) {
    echo "<div class='d-flex justify-content-center'>";
    echo "<select class='form-select' name='customer_id'>";
    // Her bir müşteri için bir seçenek oluştur
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['id'] . "'>" . $row['f_name'] . "</option>";
    }
    echo "</select>";
    echo "</div>";
} else {
    echo "Kayıt bulunamadı.";
}

// MySQL bağlantısını kapat
$conn->close();
?>

<?php include_once 'includes/footer.php'; ?>