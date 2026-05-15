
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="dashboard-container">
        <header class="main-header">
            <div class="header-content">
                <h1>Dashboard</h1>
                <div class="user-info">
                    <i class="fas fa-user-circle"></i>
                    <span>Selamat Datang, Mahasiswa</span>
                </div>
            </div>
        </header>