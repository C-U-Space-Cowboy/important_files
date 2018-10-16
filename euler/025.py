import sys

def getfib(num1, num2, i):
    if i < 3:
        return 1
    if i == 3:
        return num1 + num2
    return getfib(num2, num1 + num2, i - 1)

def getfibindex(i):
    return getfib(1, 1, i)

sys.setrecursionlimit(6000)
print(getfibindex(4782))
