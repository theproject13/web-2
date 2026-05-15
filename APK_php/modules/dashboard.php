<?php
$page_title = 'Dashboard';
$courses = getDetailedCourses();
?>

<div class="main-content">
    <div class="dashboard-welcome">
        <h2>Selamat Datang di Dashboard Akademik</h2>
        <p>Semester <?php echo TAHUN_AKADEMIK; ?></p>
    </div>

    <div class="dashboard-stats">
        <div class="stat-card">
            <i class="fas fa-book-open"></i>
            <div class="stat-info">
                <h3><?php echo count($courses); ?></h3>
                <p>Total Mata Kuliah</p>
            </div>
        </div>
        <div class="stat-card">
            <i class="fas fa-clock"></i>
            <div class="stat-info">
                <h3><?php 
                    $totalSKS = array_sum(array_column($courses, 'sks'));
                    echo $totalSKS;
                ?></h3>
                <p>Total SKS</p>
            </div>
        </div>
        <div class="stat-card">
            <i class="fas fa-calendar-day"></i>
            <div class="stat-info">
                <h3>Sabtu</h3>
                <p>Hari Perkuliahan</p>
            </div>
        </div>
    </div>

    <div class="recent-courses">
        <h3>Jadwal Perkuliahan</h3>
        <div class="table-responsive">
            <table class="course-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Mata Kuliah</th>
                        <th>Kode</th>
                        <th>SKS</th>
                        <th>Kelas</th>
                        <th>Dosen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach($courses as $course): ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $course['name']; ?></td>
                        <td><?php echo $course['code']; ?></td>
                        <td><?php echo $course['sks']; ?></td>
                        <td><?php echo $course['class']; ?></td>
                        <td><?php echo $course['lecturer']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>