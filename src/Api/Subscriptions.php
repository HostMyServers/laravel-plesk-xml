<?php

namespace nickurt\PleskXml\Api;

class Subscriptions extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'webspace' => ['get' => ['filter' => [], 'dataset' => ['gen_info' => [], 'hosting' => [], 'subscriptions' => []]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->client->request([
            'webspace' => ['get' => ['filter' => $params, 'dataset' => ['gen_info' => [], 'hosting' => [], 'subscriptions' => []]]]
        ]);
    }
}
