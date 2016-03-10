<?= $this->element('sidebar') ?>
<div class="kampus view large-9 medium-8 columns content">
    <h3><?= h($kampus->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Kampus') ?></th>
            <td><?= h($kampus->kampus) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($kampus->id) ?></td>
        </tr>
    </table>
</div>
