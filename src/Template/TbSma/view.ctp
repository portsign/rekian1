<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Sma'), ['action' => 'edit', $tbSma->_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Sma'), ['action' => 'delete', $tbSma->_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbSma->_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Sma'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Sma'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbSma view large-9 medium-8 columns content">
    <h3><?= h($tbSma->_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Sma') ?></th>
            <td><?= h($tbSma->sma) ?></td>
        </tr>
        <tr>
            <th><?= __(' Id') ?></th>
            <td><?= $this->Number->format($tbSma->_id) ?></td>
        </tr>
    </table>
</div>
