package tfidf;
import java.awt.BorderLayout;
import java.awt.Color;
import java.awt.Container;
import java.awt.Font;
import java.awt.event.WindowAdapter;
import java.awt.event.WindowEvent;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JButton;
import javax.swing.JTextField;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import javax.swing.JOptionPane;
import javax.swing.UIManager;
import java.io.File;
import net.miginfocom.swing.MigLayout;
import javax.swing.JFileChooser;
import javax.swing.table.DefaultTableModel;
import javax.swing.JTable;
import javax.swing.JScrollPane;
import java.io.FileWriter;
public class MainScreen extends JFrame implements Runnable
{
	JLabel l1,l2;
	JTextField tf1;
	JButton b1,b2,b3;
	Font f1,f2;
	JPanel p1,p2,p3,p4;
	Thread thread;
	DefaultTableModel dtm;
	JScrollPane jsp;
	JTable table;
	JFileChooser chooser;
public MainScreen(){
	setTitle("TRAFFIC-AWARE PARTITION");
	getContentPane().setLayout(new BorderLayout());
	f1 = new Font("Courier New", Font.BOLD, 18);
	p1 = new JPanel();
    l1 = new JLabel("<HTML><BODY><CENTER>ON TRAFFIC-AWARE PARTITION AND AGGREGATION IN MAPREDUCE<BR/>FOR BIG DATA APPLICATIONS</CENTER></BODY></HTML>");
	l1.setFont(this.f1);
    l1.setForeground(Color.blue);
    p1.add(l1);
    
	
    f2 = new Font("Courier New",Font.BOLD,14);
    p2 = new JPanel();
	p2.setLayout(new BorderLayout());
    dtm = new DefaultTableModel(){
		public boolean isCellEditable(){
			return false;
		}
	};
	table = new JTable(dtm);
	table.setFont(f2);
	table.setRowHeight(30);
	jsp = new JScrollPane(table);
	p2.add(jsp);
	dtm.addColumn("Uploaded File Information");
	p3 = new JPanel();
	p3.setLayout(new MigLayout("wrap 2"));
	l2 = new JLabel("Choose Document Folder");
	l2.setFont(f2);
	p3.add(l2);

	tf1 = new JTextField(20);
	tf1.setFont(f2);
	p3.add(tf1,"split 2");

	chooser = new JFileChooser(new File("."));
	chooser.setFileSelectionMode(JFileChooser.DIRECTORIES_ONLY);
	b1 = new JButton("Browse");
	b1.setFont(f2);
	p3.add(b1,"wrap");
	b1.addActionListener(new ActionListener(){
		public void actionPerformed(ActionEvent ae){
			try{
				int option = chooser.showOpenDialog(MainScreen.this);
				if(option == JFileChooser.APPROVE_OPTION){
					clearTable();
					File file = chooser.getSelectedFile();
					tf1.setText(file.getPath());
					long start = System.currentTimeMillis();
					File remove = new File("output/s1");
					File list[] = remove.listFiles();
					if(list != null){
						for(int i=0;i<list.length;i++){
							if(list[i] != null)
								System.out.println(list[i].delete()+" delete =======");
						}
					}
					remove = new File("output/s2");
					list = remove.listFiles();
					if(list != null){
						for(int i=0;i<list.length;i++){
							if(list[i] != null)
								System.out.println(list[i].delete()+" delete =======");
						}
					}
					remove = new File("output/s3");
					list = remove.listFiles();
					if(list != null){
						for(int i=0;i<list.length;i++){
							if(list[i] != null)
								System.out.println(list[i].delete()+" delete =======");
						}
					}
					remove = new File("output");
					list = remove.listFiles();
					if(list != null){
						for(int i=0;i<list.length;i++){
							if(list[i] != null)
								System.out.println(list[i].delete()+" delete =======");
						}
					}
					list = file.listFiles();
					for(int i=0;i<list.length;i++){
						String row = list[i].getPath();
						String rows[]={row};
						dtm.addRow(rows);
					}
					ViewResult vr = new ViewResult("View Processing Data");
					vr.setVisible(true);
					vr.setSize(600,400);
					String a[] = {"test"};
					ViewResult.clear();
					WordFrequency.setInputPath(file.getPath());
					WordFrequency.start(a);
					DocumentWordCounter.start(a);
					TFIDF.setPath(file.getPath());
					TFIDF.start(a);
					long end = System.currentTimeMillis();
					FileWriter fw = new FileWriter("D:/no_agg.txt");
					fw.write(""+(end-start));
					fw.close();
					JOptionPane.showMessageDialog(MainScreen.this,"Processing Time "+(end-start));
				}
			}catch(Exception e){
				e.printStackTrace();
			}
		}
	});

	b3 = new JButton("View TF-IDF Values");
	b3.setFont(f2);
	p3.add(b3);
	b3.addActionListener(new ActionListener(){
		public void actionPerformed(ActionEvent ae){
			try{
				View view = new View();
				view.setVisible(true);
				view.pack();
				view.showData();
			}catch(Exception e){
				e.printStackTrace();
			}
		}
	});
	
	
    getContentPane().add(p1, BorderLayout.NORTH);
    getContentPane().add(p2, BorderLayout.CENTER);
	getContentPane().add(p3, BorderLayout.SOUTH);
	thread = new Thread(this);
	thread.start();
}
public void clearTable(){
	for(int i=dtm.getRowCount()-1;i>=0;i--){
		dtm.removeRow(i);
	}
}
public void run(){
	try{
		while(true){
			l1.setForeground(Color.red);
			thread.sleep(500);
			l1.setForeground(Color.blue);
			thread.sleep(500);
			
		}
	}catch(Exception e){
		e.printStackTrace();
	}
}

public static void main(String a[])throws Exception{
	 UIManager.setLookAndFeel("com.birosoft.liquid.LiquidLookAndFeel");
	 MainScreen screen = new MainScreen();
	 screen.setExtendedState(JFrame.MAXIMIZED_BOTH);
	 screen.setVisible(true);
	 
}
}