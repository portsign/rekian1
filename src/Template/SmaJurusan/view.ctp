<?= $this->element('sidebar') ?>
<div class="smaJurusan view large-9 medium-8 columns content">
    <h3><?= h($smaJurusan->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Sma Jurusan') ?></th>
            <td><?= h($smaJurusan->sma_jurusan) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($smaJurusan->id) ?></td>
        </tr>
    </table>
</div>
