<?php

namespace App;

class ExampleClass
{
    public function doThing()
    {
      try {
        $a = null;
      } catch (\Nette\DI\MissingServiceException $e) {
        // \Nette\DI\MissingServiceException is correctly autoloaded
      }
    }

    public function doAnotherThing()
    {
      try {
        $a = null;
      } catch (\Mandrill_Unknown_Message $e) {
        // \Mandrill_Unknown_Message is not correctly autoloaded
      }
    }
}
