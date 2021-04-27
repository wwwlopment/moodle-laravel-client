<?php


namespace App\Services\Moodle;


class CourseService extends BaseRestService {

    /**
     * Returns api data -  All courses
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function getAll() {
        $this->params['wsfunction'] = 'local_webservice_get_courses';
        $courses = $this->service->get($this->url, $this->params);
        $courses['data'] = array_map(function ($item) {
            $item['startdate'] = self::toDateTime($item['startdate']);
            $item['enddate'] = self::toDateTime($item['enddate']);
            return $item;
        }, $courses['data']);
        return $courses;
    }

}
