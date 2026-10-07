<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<header class="page-header">
    <p class="subtitle">Account</p>
    <h1>Profile</h1>
</header>

<div class="card profile">
    <?php if ($user): ?>
        <div class="avatar"><?= esc(strtoupper(substr($user['full_name'], 0, 1))) ?></div>
        <dl>
            <dt>Full name</dt>
            <dd><?= esc($user['full_name']) ?></dd>
            <dt>Username</dt>
            <dd><?= esc($user['username']) ?></dd>
            <dt>Email</dt>
            <dd><?= esc($user['email']) ?></dd>
            <dt>Member since</dt>
            <dd><?= date('F j, Y', strtotime($user['created_at'])) ?></dd>
        </dl>
    <?php else: ?>
        <p class="empty">No user found. Run <code>php spark db:seed DatabaseSeeder</code>.</p>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>
