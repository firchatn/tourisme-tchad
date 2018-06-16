<?php

use App\Models\AgenceModel as Model;

class Agence extends \CodeIgniter\Controller
{
    protected $helpers = ['url'];

    protected $base = 'agence';

    public function index() {
        $model = new Model();
        $data = [
            'objects' => $model->findAll(),
            'base' => $this->base,
        ];
        echo view('admin/'. $this->base .'/index', $data);
    }

    public function add() {
        $model = new Model();
        if ($this->request->getMethod() == 'post') {
            $model->insert($this->request->getPost());
            header('Location: ' . site_url($this->base .'/index'));
            die();
        } else {
            echo view('admin/'. $this->base .'/add', [
                'base' => $this->base,
            ]);
        }
    }

    public function detail($id) {
        $model = new Model();
        $data = [
            'object' => $model->find($id),
            'base' => $this->base,
        ];
        echo view('admin/'. $this->base .'/detail', $data);
    }

    public function edit($id) {
        $model = new Model();
        if ($this->request->getMethod() == 'post') {
            $model->update($id, $this->request->getPost());
            header('Location: ' . site_url($this->base .'/index'));
            die();
        } else {
            $data = [
                'object' => $model->find($id),
                'base' => $this->base,
            ];
            echo view('admin/'. $this->base .'/edit', $data);
        }
    }

    public function delete($id) {
        $model = new Model();
        $model->delete($id);
        header('Location: ' . site_url($this->base .'/index'));
        die();
    }
}
