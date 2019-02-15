# hajzer
Basic Monty Hall problem tester

Performs N executions of the Monty Hall's game:
1) there are three gates
2) one is a winning one
3) contestant selects one of the gates
4) Monty Hall (Zygmunt Hajzer) opens one of the empty gates and ask the contestant if she/he wants to change selection

Script will show the number of games won.

execution
=========

```
php hajzer.php <number of games> <changing>
```

* <number of games> => number of games to simulate (int)
* <changing> => decides if player is always changing (1) or keeping original selection (0)

Sample:
```
php hajzer.php <number of games> <changing>
```

warning
=======

That is just a simple script for fun: no idiot-proof checks inside: just follow the execution tips.
