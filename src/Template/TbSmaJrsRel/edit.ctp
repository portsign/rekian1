<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tbSmaJrsRel->_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tbSmaJrsRel->_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tb Sma Jrs Rel'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tbSmaJrsRel form large-9 medium-8 columns content">
    <?= $this->Form->create($tbSmaJrsRel) ?>
    <fieldset>
        <legend><?= __('Edit Tb Sma Jrs Rel') ?></legend>
        <?php
            echo $this->Form->input('sma_id');
            echo $this->Form->input('jrs_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
