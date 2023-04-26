<?php

namespace Framework\Http;

class Response
{
    public function __construct(
        public readonly ?string $content = '',
        public readonly int $status = 200,
        public readonly array $headers = [],
    )
    {}

    public function send(): void
    {
        echo $this->content;
    }
}