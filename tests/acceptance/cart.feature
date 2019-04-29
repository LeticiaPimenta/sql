Feature: Cart
  In order to add product in my cart
  I need to call add cart and see right answer
  Scenario Outline: add cart
    Given I am user
    When I enter in catalog
    And I call add_cart
    Then I should see "<resposta>"
    Examples:
       | email            | password    | resposta            |
       | test@test.com    | test123pass | Login successful    |

