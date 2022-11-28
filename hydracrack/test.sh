docker kill t-hydracrack
docker build -t test-hydracrack .
docker run --name t-hydracrack -d -p 3389:22 test-hydracrack