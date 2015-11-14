<?php
App::uses('AppController', 'Controller');
/**
 * Arancels Controller
 *
 * @property Arancel $Arancel
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ArancelsController extends AppController {

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
		$this->Arancel->recursive = 0;
		$this->set('arancels', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Arancel->exists($id)) {
			throw new NotFoundException(__('Invalid arancel'));
		}
		$options = array('conditions' => array('Arancel.' . $this->Arancel->primaryKey => $id));
		$this->set('arancel', $this->Arancel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Arancel->create();
			if ($this->Arancel->save($this->request->data)) {
				$this->Session->setFlash(__('The arancel has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The arancel could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Arancel->exists($id)) {
			throw new NotFoundException(__('Invalid arancel'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Arancel->save($this->request->data)) {
				$this->Session->setFlash(__('The arancel has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The arancel could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Arancel.' . $this->Arancel->primaryKey => $id));
			$this->request->data = $this->Arancel->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Arancel->id = $id;
		if (!$this->Arancel->exists()) {
			throw new NotFoundException(__('Invalid arancel'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Arancel->delete()) {
			$this->Session->setFlash(__('The arancel has been deleted.'));
		} else {
			$this->Session->setFlash(__('The arancel could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
