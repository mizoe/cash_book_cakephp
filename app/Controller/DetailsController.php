<?php
/**
 * Created by PhpStorm.
 * User: it
 * Date: 2016/01/08
 * Time: 19:06
 */
class DetailsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('details', $this->Detail->find('all'));
    }
}
