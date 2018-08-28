# yii2-flysystem-aliyun-oss

The Flysystem AliyunOss adapter for the Yii framework

## Installing

```shell
$ composer require jimchen/yii2-flysystem-aliyun-oss -vvv
```

## Usage

Configure application components as follows

```php
return [
    //...
    'components' => [
        //...
        'ossFs' => [
            'class' => 'jimchen\flysystem\AliyunOssFilesystem',
            'key' => 'your-key',
            'secret' => 'your-secret',
            'bucket' => 'your-bucket',
            'endpoint' => 'http://my-custom-url',
            // 'isCName' => false,
            // 'securityToken' => null,
            // 'requestProxy' => null,
            // 'prefix' => 'your-prefix',
            // 'options' => [],
        ],
    ],
];
```

More about AliyunOss configuration please see [here](https://www.alibabacloud.com/help/product/31815.htm?spm=a3c0i.7950270.1167928.3.4431ab91xnocii).

What about the `options` you can follow the [repo](https://github.com/JimChenWYU/flysystem-aliyun-oss) to see more.

## License

MIT