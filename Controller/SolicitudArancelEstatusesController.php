<?php
App::uses('AppController', 'Controller');
/**
 * SolicitudArancelEstatuses Controller
 *
 * @property SolicitudArancelEstatus $SolicitudArancelEstatus
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SolicitudArancelEstatusesController extends AppController {

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
		$this->SolicitudArancelEstatus->recursive = 0;
		$this->set('solicitudArancelEstatuses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SolicitudArancelEstatus->exists($id)) {
			throw new NotFoundException(__('Invalid solicitud arancel estatus'));
		}
		$options = array('conditions' => array('SolicitudArancelEstatus.' . $this->SolicitudArancelEstatus->primaryKey => $id));
		$this->set('solicitudArancelEstatus', $this->SolicitudArancelEstatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SolicitudArancelEstatus->create();
			if ($this->SolicitudArancelEstatus->save($this->request->data)) {
				$this->Session->setFlash(__('The solicitud arancel estatus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The solicitud arancel estatus could not be saved. Please, try again.'));
			}
		}
		$solicitudArancels = $this->SolicitudArancelEstatus->SolicitudArancel->find('list');
		$estatusSolicituds = $this->SolicitudArancelEstatus->EstatusSolicitud->find('list');
		$this->set(compact('solicitudArancels', 'estatusSolicituds'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SolicitudArancelEstatus->exists($id)) {
			throw new NotFoundException(__('Invalid solicitud arancel estatus'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SolicitudArancelEstatus->save($this->request->data)) {
				$this->Session->setFlash(__('The solicitud arancel estatus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The solicitud arancel estatus could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SolicitudArancelEstatus.' . $this->SolicitudArancelEstatus->primaryKey => $id));
			$this->request->data = $this->SolicitudArancelEstatus->find('first', $options);
		}
		$solicitudArancels = $this->SolicitudArancelEstatus->SolicitudArancel->find('list');
		$estatusSolicituds = $this->SolicitudArancelEstatus->EstatusSolicitud->find('list');
		$this->set(compact('solicitudArancels', 'estatusSolicituds'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SolicitudArancelEstatus->id = $id;
		if (!$this->SolicitudArancelEstatus->exists()) {
			throw new NotFoundException(__('Invalid solicitud arancel estatus'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SolicitudArancelEstatus->delete()) {
			$this->Session->setFlash(__('The solicitud arancel estatus has been deleted.'));
		} else {
			$this->Session->setFlash(__('The solicitud arancel estatus could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
