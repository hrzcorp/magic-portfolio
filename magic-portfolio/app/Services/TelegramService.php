<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TelegramService
{
    protected $telegramUrl;

    public function __construct()
    {
        $this->telegramUrl = 'https://api.telegram.org/bot' . env('TELEGRAM_BOT_TOKEN');
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
            $chatId = env('TELEGRAM_CHAT_ID');

            Http::post("{$this->telegramUrl}/sendMessage", [
                'chat_id' => $chatId,
                'text' => $message,
            ]);
        } catch (\Throwable $th) {
            logger()->error($th); // Log error for debugging purposes.
        }
        
    }
}
