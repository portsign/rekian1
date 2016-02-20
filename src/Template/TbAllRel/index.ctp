<?= $this->element('sidebar'); $path = $this->request->here; ?>
<div class="tbAllRel index large-9 medium-8 columns content">
    <h3><?= __('Tb All Rel') ?></h3>
	<a href="<?= $path.DS.'add'; ?>" class="button-add">Add Data</a>
	<div class="distance"></div>
	<table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('sma_jrs_rel_id') ?></th>
                <th><?= $this->Paginator->sort('univ_jrs_rel_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbAllRel as $tbAllRel): ?>
            <tr>
                <td><?= $this->Number->format($tbAllRel->id) ?></td>
                <td><?= $this->Number->format($tbAllRel->sma_jrs_rel_id) ?></td>
                <td><?= $this->Number->format($tbAllRel->univ_jrs_rel_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbAllRel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbAllRel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbAllRel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbAllRel->id)]) ?>
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
