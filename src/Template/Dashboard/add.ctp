<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dashboard'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dashboard form large-9 medium-8 columns content">
    <?= $this->Form->create($dashboard) ?>
    <fieldset>
        <legend><?= __('Add Dashboard') ?></legend>
        <?php
            echo $this->Form->input('Title');
            echo $this->Form->input('welcome_message');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
