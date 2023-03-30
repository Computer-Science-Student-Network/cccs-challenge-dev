FROM ubuntu:20.04

RUN apt-get update && apt-get install openssh-server vim -y

RUN mkdir /var/run/sshd
RUN useradd -m -s /bin/bash codie
RUN echo 'codie:codie' | chpasswd
RUN echo "export VISUAL=vim" >> /root/.bashrc
RUN echo "export EDITOR=vim" >> /root/.bashrc

RUN chmod +s /usr/bin/base64

COPY flag.txt /root/flag.txt

EXPOSE 22

CMD ["/usr/sbin/sshd", "-D"]