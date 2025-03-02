<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class TelegramService
{
    protected $telegramUrl;
    protected $botToken = null;
    protected $chatId = null;

    public function __construct()
    {
        if ($this->botToken === null) {
            $this->botToken = Config::get('services.telegram.bot_token');
            if ($this->botToken === null) {
                throw new \Exception('Telegram bot token is not set in the configuration file.');
            }
        }
        if ($this->chatId === null) {
            $this->chatId = Config::get('services.telegram.chat_id');
            if ($this->chatId === null) {
                throw new \Exception('Telegram chat ID is not set in the configuration file.');
            }
        }
        $this->telegramUrl = 'https://api.telegram.org/bot' . $this->botToken;
    }
    /**
     * Send a message to the specified chat.
     *
     * @param string $message
     * @return void
     */
    public function sendMessage(string $message): void
    {
        try {
            logger()->debug('Telegram URL: '.$this->telegramUrl); // Log debug for debugging purposes.
            
            Http::post("{$this->telegramUrl}/sendMessage", [
                'chat_id' => $this->chatId,
                'text' => $message,
            ]);
        } catch (\Throwable $th) {
            logger()->error($th); // Log error for debugging purposes.
        }
        
    }
}
