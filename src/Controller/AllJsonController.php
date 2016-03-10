<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Controller\Component\RequestHandlerComponent;
use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

class AllJsonController extends AppController
{
	public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
	public function index()
    {
    	$sma = TableRegistry::get('Sma');
    	$kampus = TableRegistry::get('Kampus');
    	$kampus_jurusan = TableRegistry::get('KampusJurusan');
    	$kampus_rel = TableRegistry::get('KampusRel');
    	$sma_jurusan = TableRegistry::get('SmaJurusan');
    	$sma_rel = TableRegistry::get('SmaRel');
    	$final_relasi = TableRegistry::get('FinalRelasi');

    	$sma = $sma->find('all');
    	$kampus = $kampus->find('all');
    	$kampus_jurusan = $kampus_jurusan->find('all');
    	$kampus_rel = $kampus_rel->find('all');
    	$sma_jurusan = $sma_jurusan->find('all');
    	$sma_rel = $sma_rel->find('all');
    	$final_relasi = $final_relasi->find('all');
        $this->set(compact('sma','kampus','kampus_jurusan','kampus_rel','sma_jurusan','sma_rel','final_relasi'));
    }
}