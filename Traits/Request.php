<?php
namespace H_Soft\telegram\Traits;

use H_Soft\telegram\types\Message;
use GuzzleHttp\Client;
use yii\helpers\Json;
use yii\helpers\VarDumper;

trait Request
{

    public function __invoke()
    {
        return $this->send();
    }

    public function send()
    {
        $client = new Client();
        $params = $this->getParams(static::class);
        $request = $client->post($this->GetUrl(), $params);
        $response = Json::decode($request->getBody()->getContents(),true);
        if($response['ok']) {
            return $response['result'];
        }
        return $response;

    }

    private function getParams($className): array
    {
        $reflection = new \ReflectionClass($className);
        $vars = $reflection->getProperties(\ReflectionProperty::IS_PROTECTED);
        $params = [];
        foreach ($vars as $item) {
            $name = $item->getName();
            if ($this->{$name}) {
                $params[$name] = $this->{$name};
            }
        }
        return ['form_params' => $params];

    }

}