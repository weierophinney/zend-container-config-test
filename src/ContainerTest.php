<?php
/**
 * @see       https://github.com/zendframework/zend-container-test for the canonical source repository
 * @copyright Copyright (c) 2018 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/zendframework/zend-container-test/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Zend\ContainerTest;

use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;

abstract class ContainerTest extends TestCase
{
    abstract protected function createContainer(array $config) : ContainerInterface;
}