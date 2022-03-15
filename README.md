# Mau-Mau
A PHP terminal application that plays 4 hands of [Mau-Mau](https://en.wikipedia.org/wiki/Mau-Mau_(card_game)) against itself.

**!!** Requires PHP 8.0 or newer to run **!!**

## Example usage
```
$ php -f main.php 
Dealt the following hands:
Anna: ♠Q, ♦2, ♦7, ♥2, ♦5, ♦J, ♦8
Bob: ♣5, ♣9, ♦K, ♣6, ♠5, ♠1, ♣K
Chris: ♥9, ♦3, ♦Q, ♦10, ♥5, ♥4, ♠J
Dahlia: ♣2, ♣3, ♣4, ♠4, ♣Q, ♠2, ♣10
The remaining deck is: ♥1, ♥6, ♥K, ♠K, ♠7, ♠10, ♥10, ♥3, ♦6, ♠6, ♣1, ♣8, ♦9, ♣J, ♥J, ♠9, ♠8, ♥Q, ♥7, ♥8, ♦1, ♦4, ♠3, ♣7

Anna played ♠Q
Bob played ♠5
Chris played ♥5
Dahlia drew ♥1

Anna played ♥2
Bob drew ♥6
Chris played ♥9
Dahlia played ♥1

Anna drew ♥K
Bob played ♠1
Chris played ♠J
Dahlia played ♠4

Anna drew ♠K
Bob drew ♠7
Chris played ♥4
Dahlia played ♣4

Anna drew ♠10
Bob played ♣5
Chris drew ♥10
Dahlia played ♣2

Anna played ♦2
Bob played ♦K
Chris played ♦3
Dahlia played ♣3

Anna drew ♥3
Bob played ♣9
Chris drew ♦6
Dahlia played ♣Q

Anna drew ♠6
Bob played ♣6
Chris played ♦6
Dahlia drew ♣1

Anna played ♦7
Bob played ♠7
Chris drew ♣8
Dahlia played ♠2

Anna played ♠K
Bob played ♣K
Chris played ♣8
Dahlia played ♣10

Anna played ♠10
Bob drew ♦9
Chris played ♦10
Dahlia drew ♣J

Anna played ♦5
Bob played ♦9
Chris played ♦Q
Dahlia drew ♥J

Anna played ♦J
Bob drew ♠9
Chris drew ♠8
Dahlia played ♣J

Anna drew ♥Q
Bob drew ♥7
Chris drew ♥8
Dahlia played ♣1

Anna drew ♦1
Bob drew ♦4
Chris drew ♠3
Dahlia drew ♣7

Anna played ♦1
Bob played ♦4
Re-built the deck, it's now: ♣9, ♠K, ♦9, ♥2, ♣J, ♣5, ♠10, ♥1, ♣Q, ♦1, ♠5, ♦3, ♠4, ♣K, ♣3, ♦2, ♠7, ♦5, ♥9, ♥5, ♥4, ♦K, ♦Q, ♦6, ♠2, ♦7, ♣1, ♦10, ♣4, ♣10, ♣8, ♣2, ♠1, ♠Q, ♣6, ♦J, ♠J
Chris drew ♣9
Dahlia drew ♠K

Anna played ♦8
Bob drew ♦9
Chris played ♠8
Dahlia played ♠K

Anna played ♥K
Bob played ♥6
Chris played ♥10
Dahlia played ♥J

Anna played ♥3
Bob played ♥7
Chris played ♥8
Dahlia drew ♥2

Anna played ♥Q
Bob drew ♣J
Chris drew ♣5
Dahlia played ♥2

Anna drew ♠10
Bob drew ♥1
Chris drew ♣Q
Dahlia drew ♦1

Anna drew ♠5
Bob played ♥1
Chris drew ♦3
Dahlia played ♦1

Anna drew ♠4
Bob played ♦9
Chris played ♣9
Dahlia played ♣7

Dahlia won!
```
