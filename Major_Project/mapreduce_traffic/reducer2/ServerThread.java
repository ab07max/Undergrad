package mapreduce;
public class ServerThread extends Thread
{
	Reducer2 server;
public ServerThread(Reducer2 server){
	this.server=server;
	start();
}
public void run(){
	server.start();
}
}