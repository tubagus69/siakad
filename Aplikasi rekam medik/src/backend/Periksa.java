/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package backend;
import java.sql.ResultSet;
import java.util.ArrayList;
/**
 *
 * @author Hp
 */
public class Periksa {
    private int no, no_rekam_medik;
    private Pasien pasien = new Pasien();
    private String tanggal_kedokter, diagnosa, penanganan;

    public Periksa() {
    }

    public Periksa(Pasien pasien, int no, int no_rekam_medik, String tanggal_kedokter, String diagnosa, String penanganan) {
        this.pasien = pasien;
        this.no = no;
        this.no_rekam_medik = no_rekam_medik;
        this.tanggal_kedokter = tanggal_kedokter;
        this.diagnosa = diagnosa;
        this.penanganan = penanganan;
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

    public String getTanggal_kedokter() {
        return tanggal_kedokter;
    }

    public void setTanggal_kedokter(String tanggal_kedokter) {
        this.tanggal_kedokter = tanggal_kedokter;
    }

    public String getDiagnosa() {
        return diagnosa;
    }

    public void setDiagnosa(String diagnosa) {
        this.diagnosa = diagnosa;
    }

    public String getPenanganan() {
        return penanganan;
    }

    public void setPenanganan(String penanganan) {
        this.penanganan = penanganan;
    }

    public Pasien getPasien() {
        return pasien;
    }

    public void setPasien(Pasien pasien) {
        this.pasien = pasien;
    }
    
    
    public Periksa getById(int id){
        Periksa peg=new Periksa();
        ResultSet rs = DBHelper.selectQuery("SELECT"
                                             +" p.no AS no, "
                                             +" p.tanggal_kedokter AS tanggal_kedokter, "
                                             +" p.diagnosa AS diagnosa, "
                                             +" p.penanganan AS penanganan, "
                                             +" pa.no_rekam_medik AS no_rekam_medik "
                                             +" FROM periksa p "
                                             +" LEFT JOIN pasien pa ON p.no_rekam_medik = pa.no_rekam_medik "
                                             +" WHERE p.no = '"+ id + "' " );

        try{
            while(rs.next()){
                peg=new Periksa();
                peg.setNo(rs.getInt("no"));
                peg.getPasien().setNo_rekam_medik(rs.getInt("no_rekam_medik"));
                peg.setTanggal_kedokter(rs.getString("tanggal_kedokter"));
                peg.setDiagnosa(rs.getString("diagnosa"));
                peg.setPenanganan(rs.getString("penanganan"));
            }
        }
        catch (Exception e){
            e.printStackTrace();
        }
        
        return peg;
    }
    public ArrayList<Periksa> getAll(){
        ArrayList<Periksa> ListAnggota = new ArrayList();
        
        ResultSet rs = DBHelper.selectQuery("SELECT"
                                             +" p.no AS no, "
                                             +" p.tanggal_kedokter AS tanggal_kedokter, "
                                             +" p.diagnosa AS diagnosa, "
                                             +" p.penanganan AS penanganan, "
                                             +" pa.no_rekam_medik AS no_rekam_medik "
                                             +" FROM periksa p "
                                             +" LEFT JOIN pasien pa ON p.no_rekam_medik = pa.no_rekam_medik " );
        
        try{
            while(rs.next()){
                Periksa peg = new Periksa();
                peg.setNo(rs.getInt("no"));
                peg.getPasien().setNo_rekam_medik(rs.getInt("no_rekam_medik"));
                peg.setTanggal_kedokter(rs.getString("tanggal_kedokter"));
                peg.setDiagnosa(rs.getString("diagnosa"));
                peg.setPenanganan(rs.getString("penanganan"));
                
                ListAnggota.add(peg);
            }
        }
        catch (Exception e){
            e.printStackTrace();
        }
        
        return ListAnggota;
    }
    
    public ArrayList<Periksa> search(String keyword){
        ArrayList<Periksa> ListAnggota = new ArrayList();
        
        String sql = "SELECT"
                     +" p.no AS no, "
                     +" p.tanggal_kedokter AS tanggal_kedokter, "
                     +" p.diagnosa AS diagnosa, "
                     +" p.penanganan AS penanganan, "
                     +" pa.no_rekam_medik AS no_rekam_medik "
                     +" FROM periksa p "
                     +" LEFT JOIN pasien pa ON p.no_rekam_medik = pa.no_rekam_medik "  
                    + " WHERE "
                    + "    no_rekam_medik LIKE '%" + keyword + "%' "
                    + "    OR no LIKE '%" + keyword + "%' ";
        
        ResultSet rs = DBHelper.selectQuery(sql);
        
        try{
            while(rs.next()){
                Periksa peg = new Periksa();
                peg.setNo(rs.getInt("no"));
                peg.getPasien().setNo_rekam_medik(rs.getInt("no_rekam_medik"));
                peg.setTanggal_kedokter(rs.getString("tanggal_kedokter"));
                peg.setDiagnosa(rs.getString("diagnosa"));
                peg.setPenanganan(rs.getString("penanganan"));
                
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
            String SQL = "INSERT INTO periksa (no, no_rekam_medik, tanggal_kedokter, diagnosa, penanganan) VALUE("
                    + "     '" + this.no + "', "
                    +"  '"+this.getPasien().getNo_rekam_medik()+"', "
                    + "     '" + this.tanggal_kedokter + "', "
                    + "     '" + this.diagnosa + "', "
                    + "     '" + this.penanganan + "' "
                    + "     )";
            this.no_rekam_medik = DBHelper.insertQueryGetId(SQL);
        }
        else{
            String SQL = "UPDATE periksa SET "
                    + "     '" + this.no + "', "
                    + "     no_rekam_medik = '" +this.getPasien().getNo_rekam_medik()+ "', "
                    + "     tanggal_kedokter = '" + this.tanggal_kedokter + "', "
                    + "     diagnosa = '" + this.diagnosa + "', "
                    + "     penanganan = '" + this.penanganan + "', "
                    + "     WHERE no_rekam_medik = '" + this.no_rekam_medik + "'";
            DBHelper.executeQuery(SQL);
        }
    }
    public void delete(){
        String SQL = "DELETE FROM periksa WHERE no_rekam_medik = '"
                + this.no_rekam_medik + "'";
        DBHelper.executeQuery(SQL);
    }

    @Override
    public String toString() {
        return ""+no_rekam_medik;
    }
}
