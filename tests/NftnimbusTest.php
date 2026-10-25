<?php
/**
 * Tests for NftNimbus
 */

use PHPUnit\Framework\TestCase;
use Nftnimbus\Nftnimbus;

class NftnimbusTest extends TestCase {
    private Nftnimbus $instance;

    protected function setUp(): void {
        $this->instance = new Nftnimbus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftnimbus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
