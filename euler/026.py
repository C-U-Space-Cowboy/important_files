# start a thread for each digit to search for the next occurrance of that digit
# record all digits between the first occurance and the next occurance and check of the same digits
# occur after the next occurance of the original digit
from decimal import *
import asyncio

# find possible recurring patterns(is)
async def findposspatterns(s):
    print(s)
    b = s[0]
    patterns = []
    for i in range(1, len(s)):
        if b == s[i]:
            patterns.append(s[-i - 1:])
    return patterns

loop = asyncio.get_event_loop()
getcontext().prec = 100
for i in range(2, 100):
    print(str(1/Decimal(i))[2:-1].lstrip("0"))
    print(loop.run_until_complete(findposspatterns(str(1/Decimal(i))[2:].lstrip("0"))))
    print()
loop.close()
