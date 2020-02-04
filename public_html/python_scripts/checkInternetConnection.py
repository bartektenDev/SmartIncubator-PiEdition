import urllib
from gpiozero import LED
import time

ledConnectedToInternet = LED(18)

connectionStat = "not connected"

while(connectionStat = "not connected"){
	try:
    		url = "https://www.google.com"
    		urllib.urlopen(url)
    		status = "Connected"
	except:
    		status = "Not connected"
	print status
	
	if status == "Connected":
		connectionStat = "connected"
    		# turn on led
		while True:
    			ledConnectedToInternet.on()
}
