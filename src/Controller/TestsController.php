<?php

    namespace App\Controller;


    class TestsController extends AppController
    {

        /**
         *
         */
        public function foo()
        {
            echo 'Hello world !';
        }

        /**
         * @param $bar
         */
        public function bar($bar)
        {
            echo $bar;
        }

        /**
         * @param $bar
         * @throws \Exception
         */
        public function redirection($bar)
        {
            $this->redirect("testsBar", ["param" => $bar]);
        }

    }