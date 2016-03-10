<?= $this->element('sidebar') ?>
<div class="kampus index large-9 medium-8 columns content">
<a href="/kampus/add" class="button">+ Tambah Data Kampus</a>
    <h3><?= __('Kampus') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('kampus') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kampus as $kampus): ?>
            <tr>
                <td><?= $this->Number->format($kampus->id) ?></td>
                <td><?= h($kampus->kampus) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $kampus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $kampus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $kampus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kampus->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
