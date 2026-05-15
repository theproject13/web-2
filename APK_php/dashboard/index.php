
<?php
require_once 'config.php';
require_once 'includes/functions.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

// Validasi page yang diizinkan
$allowed_pages = ['dashboard', 'courses', 'academic-calendar'];
if (!in_array($page, $allowed_pages)) {
    $page = 'dashboard';
}
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<?php
// Load halaman yang diminta
switch($page) {
    case 'dashboard':
        include 'modules/dashboard.php';
        break;
    case 'courses':
        include 'modules/courses.php';
        break;
    case 'academic-calendar':
        include 'modules/academic-calendar.php';
        break;
    default:
        include 'modules/dashboard.php';
}
?>

<?php include 'includes/footer.php'; ?>