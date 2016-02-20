<?php
namespace App\Model\Table;

use App\Model\Entity\TbUnivJrsRel;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbUnivJrsRel Model
 *
 * @property \Cake\ORM\Association\BelongsTo $
 * @property \Cake\ORM\Association\BelongsTo $Univs
 * @property \Cake\ORM\Association\BelongsTo $UnivJrs
 */
class TbUnivJrsRelTable extends Table
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

        $this->table('tb_univ_jrs_rel');
        $this->displayField('_id');
        $this->primaryKey('_id');

        $this->belongsTo('', [
            'foreignKey' => '_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Univs', [
            'foreignKey' => 'univ_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('UnivJrs', [
            'foreignKey' => 'univ_jrs_id',
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
        $rules->add($rules->existsIn(['_id']));
        $rules->add($rules->existsIn(['univ_id'], 'Univs'));
        $rules->add($rules->existsIn(['univ_jrs_id'], 'UnivJrs'));
        return $rules;
    }
}
