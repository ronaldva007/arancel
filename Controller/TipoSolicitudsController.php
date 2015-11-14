<?php
App::uses('AppController', 'Controller');
/**
 * TipoSolicituds Controller
 *
 * @property TipoSolicitud $TipoSolicitud
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TipoSolicitudsController extends AppController {

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
		$this->TipoSolicitud->recursive = 0;
		$this->set('tipoSolicituds', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TipoSolicitud->exists($id)) {
			throw new NotFoundException(__('Invalid tipo solicitud'));
		}
		$options = array('conditions' => array('TipoSolicitud.' . $this->TipoSolicitud->primaryKey => $id));
		$this->set('tipoSolicitud', $this->TipoSolicitud->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoSolicitud->create();
			if ($this->TipoSolicitud->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo solicitud has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo solicitud could not be saved. Please, try again.'));
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
		if (!$this->TipoSolicitud->exists($id)) {
			throw new NotFoundException(__('Invalid tipo solicitud'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoSolicitud->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo solicitud has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo solicitud could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoSolicitud.' . $this->TipoSolicitud->primaryKey => $id));
			$this->request->data = $this->TipoSolicitud->find('first', $options);
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
		$this->TipoSolicitud->id = $id;
		if (!$this->TipoSolicitud->exists()) {
			throw new NotFoundException(__('Invalid tipo solicitud'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TipoSolicitud->delete()) {
			$this->Session->setFlash(__('The tipo solicitud has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tipo solicitud could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
