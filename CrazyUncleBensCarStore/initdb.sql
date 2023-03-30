CREATE TABLE IF NOT EXISTS "users" (
    "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    "name" VARCHAR,
    "age" INTEGER,
    "password" VARCHAR
);
CREATE TABLE IF NOT EXISTS "cars" (
    "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    "model" VARCHAR,
    "price" FLOAT,
    "img-link" VARCHAR
);
INSERT INTO "users" ("name", "age", "password") VALUES ("Crazy Uncle Ben", 74, "CRAZY-@$S_UNCLE!!");
INSERT INTO "users" ("name", "age", "password") VALUES ("Walter W. Walter", 50, "Pas$w0rd1!!");
INSERT INTO "users" ("name", "age", "password") VALUES ("Walter W. Walter, jr.", 55, "TheR1singSun@!");
INSERT INTO "users" ("name", "age", "password") VALUES ("Flag", 69, "CCCS{Flag-go-here}");

INSERT INTO "cars" ("model", "price", "img-link") VALUES ("Pontiac Aztek", 19000.99, "./img/aztek.jpg");
INSERT INTO "cars" ("model", "price", "img-link") VALUES ("Bugatti Chiron", 5, "./img/chiron.jpg");
INSERT INTO "cars" ("model", "price", "img-link") VALUES ("Smart ForTwo", 37210, "./img/fortwo.jpg");
INSERT INTO "cars" ("model", "price", "img-link") VALUES ("Lamborghini Aventador", 20, "./img/aventador_svj.png");
