CREATE TABLE laravel.t_item_stock (
  item_id int unsigned NOT NULL COMMENT '商品ID',
  put_slot int(10) NOT NULL COMMENT '入荷スロット',
  put_date timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '入荷日（予定）',
  put_count int(10) NOT NULL COMMENT '入荷数（予定）',
  put_description varchar(255) COMMENT '入荷説明',
  current_count int(10) NOT NULL COMMENT '現在の在庫数',
  created_at timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  updated_at timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY(item_id,put_slot)
)ENGINE=InnoDB DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
