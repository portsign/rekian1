<?= $this->element('sidebar') ?>
<div class="finalRelasi index large-9 medium-8 columns content">
    <h3><?= __('Final Relasi') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('id_rel_sma') ?></th>
                <th><?= $this->Paginator->sort('id_rel_kampus') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($finalRelasi as $finalRelasi): ?>
            <tr>
                <td><?= $this->Number->format($finalRelasi->id) ?></td>
                <td><?= $this->Number->format($finalRelasi->id_rel_sma) ?></td>
                <td><?= $this->Number->format($finalRelasi->id_rel_kampus) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $finalRelasi->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $finalRelasi->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $finalRelasi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $finalRelasi->id)]) ?>
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
