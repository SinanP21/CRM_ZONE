<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $package_id = $_POST['package_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $company = $_POST['company_name'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO demo_requests (package_id, name, email, company_name, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$package_id, $name, $email, $company, $message]);

    echo "<script>alert('Talebiniz alınmıştır!'); window.location.href='index.php';</script>";
}

echo "<pre>";
print_r($_POST);

?>
