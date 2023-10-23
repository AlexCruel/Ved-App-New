<?php namespace Admin\Feedback\Components;

use Admin\Feedback\Models\Form;
use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

/**
 * FullFormFeedback Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class FullFormFeedback extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Полная форма',
            'description' => 'Основная форма обратной связи'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }

    public function onFullForm()
    {

        $data = post();

        $validator = Validator::make($data, [
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        if ($validator->fails())
        {
            Log::error($validator->messages());
            $messages = $validator->messages();

            return [
                '#errorToast' => $this->renderPartial('@errorFullForm.htm', [
                    'errorName' => $messages->has('name') ? 'Поле имени обязательно.' : '',
                    'errorPhone' => $messages->has('phone') ? 'Поле телефона обязательно.' : '',
                    'errorMessage' => $messages->has('message') ? 'Поле сообщения обязательно.' : ''
                ])
            ];
        } else {
            $form = new Form();
            $form->fill($data);
            $form->save();

            return [
                '#successToast' => $this->renderPartial('@successFullForm.htm')
            ];
        }
    }
}
