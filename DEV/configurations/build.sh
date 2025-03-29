#!/bin/bash
docker-compose up -d

echo "Waiting for MySQL container to be ready..."
until docker exec admin-mysql_db mariadb -uroot -pstudent --silent -e "SELECT 1"; do
  echo "Waiting for MySQL to be ready..."
  sleep 5
done

echo "Running SQL dump..."
docker exec -i admin-mysql_db mariadb -uroot -pstudent BE_184429 < dump.sql

echo "Dump restore finished."

until docker exec prestashop curl --silent --fail http://localhost &>/dev/null; do
  echo "Waiting for prestashop container..."
  sleep 5
done
echo "Prestashop container ready."

echo "Copying SSL files..."
docker cp default-ssl.conf prestashop:/etc/apache2/sites-available/default-ssl.conf
docker cp ./certs/. prestashop:/etc/ssl/certs

echo "Enabling SSL.."
docker exec prestashop bash -c "a2enmod ssl && a2ensite default-ssl.conf && service apache2 restart"
echo "SSL enabled, shop is ready."


