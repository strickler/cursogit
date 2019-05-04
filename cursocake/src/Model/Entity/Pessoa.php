<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pessoa Entity
 *
 * @property int $id
 * @property string $Nome
 * @property string $Telefone
 * @property string $CPF
 * @property string|null $Email
 */
class Pessoa extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'Nome' => true,
        'Telefone' => true,
        'CPF' => true,
        'Email' => true
    ];
}
