# Webpage_with_database
Стъпки за стартиране на услугата:
1. Изтеглете на Docker и Docker Compose
2. Отворете чрез терминал директорията на проекта, съдържаща папките и файловете на проекта
3. Изпълнете командата docker-compose up -d
Стъпки за създаване на базата данни:
1. Стартирайте MySQL клиента в контейнера (root):
   docker exec -it webpagewithdb-mysql-1 mysql -u root -p (името на контейнера може да се различава)
2. Въведете паролата на root: ТК12345
3. За създаване на таблица в базата данни "bira_website" изълнете командите от файл database.txt
4. За да видите наличните таблици:
   SHOW TABLES;
5. За преглед на записите в таблицата:
   SELECT * FROM order_user;


