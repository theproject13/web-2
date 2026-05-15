
<?php
function getCourses() {
    return [
        ['id' => 1, 'name' => 'MANAJEMEN PROYEK INFORMATIKA'],
        ['id' => 2, 'name' => 'ARSITEKTUR DAN ORGANISASI KOMPUTER'],
        ['id' => 3, 'name' => 'KEAMANAN KOMPUTER'],
        ['id' => 4, 'name' => 'JARINGAN NIRKABEL'],
        ['id' => 5, 'name' => 'KECAKAPAN ANTAR PERSONAL'],
        ['id' => 6, 'name' => 'TESTING DAN QA PERANGKAT LUNAK'],
        ['id' => 7, 'name' => 'ETIKA PROFESI'],
        ['id' => 8, 'name' => 'PEMROGRAMAN WEB II'],
        ['id' => 9, 'name' => 'INSTALL APLIKASI']
    ];
}

function getDetailedCourses() {
    return [
        [
            'id' => 1,
            'name' => 'MANAJEMEN PROYEK INFORMATIKA',
            'code' => '07TPLE004',
            'sks' => 2,
            'day' => 'Sabtu',
            'class' => 'E-1',
            'lecturer' => 'NANA HERMANSYAH S.T., M.M.S.I'
        ],
        [
            'id' => 2,
            'name' => 'ARSITEKTUR DAN ORGANISASI KOMPUTER',
            'code' => '07TPLE004',
            'sks' => 3,
            'day' => 'Sabtu',
            'class' => 'E-2',
            'lecturer' => 'NANANG S.KOM., M.KOM.'
        ],
        [
            'id' => 3,
            'name' => 'KEAMANAN KOMPUTER',
            'code' => '07TPLE004',
            'sks' => 2,
            'day' => 'Sabtu',
            'class' => 'E-1',
            'lecturer' => 'SARMAN S.Kom., M.Kom.'
        ],
        [
            'id' => 4,
            'name' => 'JARINGAN NIRKABEL',
            'code' => '07TPLE004',
            'sks' => 2,
            'day' => 'Sabtu',
            'class' => 'E-1',
            'lecturer' => 'JAKA SUTRESNA S.Kom. M.Kom.'
        ],
        [
            'id' => 5,
            'name' => 'ETIKA PROFESI',
            'code' => '07TPLE004',
            'sks' => 2,
            'day' => 'Sabtu',
            'class' => 'E-2',
            'lecturer' => 'Dr. SHOLIHIN S.Kom, MM'
        ],
        [
            'id' => 6,
            'name' => 'PEMROGRAMAN WEB II',
            'code' => '07TPLE004',
            'sks' => 3,
            'day' => 'Sabtu',
            'class' => 'E-1',
            'lecturer' => 'SONASA RINUSANTORO S.Kom., M.A.'
        ]
    ];
}

function getCourseById($id) {
    $courses = getDetailedCourses();
    foreach($courses as $course) {
        if($course['id'] == $id) {
            return $course;
        }
    }
    return false;
}
?>