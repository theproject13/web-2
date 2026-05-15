<?php
$page_title = 'Detail Mata Kuliah';
$action = isset($_GET['action']) ? $_GET['action'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$course = getCourseById($id);
?>

<div class="main-content">
    <?php if($course && $action == 'detail'): ?>
    <div class="course-detail-page">
        <div class="back-navigation">
            <a href="?page=dashboard" class="back-btn">
                <i class="fas fa-arrow-left"></i> Kembali ke Dashboard
            </a>
        </div>
        
        <div class="course-header">
            <h2><?php echo $course['name']; ?></h2>
            <span class="badge"><?php echo $course['sks']; ?> SKS</span>
        </div>

        <div class="course-info-grid">
            <div class="info-item">
                <label>Kode Kelas</label>
                <p><?php echo $course['code']; ?></p>
            </div>
            <div class="info-item">
                <label>SKS</label>
                <p><?php echo $course['sks']; ?></p>
            </div>
            <div class="info-item">
                <label>Hari</label>
                <p><?php echo $course['day']; ?></p>
            </div>
            <div class="info-item">
                <label>Kelas</label>
                <p><?php echo $course['class']; ?></p>
            </div>
            <div class="info-item full-width">
                <label>Dosen Pengampu</label>
                <p><?php echo $course['lecturer']; ?></p>
            </div>
        </div>

        <div class="course-materials">
            <h3>Materi Perkuliahan</h3>
            <div class="materials-list">
                <p>Belum ada materi yang tersedia untuk mata kuliah ini.</p>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>