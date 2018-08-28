<?php

/*
 * This file is part of the jimchen/yii2-flysystem-aliyun-oss.
 *
 * (c) JimChen <18219111672@163.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace jimchen\flysystem;

use JimChen\Flysystem\AliyunOss\AliyunOssAdapter;
use OSS\OssClient;
use yii\base\InvalidConfigException;

class AliyunOssFilesystem extends Filesystem
{
    /**
     * @var string
     */
    public $key;
    /**
     * @var string
     */
    public $secret;
    /**
     * @var string
     */
    public $endpoint;
    /**
     * @var bool
     */
    public $isCName = false;
    /**
     * @var string|null
     */
    public $securityToken = null;
    /**
     * @var string|null
     */
    public $requestProxy = null;
    /**
     * @var string
     */
    public $bucket;
    /**
     * @var string|null
     */
    public $prefix = '';
    /**
     * @var array
     */
    public $options = [];

    public function init()
    {
        if ($this->key === null) {
            throw new InvalidConfigException('The "key" property must be set.');
        }
        if ($this->secret === null) {
            throw new InvalidConfigException('The "secret" property must be set.');
        }
        if ($this->bucket === null) {
            throw new InvalidConfigException('The "bucket" property must be set.');
        }

        parent::init();
    }

    /**
     * @return AliyunOssAdapter
     * @throws \OSS\Core\OssException
     */
    protected function prepareAdapter()
    {
        $client = new OssClient($this->key, $this->secret, $this->endpoint, $this->isCName, $this->securityToken, $this->requestProxy);

        return new AliyunOssAdapter($client, $this->bucket, $this->prefix, $this->options);
    }
}
