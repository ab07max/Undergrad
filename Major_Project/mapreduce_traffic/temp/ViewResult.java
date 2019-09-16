package tfidf;
import javax.swing.JTextArea;
import javax.swing.JScrollPane;
import javax.swing.JFrame;
import java.util.ArrayList;
import java.awt.Font;
import java.io.BufferedReader;
import java.io.FileReader;
public class ViewResult extends JFrame
{
	static JTextArea area;
	JScrollPane jsp;
	
public ViewResult(String title){
	super(title);
	area = new JTextArea();
	jsp = new JScrollPane(area);
	getContentPane().add(jsp);
	area.setEditable(false);
	Font f1 = new Font("Courier New",Font.BOLD,13);
	area.setFont(f1);
	
}
public static void appendData(String data){
	area.append(data+"\n");
}
public static void clear(){
	area.setText("");
}
}