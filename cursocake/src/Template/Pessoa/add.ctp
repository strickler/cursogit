<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa $pessoa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pessoa'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pessoa form large-9 medium-8 columns content">
    <?= $this->Form->create($pessoa) ?>
    <fieldset>
        <legend><?= __('Add Pessoa') ?></legend>
        <?php
            echo $this->Form->control('Nome');
            echo $this->Form->control('Telefone');
            echo $this->Form->control('CPF');
            echo $this->Form->control('Email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
