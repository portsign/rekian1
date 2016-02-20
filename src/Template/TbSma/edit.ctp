<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tbSma->_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tbSma->_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tb Sma'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tbSma form large-9 medium-8 columns content">
    <?= $this->Form->create($tbSma) ?>
    <fieldset>
        <legend><?= __('Edit Tb Sma') ?></legend>
        <?php
            echo $this->Form->input('sma');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
