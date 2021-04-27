<?php


namespace App\Http\Controllers\Moodle;


use App\Http\Controllers\Controller;
use App\Services\Moodle\CourseService;

class CoursesController extends Controller {

    protected $service;

    public function __construct() {
        $this->service = app(CourseService::class);
    }

    public function index() {
        $this->service->getAll();
        $data = $this->service->getAll();
        return view('pages.list', compact('data'));
    }
}
