#!/bin/bash

docker-compose up -d

echo "Waiting for MySQL container to be ready..."
until docker exec admin-mysql_db mariadb -uroot -pstudent --silent -e "SELECT 1"; do
  echo "Waiting for MySQL to be ready..."
  sleep 5
done

echo "Running SQL dump..."
docker exec -i admin-mysql_db mariadb -uroot -pstudent BE_184429 < dump.sql

echo "Shop db loaded!"

echo "Shop is running at https://localhost:18442/pl/"
