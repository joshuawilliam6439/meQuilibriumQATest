<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use Behat\MinkExtension\Context\RawMinkContext;
/**
 * Defines application features from the specific context.
 */
class FeatureContext extends RawMinkContext implements Context, SnippetAcceptingContext
{

     /**
     * @Given I am on www.meQuilibrium.com
     */
    public function iAmOnWwwMequilibriumCom()
    {
        $this->visitPath("/");
    }


    /**
     * @When I click on :arg1
     */
    public function iClickOn($clickLink)
    {
        throw new PendingException();
    }

    /**
     * @Then the url will be :arg1
     */
    public function theUrlWillBe($url)
    {
        throw new PendingException();
    }
}
