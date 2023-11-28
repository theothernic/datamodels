<?php
    namespace Theothernic\Datamodels\Tokens;


    use Bearlovescode\Datamodels\DataModel;

    abstract class Token extends DataModel
    {
        public string $token;
        public string $secret;
    }