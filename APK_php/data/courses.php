<?php

// Data dummy untuk menggantikan data dari database
$courses = [
    [
        'title' => 'MANAJEMEN PROYEK INFORMATIKA',
        'lecturer' => 'NANA HERMANSYAH S.T., M.M.S.I',
        'code' => '07TPLE004',
        'credits' => 2,
        'day' => 'Sabtu'
    ],
    [
        'title' => 'ARSITEKTUR DAN ORGANISASI KOMPUTER',
        'lecturer' => 'NANANG S.KOM., M.KOM.',
        'code' => '07TPLE004',
        'credits' => 3,
        'day' => 'Sabtu'
    ],
    [
        'title' => 'KEAMANAN KOMPUTER',
        'lecturer' => 'SARMAN S.KOM., M.KOM.',
        'code' => '07TPLE004',
        'credits' => 2,
        'day' => 'Sabtu'
    ],
    [
        'title' => 'JARINGAN NIRKABEL',
        'lecturer' => 'JAKA SUTRESNA S.KOM., M.KOM',
        'code' => '07TPLE004',
        'credits' => 2,
        'day' => 'Sabtu'
    ],
    [
        'title' => 'KECAKAPAN ANTAR PERSONAL',
        'lecturer' => 'EKO SUTONO S.T., M.KOM.',
        'code' => '07TPLE004',
        'credits' => 4,
        'day' => 'Sabtu'
    ],
    [
        'title' => 'TESTING DAN QA PERANGKAT LUNAK',
        'lecturer' => 'ANIQ ASTOFA S.KOM., M.KOM',
        'code' => '07TPLE004',
        'credits' => 2,
        'day' => 'Sabtu'
    ],
    [
        'title' => 'ETIKA PROFESI',
        'lecturer' => 'DR. SHOLIHIN S.KOM, MM',
        'code' => '07TPLE004',
        'credits' => 2,
        'day' => 'Sabtu'
    ],
    [
        'title' => 'PEMROGRAMAN WEB II',
        'lecturer' => 'SONASA RINUSANTORO S.KOM., M.A.',
        'code' => '07TPLE004',
        'credits' => 3,
        'day' => 'Sabtu'
    ]
];

// Menampilkan data dummy ke UI
foreach ($courses as $course) {
    echo "<div class='course'>";
    echo "<h3>{$course['title']}</h3>";
    echo "<p>Dosennya: {$course['lecturer']}</p>";
    echo "<p>Kode Kelas: {$course['code']}</p>";
    echo "<p>SKS: {$course['credits']}</p>";
    echo "<p>Hari: {$course['day']}</p>";
    echo "</div>";
}

?>