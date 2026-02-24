<?php

namespace App\Http\Controllers\FeedbackForm;

use App\Event\Form\FeedbackFormBusinessEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FeedbackFormController extends Controller
{

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function feedbackFormBusiness(Request $request):RedirectResponse
    {
        $data = $request->only('type_insurance', 'company', 'name', 'phone', 'email');

        FeedbackFormBusinessEvent::dispatch($data);
        flash()->info(config('message_flash.info.feedback_form_success'));

        return redirect()->back();
    }

}
