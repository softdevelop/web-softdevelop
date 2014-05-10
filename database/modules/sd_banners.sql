PRAGMA foreign_keys = OFF;

-- ----------------------------
-- Table structure for "main"."sd_banners"
-- ----------------------------
CREATE TABLE "sd_banners" (
	"id" INTEGER PRIMARY KEY  AUTOINCREMENT  NOT NULL , 
	"title" VARCHAR, 
	"image" VARCHAR, 
	"description" text, 
	"url" VARCHAR,
	"priority" INTEGER, 
	"create_time" DATETIME, 
	"update_time" DATETIME
);