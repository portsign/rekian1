<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tbSmaJr->_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tbSmaJr->_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tb Sma Jrs'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tbSmaJrs form large-9 medium-8 columns content">
    <?= $this->Form->create($tbSmaJr) ?>
    <fieldset>
        <legend><?= __('Edit Tb Sma Jr') ?></legend>
        <?php
            echo $this->Form->input('jurusan');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>