CREATE TABLE laravel.items (
  item_id int unsigned NOT NULL PRIMARY KEY COMMENT '商品ID',
  item_kind char(255) NOT NULL COMMENT '商品種別',
  item_tag char(255) COMMENT '商品目印',
  item_name varchar(255) COMMENT '商品名',
  item_image varchar(255) NOT NULL COMMENT '商品展示画像',
  item_thumbnail varchar(255) NOT NULL COMMENT '商品サムネイル画像',
  item_description varchar(255) COMMENT '商品説明展示画像用',
  item_short_depiction varchar(255) COMMENT '商品説明サムネイル用',
  sell_price int(10) unsigned NOT NULL COMMENT '商品単価税抜き',
  sell_discount char(255) COMMENT '商品値引きタイプ',
  sell_status char(255) NOT NULL COMMENT '商品販売状態',
  created_at timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  updated_at timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
