import paho.mqtt.client as mqtt
import requests
import json
url = "https://parking-module.herokuapp.com/api/v1/save-distance-to-server"

def on_connect(client, userdata, flags, rc):
    #if (msg.topic == "CoreElectronics/test"):
        client.subscribe("CoreElectronics/test")
        print("Successfully Subscribed to Topic")
        print("Fetching Sensor Data....")
        sleep(0.5)


def on_message(client, userdata, msg):
    shahin=json.loads(msg.payload)
    x = requests.post(url, data = shahin)
    print(x.text)
    

client = mqtt.Client()
client.on_connect = on_connect
client.on_message = on_message


client.connect("localhost", 1883, 1000)
client.loop_forever()
