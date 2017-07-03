<?php

use Phinx\Migration\AbstractMigration;

class CreateUserTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $user = $this->table('users');
        $user->addColumn('name', 'string', ['limit' => 50])
            ->addColumn('email', 'string', ['limit' => 70])
            ->addIndex(['email'])
            ->addColumn('password', 'string')
            ->addColumn('phone', 'string', ['limit' => 30, 'null' => true])
            ->addColumn('confirmation_code', 'string', ['limit' => 150, 'null' => true])
            ->addIndex(['confirmation_code'])
            ->addColumn('confirmed_account', 'enum', ['values' => ['Y', 'N'], 'default' => 'N'])
            ->addIndex(['confirmed_account'])
            ->addColumn('is_admin', 'enum', ['values' => ['Y', 'N'], 'default' => 'N'])
            ->addIndex(['is_admin'])
            ->addColumn('path', 'string', ['limit' => 50, 'null' => true])
            ->addColumn('profile_picture', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('last_login', 'datetime', ['null' => true])
            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'timestamp', ['null' => true])
            ->addColumn('deleted_at', 'timestamp', ['null' => true])
            ->create();
    }
}
