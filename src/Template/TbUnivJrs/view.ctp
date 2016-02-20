<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Univ Jr'), ['action' => 'edit', $tbUnivJr->_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Univ Jr'), ['action' => 'delete', $tbUnivJr->_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbUnivJr->_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Univ Jrs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Univ Jr'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbUnivJrs view large-9 medium-8 columns content">
    <h3><?= h($tbUnivJr->_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Jurusan Univ') ?></th>
            <td><?= h($tbUnivJr->jurusan_univ) ?></td>
        </tr>
        <tr>
            <th><?= __(' Id') ?></th>
            <td><?= $this->Number->format($tbUnivJr->_id) ?></td>
        </tr>
    </table>
</div>
