<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tb Univ'), ['action' => 'index']) ?></li>
    </ul>
</nav>
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
