#!bin/bash
cd /Users/zhome/Webroot/admin-api/
for ((i=0; i<=19; i++))  
do  
r=$(( 33*i ))
php ./index.php scr/fill_project_data index $r 
done  
for ((i=0; i<=23; i++))
do
r=$(( 100*i ))
php ./index.php scr/fill_project_data/setInvestorList $r
done
