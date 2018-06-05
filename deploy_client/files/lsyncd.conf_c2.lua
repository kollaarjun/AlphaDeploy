settings {
   logfile = "/var/log/lsyncd/lsyncd.log",
   statusFile = "/var/log/lsyncd/lsyncd-status.log",
   statusInterval = 20
}
servers = {
 "54.152.241.89"
}

for _, server in ipairs(servers) do
sync {
    default.rsyncssh,
    source="/home/ubuntu/AlphaClient2/",
    host=server,
    targetdir="/home/ubuntu/Alpha/AlphaClient2/",
    excludeFrom="/etc/lsyncd/lsyncd-excludes.txt",
    rsync = {
        compress = true,
        archive = true,
        verbose = true,
        rsh="/usr/bin/ssh -l ubuntu -i /home/ubuntu/.ssh/id_rsa -o StrictHostKeyChecking=no"
    }
}
end
