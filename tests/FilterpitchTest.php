<?php
/**
 * Tests for FilterPitch
 */

use PHPUnit\Framework\TestCase;
use Filterpitch\Filterpitch;

class FilterpitchTest extends TestCase {
    private Filterpitch $instance;

    protected function setUp(): void {
        $this->instance = new Filterpitch(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Filterpitch::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
