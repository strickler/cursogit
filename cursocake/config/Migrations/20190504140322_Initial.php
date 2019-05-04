<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('pessoa')
            ->addColumn('Nome', 'string', [
                'default' => null,
                'limit' => 155,
                'null' => false,
            ])
            ->addColumn('Telefone', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('CPF', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('Email', 'string', [
                'default' => null,
                'limit' => 155,
                'null' => true,
            ])
            ->create();
    }

    public function down()
    {
        $this->table('pessoa')->drop()->save();
    }
}
