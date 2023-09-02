<?php
    namespace Theothernic\Datamodels\View\Page;


    use Theothernic\Datamodels\View\PageViewModel;

    abstract class CollectionViewModel extends PageViewModel
    {
        public array $records = [];
    }