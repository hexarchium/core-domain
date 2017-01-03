Feature: Creating model

  In order to create model
  As a User
  I need to call command with parameters

  Scenario: Creating model for given domain
    Given I have domain with "TestDomain" id
    When I create model with "TestModel" id for "TestDomain" domain
    Then I should see new model in "TestDomain" domain