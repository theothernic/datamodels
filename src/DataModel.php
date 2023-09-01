<?php
    namespace Theothernic\Datamodels;

    abstract class DataModel
    {
        public function __construct(mixed $data)
        {
            $this->hydrate($data);
        }

        protected function hydrate(mixed $data): void
        {
            if (is_array($data))
                $this->hydrateWithArray($data);

            if (is_object($data))
                $this->hydrateWithObject($data);
        }


        private function hydrateWithArray(array $data): void
        {
            foreach ($data as $k => $v)
                $this->setProperty($k, $v);
        }

        private function hydrateWithObject(object $data): void
        {
            $this->hydrateWithArray(get_object_vars($data));
        }

        /**
         * @param string $k
         * @param mixed $v
         * @return void
         */
        private function setProperty(string $k, mixed $v): void
        {
            if (property_exists($this, $k))
                $this->$k = $v;
        }
    }