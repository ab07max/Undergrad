package mapreduce;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.net.Socket;
import javax.swing.JTextArea;
import java.io.FileWriter;
import java.io.File;
public class ProcessThread extends Thread{
    Socket socket;
    ObjectOutputStream out;
    ObjectInputStream in;
	JTextArea area;
	String ip;
public ProcessThread(Socket soc,JTextArea area){
    socket=soc;
	this.area=area;
	try{
        out = new ObjectOutputStream(socket.getOutputStream());
        in = new ObjectInputStream(socket.getInputStream());
	}catch(Exception e){
        e.printStackTrace();
    }
}
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
	Reducer2.sb.delete(0,Reducer2.sb.length());
}
@Override
public void run(){
    try{
		Object input[]=(Object[])in.readObject();
        String type=(String)input[0];
		if(type.equals("input")){
			area.append("Received input\n"); 
			String data = (String)input[1];
			FileWriter fw = new FileWriter("input.txt");
			fw.write(data);
			fw.close();
			remove();
			String a[] = {"test"};
			DocumentWordCounter.start(a);
			Object req[] = {"output",Reducer2.sb.toString()};
			out.writeObject(req);
			out.flush();
			area.append("Response sent\n"); 
		}
	}catch(Exception e){
        e.printStackTrace();
    }
}


}
