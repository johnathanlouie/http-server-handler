<?php

namespace Lwd\Http\Server;

use Lwd\Http\Message\ResponseInterface;
use Lwd\Http\Message\ServerRequestInterface;

/**
 * Handles a server request and produces a response.
 *
 * An HTTP request handler processes an HTTP request in order to produce an
 * HTTP response.
 */
interface RequestHandlerInterface
{
    /**
     * Handles a request and produces a response.
     *
     * May call other collaborating code to generate the response.
     *
     * @param ServerRequestInterface $request
     *
     * @return ResponseInterface
     */
    public function handle($request);
}
