Feature: Open privacy on meQuilibrium
  In order to learn about automation
  As a potential QA
  I need to be able to access the Privacy page

  Scenario: Open privacy on meQuilibrium
    Given I am on www.meQuilibrium.com
    When I click on "Privacy"
    Then the url will be "https://www.mequilibrium.com/privacy/"