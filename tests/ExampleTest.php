<?php

class ExampleTest extends PHPUnit_Extensions_Selenium2TestCase
{
    public $browser = 'firefox';

    public function setUp()
    {
        $this->setBrowser($this->browser);
        $this->setBrowserUrl('http://jmather.com/');
    }

    public function testTitle()
    {
        $this->url('/');
        $title = "It's Majax";
        $this->assertEquals($title, $this->title());
    }

    public function testSomeNavigation()
    {
        $this->url('/');
        $this->byXPath('//section[@class="widget widget_categories"]//a[text() = "PHP"]')->click();
        $title = "PHP | It's Majax";
        $this->assertEquals($title, $this->title());
    }

}

