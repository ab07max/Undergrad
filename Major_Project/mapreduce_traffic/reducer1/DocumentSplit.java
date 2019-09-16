package mapreduce;
import org.apache.hadoop.io.LongWritable;
import org.apache.hadoop.io.Text;
import org.apache.hadoop.mapreduce.Mapper;
public class DocumentSplit extends Mapper<LongWritable, Text, Text, Text> {
public void map(LongWritable key,Text data,Context con){
	try{
		String wdcounter[] = data.toString().split(",");
        String wd[] = wdcounter[0].split("@");
        con.write(new Text(wd[1]), new Text(wd[0] + "=" + wdcounter[1]));
    }catch(Exception e){
		e.printStackTrace();
    }
}
}