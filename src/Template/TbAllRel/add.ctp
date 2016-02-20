<?= $this->element('sidebar') ?>
<div class="tbAllRel form large-9 medium-8 columns content">
    <?= $this->Form->create($tbAllRel) ?>
    <fieldset>
        <legend><?= __('Add Tb All Rel') ?></legend>
        <?php
            echo $this->Form->input('sma_jrs_rel_id');
            echo $this->Form->input('univ_jrs_rel_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
