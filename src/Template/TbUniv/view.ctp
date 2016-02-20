<?= $this->element('sidebar') ?>
<div class="tbUniv view large-9 medium-8 columns content">
    <h3><?= h($tbUniv->_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Universitas') ?></th>
            <td><?= h($tbUniv->universitas) ?></td>
        </tr>
        <tr>
            <th><?= __(' Id') ?></th>
            <td><?= $this->Number->format($tbUniv->_id) ?></td>
        </tr>
    </table>
</div>
