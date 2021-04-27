<?php


namespace App\Services\Moodle;


class UserService extends BaseRestService {

    /**
     * Returns api data -  All users
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function getAll() {
        $this->params['wsfunction'] = 'local_webservice_get_users';
        return $this->service->get($this->url, $this->params);
    }

    /**
     * Returns api data - enrolled users with grades
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function getEnrolled() {
        $this->params['wsfunction'] = 'local_webservice_get_enrolled_users';
        return $this->service->get($this->url, $this->params);
    }

}
