#!/usr/bin/env python3
# -*- coding: utf-8 -*-


def doit():
    """ Example """
    tot = 41 + 1
    print(tot)

doit()



def doit1(num):
    tot = 1 + num
    print(tot)

doit1(41)



def doit2(num1, num2=40):
    tot = 1 + num1 + num2
    print(tot)

doit2(1)
doit2(2, 39)



def doit3(num, tot):
    tot[0] = 1 + num

tot = [None]
doit3(41, tot)
print(tot)



def doit4(num):
    return 1 + num

tot = doit4(41)
print(tot)



def doit5(num):
    doit5.tot += num
    print(doit5.tot)

doit5.tot = 0

doit5(40)
doit5(2)



def doit6(*nums):
    tot = 0
    for num in nums:
        tot += num
    return tot

tot = doit6(1, 2, 3, 5, 6, 7, 8, 9, 1)
print(tot)

tot = sum([1, 2, 3, 5, 6, 7, 8, 9, 1])
print(tot)


def doit7(num1, num2=2, num3=40):
    return num1 + num2 + num3

print(doit7(0))
print(doit7(1, 1))
print(doit7(1, 40, 1))
print(doit7(num3=39, num1=1))
print(doit7(42, num3=0, num2=0))

base=40

def doit8(num1):
    return base + num1

print(doit8(2))

base=40

def doit9(num1):
    global base
    base += num1

doit9(2)
print(base)
