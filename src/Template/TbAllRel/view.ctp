<?= $this->element('sidebar') ?>
<div class="tbAllRel view large-9 medium-8 columns content">
    <h3><?= h($tbAllRel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tbAllRel->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Sma Jrs Rel Id') ?></th>
            <td><?= $this->Number->format($tbAllRel->sma_jrs_rel_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Univ Jrs Rel Id') ?></th>
            <td><?= $this->Number->format($tbAllRel->univ_jrs_rel_id) ?></td>
        </tr>
    </table>
</div>
