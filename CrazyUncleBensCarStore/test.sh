
docker kill t-crazyuncle
docker rm t-crazyuncle
docker build -t test-crazyuncle .
docker run --rm --name t-crazyuncle -d -p 88:80 test-crazyuncle