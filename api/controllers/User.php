<?php

use api\core\Controller;

class User extends Controller {

    public function index() {

        $User = $this->model('User');

        $data = $User::findAll();

        $this->view('user/index', [
            'users' => $data
        ]);
    }

    public function show($id = null) {

        if (is_numeric($id)) {

            $User = $this->model('User');

            $data = $User::findById($id);

            $this->view('user/show', [
                'user' => $data
            ]);

        } else {

            $this->pageNotFound();
        }
    }

    public function create() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $User = $this->model('User');

            $User::create($_POST);

            header('Location: ' . BASE_URL . '/user');
            exit;
        }

        $this->view('user/create');
    }

    public function edit($id = null) {

        if (is_numeric($id)) {

            $User = $this->model('User');

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $User::updateById($id, $_POST);

                header('Location: ' . BASE_URL . '/user');
                exit;
            }

            $data = $User::findById($id);

            $this->view('user/edit', [
                'user' => $data
            ]);

        } else {

            $this->pageNotFound();
        }
    }

    public function delete($id = null) {

        if (is_numeric($id)) {

            $User = $this->model('User');

            $User::deleteById($id);

            header('Location: ' . BASE_URL . '/user');
            exit;

        } else {

            $this->pageNotFound();
        }
    }
}