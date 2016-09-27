#!/usr/bin/env python3
# -*- coding: utf-8 -*-

team = {
    "mosstud": "Mikael Roos",
    "lew": "Kenneth Lewenhagen",
}

print(team)


team["zeldah"] = "Andreas Arnesson"
team["efo"] = "Emil Folino"
print(team)


mosstud = {
    "name": "Mikael Roos",
    "city": "Bankeryd",
}

lew = {
    "name": "Kenneth Lewenhagen",
    "city": "Karlskrona",
}

team = {
    "mosstud": mosstud,
    "lew": lew,
}

print(team)


print(team["mosstud"]["name"])
print(team["lew"]["name"])


pages = {
    "home": "incl/default.php",
    "about": "incl/about.php",
}

somekey = "home"
page = pages[somekey] if somekey in pages else None
print(page)
