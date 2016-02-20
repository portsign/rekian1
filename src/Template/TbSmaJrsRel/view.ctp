<?= $this->element('sidebar') ?>
<div class="tbSmaJrsRel view large-9 medium-8 columns content">
    <h3><?= h($tbSmaJrsRel->_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __(' Id') ?></th>
            <td><?= $this->Number->format($tbSmaJrsRel->_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Sma Id') ?></th>
            <td><?= $this->Number->format($tbSmaJrsRel->sma_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Jrs Id') ?></th>
            <td><?= $this->Number->format($tbSmaJrsRel->jrs_id) ?></td>
        </tr>
    </table>
</div>
