<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Grids'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Grids'), ['controller' => 'Grids', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grid'), ['controller' => 'Grids', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="grids form large-9 medium-8 columns content">
    <?= $this->Form->create($grid) ?>
    <fieldset>
        <legend><?= __('Add Grid') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
