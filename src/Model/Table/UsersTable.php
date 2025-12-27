<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class UsersTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->setTable('users');
        $this->setPrimaryKey('id');
        // CakePHP otomatis mengelola created_at jika ada kolomnya
        $this->addBehavior('Timestamp');
    }
}