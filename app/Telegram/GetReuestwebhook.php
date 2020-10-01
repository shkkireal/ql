<?php

namespace App\Telegram;

use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;
use Telegram\Bot\Keyboard\Keyboard;
/**
 * Class SiginCommand.
 */
Class GetReuestwebhook extends command
{

    public function updateanswer()
    {
        $updates = \Telegram::getWebhookUpdates();
        $telegram_user = \Telegram::getWebhookUpdates()['message'];
        $text = sprintf('%s: %s' . PHP_EOL, 'Ваш номер чата - ', $telegram_user['from']['id']);
        $text .= sprintf('%s: %s' . PHP_EOL, 'Ваше имя - ', $telegram_user['from']['username']);
        $this->replyWithMessage(compact('text'));


        $telegram_user1 = \Telegram::getWebhookUpdates()['CallbackQuery'];

        $text1 = sprintf('%s: %s' . PHP_EOL, 'Ваш номер чата - ', $telegram_user1['from']['id']);
        $text1 .= sprintf('%s: %s' . PHP_EOL, 'Ваше имя - ', $telegram_user1['from']['username']);
        $this->replyWithMessage(compact('text1'));
    }
}
