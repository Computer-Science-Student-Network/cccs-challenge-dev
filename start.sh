#!/bin/bash
# TODO: test this at some point
cd /home/scie/CTFd
docker-compose up -d

#cd /home/scie/cccs/CTF-Docker-Individual-Instances
#screen -dmS IndInst python3 app.py  


#kill all pr containers
docker kill $(docker ps --format '{{.Names}}' | grep pr-)
docker kill $(docker ps --format '{{.Names}}' | grep t-)

docker run --rm --name pr-lfi2 -d -p 7655:80 lfi2
docker run --rm --name pr-lfi1 -d -p 7654:80 lfi1
docker run --rm --name pr-quitvim -d -p 2222:22 quitvim
docker run --rm --name pr-overflow -d -p 9345:9999 overflow
docker run --rm --name pr-hidden -d -p 865:80 hidden
docker run --rm --name pr-clientsidecheck -d -p 1234:80 clientsidecheck
docker run --rm --name pr-length -d -p 430:80 length
docker run --rm --name pr-dirtrav -d -p 1337:80 dirtrav
docker run --rm --name pr-root1 -d -p 3756:22 root1
docker run --rm --name pr-root2 -d -p 8569:22 root2
docker run --rm --name pr-overflow2 -d -p 6666:9999 overflow2
docker run --rm --name pr-overflow3 -d -p 8679:9999 overflow3
docker run --rm --name pr-diffie -d -p 8364:9999 diffie
docker run --rm --name pr-hydracrack -d -p 3389:22 hydracrack
docker run --rm --name pr-flaskinjection -d -p 5890:80 flaskinjection
<<<<<<< HEAD
docker run --rm --name pr-biscuit -d -p 8823:80 biscuit
docker run --rm --name pr-find -d -p 6621:22 find
=======
docker run --rm --name pr-crazyuncle -d -p 6969:80 crazyuncle
>>>>>>> fb2f5b2ec25a927c280d8957903c93b2002d8757
