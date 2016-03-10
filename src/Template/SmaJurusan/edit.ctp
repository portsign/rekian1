<?= $this->element('sidebar') ?>
<div class="smaJurusan form large-9 medium-8 columns content">
    <?= $this->Form->create($smaJurusan) ?>
    <fieldset>
        <legend><?= __('Edit Sma Jurusan') ?></legend>
        <?php
            echo $this->Form->input('sma_jurusan');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
