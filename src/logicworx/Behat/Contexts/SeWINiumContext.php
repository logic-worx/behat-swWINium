<?php namespace logicworx\Behat\Contexts;

use \Behat\Behat\Context\TranslatableContext;
use \Behat\Gherkin\Node\TableNode;
use \Behat\Behat\Context\Context;


/**
 * Logic-Worx seWINium context for Behat BDD tool.
 * Builds on Behat Context Capabilities.
 *
 * @author Mark Marshall
 */

class SeWINiumContext extends RawSeWINiumContext implements TranslatableContext
{
    /**
     * Confirms this library is in use - i.e. No exception if it exists
     * Example: Given I am using the seWINium
     *
     * @Given /^(?:|I )am using seWINium$/
     */
    public function iAmUsingExtension()
    {
       return;
    }

    
     /**
     * Returns list of definition translation resources paths
     *
     * @return array
     */
    public static function getTranslationResources()
    {
        return self::getSewiniumTranslationResources();
    }

    /**
     * Returns list of definition translation resources paths for this dictionary
     *
     * @return array
     */
    public static function getSewiniumTranslationResources()
    {
        return glob(__DIR__.'/../../../../locale/*.xliff');
    }
    
}
