<?php

use yii\db\Migration;

class m161025_094441_init_functionality extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }


        $this->createTable('multylang_lang', [
            'id' => $this->integer(11)->notNull()->primaryKey(),
            'url' => $this->string(255)->notNull(),
            'local' => $this->string(255)->notNull(),
            'name' => $this->string(255)->notNull(),
            'default' => $this->integer(6)->defaultValue(0),
            'date_update' => $this->integer(11)->notNull(),
            'date_create' => $this->integer(11)->notNull(),
        ], $tableOptions);

        $this->insert('multylang_lang', [
            'id' => 1,
            'url' => 'en',
            'local' => 'en-EN',
            'name' => 'English',
            'default' => 1,
            'date_update' => 1469952676,
            'date_create' => 1469952676
        ]);

        $this->insert('multylang_lang', [
            'id' => 2,
            'url' => 'uk',
            'local' => 'uk-UK',
            'name' => 'Українська',
            'default' => 0,
            'date_update' => 1469952677,
            'date_create' => 1469952677
        ]);

        $this->insert('multylang_lang', [
            'id' => 3,
            'url' => 'ru',
            'local' => 'ru-RU',
            'name' => 'Русский',
            'default' => 0,
            'date_update' => 1469952687,
            'date_create' => 1469952687
        ]);
    }

    public function down()
    {
        $this->dropTable('multylang_lang');
    }
}
