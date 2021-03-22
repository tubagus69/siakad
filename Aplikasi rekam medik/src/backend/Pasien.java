/*
 * To chpege this license header, choose License Headers in Project Properties.
 * To chpege this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package backend;
import java.sql.ResultSet;
import java.util.ArrayList;
/**
 *
 * @author Hp
 */
public class Pasien {
    private int no, no_rekam_medik;
    private String nama, alamat, tgl_lahir, jenis_kelamin;

    public Pasien() {
    }

    public Pasien(int no, int no_rekam_medik, String nama, String jenis_kelamin, String alamat, String tgl_lahir) {
        this.no = no;
        this.no_rekam_medik = no_rekam_medik;
        this.nama = nama;
        this.jenis_kelamin = jenis_kelamin;
        this.alamat = alamat;
        this.tgl_lahir = tgl_lahir;
    }

    public int getNo() {
        return no;
    }

    public void setNo(int no) {
        this.no = no;
    }
    

    public int getNo_rekam_medik() {
        return no_rekam_medik;
    }

    public void setNo_rekam_medik(int no_rekam_medik) {
        this.no_rekam_medik = no_rekam_medik;
    }

    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public String getAlamat() {
        return alamat;
    }

    public void setAlamat(String alamat) {
        this.alamat = alamat;
    }

    public String getTgl_lahir() {
        return tgl_lahir;
    }

    public void setTgl_lahir(String tgl_lahir) {
        this.tgl_lahir = tgl_lahir;
    }

    public String getJenis_kelamin() {
        return jenis_kelamin;
    }

    public void setJenis_kelamin(String jenis_kelamin) {
        this.jenis_kelamin = jenis_kelamin;
    }
    
    
    
    public Pasien getById(int id){
        Pasien peg=new Pasien();
        ResultSet rs = DBHelper.selectQuery("SELECT * FROM pasien "
                                            + " WHERE no_rekam_medik = '" + id + "'");
        try{
            while(rs.next()){
                peg=new Pasien();
                peg.setNo(rs.getInt("no"));
                peg.setNo_rekam_medik(rs.getInt("no_rekam_medik"));
                peg.setNama(rs.getString("nama"));
                peg.setJenis_kelamin(rs.getString("jenis_kelamin"));
                peg.setAlamat(rs.getString("alamat"));
                peg.setTgl_lahir(rs.getString("tgl_lahir"));
            }
        }
        catch (Exception e){
            e.printStackTrace();
        }
        
        return peg;
    }
    public ArrayList<Pasien> getAll(){
        ArrayList<Pasien> ListAnggota = new ArrayList();
        
        ResultSet rs = DBHelper.selectQuery("SELECT * FROM pasien");
        
        try{
            while(rs.next()){
                Pasien peg = new Pasien();
                peg.setNo(rs.getInt("no"));
                peg.setNo_rekam_medik(rs.getInt("no_rekam_medik"));
                peg.setNama(rs.getString("nama"));
                peg.setJenis_kelamin(rs.getString("jenis_kelamin"));
                peg.setAlamat(rs.getString("alamat"));
                peg.setTgl_lahir(rs.getString("tgl_lahir"));
                
                ListAnggota.add(peg);
            }
        }
        catch (Exception e){
            e.printStackTrace();
        }
        
        return ListAnggota;
    }
    
    public ArrayList<Pasien> search(String keyword){
        ArrayList<Pasien> ListAnggota = new ArrayList();
        
        String sql = "SELECT * FROM pasien WHERE "
                + "    no_rekam_medik LIKE '%" + keyword + "%' "
                + "    OR nama LIKE '%" + keyword + "%' ";
        
        ResultSet rs = DBHelper.selectQuery(sql);
        
        try{
            while(rs.next()){
                Pasien peg = new Pasien();
                peg.setNo(rs.getInt("no"));
                peg.setNo_rekam_medik(rs.getInt("no_rekam_medik"));
                peg.setNama(rs.getString("nama"));
                peg.setJenis_kelamin(rs.getString("jenis_kelamin"));
                peg.setAlamat(rs.getString("alamat"));
                peg.setTgl_lahir(rs.getString("tgl_lahir"));
                
                ListAnggota.add(peg);
            }
        }
        catch (Exception e){
            e.printStackTrace();
        }
        
        return ListAnggota;
    }
    public void save(){
        if(getById(no_rekam_medik).getNo_rekam_medik() == 0){
            String SQL = "INSERT INTO pasien (no, no_rekam_medik, nama, alamat, jenis_kelamin, tgl_lahir) VALUE("
                    + "     '" + this.no + "', "
                    + "     '" + this.no_rekam_medik + "', "
                    + "     '" + this.nama + "', "
                    + "     '" + this.alamat + "', "
                    + "     '" + this.jenis_kelamin + "', "
                    + "     '" + this.tgl_lahir + "' "
                    + "     )";
            this.no_rekam_medik = DBHelper.insertQueryGetId(SQL);
        }
        else{
            String SQL = "UPDATE pasien SET "
                    + "     '" + this.no + "', "
                    + "     no_rekam_medik = '" + this.no_rekam_medik + "', "
                    + "     nama = '" + this.nama + "', "
                    + "     alamat = '" + this.alamat + "', "
                    + "     jenis_kelamin = '" + this.jenis_kelamin + "', "
                    + "     tgl_lahir = '" + this.tgl_lahir + "', "
                    + "     WHERE no_rekam_medik = '" + this.no_rekam_medik + "'";
            DBHelper.executeQuery(SQL);
        }
    }
    public void delete(){
        String SQL = "DELETE FROM pasien WHERE no_rekam_medik = '"
                + this.no_rekam_medik + "'";
        DBHelper.executeQuery(SQL);
    }

    @Override
    public String toString() {
        return ""+no_rekam_medik;
    }
    
}

