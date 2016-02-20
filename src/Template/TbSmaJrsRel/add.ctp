<?= $this->element('sidebar') ?>
<div class="tbSmaJrsRel form large-9 medium-8 columns content">
    <?= $this->Form->create($tbSmaJrsRel) ?>
    <fieldset>
        <legend><?= __('Add Tb Sma Jrs Rel') ?></legend>
        <?php
            echo $this->Form->input('sma_id');
            echo $this->Form->input('jrs_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
