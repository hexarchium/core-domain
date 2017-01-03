Feature: Creating domain by command

  Scenario: Create domain with Id
    When create domain with "Domain" id
    Then should see new created domain for "Domain" id