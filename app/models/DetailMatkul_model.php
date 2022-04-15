<?php

class DetailMatkul_model
{
    private $table = 'detail_matkul';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    
    public function getMatakuliahMhsById($id)
    {
        $this->db->query('SELECT m.*,d.* FROM detail_matkul as d JOIN mata_kuliah as m on d.id_matkul = m.id_matkul WHERE d.id_mhs =:id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }
    public function getMahasiswaMtkById($id)
    {
        $this->db->query('SELECT m.* FROM detail_matkul as d JOIN mahasiswa as m on d.id_mhs = m.id WHERE d.id_matkul =:id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }
    public function tambahDataDetailMatkul($data)
    {
        $query = "INSERT INTO detail_matkul
                    VALUES
                  ( :id_mhs, :id_matkul,0)";

        $this->db->query($query);
        $this->db->bind('id_mhs', $data['id_mhs']);
        $this->db->bind('id_matkul', $data['id_matkul']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataMahasiswa($data)
    {
        $query = "UPDATE mahasiswa SET
                    nama = :nama,
                    nrp = :nrp,
                    email = :email,
                    jurusan = :jurusan
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataMahasiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
