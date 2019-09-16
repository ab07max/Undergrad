package mapreduce;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JTextField;
import javax.swing.JButton;
import javax.swing.JPanel;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.UIManager;
import java.awt.BorderLayout;
import java.awt.Dimension;
import java.awt.Color;
import java.awt.Font;
import javax.swing.JComboBox;
import javax.swing.JOptionPane;
public class DefineReducer extends JFrame{
	GradientPanel p1;
	JPanel p2;
	JLabel l1,l2,l3,l4;
	JTextField tf1,tf2;
	JButton b1;
	JComboBox c1;
	Font f1;
public DefineReducer(){
	super("Define Reducer");
	p1 = new GradientPanel(600,200);
	p1.setLayout(null);
	
	l1 = new JLabel("Define Reducer Location Screen");
	l1.setFont(new Font("Courier New",Font.BOLD,18));
	l1.setBounds(250,20,400,30);
	p1.add(l1);

	l2 = new JLabel("Reducer Name");
	l2.setFont(f1);
	l2.setBounds(200,60,100,30);
	p1.add(l2);
	c1 = new JComboBox();
	c1.addItem("Reducer1");
	c1.addItem("Reducer2");
	c1.setFont(f1);
	c1.setBounds(300,60,130,30);
	p1.add(c1);
	
	l3 = new JLabel("Latitude");
	l3.setFont(f1);
	l3.setBounds(200,110,100,30);
	p1.add(l3);
	tf1 = new JTextField(15);
	tf1.setFont(f1);
	tf1.setBounds(300,110,130,30);
	p1.add(tf1);

	l4 = new JLabel("Longitude");
	l4.setFont(f1);
	l4.setBounds(200,160,100,30);
	p1.add(l4);
	tf2 = new JTextField(15);
	tf2.setFont(f1);
	tf2.setBounds(300,160,130,30);
	p1.add(tf2);

	b1 = new JButton("Save Reducer");
	b1.setFont(f1);
	b1.setBounds(220,210,140,30);
	p1.add(b1);
	b1.addActionListener(new ActionListener(){
		public void actionPerformed(ActionEvent ae){
			login();
		}
	});
	
	getContentPane().add(p1,BorderLayout.CENTER);
}
public void clear(){
	tf1.setText("");
	tf2.setText("");
}
public void login(){
	String reducer = c1.getSelectedItem().toString().trim();
	String lat = tf1.getText();
	String lon = tf2.getText();
	if(lat == null || lat.trim().length() <= 0){
		JOptionPane.showMessageDialog(this,"Latitude must be enter");
		tf1.requestFocus();
		return;
	}
	if(lon == null || lon.trim().length() <= 0){
		JOptionPane.showMessageDialog(this,"Longitude must be enter");
		tf2.requestFocus();
		return;
	}
	double lat1 = 0;
	double lon1 = 0;
	try{
		lat1 = Double.parseDouble(lat.trim());
	}catch(NumberFormatException nfe){
		JOptionPane.showMessageDialog(this,"Latitude must be decimal value only");
		tf1.requestFocus();
		return;
	}
	try{
		lon1 = Double.parseDouble(lon.trim());
	}catch(NumberFormatException nfe){
		JOptionPane.showMessageDialog(this,"Longitude must be decimal value only");
		tf2.requestFocus();
		return;
	}
	try{
		String msg = DBCon.addReducer(reducer,lat.trim(),lon.trim());
		if(msg.equals("success")){
			JOptionPane.showMessageDialog(this,"Reducer details added");
			setVisible(false);
		}else{
			JOptionPane.showMessageDialog(this,"Error in adding reducer details");
		}
	}catch(Exception e){
		e.printStackTrace();
	}
}

}