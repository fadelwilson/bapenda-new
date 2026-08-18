USE bapenda;

-- Tambah kolom foto ke tabel seputar_visi
ALTER TABLE seputar_visi ADD COLUMN foto_visi varchar(255) DEFAULT NULL;
UPDATE seputar_visi SET foto_visi='67c9c028cbc4ef49fe4f4e1f8e4532b6.png' WHERE id=1;

-- Tambah kolom foto ke tabel seputar_misi
ALTER TABLE seputar_misi ADD COLUMN foto_misi varchar(255) DEFAULT NULL;
UPDATE seputar_misi SET foto_misi='3923c7b0c795f7522c1c50ba3fb35387.png' WHERE id=1;

-- Tambah kolom foto ke tabel seputar_alur
ALTER TABLE seputar_alur ADD COLUMN foto_alur varchar(255) DEFAULT NULL;
UPDATE seputar_alur SET foto_alur='78d34873f55d2462de9c60bbe6bf64bb.png' WHERE id=1;

-- Tambah kolom foto ke tabel seputar_informasi
ALTER TABLE seputar_informasi ADD COLUMN foto_seputar varchar(255) DEFAULT NULL;
UPDATE seputar_informasi SET foto_seputar='4f6e01ddd4c49c68ca0b1be8bf7438d3.jpg' WHERE id=1;

-- Tambah kolom twitter ke header
ALTER TABLE header ADD COLUMN twitter varchar(255) DEFAULT NULL;
UPDATE header SET
    facebook='https://facebook.com',
    instagram='https://instagram.com',
    youtube='https://youtube.com',
    twitter='https://x.com'
WHERE id=1;
