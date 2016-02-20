<?= $this->element('sidebar') ?>
<div class="tbUnivJrsRel view large-9 medium-8 columns content">
    <h3><?= h($tbUnivJrsRel->_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __(' Id') ?></th>
            <td><?= $this->Number->format($tbUnivJrsRel->_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Univ Id') ?></th>
            <td><?= $this->Number->format($tbUnivJrsRel->univ_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Univ Jrs Id') ?></th>
            <td><?= $this->Number->format($tbUnivJrsRel->univ_jrs_id) ?></td>
        </tr>
    </table>
</div>
