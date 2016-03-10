<?= $this->element('sidebar') ?>
<div class="kampus form large-9 medium-8 columns content">
    <?= $this->Form->create($kampus) ?>
    <fieldset>
        <legend><?= __('Edit Kampus') ?></legend>
        <?php
            echo $this->Form->input('kampus');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
