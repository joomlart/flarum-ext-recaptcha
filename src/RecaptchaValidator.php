<?php

namespace Joom\ReCaptcha;

use Flarum\Core\Validator\AbstractValidator;

class RecaptchaValidator extends AbstractValidator
{
    /**
     * {@inheritdoc}
     */
    protected $rules = [
        'g-recaptcha-response' => [
            'required',
            'recaptcha',
        ],
    ];
}
