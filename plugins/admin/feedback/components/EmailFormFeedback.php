<?php namespace Admin\Feedback\Components;

use Admin\Feedback\Models\Form;
use Admin\Telegram\Classes\Telegram;
use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

/**
 * EmailFormFeedback Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class EmailFormFeedback extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Форма Email',
            'description' => 'Форма Email обратной связи'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }

    public function onEmailForm()
    {
        $data = post();

        $validator = Validator::make($data, [
            'email' => 'required'
        ]);

        if ($validator->fails())
        {
            Log::error($validator->messages());
            $messages = $validator->messages();

            return [
                '#errorToast' => $messages->first('email', $this->renderPartial('@errorEmailForm.htm'))
            ];
        } else {
            $form = new Form();
            $form->fill($data);
            $form->save();

            // Send to the telegram bot
            $url = config('app.url');
            $message = "Форма отправки Email

<i>Id</i>: $form->id
<i>Email</i>: $form->email
<i>Cсылка</i>: $url/myoctober/admin/admin/feedback/forms/update/$form->id";

            Telegram::sendMessage($message);

            return [
                '#successToast' => $this->renderPartial('@successEmailForm.htm')
            ];
        }
    }
}
