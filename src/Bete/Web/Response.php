<?php

namespace Bete\Web;

use Bete\Foundation\Application;

class Response
{
    protected $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function redirect($url)
    {
        header("Location: " . $url);

        exit;
    }

    public function refresh()
    {
        return $this->redirect($this->request->getUrl());
    }

    public function json($data, $message = 'OK', $code = 0)
    {
        $result = [
            'code' => $code,
            'message' => $message,
            'data' => $data,
        ];

        return json_encode($result);
    }

}
