<?php
// Get the current time
$currentTime = time();

// Calculate the time difference
$timeDiff = $currentTime - strtotime($row["tanggal"]);
$seconds = $timeDiff;
$minutes = round($timeDiff / 60);
$hours = round($timeDiff / 3600);
$days = round($timeDiff / 86400);
$weeks = round($timeDiff / 604800);
$months = round($timeDiff / 2419200);
$years = round($timeDiff / 29030400);

$selisih = '';
if ($seconds <= 60) {
    $selisih = $seconds . ' detik yang lalu';
} elseif ($minutes <= 60) {
    $selisih = $minutes . ' menit yang lalu';
} elseif ($hours <= 24) {
    $selisih = $hours . ' jam yang lalu';
} elseif ($days <= 7) {
    $selisih = $days . ' hari yang lalu';
} elseif ($weeks <= 4) {
    $selisih = $weeks . ' minggu yang lalu';
} elseif ($months <= 12) {
    $selisih = $months . ' bulan yang lalu';
} else {
    $selisih = $years . ' tahun yang lalu';
}
