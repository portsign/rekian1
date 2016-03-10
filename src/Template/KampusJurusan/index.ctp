<?= $this->element('sidebar') ?>
<div class="kampusJurusan index large-9 medium-8 columns content">
<a href="/kampus/add" class="button">+ Tambah Data Jurusan Kampus</a>
    <h3><?= __('Kampus Jurusan') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('kampus_jurusan') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kampusJurusan as $kampusJurusan): ?>
            <tr>
                <td><?= $this->Number->format($kampusJurusan->id) ?></td>
                <td><?= h($kampusJurusan->kampus_jurusan) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $kampusJurusan->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $kampusJurusan->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $kampusJurusan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kampusJurusan->id)]) ?>
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
