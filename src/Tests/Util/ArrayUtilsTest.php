<?php
namespace Payum\Braintree\Tests\Util;

use Payum\Braintree\Util\ArrayUtils;

class ArrayUtilsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldExtractPropertiesToArray()
    {
        $object = new \stdClass();

        $object->prop1 = 1;
        $object->prop2 = 2;
        $object->prop3 = 3;

        $array = ArrayUtils::extractPropertiesToArray($object, ['prop1', 'prop3']);

        $this->assertArrayHasKey('prop1', $array);
        $this->assertArrayHasKey('prop3', $array);

        $this->assertEquals(1, $array['prop1']);
        $this->assertEquals(3, $array['prop3']);
    }
}
