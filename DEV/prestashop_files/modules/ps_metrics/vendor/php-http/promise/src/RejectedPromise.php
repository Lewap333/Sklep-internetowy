<?php

namespace ps_metrics_module_v4_0_10\Http\Promise;

/**
 * A rejected promise.
 *
 * @author Joel Wurtz <joel.wurtz@gmail.com>
 */
final class RejectedPromise implements Promise
{
    /**
     * @var \Throwable
     */
    private $exception;
    public function __construct(\Throwable $exception)
    {
        $this->exception = $exception;
    }
    public function then(?callable $onFulfilled = null, ?callable $onRejected = null)
    {
        if (null === $onRejected) {
            return $this;
        }
        try {
            return new FulfilledPromise($onRejected($this->exception));
        } catch (\Exception $e) {
            return new self($e);
        }
    }
    public function getState()
    {
        return Promise::REJECTED;
    }
    public function wait($unwrap = \true)
    {
        if ($unwrap) {
            throw $this->exception;
        }
        return null;
    }
}
