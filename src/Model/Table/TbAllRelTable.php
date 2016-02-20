<?php
namespace App\Model\Table;

use App\Model\Entity\TbAllRel;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbAllRel Model
 *
 * @property \Cake\ORM\Association\BelongsTo $SmaJrsRels
 * @property \Cake\ORM\Association\BelongsTo $UnivJrsRels
 */
class TbAllRelTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('tb_all_rel');

        $this->belongsTo('SmaJrsRels', [
            'foreignKey' => 'sma_jrs_rel_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('UnivJrsRels', [
            'foreignKey' => 'univ_jrs_rel_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['sma_jrs_rel_id'], 'SmaJrsRels'));
        $rules->add($rules->existsIn(['univ_jrs_rel_id'], 'UnivJrsRels'));
        return $rules;
    }
}
