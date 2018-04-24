<?php

namespace nickurt\PleskXml\Api;

class Databases extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'database' => ['get-db' => ['filter' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->client->request([
            'database' => ['get-db' => ['filter' => $params]]
        ]);
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function users($params = [])
    {
        return $this->client->request([
            'database' => ['get-db-users' => ['filter' => $params]]
        ]);
    }
}
