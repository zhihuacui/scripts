#!bin/bash
cd /Users/zhome/Webroot/admin-api/
for ((i=0; i<=20; i++))  
do  
c=$(( i ))
php ./index.php scr/fill_team_infos updateProject $c 
done  
