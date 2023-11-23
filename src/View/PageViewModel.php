<?php
    namespace Bearlovescode\Datamodels\View;

    abstract class PageViewModel extends ViewModel
    {
        public string $title = '';
        public array $meta = [
            'keywords' => '',
            'description' => ''
        ];

        public array $message = [
            'type' => null,
            'text' => null
        ];

        public function hasMessage(): bool
        {
            return (isset($this->message) && !empty($this->message['type'])
                && !empty($this->message['text']));
        }


    }