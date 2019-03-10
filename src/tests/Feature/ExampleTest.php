<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        //200番台 正常処理
        //$response->assertStatus(200);

        //このアドレスは一時的に別のアドレスにおいています。
        $response->assertStatus(302);
    }

    public function testBasicTrue()
    {
        $tf = true;
        $this->assertTrue($tf);
    }

    public function testBasicFalse()
    {
        $tf = false;
        $this->assertFalse($tf);
    }

    public $bango = 55;
    public $kara = "";
    public $null = null;

    public function testBasicEqual()
    {
        $this->assertEquals(55,$this->bango);
    }

    public function testBasicNotEqual()
    {
        $this->assertNotEquals(35,$this->bango);
    }

    public function testBasicLessThan()
    {
        $this->assertLessThan(56,$this->bango);
    }

    public function testBasicLessThanOrEqual()
    {
        $this->assertLessThanOrEqual(55,$this->bango);
    }

    public function testBasicGreaterThan()
    {
        $this->assertGreaterThan(54,$this->bango);
    }

    public function testBasicGreaterThanOrEqual()
    {
        $this->assertGreaterThanOrEqual(55,$this->bango);
    }

    public function testBasicEmpty()
    {
        $this->assertEmpty($this->kara);
    }

    public function testBasicNotEmpty()
    {
        $this->assertNotEmpty(55);
    }

    public function testBasicNull()
    {
        $this->assertNull($this->null);
    }

    public function testBasicNotNull()
    {
        $this->assertNotNull(55);
    }

    public function testBasicStringStartsWith()
    {
        $this->assertStringStartsWith(5,$this->bango);
    }

    public function testBasicStringEndsWith()
    {
        $this->assertStringEndsWith(5,$this->bango);
    }


}
