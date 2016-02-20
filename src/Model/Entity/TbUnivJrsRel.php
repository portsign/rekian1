<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TbUnivJrsRel Entity.
 *
 * @property int $_id
 * @property \App\Model\Entity\ $
 * @property int $univ_id
 * @property \App\Model\Entity\Univ $univ
 * @property int $univ_jrs_id
 * @property \App\Model\Entity\UnivJr $univ_jr
 */
class TbUnivJrsRel extends Entity
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
        '*' => true,
        '_id' => false,
    ];
}
