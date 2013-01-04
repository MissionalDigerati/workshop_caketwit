<?php
App::uses('AppController', 'Controller');
/**
 * Tweets Controller
 *
 * @property Tweet $Tweet
 */
class TweetsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tweet->recursive = 0;
		$this->set('tweets', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tweet->exists($id)) {
			throw new NotFoundException(__('Invalid tweet'));
		}
		$options = array('conditions' => array('Tweet.' . $this->Tweet->primaryKey => $id));
		$this->set('tweet', $this->Tweet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tweet->create();
			if ($this->Tweet->save($this->request->data)) {
				$this->Session->setFlash(__('The tweet has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tweet could not be saved. Please, try again.'));
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
		if (!$this->Tweet->exists($id)) {
			throw new NotFoundException(__('Invalid tweet'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tweet->save($this->request->data)) {
				$this->Session->setFlash(__('The tweet has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tweet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tweet.' . $this->Tweet->primaryKey => $id));
			$this->request->data = $this->Tweet->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tweet->id = $id;
		if (!$this->Tweet->exists()) {
			throw new NotFoundException(__('Invalid tweet'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tweet->delete()) {
			$this->Session->setFlash(__('Tweet deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tweet was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
