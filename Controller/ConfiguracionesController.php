<?php
App::uses('AppController', 'Controller');
/**
 * Configuraciones Controller
 *
 * @property Configuracione $Configuracione
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ConfiguracionesController extends AppController {

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
		$this->Configuracione->recursive = 0;
		$this->set('configuraciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Configuracione->exists($id)) {
			throw new NotFoundException(__('Invalid configuracione'));
		}
		$options = array('conditions' => array('Configuracione.' . $this->Configuracione->primaryKey => $id));
		$this->set('configuracione', $this->Configuracione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Configuracione->create();
			if ($this->Configuracione->save($this->request->data)) {
				$this->Session->setFlash(__('The configuracione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The configuracione could not be saved. Please, try again.'));
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
		if (!$this->Configuracione->exists($id)) {
			throw new NotFoundException(__('Invalid configuracione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Configuracione->save($this->request->data)) {
				$this->Session->setFlash(__('The configuracione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The configuracione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Configuracione.' . $this->Configuracione->primaryKey => $id));
			$this->request->data = $this->Configuracione->find('first', $options);
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
		$this->Configuracione->id = $id;
		if (!$this->Configuracione->exists()) {
			throw new NotFoundException(__('Invalid configuracione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Configuracione->delete()) {
			$this->Session->setFlash(__('The configuracione has been deleted.'));
		} else {
			$this->Session->setFlash(__('The configuracione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
