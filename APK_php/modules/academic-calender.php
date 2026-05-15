<?php
$page_title = 'Kalender Akademik';
?>

<div class="main-content">
    <div class="calendar-section">
        <h2>Kalender Akademik <?php echo TAHUN_AKADEMIK; ?></h2>
        
        <div class="academic-calendar">
            <div class="calendar-header">
                <button class="nav-btn"><i class="fas fa-chevron-left"></i></button>
                <h3>Mei 2026</h3>
                <button class="nav-btn"><i class="fas fa-chevron-right"></i></button>
            </div>
            
            <div class="calendar-grid">
                <div class="day-header">Sen</div>
                <div class="day-header">Sel</div>
                <div class="day-header">Rab</div>
                <div class="day-header">Kam</div>
                <div class="day-header">Jum</div>
                <div class="day-header">Sab</div>
                <div class="day-header">Min</div>
                
                <?php
                // Generate calendar days for May 2026 (dimulai dari hari Jumat)
                $first_day = 5; // Jumat
                $total_days = 31;
                
                // Empty cells before first day
                for($i = 1; $i < $first_day; $i++) {
                    echo '<div class="day empty"></div>';
                }
                
                // Calendar days
                for($day = 1; $day <= $total_days; $day++) {
                    $class = '';
                    if(($day + $first_day - 1) % 7 == 6) { // Sabtu
                        $class = 'saturday';
                    }
                    if($day == 8) {
                        $class .= ' today';
                    }
                    
                    echo '<div class="day ' . $class . '">' . $day . '</div>';
                }
                ?>
            </div>
            
            <div class="calendar-legend">
                <div class="legend-item">
                    <span class="legend-color today"></span>
                    <span>Hari Ini</span>
                </div>
                <div class="legend-item">
                    <span class="legend-color saturday"></span>
                    <span>Hari Kuliah</span>
                </div>
            </div>
        </div>

        <div class="academic-events">
            <h3>Jadwal Penting</h3>
            <ul class="event-list">
                <li>
                    <i class="fas fa-calendar-check"></i>
                    <div class="event-info">
                        <strong>Awal Perkuliahan</strong>
                        <span>1 Maret 2026</span>
                    </div>
                </li>
                <li>
                    <i class="fas fa-calendar-times"></i>
                    <div class="event-info">
                        <strong>UTS (Ujian Tengah Semester)</strong>
                        <span>20-25 April 2026</span>
                    </div>
                </li>
                <li>
                    <i class="fas fa-calendar-check"></i>
                    <div class="event-info">
                        <strong>UAS (Ujian Akhir Semester)</strong>
                        <span>15-20 Juni 2026</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>