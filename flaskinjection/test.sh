docker kill t-flaskinjection
docker rm t-flaskinjection
docker build -t test-flaskinjection .
docker run --rm --name t-flaskinjection -d -p 5890:80 test-flaskinjection