<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Sma Jrs Rel'), ['action' => 'edit', $tbSmaJrsRel->_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Sma Jrs Rel'), ['action' => 'delete', $tbSmaJrsRel->_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbSmaJrsRel->_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Sma Jrs Rel'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Sma Jrs Rel'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbSmaJrsRel view large-9 medium-8 columns content">
    <h3><?= h($tbSmaJrsRel->_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __(' Id') ?></th>
            <td><?= $this->Number->format($tbSmaJrsRel->_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Sma Id') ?></th>
            <td><?= $this->Number->format($tbSmaJrsRel->sma_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Jrs Id') ?></th>
            <td><?= $this->Number->format($tbSmaJrsRel->jrs_id) ?></td>
        </tr>
    </table>
</div>
