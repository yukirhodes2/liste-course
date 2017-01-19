<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customers index large-9 medium-8 columns content">
    <h3><?= __('Customers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_pseudo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_surname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_mail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_password') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= $customer->has('customer') ? $this->Html->link($customer->customer->customer_id, ['controller' => 'Customers', 'action' => 'view', $customer->customer->customer_id]) : '' ?></td>
                <td><?= h($customer->customer_pseudo) ?></td>
                <td><?= h($customer->customer_name) ?></td>
                <td><?= h($customer->customer_surname) ?></td>
                <td><?= h($customer->customer_mail) ?></td>
                <td><?= h($customer->customer_password) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $customer->customer_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->customer_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->customer_id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->customer_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
