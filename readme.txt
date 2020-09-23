├── Authentication
├── Customer
│   
├── environment-docker
│
├── hardware(RaspberryPi)
│
└── parking


Authentication, Customer and parking are 3 seperate PHP projects. 
hardware(RaspberryPi) is for reading the sensons data, and publish the data and subscribe for MQTT broker
environment-docker is the docker container files


for running docker.

requirements: Must have installed docer in your computer

next run the commands:

cd environment-docker
docker-compose up -d nginx mysql redis


import the databases in your mysql database server. You will find the sql files in the given locations
Authentication/database/parking_authentication.sql
parking/database/parking_parking.sql


configure the environment files according to your database credentials. configuration files locations are given below
Authentication/.env
parking/.env


Final task:
change your hosts file in your computer according your ip address. you will replace 192.168.0.118 with your ip address
for windows hosts file location is C:\Windows\System32\drivers\etc


192.168.0.118      admin.test
192.168.0.118      parking.test
192.168.0.118      demo-parking.test


Enjoy!!!

these are the urls

admin.test
parking.test
demo-parking.test


