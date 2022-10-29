<?php

namespace TelegramBot\Api\Types;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\MaskPosition;

class MaskPositionTest extends TestCase
{
    public function testGetPoint()
    {
        $item = new MaskPosition();
        $item->setPoint('mask_point');
        $this->assertEquals('mask_point', $item->getPoint());
    }

    public function testSetPoint()
    {
        $item = new MaskPosition();
        $item->setPoint('mask_point');
        $this->assertEquals('mask_point', $item->getPoint());
    }

    public function testGetXShift()
    {
        $item = new MaskPosition();
        $item->setXShift(0.5);
        $this->assertEquals(0.5, $item->getXShift());
    }

    public function testSetXShift()
    {
        $item = new MaskPosition();
        $item->setXShift(0.5);
        $this->assertEquals(0.5, $item->getXShift());
    }

    public function testGetYShift()
    {
        $item = new MaskPosition();
        $item->setXShift(0.5);
        $this->assertEquals(0.5, $item->getXShift());
    }

    public function testSetYShift()
    {
        $item = new MaskPosition();
        $item->setXShift(0.5);
        $this->assertEquals(0.5, $item->getXShift());
    }

    public function testGetScale()
    {
        $item = new MaskPosition();
        $item->setScale(2.0);
        $this->assertEquals(2.0, $item->getScale());
    }

    public function testSetScale()
    {
        $item = new MaskPosition();
        $item->setScale(1.0);
        $this->assertEquals(1.0, $item->getScale());
    }
}
