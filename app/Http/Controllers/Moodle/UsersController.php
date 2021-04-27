<?php


namespace App\Http\Controllers\Moodle;


use App\Http\Controllers\Controller;
use App\Services\Moodle\UserService;

class UsersController extends Controller {

    protected $service;

    public function __construct() {
        $this->service = app(UserService::class);
    }

    public function index() {
        $data = $this->service->getAll();
        return view('pages.list', compact('data'));
    }

    public function enrolled() {
        $data = $this->service->getEnrolled();
        return view('pages.list', compact('data'));
    }
}
