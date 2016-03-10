<?php
namespace App\Model\Table;

use App\Model\Entity\SmaRel;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SmaRel Model
 *
 */
class SmaRelTable extends Table
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

        $this->table('sma_rel');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('id_sma')
            ->requirePresence('id_sma', 'create')
            ->notEmpty('id_sma');

        $validator
            ->integer('id_sma_jurusan')
            ->requirePresence('id_sma_jurusan', 'create')
            ->notEmpty('id_sma_jurusan');

        return $validator;
    }
}
