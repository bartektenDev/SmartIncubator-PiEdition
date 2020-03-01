 #!/usr/bin/env python
# Python Network Programming Cookbook -- Chapter - 1
# This program is optimized for Python 2.7. It may run on any
# other Python version with/without modifications

import ntplib
import re
import datetime
from time import ctime

currentDT = datetime.datetime.now()

work = ""
REAL_TIME = ""
TIME_TO_WATER = ""
COMPLETED_WATER = ""
dayToday = currentDT.strftime("%a")

def print_time():
    print("System READ: " + dayToday)
    readTimeAMPM12 = currentDT.strftime("%I:%M:%S %p")

    #result = re.search('z(.*) ', DATE_TIME_OUTPUT)
    #print(result.group(1))
    if "Sun" in dayToday:
        print('Script READ: Sunday')
    elif "Mon" in dayToday:
        print('Script READ: Monday')
    elif "Tues" in dayToday:
        print('Script READ: Tuesday')
    elif "Wed" in dayToday:
        print('Script READ: Wednesday')
    elif "Thurs" in dayToday:
        print('Script READ: Thursday')
    elif "Fri" in dayToday:
        print('Script READ: Friday')
    elif "Sat" in dayToday:
        print('Script READ: Saturday')
    else:
        print('I have no sense of direction. I read: ' + dayToday)

    print("Script READ TIME: " + readTimeAMPM12)

    checkToWork()

def checkToWork():
    print('Lets start checking if we have any work to do')
    ftodo=open("./logs/dateLogs/"+dayToday+"dayTodo.txt", "r")
    contentsWork = ftodo.read()

    print(contentsWork)

    ftodotime=open("./logs/dateLogs/"+dayToday+"dayTodoTime.txt", "r")
    contentsWorkTime = ftodotime.read()

    print(contentsWorkTime)

    if "water" in contentsWork:
        work = "watering at"
    elif "fan" in contentsWork:
        work = "activating the fan"
    else:
        work = ""
        print('Theres nothing to do today! Today is: '+ dayToday + "day")

    print('We will be '+work+' '+contentsWorkTime+' on '+ dayToday + "day")

def daysAheadReset():
    print('all days ahead of today reset till sunday')

if __name__ == '__main__':
    print_time()
