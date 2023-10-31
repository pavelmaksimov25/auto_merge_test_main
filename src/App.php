<?php

namespace Pavelmaksimov25\AutoMergeTestDep;

use Pavelmaksimov25\AutoMergeTestDep\App as DepApp;

class App
{
    /**
     * @return void
     */
    public function run(): void
    {
        (new DepApp())->run();
    }
}
