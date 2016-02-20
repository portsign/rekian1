<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tbAllRel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tbAllRel->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tb All Rel'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tbAllRel form large-9 medium-8 columns content">
    <?= $this->Form->create($tbAllRel) ?>
    <fieldset>
        <legend><?= __('Edit Tb All Rel') ?></legend>
        <?php
            echo $this->Form->input('sma_jrs_rel_id');
            echo $this->Form->input('univ_jrs_rel_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
