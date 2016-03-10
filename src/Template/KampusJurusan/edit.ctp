<?= $this->element('sidebar') ?>
<div class="kampusJurusan form large-9 medium-8 columns content">
    <?= $this->Form->create($kampusJurusan) ?>
    <fieldset>
        <legend><?= __('Edit Kampus Jurusan') ?></legend>
        <?php
            echo $this->Form->input('kampus_jurusan');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
