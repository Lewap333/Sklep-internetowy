<?php

namespace ps_metrics_module_v4_0_10\Http\Message\MessageFactory;

use ps_metrics_module_v4_0_10\Http\Message\MessageFactory;
use ps_metrics_module_v4_0_10\Http\Message\StreamFactory\SlimStreamFactory;
use ps_metrics_module_v4_0_10\Http\Message\UriFactory\SlimUriFactory;
use ps_metrics_module_v4_0_10\Slim\Http\Headers;
use ps_metrics_module_v4_0_10\Slim\Http\Request;
use ps_metrics_module_v4_0_10\Slim\Http\Response;
if (!\interface_exists(MessageFactory::class)) {
    throw new \LogicException('You cannot use "Http\\Message\\MessageFactory\\SlimMessageFactory" as the "php-http/message-factory" package is not installed. Try running "composer require php-http/message-factory". Note that this package is deprecated, use "psr/http-factory" instead');
}
/**
 * Creates Slim 3 messages.
 *
 * @author Mika Tuupola <tuupola@appelsiini.net>
 *
 * @deprecated This will be removed in php-http/message2.0. Consider using the official Slim PSR-17 factory
 */
final class SlimMessageFactory implements MessageFactory
{
    /**
     * @var SlimStreamFactory
     */
    private $streamFactory;
    /**
     * @var SlimUriFactory
     */
    private $uriFactory;
    public function __construct()
    {
        $this->streamFactory = new SlimStreamFactory();
        $this->uriFactory = new SlimUriFactory();
    }
    public function createRequest($method, $uri, array $headers = [], $body = null, $protocolVersion = '1.1')
    {
        return (new Request($method, $this->uriFactory->createUri($uri), new Headers($headers), [], [], $this->streamFactory->createStream($body), []))->withProtocolVersion($protocolVersion);
    }
    public function createResponse($statusCode = 200, $reasonPhrase = null, array $headers = [], $body = null, $protocolVersion = '1.1')
    {
        return (new Response($statusCode, new Headers($headers), $this->streamFactory->createStream($body)))->withProtocolVersion($protocolVersion);
    }
}
