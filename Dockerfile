FROM greyltc/lamp

RUN sed -i '/AllowOverride None/s/None/All/g' /etc/httpd/conf/httpd.conf
RUN sed -i '/AllowOverride None/s/none/All/g' /etc/httpd/conf/httpd.conf
RUN sleep 1
RUN httpd
