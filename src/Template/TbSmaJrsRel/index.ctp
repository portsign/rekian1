<?= $this->element('sidebar'); $path = $this->request->here; ?>
<div class="tbSmaJrsRel index large-9 medium-8 columns content">
    <h3><?= __('Tb Sma Jrs Rel') ?></h3>
	<a href="<?= $path.DS.'add'; ?>" class="button-add">Add Data</a>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('_id') ?></th>
                <th><?= $this->Paginator->sort('sma_id') ?></th>
                <th><?= $this->Paginator->sort('jrs_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbSmaJrsRel as $tbSmaJrsRel): ?>
            <tr>
                <td><?= $this->Number->format($tbSmaJrsRel->_id) ?></td>
                <td><?= $this->Number->format($tbSmaJrsRel->sma_id) ?></td>
                <td><?= $this->Number->format($tbSmaJrsRel->jrs_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbSmaJrsRel->_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbSmaJrsRel->_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbSmaJrsRel->_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbSmaJrsRel->_id)]) ?>
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
