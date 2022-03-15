# Mau-Mau
A PHP terminal application that plays 4 hands of [Mau-Mau](https://en.wikipedia.org/wiki/Mau-Mau_(card_game)) against itself.

I designed this project, wrote the code files and tested the terminal program in slightly under 1 hour and 10 minutes, I made a quick fix about an hour after.

**!!** Requires PHP 8.0 or newer to run **!!**

## Example usage
```
$ php -f main.php
Dealt the following hands:
Anna: ♥A, ♠7, ♥7, ♦K, ♠10, ♠9, ♣5
Bob: ♦8, ♥2, ♦7, ♦4, ♠6, ♣6, ♥9
Chris: ♦9, ♣2, ♦A, ♦2, ♠3, ♥6, ♣Q
Dahlia: ♣10, ♣J, ♥10, ♥Q, ♠Q, ♦6, ♦J
The remaining deck is: ♣8, ♥3, ♣7, ♥4, ♥5, ♣3, ♣A, ♥J, ♠2, ♣4, ♣K, ♥K, ♠K, ♦Q, ♠4, ♠8, ♦10, ♠A, ♥8, ♠5, ♠J, ♣9, ♦5, ♦3

Anna played ♥A
Bob played ♥2
Chris played ♣2
Dahlia played ♣10

Anna played ♠10
Bob played ♠6
Chris played ♠3
Dahlia played ♠Q

Anna played ♠7
Bob played ♦7
Chris played ♦9
Dahlia played ♦6

Anna played ♦K
Bob played ♦8
Chris played ♦A
Dahlia played ♦J

Anna drew ♣8
Bob played ♦4
Chris played ♦2
Dahlia drew ♥3

Anna drew ♣7
Bob drew ♥4
Chris drew ♥5
Dahlia drew ♣3

Anna drew ♣A
Bob drew ♥J
Chris drew ♠2
Dahlia drew ♣4

Anna drew ♣K
Bob drew ♥K
Chris played ♠2
Dahlia drew ♠K

Anna played ♠9
Bob played ♥9
Chris played ♥6
Dahlia played ♥10

Anna played ♥7
Bob played ♥4
Chris played ♥5
Dahlia played ♥Q

Anna drew ♦Q
Bob played ♥J
Chris drew ♠4
Dahlia played ♣J

Anna played ♣5
Bob played ♣6
Chris played ♣Q
Dahlia played ♣3

Anna played ♣8
Bob drew ♠8
Chris drew ♦10
Dahlia played ♣4

Anna played ♣7
Bob drew ♠A
Chris drew ♥8
Dahlia drew ♠5

Anna played ♣A
Bob played ♠A
Chris played ♠4
Dahlia played ♠K

Anna played ♣K
Bob played ♥K
Chris played ♥8
Dahlia played ♥3

Anna drew ♠J
Bob drew ♣9
Chris drew ♦5
Dahlia drew ♦3
Re-built the deck, it's now: ♥K, ♦8, ♠9, ♥4, ♦A, ♣J, ♣6, ♦J, ♥J, ♣4, ♦K, ♦7, ♥10, ♣5, ♠7, ♦9, ♣K, ♠A, ♣8, ♣Q, ♠Q, ♠6, ♠2, ♥9, ♦6, ♣10, ♠10, ♣2, ♠3, ♥6, ♥2, ♦2, ♣3, ♠K, ♣A, ♥8, ♥Q, ♦4, ♠4, ♥A, ♣7, ♥5, ♥7

Anna drew ♥K
Bob drew ♦8
Chris drew ♠9
Dahlia played ♦3

Anna played ♦Q
Bob played ♦8
Chris played ♦10
Dahlia drew ♥4

Anna drew ♦A
Bob drew ♣J
Chris played ♦5
Dahlia played ♠5

Anna played ♠J
Bob played ♠8
Chris played ♠9

Chris won!
```
