<?php

namespace App\Telegram;

use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;



/**
 * Class HelpCommand.
 */
class TestCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = 'test';

    /**
     * @var array Command Aliases
     */
    protected $aliases = ['listcommands1'];

    /**
     * @var string Command Description
     */
    protected $description = 'привет';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $this->replyWithChatAction(['action'=>Actions:TYPING]);
        $telegram_user = \Telegram::getWebhookUpdates()['message'];

        $text = sprintf('%s: %s'.PHP_EOL,  'Ваш номер чата - ' , $telegram_user['user']['id']);
        $text .= sprintf('%s: %s'.PHP_EOL, 'Ваше имя - ' , $telegram_user['from']['username']);
        $this-> replyWythMessage(compact('text'));




    }
}


