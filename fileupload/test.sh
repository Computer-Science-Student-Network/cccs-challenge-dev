docker kill t-fileupload
docker rm t-fileupload
docker build -t test-fileupload .
docker run --rm --name t-fileupload -d -p 4273:80 test-fileupload