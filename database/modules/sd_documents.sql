/*
Navicat SQLite Data Transfer

Source Server         : sdcmsModules
Source Server Version : 30706
Source Host           : :0

Target Server Type    : SQLite
Target Server Version : 30706
File Encoding         : 65001

Date: 2013-10-09 23:50:18
*/

PRAGMA foreign_keys = OFF;

-- ----------------------------
-- Table structure for "main"."document_files"
-- ----------------------------
DROP TABLE "main"."document_files";
CREATE TABLE "document_files" (
"id"  INTEGER NOT NULL,
"document_id"  INT(11),
"name"  VARCHAR(255),
"file_name"  VARCHAR(255),
"ext"  VARCHAR DEFAULT 50,
"type"  VARCHAR DEFAULT 50,
"size"  VARCHAR,
"description"  TEXT,
"download_count"  INTEGER,
"priority"  INTEGER DEFAULT 0,
"is_published"  tinyint(1) NOT NULL DEFAULT 1,
"create_time"  DATETIME,
"update_time"  DATETIME,
PRIMARY KEY ("id" ASC),
CONSTRAINT "document" FOREIGN KEY ("document_id") REFERENCES "documents" ("id") ON DELETE CASCADE ON UPDATE CASCADE
);

-- ----------------------------
-- Records of document_files
-- ----------------------------
INSERT INTO "main"."document_files" VALUES (17, 1, 'DeTreEmCoGiacNguNgon.pdf', '13473393143543.pdf', 'pdf', 'application/pdf', 222760, null, null, 0, 1, '2012-09-11 04:55:14', null);
INSERT INTO "main"."document_files" VALUES (21, 1, 'cac giai doan phat trien cua tre.pdf', '13474107782266.pdf', 'pdf', 'application/pdf', 424956, null, null, 0, 1, '2012-09-12 00:46:18', null);
INSERT INTO "main"."document_files" VALUES (22, 1, 'CamNangChamSocTre.pdf', '13474107781970.pdf', 'pdf', 'application/pdf', 311771, null, null, 0, 1, '2012-09-12 00:46:18', null);
INSERT INTO "main"."document_files" VALUES (23, 1, '230_loi_giai_ve_benh_tat_tre_em.pdf', '13474107853053.pdf', 'pdf', 'application/pdf', 912649, null, null, 0, 1, '2012-09-12 00:46:25', null);
INSERT INTO "main"."document_files" VALUES (25, 1, 'Day tre2.pdf', '13474108581408.pdf', 'pdf', 'application/pdf', 560841, null, null, 0, 1, '2012-09-12 00:47:38', null);
INSERT INTO "main"."document_files" VALUES (26, 1, 'Day tre1.pdf', '13474108643977.pdf', 'pdf', 'application/pdf', 557473, null, null, 0, 1, '2012-09-12 00:47:44', null);
INSERT INTO "main"."document_files" VALUES (27, 1, 'ChamSocRangMieng2.PDF', '13474109213196.PDF', 'PDF', 'application/pdf', 303687, null, null, 0, 1, '2012-09-12 00:48:41', null);
INSERT INTO "main"."document_files" VALUES (28, 3, 'Trò chơi Nhớ tên.doc', '13475038994034.doc', 'doc', 'application/msword', 24576, null, null, 0, 1, '2012-09-13 02:38:19', null);
INSERT INTO "main"."document_files" VALUES (29, 3, 'Cáo và Thỏ.doc', '13475054033568.doc', 'doc', 'application/msword', 21504, null, null, 0, 1, '2012-09-13 03:03:23', null);
INSERT INTO "main"."document_files" VALUES (30, 3, 'chuyền bóng.doc', '13476954391956.doc', 'doc', 'application/msword', 25600, null, null, 0, 1, '2012-09-15 07:50:39', null);
INSERT INTO "main"."document_files" VALUES (31, 3, 'Chồng nụ chồng hoa.doc', '13476963651474.doc', 'doc', 'application/msword', 25088, null, null, 0, 1, '2012-09-15 08:06:05', null);
INSERT INTO "main"."document_files" VALUES (32, 3, 'Chi chi chành chành.doc', '13476966031819.doc', 'doc', 'application/msword', 25088, null, null, 0, 1, '2012-09-15 08:10:03', null);

-- ----------------------------
-- Table structure for "main"."documents"
-- ----------------------------
DROP TABLE "main"."documents";
CREATE TABLE [documents] (
  [id] INTEGER NOT NULL PRIMARY KEY, 
  [title] varchar(250) NOT NULL, 
  [alias] varchar(255) NOT NULL, 
  [image] varchar(255) DEFAULT NULL, 
  [description] text, 
  [content] text, 
  [priority] int(11) DEFAULT 0, 
  [created] datetime, 
  [modified] datetime, 
  [is_published] tinyint(1) DEFAULT 1);

-- ----------------------------
-- Records of documents
-- ----------------------------
INSERT INTO "main"."documents" VALUES (1, 'Chăm sóc - nuôi dưỡng', 'cham-soc---nuoi-duong', null, 'Văn bằng - biểu mẫu', X'3C703E0D0A0956C4836E2062E1BAB16E67202D206269E1BB8375206DE1BAAB753C2F703E0D0A', 0, '2012-05-29 10:06:32', '2012-09-06 09:12:13', 1);
INSERT INTO "main"."documents" VALUES (3, 'Trò chơi dành cho bé', 'tro-choi-danh-cho-be', 'tu-sach-danh-cho-be.JPG', 'Tủ sách dành cho bé', X'3C703E0D0A0954E1BBA72073266161637574653B63682064266167726176653B6E682063686F2062266561637574653B3C2F703E0D0A', 0, '2012-05-29 10:08:04', '2012-09-06 09:14:13', 1);
