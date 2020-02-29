<?php

namespace Programarivm\EasyAclBundle\Tests\Entity;

use Programarivm\EasyAclBundle\Entity\Resource;
use PHPUnit\Framework\TestCase;

class ResourceTest extends TestCase
{
    /**
     * @dataProvider sampleData
     * @test
     */
    public function setters_and_getters($name, $method, $path)
    {
        $resource = (new Resource())
                        ->setName($name)
                        ->setMethod($method)
                        ->setPath($path);

        $expected = [
            $name,
            $method,
            $path,
        ];

        $actual = [
            $resource->getName(),
            $resource->getMethod(),
            $resource->getPath(),
        ];

        $this->assertEquals($expected, $actual);
    }

    public function sampleData()
    {
        return [
            ['homepage', 'ANY', '/'],
            ['contact', 'GET', '/contact'],
            ['contact_process', 'POST', '/contact'],
            ['article_show', 'ANY', '/articles/{_locale}/{year}/{title}.{_format}'],
            ['blog', 'ANY', '/blog/{page}'],
            ['blog_show', 'ANY', '/blog/{slug}'],
        ];
    }
}
