<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");
class Import extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->db->query("SET time_zone='+7:00'");
        $this->kolom_xl = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
        $this->load->library('Excel');
    }
    public function siswa()
    {
        $idx_baris_mulai = 2;
        $idx_baris_selesai = 1000;

        $target_file = './upload/temp/';
        $buat_folder_temp = !is_dir($target_file) ? @mkdir("./upload/temp/") : false;
        move_uploaded_file($_FILES["import_excel"]['tmp_name'], $target_file . $_FILES['import_excel']['name']);
        $file   = explode('.', $_FILES["import_excel"]['name']);
        $length = count($file);
        if ($file[$length - 1] == 'xlsx' || $file[$length - 1] == 'xls') {
            $tmp    = './upload/temp/' . $_FILES['import_excel']['name'];
            //Baca dari tmp folder jadi file ga perlu jadi sampah di server :-p

            $this->load->library('Excel'); //Load library excelnya
            $read   = PHPExcel_IOFactory::createReaderForFile($tmp);
            $read->setReadDataOnly(true);
            $excel  = $read->load($tmp);

            $_sheet = $excel->setActiveSheetIndexByName('data');

            $data = array();
            for ($j = $idx_baris_mulai; $j <= $idx_baris_selesai; $j++) {
                $username = $_sheet->getCell("A" . $j)->getCalculatedValue();
                $password = $_sheet->getCell("B" . $j)->getCalculatedValue();
                $nm_siswa = $_sheet->getCell("C" . $j)->getCalculatedValue();
                $jk = $_sheet->getCell("D" . $j)->getCalculatedValue();
                $kd_kelas = $_sheet->getCell("E" . $j)->getCalculatedValue();

                if ($username != "" || $password != "") {
                    $data[] = "('" . $username . "', '" . $password . "', '" . $nm_siswa . "', '" . $jk . "','" . $kd_kelas . "')";
                }
            }

            $strq = "INSERT INTO tb_siswa (username, password, nm_siswa, jk, kd_kelas) VALUES ";

            $strq .= implode(",", $data) . ";";

            $this->db->query($strq);
        } else {
            exit('Bukan File Excel...'); //pesan error tipe file tidak tepat
        }
        redirect('admin/datadpt');
    }
}
