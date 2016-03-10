<?= $this->element('sidebar') ?>
<div class="sma index large-9 medium-8 columns content">
<a href="/kampus/add" class="button">+ Tambah Data SMA</a>
    <h3><?= __('Sma') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('sma') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sma as $sma): ?>
            <tr>
                <td><?= $this->Number->format($sma->id) ?></td>
                <td><?= h($sma->sma) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sma->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sma->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sma->id)]) ?>
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
