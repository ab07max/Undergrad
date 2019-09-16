package mapreduce;
public class ServerThread extends Thread
{
	Reducer1 server;
public ServerThread(Reducer1 server){
	this.server=server;
	start();
}
public void run(){
	server.start();
}
}