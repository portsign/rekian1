<?= $this->element('sidebar') ?>
<div class="tbUnivJrs form large-9 medium-8 columns content">
    <?= $this->Form->create($tbUnivJr) ?>
    <fieldset>
        <legend><?= __('Edit Tb Univ Jr') ?></legend>
        <?php
            echo $this->Form->input('jurusan_univ');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
