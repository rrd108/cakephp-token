<?php

use Migrations\AbstractMigration;

/**
 * Class BinaryId
 */
class IdLength extends AbstractMigration
{
    /**
     * Apply migrations
     *
     * @return void
     */
    public function up()
    {
        $table = $this->table('token_tokens');

        $table
            ->changeColumn('id', 'string', ['limit' => 32, 'collation' => 'utf8_bin'])
            ->save();
    }
}