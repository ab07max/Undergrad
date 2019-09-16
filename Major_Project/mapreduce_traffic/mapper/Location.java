package mapreduce;
import java.util.Comparator;
public class Location implements Comparator<Location>
{
	String reducer;
	double distance;
public void setReducer(String reducer){
	this.reducer = reducer;
}
public String getReducer(){
	return reducer;
}
public void setDistance(double distance){
	this.distance=distance;
}
public double getDistance(){
	return distance;
}
public int compare(Location p1,Location p2){
	double s1 = p1.getDistance();
    double s2 = p2.getDistance();
	if (s1 == s2)
		return 0;
    else if (s1 > s2)
    	return 1;
    else
		return -1;
}
}