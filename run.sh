# Frescura
Black='\033[0;30m'
Red='\033[0;31m'
Green='\033[0;32m'
Brown='\033[0;33m'
Blue='\033[0;34m'
Purple='\033[0;35m'
Cyan='\033[0;36m'
LightGray='\033[0;37m'
Clear='\033[0m'

project=$(basename "$PWD" | tr '[:upper:]' '[:lower:]')

# Salvar o banco
docker volume create database

docker run -p 3306:3306 -p 443:443 --name "$project"_lamp --rm --mount 'source=database,target=/var/lib/mysql' -v "$PWD":/srv/http -e MYSQL_USER=$project -e MYSQL_PASSWORD=password -d greyltc/lamp

docker run --name "$project"_myadmin --rm --link "$project"_lamp:db -p 8000:80 -d phpmyadmin/phpmyadmin

echo -e "The project ${Red}$project${Clear} is beign run..."
echo -e "MySQL Username: ${Green}$project${Clear}"
echo -e "MySQL Password: ${Blue}password${Clear}"

echo -e "Press ${Purple}return${Clear} to stop docker..."

read 2

docker kill lojinha_lamp lojinha_myadmin
