# Shellshock Lab 

This repo was created to make available the Vulnerable Applications and configurations I used while writing the "Command and Shellcode Injection Scenarios with Commix and Shellter"

Here you can find the configurations and the code I used for the Shellshock example I used.

Here is how you can download your vulnerable bash:

`mkdir src && cd src`

`wget http://ftp.gnu.org/gnu/bash/bash-3.1.tar.gz`

`tar zxvf bash-3.1.tar.gz`

`cd bash-3.1`

`./configure && make`

`sudo make install`

`sudo mv /bin/bash /bin/bash.old`

`sudo ln -s /usr/local/bin/bash /bin/bash`

#Test your Bash Version for shellshock

`env x='() { :; }; echo Normally I should not be able to see this' bash -c : `

