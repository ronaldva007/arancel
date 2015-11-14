<?php
App::uses('AppController', 'Controller');
/**
 * SolicitudArancelDetalles Controller
 *
 * @property SolicitudArancelDetalle $SolicitudArancelDetalle
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SolicitudArancelDetallesController extends AppController {

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
		$this->SolicitudArancelDetalle->recursive = 0;
		$this->set('solicitudArancelDetalles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SolicitudArancelDetalle->exists($id)) {
			throw new NotFoundException(__('Invalid solicitud arancel detalle'));
		}
		$options = array('conditions' => array('SolicitudArancelDetalle.' . $this->SolicitudArancelDetalle->primaryKey => $id));
		$this->set('solicitudArancelDetalle', $this->SolicitudArancelDetalle->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SolicitudArancelDetalle->create();
			if ($this->SolicitudArancelDetalle->save($this->request->data)) {
				$this->Session->setFlash(__('The solicitud arancel detalle has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The solicitud arancel detalle could not be saved. Please, try again.'));
			}
		}
		$solicitudArancels = $this->SolicitudArancelDetalle->SolicitudArancel->find('list');
		$arancels = $this->SolicitudArancelDetalle->Arancel->find('list');
		$this->set(compact('solicitudArancels', 'arancels'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SolicitudArancelDetalle->exists($id)) {
			throw new NotFoundException(__('Invalid solicitud arancel detalle'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SolicitudArancelDetalle->save($this->request->data)) {
				$this->Session->setFlash(__('The solicitud arancel detalle has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The solicitud arancel detalle could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SolicitudArancelDetalle.' . $this->SolicitudArancelDetalle->primaryKey => $id));
			$this->request->data = $this->SolicitudArancelDetalle->find('first', $options);
		}
		$solicitudArancels = $this->SolicitudArancelDetalle->SolicitudArancel->find('list');
		$arancels = $this->SolicitudArancelDetalle->Arancel->find('list');
		$this->set(compact('solicitudArancels', 'arancels'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SolicitudArancelDetalle->id = $id;
		if (!$this->SolicitudArancelDetalle->exists()) {
			throw new NotFoundException(__('Invalid solicitud arancel detalle'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SolicitudArancelDetalle->delete()) {
			$this->Session->setFlash(__('The solicitud arancel detalle has been deleted.'));
		} else {
			$this->Session->setFlash(__('The solicitud arancel detalle could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
