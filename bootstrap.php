<?php

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\Bus\Dispatcher as BusDispatcher;
use Joom\ReCaptcha\Listener;
use Joom\ReCaptcha\Api\Controller\CreateUserController;
use Joom\ReCaptcha\Forum\Controller\LogInController;


return function (Dispatcher $events, BusDispatcher $bus) {
    $events->subscribe(Listener\AddClientAssets::class);
    $events->subscribe(Listener\AddValidatorRule::class);
    $events->subscribe(Listener\AddApiAttributes::class);

    $bus->pipeThrough(['Joom\ReCaptcha\Validate']);
};
