<?php
    namespace Theothernic\Datamodels\View;

    abstract class PageViewModel extends ViewModel
    {
        public string $title = '';
        public array $meta = [
            'keywords' => '',
            'description' => ''
        ];

        public array $message = [];
    }