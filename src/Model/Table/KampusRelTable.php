<?php
namespace App\Model\Table;

use App\Model\Entity\KampusRel;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * KampusRel Model
 *
 */
class KampusRelTable extends Table
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

        $this->table('kampus_rel');
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
            ->integer('id_kampus')
            ->requirePresence('id_kampus', 'create')
            ->notEmpty('id_kampus');

        $validator
            ->integer('id_kampus_jurusan')
            ->requirePresence('id_kampus_jurusan', 'create')
            ->notEmpty('id_kampus_jurusan');

        return $validator;
    }
}
