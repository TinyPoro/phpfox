<?php
namespace Apps\Core_Photos\Installation\Database;

use Core\App\Install\Database\Table as Table;

class Photo_Category extends Table
{
    protected function setTableName()
    {
        $this->_table_name = 'photo_category';
    }

    protected function setFieldParams()
    {
        $this->_aFieldParams = [
            'category_id' => [
                'type' => 'mediumint',
                'type_value' => '8',
                'other' => 'UNSIGNED NOT NULL',
                'primary_key' => true,
                'auto_increment' => true,
            ],
            'parent_id' => [
                'type' => 'mediumint',
                'type_value' => '8',
                'other' => 'UNSIGNED NOT NULL DEFAULT \'0\''
            ],
            'name' => [
                'type' => 'varchar',
                'type_value' => '255',
                'other' => 'NOT NULL'
            ],
            'name_url' => [
                'type' => 'varchar',
                'type_value' => '255',
                'other' => 'DEFAULT NULL'
            ],
            'time_stamp' => [
                'type' => 'int',
                'type_value' => '10',
                'other' => 'UNSIGNED NOT NULL DEFAULT \'0\''
            ],
            'used' => [
                'type' => 'int',
                'type_value' => '10',
                'other' => 'UNSIGNED NOT NULL DEFAULT \'0\''
            ],
            'is_active' => [
                'type' => 'tinyint',
                'type_value' => '1',
                'other' => 'NOT NULL DEFAULT \'1\''
            ],
            'ordering' => [
                'type' => 'int',
                'type_value' => '11',
                'other' => 'NOT NULL DEFAULT \'0\''
            ],
        ];
    }

    /**
     * Set keys of table
     */
    protected function setKeys()
    {
        $this->_key = [
            'parent_id' => ['parent_id'],
            'name_url' => ['name_url']
        ];
    }
}