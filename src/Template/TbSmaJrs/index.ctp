<?= $this->element('sidebar'); $path = $this->request->here; ?>
<div class="tbSmaJrs index large-9 medium-8 columns content">
    <h3><?= __('Tb Sma Jrs') ?></h3>
	<a href="<?= $path.DS.'add'; ?>" class="button-add">Add Data</a>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('_id') ?></th>
                <th><?= $this->Paginator->sort('jurusan') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbSmaJrs as $tbSmaJr): ?>
            <tr>
                <td><?= $this->Number->format($tbSmaJr->_id) ?></td>
                <td><?= h($tbSmaJr->jurusan) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbSmaJr->_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbSmaJr->_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbSmaJr->_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbSmaJr->_id)]) ?>
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
