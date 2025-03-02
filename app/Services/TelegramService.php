<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class TelegramService
{
    protected $telegramUrl;

    public function __construct()
    {
        $this->telegramUrl = 'https://api.telegram.org/bot' . Config::get('services.telegram.bot_token');
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
            $chatId = Config::get('services.telegram.chat_id');

            Http::post("{$this->telegramUrl}/sendMessage", [
                'chat_id' => $chatId,
                'text' => $message,
            ]);
        } catch (\Throwable $th) {
            logger()->error($th); // Log error for debugging purposes.
        }
        
    }
}
