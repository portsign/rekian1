<?= $this->element('sidebar') ?>
<div class="tbUniv form large-9 medium-8 columns content">
    <?= $this->Form->create($tbUniv) ?>
    <fieldset>
        <legend><?= __('Add Tb Univ') ?></legend>
        <?php
            echo $this->Form->input('universitas');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
