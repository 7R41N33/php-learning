<?php 

class WebCest
{
    public function userShouldSeeMainPage(AcceptanceTester $I)
    {
        $I->amOnPage("/");
        $I->see("Main Page");
    }

    public function userShouldSeeHelloPage(AcceptanceTester $I)
    {
        $I->amOnPage("/hello");
        $I->see("Hello Page");
    }

    public function userCanSendHelloPost(AcceptanceTester $I)
    {
        $I->sendPOST("/hello");
        $I->seeResponseContainsJson(["success" => true]);
    }

    public function userShouldSee404ErrorCode(AcceptanceTester $I)
    {
        $I->amOnPage("/page");
        $I->seeResponseCodeIs(404);
    }
}
