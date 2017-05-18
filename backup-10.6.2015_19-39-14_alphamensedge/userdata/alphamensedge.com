--- 
customlog: 
  - 
    format: combined
    target: /usr/local/apache/domlogs/alphamensedge.com
  - 
    format: "\"%{%s}t %I .\\n%{%s}t %O .\""
    target: /usr/local/apache/domlogs/alphamensedge.com-bytes_log
documentroot: /home/alphamensedge/public_html
group: alphamensedge
hascgi: 1
homedir: /home/alphamensedge
ifmoduleitkc: {}

ifmodulemodincludec: 
  directoryhomealphamensedgepublichtml: 
    ssilegacyexprparser: 
      - 
        value: " On"
ip: 107.180.0.8
owner: gdresell
phpopenbasedirprotect: 1
port: 80
scriptalias: 
  - 
    path: /home/alphamensedge/public_html/cgi-bin
    url: /cgi-bin/
  - 
    path: /home/alphamensedge/public_html/cgi-bin/
    url: /cgi-bin/
serveradmin: webmaster@alphamensedge.com
serveralias: www.alphamensedge.com
servername: alphamensedge.com
usecanonicalname: 'Off'
user: alphamensedge
userdirprotect: ''
