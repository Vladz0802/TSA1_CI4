<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<header class="page-header">
    <p class="subtitle">Sorted by date</p>
    <h1>All Tasks</h1>
    <p class="summary"><?= count($tasks) ?> tasks in total</p>
</header>

<div class="card">
    <table>
        <thead>
            <tr><th>Date</th><th>Task</th><th>Status</th></tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
                <tr class="<?= $task['task_date'] === $today ? 'is-today' : '' ?>">
                    <td class="date"><?= date('M j, Y', strtotime($task['task_date'])) ?></td>
                    <td><?= esc($task['title']) ?></td>
                    <td><span class="badge <?= esc($task['status'], 'attr') ?>"><?= esc(ucwords(str_replace('_', ' ', $task['status']))) ?></span></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
