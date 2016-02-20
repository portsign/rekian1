<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tb Univ Jrs Rel'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tbUnivJrsRel form large-9 medium-8 columns content">
    <?= $this->Form->create($tbUnivJrsRel) ?>
    <fieldset>
        <legend><?= __('Add Tb Univ Jrs Rel') ?></legend>
        <?php
            echo $this->Form->input('univ_id');
            echo $this->Form->input('univ_jrs_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
