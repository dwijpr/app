<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class BootstrapFormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('bsText', 'components.form.text', [
            'name', 'value' => null,
            'attributes' => [], 'label' => null,
            'cols' => [
                'label' => 4,
                'input' => 6,
            ],
        ]);
        Form::component('bsTextarea', 'components.form.textarea', [
            'name', 'value' => null,
            'attributes' => [], 'label' => null,
            'cols' => [
                'label' => 4,
                'input' => 6,
            ],
        ]);
        Form::component('bsPassword', 'components.form.password', [
            'name', 'attributes' => [],
            'label' => null,
            'cols' => [
                'label' => 4,
                'input' => 6,
            ],
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
