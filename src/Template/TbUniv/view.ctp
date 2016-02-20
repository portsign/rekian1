<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Univ'), ['action' => 'edit', $tbUniv->_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Univ'), ['action' => 'delete', $tbUniv->_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbUniv->_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Univ'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Univ'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbUniv view large-9 medium-8 columns content">
    <h3><?= h($tbUniv->_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Universitas') ?></th>
            <td><?= h($tbUniv->universitas) ?></td>
        </tr>
        <tr>
            <th><?= __(' Id') ?></th>
            <td><?= $this->Number->format($tbUniv->_id) ?></td>
        </tr>
    </table>
</div>
