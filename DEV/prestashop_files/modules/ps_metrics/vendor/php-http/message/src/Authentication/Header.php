<?php

namespace ps_metrics_module_v4_0_10\Http\Message\Authentication;

use ps_metrics_module_v4_0_10\Http\Message\Authentication;
use Psr\Http\Message\RequestInterface;
class Header implements Authentication
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string|string[]
     */
    private $value;
    /**
     * @param string|string[] $value
     */
    public function __construct(string $name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }
    public function authenticate(RequestInterface $request)
    {
        return $request->withHeader($this->name, $this->value);
    }
}
