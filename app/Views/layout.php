<?php
helper('url');

$page  = trim(uri_string(), '/');
$links = [
    ''        => 'Today',
    'tasks'   => 'All Tasks',
    'profile' => 'Profile',
    'about'   => 'About',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title) ?> | DayBoard</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
<div class="app">

    <aside class="sidebar">
        <div class="logo">Day<span>Board</span></div>
        <nav>
            <?php foreach ($links as $path => $label): ?>
                <a href="<?= base_url($path) ?>" class="<?= $page === $path ? 'active' : '' ?>"><?= $label ?></a>
            <?php endforeach; ?>
        </nav>
    </aside>

    <main class="content">
        <?= $this->renderSection('content') ?>
    </main>

</div>
</body>
</html>
