<?= $this->element('sidebar') ?>
<div class="tbUnivJrsRel form large-9 medium-8 columns content">
    <?= $this->Form->create($tbUnivJrsRel) ?>
    <fieldset>
        <legend><?= __('Edit Tb Univ Jrs Rel') ?></legend>
        <?php
            echo $this->Form->input('univ_id');
            echo $this->Form->input('univ_jrs_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
