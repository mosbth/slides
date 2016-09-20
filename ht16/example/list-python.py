#!/usr/bin/env python3
# -*- coding: utf-8 -*-

mumin1 = ["Mumintrollet", "är", 7, "år", True, False, None]
mumin2 = [
    "Mumintrollet",
    "är",
    7,
    "år",
    True,
    False,
    None
]

print(mumin1)


for part in mumin1:
    print(part, end=" ")


items = len(mumin1)
print(items)

print("---")
mumin1[2] = 42
mumin1.append("Muminhuset")
items = len(mumin1)
print(items)
print(mumin1)

print("---")
pelle = ["Pelle", 22]
mats = ["Mats", 25]
eva = ["Eva", 25]
klass = [pelle, mats, eva]
print(klass)

klass[1][1] = 42
print(klass)


game = [
    " ", "O", "X",
    " ", "X", "O",
    "X", "O", " ",
]
print(game)


printGame = """
-------
|{}|{}|{}|
-------
|{}|{}|{}|
-------
|{}|{}|{}|
-------
""".format(*game)
print(printGame)


game = [
    [" ", "O", "X"],
    [" ", "X", "O"],
    ["X", "O", " "],
]
print(game)

printGame = """
-------
|{}|{}|{}|
-------
|{}|{}|{}|
-------
|{}|{}|{}|
-------
""".format(*sum(game, []))
print(printGame)
