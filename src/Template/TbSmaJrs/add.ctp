<?= $this->element('sidebar') ?>
<div class="tbSmaJrs form large-9 medium-8 columns content">
    <?= $this->Form->create($tbSmaJr) ?>
    <fieldset>
        <legend><?= __('Add Tb Sma Jr') ?></legend>
        <?php
            echo $this->Form->input('jurusan');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
