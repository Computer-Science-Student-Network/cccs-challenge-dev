### Fallbucket

We are pointed to a website that has a file upload. If we upload a test file we find that it will put the file in the uploads folder.
From here we can try to upload a php file to see if it will run the php on the server. To test this I found 
a [webshell](https://raw.githubusercontent.com/artyuum/simple-php-web-shell/master/index.php) online and uploaded that. From there
we have a full shell and since we know where the flag is we can run `cat flag.txt` to get it.
