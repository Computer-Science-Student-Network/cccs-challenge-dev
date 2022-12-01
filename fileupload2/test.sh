docker kill t-fileupload
docker rm t-fileupload
docker build -t test-fileupload .
docker run --rm --name t-fileupload -d -p 4274:80 test-fileupload