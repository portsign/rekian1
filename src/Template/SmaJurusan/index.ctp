<?= $this->element('sidebar') ?>
<div class="smaJurusan index large-9 medium-8 columns content">
<a href="/kampus/add" class="button">+ Tambah Data Jurusan SMA</a>
    <h3><?= __('Sma Jurusan') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('sma_jurusan') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($smaJurusan as $smaJurusan): ?>
            <tr>
                <td><?= $this->Number->format($smaJurusan->id) ?></td>
                <td><?= h($smaJurusan->sma_jurusan) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $smaJurusan->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $smaJurusan->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $smaJurusan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $smaJurusan->id)]) ?>
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
