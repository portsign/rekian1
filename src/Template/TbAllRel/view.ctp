<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb All Rel'), ['action' => 'edit', $tbAllRel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb All Rel'), ['action' => 'delete', $tbAllRel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbAllRel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb All Rel'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb All Rel'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbAllRel view large-9 medium-8 columns content">
    <h3><?= h($tbAllRel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tbAllRel->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Sma Jrs Rel Id') ?></th>
            <td><?= $this->Number->format($tbAllRel->sma_jrs_rel_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Univ Jrs Rel Id') ?></th>
            <td><?= $this->Number->format($tbAllRel->univ_jrs_rel_id) ?></td>
        </tr>
    </table>
</div>
