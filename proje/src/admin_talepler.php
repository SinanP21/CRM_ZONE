<?php require_once 'db.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Gelen Talepler</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background: #f4f6f8;
    }
    h1 {
      text-align: center;
      color: #333;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    th, td {
      padding: 12px;
      border: 1px solid #ddd;
      text-align: left;
    }
    th {
      background-color: #313a80;
      color: white;
    }
    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
  </style>
</head>
<body>

<h1>Gelen Demo Talepleri</h1>

<table>
  <tr>
    <th>#</th>
    <th>Paket</th>
    <th>Ad Soyad</th>
    <th>Email</th>
    <th>Şirket</th>
    <th>Mesaj</th>
    <th>Tarih</th>
  </tr>

  <?php
  $sql = "
    SELECT d.id, p.name AS package_name, d.name, d.email, d.company_name, d.message, d.created_at
    FROM demo_requests d
    JOIN packages p ON d.package_id = p.id
    ORDER BY d.created_at DESC
  ";
  $stmt = $conn->query($sql);
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td><strong>{$row['package_name']}</strong></td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['company_name']}</td>
            <td>{$row['message']}</td>
            <td>{$row['created_at']}</td>
          </tr>";
  }
  ?>

</table>

</body>
</html>



