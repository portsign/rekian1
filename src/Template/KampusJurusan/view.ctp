<?= $this->element('sidebar') ?>
<div class="kampusJurusan view large-9 medium-8 columns content">
    <h3><?= h($kampusJurusan->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Kampus Jurusan') ?></th>
            <td><?= h($kampusJurusan->kampus_jurusan) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($kampusJurusan->id) ?></td>
        </tr>
    </table>
</div>
