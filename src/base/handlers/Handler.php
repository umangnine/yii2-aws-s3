<?php

namespace umn\yii2\aws\s3\base\handlers;

use Aws\S3\S3Client;
use umn\yii2\aws\s3\interfaces\handlers\Handler as HandlerInterface;

/**
 * Class Handler
 *
 * @package umn\yii2\aws\s3\base\handlers
 */
abstract class Handler implements HandlerInterface
{
    /** @var S3Client */
    protected $s3Client;

    /**
     * Handler constructor.
     *
     * @param \Aws\S3\S3Client $s3Client
     */
    public function __construct(S3Client $s3Client)
    {
        $this->s3Client = $s3Client;
    }
}
