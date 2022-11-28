FROM ubuntu:20.04

RUN apt-get update && apt-get install openssh-server vim coreutils -y

RUN mkdir /var/run/sshd
RUN useradd -m -s /bin/bash codie
RUN echo 'codie:codie' | chpasswd
COPY tail /usr/bin/tail
RUN chmod +s /usr/bin/tail

COPY flag.txt /root/flag.txt

EXPOSE 22

CMD ["/usr/sbin/sshd", "-D"]
