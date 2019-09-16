package mapreduce;
import javax.swing.table.DefaultTableModel;
import javax.swing.JTable;
import javax.swing.JScrollPane;
import javax.swing.JFrame;
import java.awt.Font;
public class ViewResult extends JFrame{
	JScrollPane jsp;
	DefaultTableModel dtm;
	JTable table;
public ViewResult(){
	super("View Count Result");
	dtm = new DefaultTableModel(){
		public boolean isCellEditable(){
			return false;
		}
	};
	table = new JTable(dtm);
	table.setRowHeight(30);
	jsp = new JScrollPane(table);
	dtm.addColumn("Word");
	dtm.addColumn("Frequency");
	getContentPane().add(jsp);
	Font f1 = new Font("Courier New",Font.BOLD,13);
	table.setFont(f1);
	
}
}