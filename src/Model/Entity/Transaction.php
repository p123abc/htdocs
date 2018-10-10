<?php
// src/Model/Entity/Transaction.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Transaction extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'account_id' => false,
    ];
}