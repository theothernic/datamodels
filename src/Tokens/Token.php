<?php
    namespace Bearlovescode\Datamodels\Tokens;


    use Bearlovescode\Datamodels\DataModel;

    abstract class Token extends DataModel
    {
        public string $token;
        public string $secret;
    }