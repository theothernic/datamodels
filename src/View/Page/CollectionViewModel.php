<?php
    namespace Bearlovescode\Datamodels\View\Page;


    use Bearlovescode\Datamodels\View\PageViewModel;

    abstract class CollectionViewModel extends PageViewModel
    {
        public array $records = [];
    }