<?php

namespace App\Telegram;

use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;



/**
 * Class SiginCommand.
 */
class SiginCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = 'Sigin';

    /**
     * @var array Command Aliases
     */
    protected $aliases = ['listcommands2'];

    /**
     * @var string Command Description
     */
    protected $description = 'Посмотреть свободные "окошки" )';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $this->replyWithChatAction(['action'=>Actions::TYPING]);
        $telegram_user = \Telegram::getWebhookUpdates()['message'];

        $keyboard = [
            ['7', '8', '9'],
            ['4', '5', '6'],
            ['1', '2', '3'],
            ['0']
        ];

        $reply_markup = \Keyboard::make([
            'keyboard' => $keyboard,
            'resize_keyboard' => true,
            'one_time_keyboard' => true
        ]);



        $response = \Telegram::sendMessage([
            'chat_id' => 'CHAT_ID',
            'text' => 'Hello World',
            'reply_markup' => $reply_markup
        ]);

        $messageId = $response->getMessageId();




    }
}


