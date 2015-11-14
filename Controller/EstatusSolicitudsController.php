<?php
App::uses('AppController', 'Controller');
/**
 * EstatusSolicituds Controller
 *
 * @property EstatusSolicitud $EstatusSolicitud
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EstatusSolicitudsController extends AppController {

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
		$this->EstatusSolicitud->recursive = 0;
		$this->set('estatusSolicituds', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EstatusSolicitud->exists($id)) {
			throw new NotFoundException(__('Invalid estatus solicitud'));
		}
		$options = array('conditions' => array('EstatusSolicitud.' . $this->EstatusSolicitud->primaryKey => $id));
		$this->set('estatusSolicitud', $this->EstatusSolicitud->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EstatusSolicitud->create();
			if ($this->EstatusSolicitud->save($this->request->data)) {
				$this->Session->setFlash(__('The estatus solicitud has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estatus solicitud could not be saved. Please, try again.'));
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
		if (!$this->EstatusSolicitud->exists($id)) {
			throw new NotFoundException(__('Invalid estatus solicitud'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EstatusSolicitud->save($this->request->data)) {
				$this->Session->setFlash(__('The estatus solicitud has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estatus solicitud could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EstatusSolicitud.' . $this->EstatusSolicitud->primaryKey => $id));
			$this->request->data = $this->EstatusSolicitud->find('first', $options);
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
		$this->EstatusSolicitud->id = $id;
		if (!$this->EstatusSolicitud->exists()) {
			throw new NotFoundException(__('Invalid estatus solicitud'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EstatusSolicitud->delete()) {
			$this->Session->setFlash(__('The estatus solicitud has been deleted.'));
		} else {
			$this->Session->setFlash(__('The estatus solicitud could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
