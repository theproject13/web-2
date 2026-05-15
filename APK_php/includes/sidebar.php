<?php
require_once __DIR__ . '/functions.php';
$courses = getCourses();
?>
<aside class="sidebar">
    <div class="menu-section">
        <h3>MENU</h3>
        <ul class="menu-list">
            <li class="menu-item">
                <a href="#" class="menu-link" onclick="toggleSubmenu(event, 'courses-submenu')">
                    <i class="fas fa-book"></i>
                    <span>Courses List</span>
                    <i class="fas fa-chevron-down submenu-arrow"></i>
                </a>
                <div id="courses-submenu" class="submenu">
                    <div class="search-box">
                        <input type="text" placeholder="Pencarian..." id="courseSearch" onkeyup="searchCourses()">
                    </div>
                    <ul class="submenu-list" id="courseList">
                        <?php foreach($courses as $course): ?>
                        <li>
                            <a href="?page=courses&id=<?php echo $course['id']; ?>">
                                <?php echo strtoupper(substr($course['name'], 0, 20)) . '...'; ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

    <div class="menu-section">
        <h3>Dashboards</h3>
        <ul class="menu-list">
            <li class="menu-item">
                <a href="?page=academic-calendar" class="menu-link">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Kalender Akademik <?php echo TAHUN_AKADEMIK; ?></span>
                </a>
            </li>
        </ul>
    </div>

    <div class="menu-section">
        <h3>Courses</h3>
        <ul class="menu-list">
            <?php 
            $detailCourses = getDetailedCourses();
            foreach($detailCourses as $course): 
            ?>
            <li class="menu-item course-item">
                <a href="?page=courses&action=detail&id=<?php echo $course['id']; ?>" class="menu-link">
                    <div class="course-info">
                        <span class="course-code">[<?php echo $course['sks']; ?>]</span>
                        <span class="course-name"><?php echo strtoupper($course['name']); ?></span>
                    </div>
                    <div class="course-detail">
                        <span class="course-code-full"># <?php echo $course['code']; ?></span>
                        <span class="course-class">(<?php echo $course['day']; ?>) [<?php echo $course['class']; ?>]</span>
                    </div>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</aside>
