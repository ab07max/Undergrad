package mapreduce;
import java.io.ObjectOutputStream;
import java.io.ObjectInputStream;
import java.net.Socket;
import java.net.ServerSocket;
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
import javax.swing.JScrollPane;
import javax.swing.JTextArea;
import javax.swing.SwingUtilities;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import javax.swing.UIManager;
public class Reducer1 extends JFrame{	
	ProcessThread thread;
	JPanel p1,p2;
	JLabel l1;
	JScrollPane jsp;
	JTextArea area;
	Font f1,f2;
	ServerSocket server;
	Socket socket;
	static StringBuilder sb = new StringBuilder();
public void start(){
	try{
		area.append("Node1 startup\n");
		server = new ServerSocket(2222);
		while(true){
			socket = server.accept();
			socket.setKeepAlive(true);
			thread = new ProcessThread(socket,area);
			thread.start();
		}
	}catch(Exception e){
		e.printStackTrace();
	}
}

public Reducer1(){
	setTitle("Reducer1 Node");
	p1 = new JPanel();
    l1 = new JLabel("<html><body><center><font size=6 color=#f5ea01>Reducer1 Node</font></center></body></html>");
	l1.setForeground(Color.white);
    p1.add(l1);
    p1.setBackground(Color.black);
	
    f2 = new Font("Courier New", 1, 13);
    p2 = new JPanel();
    p2.setLayout(new BorderLayout());
    area = new JTextArea();
    area.setFont(f2);
    jsp = new JScrollPane(area);
    area.setEditable(false);
    p2.add(jsp);
	
	
    getContentPane().add(p1, "North");
    getContentPane().add(p2, "Center");
	
    addWindowListener(new WindowAdapter(){
            @Override
        public void windowClosing(WindowEvent we){
            try{
				if(socket != null){
					socket.close();
				}
             server.close();
            }catch(Exception e){
                //e.printStackTrace();
            }
        }
    });
}
public static void main(String a[])throws Exception{
	UIManager.setLookAndFeel("com.sun.java.swing.plaf.nimbus.NimbusLookAndFeel");
	Reducer1 r1 = new Reducer1();
	r1.setVisible(true);
	r1.setSize(600,400);
	new ServerThread(r1);
}

}