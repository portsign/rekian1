<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Univ Jrs Rel'), ['action' => 'edit', $tbUnivJrsRel->_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Univ Jrs Rel'), ['action' => 'delete', $tbUnivJrsRel->_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbUnivJrsRel->_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Univ Jrs Rel'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Univ Jrs Rel'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbUnivJrsRel view large-9 medium-8 columns content">
    <h3><?= h($tbUnivJrsRel->_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __(' Id') ?></th>
            <td><?= $this->Number->format($tbUnivJrsRel->_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Univ Id') ?></th>
            <td><?= $this->Number->format($tbUnivJrsRel->univ_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Univ Jrs Id') ?></th>
            <td><?= $this->Number->format($tbUnivJrsRel->univ_jrs_id) ?></td>
        </tr>
    </table>
</div>
