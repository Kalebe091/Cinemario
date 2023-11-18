<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;

class BancoDados extends BaseController
{
    public function crud()
	{
	    $crud = new GroceryCrud();

	    $crud->setTable('filme');

	    $output = $crud->render();

		return $this->_exampleOutput($output);
	}

    public function sessao()
	{
	    $crud = new GroceryCrud();

	    $crud->setTable('sessao');

	    $output = $crud->render();

		return $this->_exampleOutput($output);
	}

    public function funcionario()
	{
	    $crud = new GroceryCrud();

	    $crud->setTable('funcionario');

	    $output = $crud->render();

		return $this->_exampleOutput($output);
	}

    public function sessao_funcionario()
	{
	    $crud = new GroceryCrud();

	    $crud->setTable('sessao_funcionario');

	    $output = $crud->render();

		return $this->_exampleOutput($output);
	}

    public function ingresso()
	{
	    $crud = new GroceryCrud();

	    $crud->setTable('ingresso');

	    $output = $crud->render();

		return $this->_exampleOutput($output);
	}

    public function cliente()
	{
	    $crud = new GroceryCrud();

	    $crud->setTable('cliente');

	    $output = $crud->render();

		return $this->_exampleOutput($output);
	}

    private function _exampleOutput($output = null) {
        return view('example', (array)$output);
    }
}