<?php

namespace FicoscorePeru\Client;

use \FicoscorePeru\Client\Configuration;
use \FicoscorePeru\Client\ApiException;
use \FicoscorePeru\Client\ObjectSerializer;

class FicoScoreApiTest extends \PHPUnit_Framework_TestCase
{
    protected $apiInstance;
    protected $signer;
    
    public function setUp()
    {
        $password = getenv('KEY_PASSWORD');
        $this->signer = new \FicoscorePeru\Client\Interceptor\KeyHandler(null, null, $password);
        $events = new \FicoscorePeru\Client\Interceptor\MiddlewareEvents($this->signer);
        $handler = \GuzzleHttp\HandlerStack::create();
        $handler->push($events->add_signature_header('x-signature'));
        $handler->push($events->verify_signature_header('x-signature'));
        $config = new \FicoscorePeru\Client\Configuration();
        $config->setHost('the_url');

        $client = new \GuzzleHttp\Client(['handler' => $handler]);
        $this->apiInstance = new \FicoscorePeru\Client\Api\FicoScoreApi($client, $config);
    }

    public function testFicoScoreApi()
    {
        $x_api_key = "your_api_key";
        $username = "your_username";
        $password = "your_password";

        $request = new \FicoscorePeru\Client\Model\DatosConsulta();

        $request->setNumeroDocumento('xxxxx');
        $request->setTipoDocumento('x');
        $request->setFolioConsultaOtorgante(null);

        try {
            $result = $this->apiInstance->ficoScore($x_api_key, $username, $password, $request);
            $this->assertNotNull($result);
        } catch (Exception $e) {
            echo 'Exception when calling FicoScoreApi->ficoScore: ', $e->getMessage(), PHP_EOL;
        }
    }
}
