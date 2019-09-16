package tfidf;
import javax.swing.JTable;
import javax.swing.table.DefaultTableModel;
import javax.swing.JFrame;
import javax.swing.JScrollPane;
import javax.swing.JPanel;
import java.awt.BorderLayout;
import javax.swing.JLabel;
import javax.swing.JComboBox;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.io.FileReader;
import java.io.BufferedReader;
import java.io.File;
import java.awt.Font;
public class View extends JFrame
{
	String columns[]={"Document Name","Word","Total Word Appear/Total Document","Word Frequency/Total Words","TF-ID Value"};
	JTable table;
	DefaultTableModel dtm;
	JScrollPane jsp;
	JPanel p1,p2;
	JLabel l1,l2;
	JComboBox c1,c2;
	Font f1;
	int size,wsize;
public View(){
	setTitle("View TF-IDF Value");
	f1 = new Font("Courier New",Font.BOLD,16);
	dtm = new DefaultTableModel(){
		public boolean isCellEditable(int r,int c){
			return false;
		}
	};
	for(int i=0;i<columns.length;i++){
		dtm.addColumn(columns[i]);
	}
	table = new JTable(dtm);
	table.setFont(f1);
	table.setRowHeight(30);
	jsp = new JScrollPane(table);
	getContentPane().add(jsp,BorderLayout.CENTER);
}
public void showData(){
	try{
		clearTable();
		BufferedReader br = new BufferedReader(new FileReader("output/s3/part-r-00000"));
		String line = null;
		while((line = br.readLine())!=null){
			String s1[] = line.split("\t");
			String s2[] = s1[0].split("@");
			String s3 = s1[1].substring(1,s1[1].length()-2);
			String s4[] = s3.split(",");
			String rows[]={s2[1],s2[0],s4[0],s4[1],s4[2]};
			dtm.addRow(rows);
		}
		br.close();
	}catch(Exception e){
		e.printStackTrace();
	}
}
public void clearTable(){
	for(int i=dtm.getRowCount()-1;i>=0;i--){
		dtm.removeRow(i);
	}
}
}
