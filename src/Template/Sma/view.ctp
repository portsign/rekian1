<?= $this->element('sidebar') ?>
<div class="sma view large-9 medium-8 columns content">
    <h3><?= h($sma->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Sma') ?></th>
            <td><?= h($sma->sma) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($sma->id) ?></td>
        </tr>
    </table>
</div>
