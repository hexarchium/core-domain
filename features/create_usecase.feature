Feature: Creating usecase

  In order to create usecase
  As a User
  I need to call command with parameters

  Scenario: Creating model for given domain
    Given I have domain with "TestDomain" id
    When I create usecase with "TestUseCase" and type "command" id for "TestDomain" domain
    Then I should see new usecase in "TestDomain" domain