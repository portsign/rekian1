<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Sma Jr'), ['action' => 'edit', $tbSmaJr->_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Sma Jr'), ['action' => 'delete', $tbSmaJr->_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbSmaJr->_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Sma Jrs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Sma Jr'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbSmaJrs view large-9 medium-8 columns content">
    <h3><?= h($tbSmaJr->_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Jurusan') ?></th>
            <td><?= h($tbSmaJr->jurusan) ?></td>
        </tr>
        <tr>
            <th><?= __(' Id') ?></th>
            <td><?= $this->Number->format($tbSmaJr->_id) ?></td>
        </tr>
    </table>
</div>
