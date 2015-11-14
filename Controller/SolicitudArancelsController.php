<?php
App::uses('AppController', 'Controller');
/**
 * SolicitudArancels Controller
 *
 * @property SolicitudArancel $SolicitudArancel
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SolicitudArancelsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SolicitudArancel->recursive = 0;
		$this->set('solicitudArancels', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SolicitudArancel->exists($id)) {
			throw new NotFoundException(__('Invalid solicitud arancel'));
		}
		$options = array('conditions' => array('SolicitudArancel.' . $this->SolicitudArancel->primaryKey => $id));
		$this->set('solicitudArancel', $this->SolicitudArancel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$data['user_id']=$_SESSION['user_id'];
		$data['fecha']=date('Y-m-d g:i:s');
		$data['nro_solicitud']=7;
		//,'fecha'=>'2015-11-12','nro_solicitud'=>'33');
		//debug ($data); exit();

			

		if ($this->request->is('post')) {

			//$this->SolicitudArancel->fecha=>'2015-11-12';
			//$this->SolicitudArancel->user_id=>5;
			//$this->SolicitudArancel->nro_solicitud=>'345';

			$this->SolicitudArancel->create();
			if ($this->SolicitudArancel->save($data)) {
				$this->Session->setFlash(__('The solicitud arancel has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {

				$this->Session->setFlash(__('The solicitud arancel could not be saved. Please, try again.'));
			}
		}
		$users = $this->SolicitudArancel->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SolicitudArancel->exists($id)) {
			throw new NotFoundException(__('Invalid solicitud arancel'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SolicitudArancel->save($this->request->data)) {
				$this->Session->setFlash(__('The solicitud arancel has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The solicitud arancel could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SolicitudArancel.' . $this->SolicitudArancel->primaryKey => $id));
			$this->request->data = $this->SolicitudArancel->find('first', $options);
		}
		$users = $this->SolicitudArancel->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SolicitudArancel->id = $id;
		if (!$this->SolicitudArancel->exists()) {
			throw new NotFoundException(__('Invalid solicitud arancel'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SolicitudArancel->delete()) {
			$this->Session->setFlash(__('The solicitud arancel has been deleted.'));
		} else {
			$this->Session->setFlash(__('The solicitud arancel could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
