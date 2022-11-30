#!/bin/bash
#thanks copilot
docker build -t hydracrack ./hydracrack
docker build -t diffie ./diffie
docker build -t overflow3 ./overflow3
docker build -t overflow2 ./overflow2
docker build -t root2 ./root2
docker build -t root1 ./root1
docker build -t dirtrav ./dirtrav
docker build -t length ./length
docker build -t clientsidecheck ./clientsidecheck
docker build -t hidden ./hidden
docker build -t overflow ./overflow
docker build -t quitvim ./quitvim
docker build -t lfi1 ./lfi1
docker build -t lfi2 ./lfi2
docker build -d flaskinjection ./flaskinjection