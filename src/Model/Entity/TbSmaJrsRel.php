<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TbSmaJrsRel Entity.
 *
 * @property int $_id
 * @property \App\Model\Entity\ $
 * @property int $sma_id
 * @property \App\Model\Entity\Sma $sma
 * @property int $jrs_id
 * @property \App\Model\Entity\Jr $jr
 */
class TbSmaJrsRel extends Entity
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
