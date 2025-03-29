#!/bin/bash

echo "Starting database container in detached mode."
docker-compose up -d

until docker exec admin-mysql_db mariadb -uroot -pstudent --silent -e "SELECT 1"; do
  sleep 5
done

echo "MySQL container ready!"
