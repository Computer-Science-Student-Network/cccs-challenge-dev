docker kill t-hydracrack
docker rm t-hydracrack
docker build -t test-hydracrack .
docker run --rm --name t-hydracrack -d -p 3389:22 test-hydracrack