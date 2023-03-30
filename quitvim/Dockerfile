FROM ubuntu:20.04

RUN apt-get update && apt-get install openssh-server vim -y
#run ssh in docker
RUN mkdir /var/run/sshd
RUN useradd -m -s /bin/bash codie
RUN echo 'codie:codie' | chpasswd
#RUN sed -i 's/PermitRootLogin prohibit-password/PermitRootLogin yes/' /etc/ssh/sshd_config
#RUN sed -i 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' /etc/pam.d/sshd
RUN echo "export VISUAL=vim" >> /root/.bashrc
RUN echo "export EDITOR=vim" >> /root/.bashrc

COPY stuck.txt /home/codie/stuck.txt
COPY .bashrc /home/codie/.bashrc
COPY escaped.txt /home/codie/escaped.txt

EXPOSE 22

CMD ["/usr/sbin/sshd", "-D"]

