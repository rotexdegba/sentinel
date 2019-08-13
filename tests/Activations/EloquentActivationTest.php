<?php

/*
 * Part of the Sentinel package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Sentinel
 * @version    2.0.17
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011-2017, Cartalyst LLC
 * @link       http://cartalyst.com
 */

namespace Cartalyst\Sentinel\Tests\Activations;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use Cartalyst\Sentinel\Activations\EloquentActivation;

class EloquentActivationTest extends TestCase
{
    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        m::close();
    }

    /** @test */
    public function it_can_get_the_completed_attribute_as_a_boolean()
    {
        $activation = new EloquentActivation();

        $activation->completed = 1;

        $this->assertTrue($activation->completed);
    }

    /** @test */
    public function it_can_get_the_activation_code_using_the_getter()
    {
        $activation = new EloquentActivation();

        $activation->code = 'foo';

        $this->assertSame('foo', $activation->getCode());
    }
}