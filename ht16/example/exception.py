#!/usr/bin/env python3
# -*- coding: utf-8 -*-

# a = 0
# b = 42 / a

try:
    a = 0
    b = 42 / a
except ZeroDivisionError:
    print("No division by zero!")


try:
    a = 0
    b = 42 / a
except:
    print("Some error occured!?")

raise NameError("Raising an exception!")
