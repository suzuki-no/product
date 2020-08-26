/*　商品　*/
USE laravel;
TRUNCATE TABLE items;
/*
insert into laravel.items (
  item_id,
  item_kind,
  item_tag,
  item_name,
  item_image,
  item_thumbnail,
  item_description,
  item_short_depiction,
  sell_price,
  sell_discount,
  sell_status,
) values (
  9999900001,
  'test',
  'test',
  'テスト商品',
  '/test/test.jpg',
  '/test/thum/test.jpg',
  'これはテスト商品です。',
  'テスト商品です。',
  1000,
  'normal',
  'sail',
);
*/
/*
 テスト
*/
INSERT INTO laravel.items VALUES (999900001,'test','test','テスト商品１','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはテスト商品１です。','テスト商品１です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999900002,'test','test','テスト商品２','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはテスト商品２です。','テスト商品２です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999900003,'test','test','テスト商品３','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはテスト商品３です。','テスト商品３です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999900004,'test','test','テスト商品４','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはテスト商品４です。','テスト商品４です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999900005,'test','test','テスト商品５','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはテスト商品５です。','テスト商品５です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999900006,'test','test','テスト商品６','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはテスト商品６です。','テスト商品６です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999900007,'test','test','テスト商品７','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはテスト商品７です。','テスト商品７です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999900008,'test','test','テスト商品８','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはテスト商品８です。','テスト商品８です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999900009,'test','test','テスト商品９','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはテスト商品９です。','テスト商品９です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
/*
 サンプル
*/
INSERT INTO laravel.items VALUES (999910001,'sample','sample','サンプル商品１','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはサンプル商品１です。','サンプル商品１です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999910002,'sample','sample','サンプル商品２','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはサンプル商品２です。','サンプル商品２です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999910003,'sample','sample','サンプル商品３','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはサンプル商品３です。','サンプル商品３です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999910004,'sample','sample','サンプル商品４','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはサンプル商品４です。','サンプル商品４です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999910005,'sample','sample','サンプル商品５','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはサンプル商品５です。','サンプル商品５です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999910006,'sample','sample','サンプル商品６','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはサンプル商品６です。','サンプル商品６です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999910007,'sample','sample','サンプル商品７','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはサンプル商品７です。','サンプル商品７です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999910008,'sample','sample','サンプル商品８','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはサンプル商品８です。','サンプル商品８です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999910009,'sample','sample','サンプル商品９','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはサンプル商品９です。','サンプル商品９です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
/*
 プロトタイプ
*/
INSERT INTO laravel.items VALUES (999920001,'proto','proto','プロトタイプ１','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはプロトタイプ１です。','プロトタイプ１です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999920002,'proto','proto','プロトタイプ２','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはプロトタイプ２です。','プロトタイプ２です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999920003,'proto','proto','プロトタイプ３','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはプロトタイプ３です。','プロトタイプ３です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999920004,'proto','proto','プロトタイプ４','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはプロトタイプ４です。','プロトタイプ４です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999920005,'proto','proto','プロトタイプ５','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはプロトタイプ５です。','プロトタイプ５です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999920006,'proto','proto','プロトタイプ６','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはプロトタイプ６です。','プロトタイプ６です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999920007,'proto','proto','プロトタイプ７','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはプロトタイプ７です。','プロトタイプ７です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999920008,'proto','proto','プロトタイプ８','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはプロトタイプ８です。','プロトタイプ８です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
INSERT INTO laravel.items VALUES (999920009,'proto','proto','プロトタイプ９','/img/test/item/sampl.jpg','/img/test/thum/sampl.jpg','これはプロトタイプ９です。','プロトタイプ９です。',1000,'normal','sail','2020-07-30 12:00:00','2020-07-30 12:00:00');
