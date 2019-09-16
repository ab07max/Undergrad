package mapreduce;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JButton;
import javax.swing.JPanel;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.UIManager;
import java.awt.BorderLayout;
import java.awt.Dimension;
import java.awt.Color;
import java.awt.Font;
import javax.swing.JOptionPane;
import javax.swing.JFileChooser;
import java.io.File;
import java.io.BufferedReader;
import java.io.FileReader;
import java.util.ArrayList;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.net.Socket;
import java.sql.Statement;
import java.sql.ResultSet;
import org.jfree.ui.RefineryUtilities;
import java.io.BufferedReader;
import java.io.FileReader;
import java.io.FileWriter;
public class Main extends JFrame
{
	GradientPanel p1;
	JPanel p2;
	JLabel title;
	JButton b1,b2,b3,b4,b5;
	Font f1;
	JFileChooser chooser;
	File file;
	static StringBuilder sb = new StringBuilder();
	ArrayList<Location> location = new ArrayList<Location>();  
public void remove(){
	File remove = new File("output");
	File list[] = remove.listFiles();
	if(list != null){
		for(int i=0;i<list.length;i++){
			if(list[i] != null)
				System.out.println(list[i].delete()+" delete =======");
		}
	}
	if(remove != null)
		remove.delete();
}
public Main(){
	super("Map Reduce System");
	p1 = new GradientPanel(600,200);
	p1.setLayout(null);
	
	f1 = new Font("Courier New",Font.BOLD,14);
	p2 = new JPanel();
	p2.setBackground(new Color(204, 110, 155));
	title = new JLabel("<HTML><BODY><CENTER>ON TRAFFIC-AWARE PARTITION AND AGGREGATION IN MAPREDUCE<BR/>FOR BIG DATA APPLICATIONS</CENTER></BODY></HTML>");
	title.setForeground(Color.white);
	title.setFont(new Font("Times New ROMAN",Font.PLAIN,17));
	p2.add(title);

	chooser = new JFileChooser(new File("."));
	chooser.setFileSelectionMode(JFileChooser.DIRECTORIES_ONLY);
	JPanel pan3 = new JPanel(); 
	b1 = new JButton("Define Reducer Location");
	b1.setFont(f1);
	b1.setBounds(220,50,250,30);
	p1.add(b1);
	b1.addActionListener(new ActionListener(){
		public void actionPerformed(ActionEvent ae){
			DefineReducer dr = new DefineReducer();
			dr.setVisible(true);
			dr.setSize(600,360);
			dr.setLocationRelativeTo(null);
			dr.setResizable(false);
		}
	});
	b2 = new JButton("Upload Documents");
	b2.setFont(f1);
	b2.setBounds(220,100,250,30);
	p1.add(b2);
	b2.addActionListener(new ActionListener(){
		public void actionPerformed(ActionEvent ae){
			int option = chooser.showOpenDialog(Main.this);
			if(option == chooser.APPROVE_OPTION){
				sb.delete(0,sb.length());
				file = chooser.getSelectedFile();
				JOptionPane.showMessageDialog(Main.this,"Input documents loaded");
			}
		}
	});

	b3 = new JButton("Start MapReduce Aggregation");
	b3.setFont(f1);
	b3.setBounds(220,150,250,30);
	p1.add(b3);
	b3.addActionListener(new ActionListener(){
		public void actionPerformed(ActionEvent ae){
			try{
				remove();
				long start = System.currentTimeMillis();
				String a[] = {"test"};
				WordFrequency.setInputPath(file.getPath());
				WordFrequency.start(a);
				Location loc = location.get(0);
				Socket soc = null;
				if(loc.getReducer().equals("Reducer1"))
					soc = new Socket("localhost",2222);
				if(loc.getReducer().equals("Reducer2"))
					soc = new Socket("localhost",3333);
				ObjectOutputStream out = new ObjectOutputStream(soc.getOutputStream());
				Object req[] = {"input",sb.toString()};
				out.writeObject(req);
				out.flush();
				ObjectInputStream in = new ObjectInputStream(soc.getInputStream());
				Object res[] = (Object[])in.readObject();
				String msg = (String)res[0];
				long end = System.currentTimeMillis();
				ViewResult vr = new ViewResult();
				vr.setVisible(true);
				vr.setSize(600,400);
				if(msg.equals("output")){
					String output = (String)res[1];
					String arr[] = output.split("\n");
					for(int i=0;i<arr.length;i++){
						Object ar[] = arr[i].split("\t");
						vr.dtm.addRow(ar);
					}
				}
				FileWriter fw = new FileWriter("D:/agg.txt");
				fw.write(""+(end-start));
				fw.close();
				JOptionPane.showMessageDialog(Main.this,"Processing Time "+(end-start));
			}catch(Exception e){
				e.printStackTrace();
			}
		}
	});

	b4 = new JButton("Network Traffic Cost Graph");
	b4.setFont(f1);
	b4.setBounds(220,200,250,30);
	p1.add(b4);
	b4.addActionListener(new ActionListener(){
		public void actionPerformed(ActionEvent ae){
			try{
				BufferedReader br = new BufferedReader(new FileReader("D:/no_agg.txt"));
				int noagg = Integer.parseInt(br.readLine().trim());
				br.close();
				br = new BufferedReader(new FileReader("D:/agg.txt"));
				int agg = Integer.parseInt(br.readLine().trim());
				br.close();
				Chart chart1 = new Chart("Processing Time Chart",noagg,agg);
				chart1.pack();
				RefineryUtilities.centerFrameOnScreen(chart1);
				chart1.setVisible(true);
			}catch(Exception e){
				e.printStackTrace();
			}
		}
	});

	b5 = new JButton("Exit");
	b5.setFont(f1);
	b5.setBounds(220,250,250,30);
	p1.add(b5);
	b5.addActionListener(new ActionListener(){
		public void actionPerformed(ActionEvent ae){
			System.exit(0);
		}
	});

	
	getContentPane().add(p1,BorderLayout.CENTER);
	getContentPane().add(p2,BorderLayout.NORTH);
}
public static void main(String a[])throws Exception{
	UIManager.setLookAndFeel("com.sun.java.swing.plaf.nimbus.NimbusLookAndFeel");
	Main main = new Main();
	main.setVisible(true);
	main.setExtendedState(JFrame.MAXIMIZED_BOTH);
	main.readReducerLoc();
}
public double distance(double lat1, double lon1, double lat2, double lon2, char unit){
	double theta = lon1 - lon2;
	double dist = Math.sin(deg2rad(lat1)) * Math.sin(deg2rad(lat2)) + Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * Math.cos(deg2rad(theta));
	dist = Math.acos(dist);
	dist = rad2deg(dist);
	dist = dist * 60 * 1.1515;
	if (unit == 'K') {
		dist = dist * 1.609344;
	} else if (unit == 'N') {
		dist = dist * 0.8684;
	}
	return (dist);
}
public double deg2rad(double deg) {
	return (deg * Math.PI / 180.0);
}
public double rad2deg(double rad) {
	return (rad * 180.0 / Math.PI);
}
public void readReducerLoc(){
	try{
		location.clear();
		Statement stmt = DBCon.getCon().createStatement();
		ResultSet rs = stmt.executeQuery("select * from reducer");
		while(rs.next()){
			String reducer = rs.getString(1);
			double lat = rs.getDouble(2);
			double lon = rs.getDouble(3);
			double dis = distance(17.4359786,78.4481956,lat,lon,'M');
			Location loc = new Location();
			loc.setReducer(reducer);
			loc.setDistance(dis);
			location.add(loc);
		}
		java.util.Collections.sort(location,new Location());
		for(int i=0;i<location.size();i++){
			Location loc = location.get(i);
			System.out.println(loc.getReducer());
		}
	}catch(Exception e){
		e.printStackTrace();
    }
}
}
