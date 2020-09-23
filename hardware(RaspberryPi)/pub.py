# Import necessary libraries.
from time import sleep
import RPi.GPIO as GPIO
import paho.mqtt.publish as publish
import json
GPIO.setwarnings(False)

from Bluetin_Echo import Echo

# Define pin constants
TRIGGER_PIN_1 = 26
ECHO_PIN_1 = 13
TRIGGER_PIN_2 = 18
ECHO_PIN_2 = 24

# Initialise two sensors.
echo = {
    ECHO_PIN_1:Echo(TRIGGER_PIN_1, ECHO_PIN_1),
    ECHO_PIN_2:Echo(TRIGGER_PIN_2, ECHO_PIN_2)
    }

def main():
    sleep(0.1)
while True:
    publishData={}
    sleep(5)
    for counter2 in echo:
        result = echo[counter2].read('cm', 3)
        publishData[counter2]=round(result,2)
        
    publish.single("CoreElectronics/test", json.dumps(publishData), hostname="localhost")

if _name_ == '_main_':
    main()
