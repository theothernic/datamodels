<?php
    namespace Theothernic\Datamodels\View\Page;

    use Theothernic\Datamodels\View\PageViewModel;

    abstract class DetailViewModel extends PageViewModel
    {
        public object $record;
    }