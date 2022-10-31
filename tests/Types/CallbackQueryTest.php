<?php

namespace TelegramBot\Api\Test\Types;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\CallbackQuery;
use TelegramBot\Api\Types\Message;
use TelegramBot\Api\Types\User;

class CallbackQueryTest extends TestCase
{
    protected $callbackQueryFixture = [
        'id' => 1,
        'from' => [
            'first_name' => 'Ilya',
            'last_name' => 'Gusev',
            'id' => 123456,
            'username' => 'iGusev',
            'is_bot' => false,
        ],
        'inline_message_id' => 1234,
        'chat_instance' => 123,
        'data' => 'callback_data',
        'game_short_name' => 'game_name'
    ];

    public function testFromResponse()
    {
        $item = CallbackQuery::fromResponse($this->callbackQueryFixture);

        $user = User::fromResponse($this->callbackQueryFixture['from']);

        $this->assertInstanceOf('\TelegramBot\Api\Types\CallbackQuery', $item);
        $this->assertEquals($this->callbackQueryFixture['id'], $item->getId());
        $this->assertEquals($user, $item->getFrom());
        $this->assertEquals($this->callbackQueryFixture['inline_message_id'], $item->getInlineMessageId());
        $this->assertEquals($this->callbackQueryFixture['chat_instance'], $item->getChatInstance());
        $this->assertEquals($this->callbackQueryFixture['data'], $item->getData());
        $this->assertEquals($this->callbackQueryFixture['game_short_name'], $item->getGameShortName());
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testFromResponseExceptionEmptyId()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        unset($this->callbackQueryFixture['id']);
        CallbackQuery::fromResponse($this->callbackQueryFixture);
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testFromResponseExceptionEmptyFrom()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        unset($this->callbackQueryFixture['from']);
        CallbackQuery::fromResponse($this->callbackQueryFixture);
    }

    public function testSetId()
    {
        $item = new CallbackQuery();
        $item->setId($this->callbackQueryFixture['id']);
        $this->assertEquals($this->callbackQueryFixture['id'], $item->getId());
    }

    public function testGetId()
    {
        $item = new CallbackQuery();
        $item->setId($this->callbackQueryFixture['id']);
        $this->assertEquals($this->callbackQueryFixture['id'], $item->getId());
    }

    public function testSetFrom()
    {
        $item = new CallbackQuery();
        $user = User::fromResponse($this->callbackQueryFixture['from']);
        $item->setFrom($user);
        $this->assertEquals($user, $item->getFrom());
    }

    public function testGetFrom()
    {
        $item = new CallbackQuery();
        $user = User::fromResponse($this->callbackQueryFixture['from']);
        $item->setFrom($user);
        $this->assertEquals($user, $item->getFrom());
    }

    public function testSetInlineMessageId()
    {
        $item = new CallbackQuery();
        $item->setInlineMessageId($this->callbackQueryFixture['inline_message_id']);
        $this->assertEquals($this->callbackQueryFixture['inline_message_id'], $item->getInlineMessageId());
    }

    public function testGetInlineMessageId()
    {
        $item = new CallbackQuery();
        $item->setInlineMessageId('testInlineMessageId');
        $this->assertEquals('testInlineMessageId', $item->getInlineMessageId());
    }

    public function testSetChatInstance()
    {
        $item = new CallbackQuery();
        $item->setChatInstance($this->callbackQueryFixture['chat_instance']);
        $this->assertEquals($this->callbackQueryFixture['chat_instance'], $item->getChatInstance());
    }

    public function testGetChatInstance()
    {
        $item = new CallbackQuery();
        $item->setChatInstance('testChatInstance');
        $this->assertEquals('testChatInstance', $item->getChatInstance());
    }

    public function testSetData()
    {
        $item = new CallbackQuery();
        $item->setData($this->callbackQueryFixture['data']);
        $this->assertEquals($this->callbackQueryFixture['data'], $item->getData());
    }

    public function testGetData()
    {
        $item = new CallbackQuery();
        $item->setData('testData');
        $this->assertEquals('testData', $item->getData());
    }

    public function testSetGameShortName()
    {
        $item = new CallbackQuery();
        $item->setGameShortName($this->callbackQueryFixture['game_short_name']);
        $this->assertEquals($this->callbackQueryFixture['game_short_name'], $item->getGameShortName());
    }

    public function testGetGameShortName()
    {
        $item = new CallbackQuery();
        $item->setGameShortName('testGameShortName');
        $this->assertEquals('testGameShortName', $item->getGameShortName());
    }
}
