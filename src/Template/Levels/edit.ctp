<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $level->level_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $level->level_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Levels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="levels form large-9 medium-8 columns content">
    <?= $this->Form->create($level) ?>
    <fieldset>
        <legend><?= __('Edit Level') ?></legend>
        <?php
            echo $this->Form->input('level_libelle');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
