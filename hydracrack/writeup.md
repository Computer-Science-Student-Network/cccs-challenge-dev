### HydraCrack

We are given an SSH session and a username. We are not given the password so we will have to crack it. To do this we will use a tool called hydra which allows you to crack the password of many different services. To do this we will run this command: `hydra -l codie -P rockyou.txt -s 3389 ssh://ctfevent.CSCTSO.com` 

`-l` spesifies the user and `-P` spesifies the password list which is rock you in this case. if we did a lowercase p and an upercase L we would give it the password and brute force the username. The `-s` gives it the port since it is not on 22. 