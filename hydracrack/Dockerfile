FROM ubuntu:20.04

RUN apt-get update && apt-get install openssh-server vim -y

RUN mkdir /var/run/sshd
RUN useradd -m -s /bin/bash codie
RUN echo 'computer:computer' | chpasswd
RUN echo "export VISUAL=vim" >> /root/.bashrc
RUN echo "export EDITOR=vim" >> /root/.bashrc


COPY .bashrc /home/codie/.bashrc


EXPOSE 22

CMD ["/usr/sbin/sshd", "-D"]
