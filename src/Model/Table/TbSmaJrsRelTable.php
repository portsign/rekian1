<?php
namespace App\Model\Table;

use App\Model\Entity\TbSmaJrsRel;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbSmaJrsRel Model
 *
 * @property \Cake\ORM\Association\BelongsTo $
 * @property \Cake\ORM\Association\BelongsTo $Smas
 * @property \Cake\ORM\Association\BelongsTo $Jrs
 */
class TbSmaJrsRelTable extends Table
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

        $this->table('tb_sma_jrs_rel');
        $this->displayField('_id');
        $this->primaryKey('_id');

        $this->belongsTo('', [
            'foreignKey' => '_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Smas', [
            'foreignKey' => 'sma_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Jrs', [
            'foreignKey' => 'jrs_id',
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
        $rules->add($rules->existsIn(['sma_id'], 'Smas'));
        $rules->add($rules->existsIn(['jrs_id'], 'Jrs'));
        return $rules;
    }
}
