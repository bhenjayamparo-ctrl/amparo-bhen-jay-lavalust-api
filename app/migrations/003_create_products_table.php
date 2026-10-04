<?php

class Create_products_table
{
    private $_lava;

    public function __construct()
    {
        $this->_lava = lava_instance();
        $this->_lava->call->dbforge();
    }

    public function up()
    {
        if ($this->_lava->dbforge->table_exists('products')) {
            return;
        }

        $this->_lava->dbforge
            ->add_field([
                'id' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'auto_increment' => true,
                    'null'           => false,
                ],
                'product_name' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 100,
                    'null'       => false,
                ],
                'description' => [
                    'type' => 'TEXT',
                    'null' => true,
                ],
                'price' => [
                    'type'       => 'DECIMAL',
                    'constraint' => '10,2',
                    'null'       => false,
                ],
                'quantity' => [
                    'type'       => 'INT',
                    'constraint' => 11,
                    'null'       => false,
                ],
                'created_at' => [
                    'type'    => 'TIMESTAMP',
                    'null'    => false,
                    'default' => 'CURRENT_TIMESTAMP',
                ],
            ])
            ->add_key('id', primary: true)
            ->create_table('products');
    }

    public function down()
    {
        $this->_lava->dbforge->drop_table('products');
    }
}