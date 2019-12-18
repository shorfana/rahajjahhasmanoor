create table kelas (
  id_kelas int(10) primary key AUTO_INCREMENT,
  tingkat_kelas varchar(1),
  nama_kelas varchar(20)
)engine = innodb;

create table siswa (
  id_siswa int(11) primary key AUTO_INCREMENT,
  nik_siswa varchar(30),
  no_induk varchar(30),
  nama_siswa varchar(30),
  jenis_kelamin varchar(1),
  tempat_lahir varchar(20),
  tanggal_lahir date,
  alamat text,
  tahun_masuk date,
  tingkat varchar(1),
  status_tempat_tinggal varchar(30),
  warga_negara varchar(20),
  agama varchar(20),
  nama_ayah varchar(30),
  nama_ibu varchar(30),
  nik_ayah varchar(30),
  nik_ibu varchar(30),
  status_siswa varchar(5),
  id_kelas int(10),

  foreign key (id_kelas) references kelas(id_kelas)

)engine = innodb;

create table nilai (
  id_nilai int(10) primary key AUTO_INCREMENT,
  id_siswa int(11),
  fisik_motorik text,
  nilai_agama_moral text,
  kognitif text,
  bahasa text,
  pend_agama_islam text,
  seni text,
  semester varchar(1),

  foreign key (id_siswa) references siswa(id_siswa)

)engine = innodb;



create table guru (
  id_guru int(10) primary key AUTO_INCREMENT,
  id_kelas int(11),
  nama_guru varchar(30),
  nik varchar(30),
  nip varchar(30),

  foreign key (id_kelas) references kelas(id_kelas)

)engine = innodb;
