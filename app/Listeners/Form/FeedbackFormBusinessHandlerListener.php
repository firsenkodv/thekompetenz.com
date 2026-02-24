<?php

namespace App\Listeners\Form;

use App\Event\Form\FeedbackFormBusinessEvent;
use App\Jobs\Form\FeedbackFormBusinessJob;
use Support\Traits\CreatorToken;
use Support\Traits\EmailAddressCollector;

class FeedbackFormBusinessHandlerListener
{
    use EmailAddressCollector;
    use CreatorToken;
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     * сообщение
     */
    public function handle(FeedbackFormBusinessEvent $event): void
    {
            try {

                $data = [
                    'Type Insurance'  => $event->request['type_insurance'] ?? '-',
                    'Company'         => $event->request['company'] ?? '-',
                    'Name'            => $event->request['name'] ?? '-',
                    'Phone'           => $event->request['phone'] ?? '-',
                    'Email'           => $event->request['email'] ?? '-',
                ];
            } catch (\Exception $ex) {
                logErrors($ex);
                $data['Error'] = 'An error occurred while sending the mail.';
            }

        FeedbackFormBusinessJob::dispatch($data);
    }
}
