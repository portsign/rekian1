<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tb Univ Jrs'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tbUnivJrs form large-9 medium-8 columns content">
    <?= $this->Form->create($tbUnivJr) ?>
    <fieldset>
        <legend><?= __('Add Tb Univ Jr') ?></legend>
        <?php
            echo $this->Form->input('jurusan_univ');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
