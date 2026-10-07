<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<header class="page-header">
    <p class="subtitle"><?= esc($date) ?></p>
    <h1>Today's Tasks</h1>
    <p class="summary"><?= count($tasks) ?> scheduled &middot; <?= $done ?> completed</p>
</header>

<div class="card">
    <?php if (empty($tasks)): ?>
        <p class="empty">No tasks scheduled for today.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr><th>Task</th><th>Status</th></tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= esc($task['title']) ?></td>
                        <td><span class="badge <?= esc($task['status'], 'attr') ?>"><?= esc(ucwords(str_replace('_', ' ', $task['status']))) ?></span></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>
