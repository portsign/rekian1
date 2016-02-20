<?= $this->element('sidebar') ?>
<div class="tbSma form large-9 medium-8 columns content">
    <?= $this->Form->create($tbSma) ?>
    <fieldset>
        <legend><?= __('Add Tb Sma') ?></legend>
        <?php
            echo $this->Form->input('sma');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
