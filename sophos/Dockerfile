FROM maxpowa/sophos-av

RUN apt-get update && apt-get upgrade -y && apt-get autoremove -y && apt-get clean -y
RUN /opt/sophos-av/bin/savupdate -a -v5
#COPY bashrc /root/.bashrc
#COPY start.sh /root/

#ENTRYPOINT ["bash", "/root/start.sh"]
CMD /opt/sophos-av/bin/savdctl start
ENTRYPOINT []
