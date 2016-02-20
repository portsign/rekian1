<?= $this->element('sidebar') ?>
<div class="tbSmaJrs view large-9 medium-8 columns content">
    <h3><?= h($tbSmaJr->_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Jurusan') ?></th>
            <td><?= h($tbSmaJr->jurusan) ?></td>
        </tr>
        <tr>
            <th><?= __(' Id') ?></th>
            <td><?= $this->Number->format($tbSmaJr->_id) ?></td>
        </tr>
    </table>
</div>
