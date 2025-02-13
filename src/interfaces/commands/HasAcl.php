<?php

namespace umn\yii2\aws\s3\interfaces\commands;

/**
 * Interface HasAcl
 *
 * @package umn\yii2\aws\s3\interfaces\commands
 */
interface HasAcl
{
    /**
     * @param string $acl
     */
    public function withAcl(string $acl);
}
