<?php

use Laravel\Cashier\Cashier;

Route::namespace('\Laravel\Cashier\Http\Controllers')->group(function () {
    Route::name('webhooks.mollie.default')->post(
        Cashier::webhookUrl(),
        'WebhookController@handleWebhook'
    );

    Route::name('webhooks.mollie.first_payment')->post(
        Cashier::firstPaymentWebhookUrl(),
        'FirstPaymentWebhookController@handleWebhook'
    );

    Route::name('webhooks.mollie.one_off_payment')->post(
        'webhooks/mollie/one-off-payment',
        'OneOffPaymentWebhookController@handleWebhook'
    );
});
