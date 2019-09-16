package mapreduce;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.ArrayList;
public class DBCon{
    private static Connection con;
	
public static Connection getCon()throws Exception {
    Class.forName("com.mysql.jdbc.Driver");
    con = DriverManager.getConnection("jdbc:mysql://localhost/mapreduce","root","root");
    return con;
}
public static String addReducer(String reducer,String lat,String lon)throws Exception{
    String msg="fail";
    con = getCon();
    PreparedStatement stmt=con.prepareStatement("delete from reducer where reducer_name=?");
	stmt.setString(1,reducer);
	stmt.executeUpdate();
    PreparedStatement stat=con.prepareStatement("insert into reducer values(?,?,?)");
	stat.setString(1,reducer);
	stat.setString(2,lat);
	stat.setString(3,lon);
	int i=stat.executeUpdate();
	if(i > 0)
		msg = "success";
	return msg;
}
}
