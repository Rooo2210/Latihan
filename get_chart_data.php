<?php
header('Content-Type: application/json');
include "koneksi.php";

if (!$koneksi) {
    die(json_encode(['error' => 'Koneksi gagal']));
}

// Data pengunjung per bulan (dari booking)
$visitor_query = "SELECT 
    MONTH(checkin) as bulan,
    YEAR(checkin) as tahun,
    COUNT(*) as jumlah 
    FROM booking 
    WHERE YEAR(checkin) = YEAR(CURDATE())
    GROUP BY YEAR(checkin), MONTH(checkin)
    ORDER BY MONTH(checkin)";

$visitor_result = mysqli_query($koneksi, $visitor_query);
$visitor_data = [];
$bulan_nama = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agt', 'Sep', 'Okt', 'Nov', 'Des'];

// Inisialisasi semua bulan dengan 0
for ($i = 1; $i <= 12; $i++) {
    $visitor_data[$i] = 0;
}

while ($row = mysqli_fetch_assoc($visitor_result)) {
    $visitor_data[$row['bulan']] = (int)$row['jumlah'];
}

// Data rating (tingkat kepuasan)
$rating_query = "SELECT rating, COUNT(*) as jumlah FROM rating GROUP BY rating ORDER BY rating";
$rating_result = mysqli_query($koneksi, $rating_query);

$rating_data = [
    'Sangat Buruk' => 0,
    'Buruk' => 0,
    'Cukup' => 0,
    'Baik' => 0,
    'Sangat Baik' => 0
];

while ($row = mysqli_fetch_assoc($rating_result)) {
    $r = (int)$row['rating'];
    $jumlah = (int)$row['jumlah'];
    
    if ($r == 1) $rating_data['Sangat Buruk'] = $jumlah;
    else if ($r == 2) $rating_data['Buruk'] = $jumlah;
    else if ($r == 3) $rating_data['Cukup'] = $jumlah;
    else if ($r == 4) $rating_data['Baik'] = $jumlah;
    else if ($r == 5) $rating_data['Sangat Baik'] = $jumlah;
}

// Rata-rata rating
$avg_query = "SELECT AVG(rating) as avg_rating, COUNT(*) as total FROM rating";
$avg_result = mysqli_query($koneksi, $avg_query);
$avg_row = mysqli_fetch_assoc($avg_result);

$response = [
    'visitor' => [
        'labels' => array_values($bulan_nama),
        'data' => array_values($visitor_data)
    ],
    'rating' => [
        'labels' => array_keys($rating_data),
        'data' => array_values($rating_data)
    ],
    'average_rating' => round($avg_row['avg_rating'] ?? 0, 1),
    'total_ratings' => (int)$avg_row['total']
];

echo json_encode($response);
?>