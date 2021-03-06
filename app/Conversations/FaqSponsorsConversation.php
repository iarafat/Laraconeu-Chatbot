<?php

namespace App\Conversations;

use App\Sponsor;
use BotMan\BotMan\Messages\Conversations\Conversation;

class FaqSponsorsConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->say("These are the sponsors of Laracon Eu 2018: \n".Sponsor::asTextMessage(), ['disable_web_page_preview' => true]);
    }
}
