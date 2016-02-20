<?php
namespace App\Model\Table;

use App\Model\Entity\TbUnivJr;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbUnivJrs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $
 */
class TbUnivJrsTable extends Table
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

        $this->table('tb_univ_jrs');
        $this->displayField('_id');
        $this->primaryKey('_id');

        $this->belongsTo('', [
            'foreignKey' => '_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('jurusan_univ', 'create')
            ->notEmpty('jurusan_univ');

        return $validator;
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
        return $rules;
    }
}
