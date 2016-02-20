<?= $this->element('sidebar') ?>
<div class="tbSma view large-9 medium-8 columns content">
    <h3><?= h($tbSma->_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Sma') ?></th>
            <td><?= h($tbSma->sma) ?></td>
        </tr>
        <tr>
            <th><?= __(' Id') ?></th>
            <td><?= $this->Number->format($tbSma->_id) ?></td>
        </tr>
    </table>
</div>
