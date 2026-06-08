<?php
include "../security.php";
include "../../koneksi.php";

$sql = "select registrations.*, courses.name as course_title, courses.price as course_price from registrations inner join courses on registrations.course_id = courses.id order by created_at desc";
$query = mysqli_query($conn, $sql);
?>

<a href="../dashboard.php">Kembali ke Dashboard</a> |

<br><br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Email</th>
        <th>Nomor WhatsApp</th>
        <th>Kelas</th>
        <th>Total Peserta</th>
        <th>Total Harga</th>
        <th>Status Follow Up</th>
        <th>Waktu Pendaftaran</th>
        <th></th>
    </tr>
