#!/usr/bin/env python3
# -*- coding: utf-8 -*-

"""."""

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
except Exception:
    print("Some error occured!?")


try:
    a = 0
    b = 42 / a
except ZeroDivisionError:
    print("No division by zero!")
except Exception:
    print("Some error occured!?")


raise Exception("Raising an exception!")
