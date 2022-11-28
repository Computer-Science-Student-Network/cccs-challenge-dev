#!/bin/bash
# TODO: test this at some point
cd /home/scie/CTFd
docker-compose up -d

docker run -d -p 7655:80 lfi2
docker run -d -p 7654:80 lfi1
docker run -d -p 2222:22 quitvim
docker run -d -p 9345:9999 overflow
docker run -d -p 865:80 hidden
docker run -d -p 1234:80 clientsidecheck
docker run -d -p 430:80 length
docker run -d -p 1337:80 dirtrav
docker run -d -p 3756:22 root1
docker run -d -p 8569:22 root2
docker run -d -p 6666:9999 overflow2
docker run -d -p 8679:9999 overflow3
docker run -d -p 8364:9999 diffie
docker run --rm --name pr-hydracrack -d -p 3389:22 hydracrack
