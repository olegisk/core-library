<?php

namespace IngenicoClient\Logger;

class NullAdapter implements AdapterInterface
{
    /**
     * Logs with an arbitrary level.
     *
     * @param mixed $level
     * @param string $message
     * @param array $context
     */
    public function log($level, $message, array $context = [])
    {
        //
    }
}

