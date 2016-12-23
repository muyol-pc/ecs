# ecs
# 秒杀表
  CREATE TABLE `ecs_seckill` (
    `id` int(10) unsigned NOT NULL auto_increment COMMENT '秒杀ID',
    `goods_id` int(10) unsigned NOT NULL COMMENT '商品ID',
    `goods_name` varchar(120) character set utf8 collate utf8_czech_ci NOT NULL,
    `end_time` int(11) unsigned NOT NULL COMMENT '结束时间',
    `start_time` int(11) unsigned NOT NULL COMMENT '秒杀时间',
    `seckill_price` decimal(10,2) NOT NULL COMMENT '秒杀价格',
    `number` smallint(5) unsigned NOT NULL COMMENT '秒杀数量',
    `seckill_img` varchar(255) character set utf8 collate utf8_czech_ci NOT NULL COMMENT '秒杀图片路径',
    `seckill_content` text character set utf8 collate utf8_czech_ci NOT NULL COMMENT '秒杀内容',
    PRIMARY KEY  (`id`)
  ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;