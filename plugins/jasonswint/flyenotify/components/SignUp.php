<?php namespace JasonSwint\FlyeNotify\Components;

use Cms\Classes\ComponentBase;
use JasonSwint\FlyeNotify\Models\Signups;

class SignUp extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'SignUp Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onSubmitInfo() {
        $name = post('name');
        $email = post('email');

        $data = post();

        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:jasonswint_flyenotify_signups',
        ];

        $validation = \Validator::make($data, $rules);

        if ($validation->fails()) {
            throw new \ValidationException($validation);
        }
        Signups::create([
            'name' => $name,
            'email' => $email,
        ]);
        \Flash::success("Thanks! We'll contact you when the new smart card is available!");
        return [
            '#signup-form' => $this->renderPartial('@thanks'),
        ];
    }
}
