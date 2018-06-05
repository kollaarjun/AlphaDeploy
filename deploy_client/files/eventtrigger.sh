le true #run indefinitely
do
inotifywait  -e modify /var/log/auth.log && /home/ubuntu/scripts/sshevents.sh
done
