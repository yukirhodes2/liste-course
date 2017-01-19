<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Level'), ['action' => 'edit', $level->level_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Level'), ['action' => 'delete', $level->level_id], ['confirm' => __('Are you sure you want to delete # {0}?', $level->level_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Levels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Level'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="levels view large-9 medium-8 columns content">
    <h3><?= h($level->level_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Level') ?></th>
            <td><?= $level->has('level') ? $this->Html->link($level->level->level_id, ['controller' => 'Levels', 'action' => 'view', $level->level->level_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Level Libelle') ?></th>
            <td><?= h($level->level_libelle) ?></td>
        </tr>
    </table>
</div>
