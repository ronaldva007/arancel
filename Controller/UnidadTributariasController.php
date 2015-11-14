<?php
App::uses('AppController', 'Controller');
/**
 * UnidadTributarias Controller
 *
 * @property UnidadTributaria $UnidadTributaria
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UnidadTributariasController extends AppController {

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
		$this->UnidadTributaria->recursive = 0;
		$this->set('unidadTributarias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UnidadTributaria->exists($id)) {
			throw new NotFoundException(__('Invalid unidad tributaria'));
		}
		$options = array('conditions' => array('UnidadTributaria.' . $this->UnidadTributaria->primaryKey => $id));
		$this->set('unidadTributaria', $this->UnidadTributaria->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UnidadTributaria->create();
			if ($this->UnidadTributaria->save($this->request->data)) {
				$this->Session->setFlash(__('The unidad tributaria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unidad tributaria could not be saved. Please, try again.'));
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
		if (!$this->UnidadTributaria->exists($id)) {
			throw new NotFoundException(__('Invalid unidad tributaria'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UnidadTributaria->save($this->request->data)) {
				$this->Session->setFlash(__('The unidad tributaria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unidad tributaria could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UnidadTributaria.' . $this->UnidadTributaria->primaryKey => $id));
			$this->request->data = $this->UnidadTributaria->find('first', $options);
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
		$this->UnidadTributaria->id = $id;
		if (!$this->UnidadTributaria->exists()) {
			throw new NotFoundException(__('Invalid unidad tributaria'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UnidadTributaria->delete()) {
			$this->Session->setFlash(__('The unidad tributaria has been deleted.'));
		} else {
			$this->Session->setFlash(__('The unidad tributaria could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
