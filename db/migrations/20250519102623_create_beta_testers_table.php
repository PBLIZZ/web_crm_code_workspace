<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateBetaTestersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        // Create the beta_testers table
        $table = $this->table('beta_testers');
        $table->addColumn('name', 'string', ['limit' => 255, 'null' => true])
              ->addColumn('email', 'string', ['limit' => 255, 'null' => false])
              ->addColumn('practice_type', 'string', ['limit' => 100, 'null' => true])
              ->addColumn('message', 'text', ['null' => true])
              ->addColumn('created_at', 'datetime', ['null' => true])
              ->addColumn('updated_at', 'datetime', ['null' => true])
              ->addIndex(['email'], ['unique' => true])
              ->addIndex(['created_at'])
              ->create();
    }
}
