package mapreduce;
import org.apache.hadoop.io.IntWritable;
import org.apache.hadoop.io.Text;
import org.apache.hadoop.mapreduce.Reducer;
public class WordFrequencySplit extends Reducer<Text, IntWritable, Text, IntWritable> {
protected void reduce(Text key, Iterable<IntWritable> values, Context con){
	try{
		int total_count = 0;
		for (IntWritable val : values) {
            total_count = total_count+val.get();
        }
		//Main.sb.append(key.toString()+","+total_count+System.getProperty("line.separator"));
        con.write(key, new IntWritable(total_count));
    }catch(Exception e){
		e.printStackTrace();
    }
}
}