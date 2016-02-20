<?= $this->element('sidebar') ?>
<div class="tbUnivJrs view large-9 medium-8 columns content">
    <h3><?= h($tbUnivJr->_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Jurusan Univ') ?></th>
            <td><?= h($tbUnivJr->jurusan_univ) ?></td>
        </tr>
        <tr>
            <th><?= __(' Id') ?></th>
            <td><?= $this->Number->format($tbUnivJr->_id) ?></td>
        </tr>
    </table>
</div>
