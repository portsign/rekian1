<?= $this->element('sidebar') ?>
<div class="sma form large-9 medium-8 columns content">
    <?= $this->Form->create($sma) ?>
    <fieldset>
        <legend><?= __('Add Sma') ?></legend>
        <?php
            echo $this->Form->input('sma');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
