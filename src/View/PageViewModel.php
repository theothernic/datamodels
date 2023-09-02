<?php
    namespace Theothernic\Datamodels\View;

    abstract class PageViewModel {
        public string $title = '';
        public array $meta = [
            'keywords' => '',
            'description' => ''
        ];
    }