<?= $this->element('sidebar') ?>
<div class="finalRelasi form large-9 medium-8 columns content">
    <?= $this->Form->create($finalRelasi) ?>
    <fieldset>
        <legend><?= __('Edit Final Relasi') ?></legend>
        <?php
            echo $this->Form->input('id_rel_sma');
            echo $this->Form->input('id_rel_kampus');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
