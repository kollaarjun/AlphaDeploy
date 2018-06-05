#!/bin/bash

#Write the SSH events to AplhaClient1 dir. This script executes wheneven there is an SSH event occured
sudo aureport -l -i --success > /home/ubuntu/AlphaClient2/ssh_success.log
sudo aureport -l -i --failed > /home/ubuntu/AlphaClient2/ssh_fail.log
expr $(sudo aureport -l -i --success | wc -l) - 5 > /home/ubuntu/AlphaClient2/ssh_success_count.txt
expr $(sudo aureport -l -i --failed | wc -l) - 5 > /home/ubuntu/AlphaClient2/ssh_failed_count.txt
