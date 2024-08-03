<?php

namespace nickurt\PleskXml\Api;

class Sessions extends AbstractApi
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->post([
            'session' => ['get' => []]
        ]);
    }

    /**
     * @return mixed
     */
    public function create($params, $ip)
    {
        return $this->post([
            'server' => ['create_session' => ['login' => $params, 'data' => ['user_ip' => base64_encode($ip), 'source_server' => '']]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function terminate($params)
    {
        return $this->post([
            'session' => ['terminate' => $params]
        ]);
    }
}
