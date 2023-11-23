<?php
    namespace Bearlovescode\Datamodels\View\Page;

    use Bearlovescode\Datamodels\View\PageViewModel;

    abstract class DetailViewModel extends PageViewModel
    {
        public object $record;
        public object|array $records;
    }