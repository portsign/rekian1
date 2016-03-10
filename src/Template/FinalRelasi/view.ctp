<?= $this->element('sidebar') ?>
<div class="finalRelasi view large-9 medium-8 columns content">
    <h3><?= h($finalRelasi->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($finalRelasi->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Rel Sma') ?></th>
            <td><?= $this->Number->format($finalRelasi->id_rel_sma) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Rel Kampus') ?></th>
            <td><?= $this->Number->format($finalRelasi->id_rel_kampus) ?></td>
        </tr>
    </table>
</div>
