package tfidf;
import java.util.HashSet;
import java.util.Set;
import java.util.regex.Matcher;
import java.util.regex.Pattern;
import org.apache.hadoop.io.IntWritable;
import org.apache.hadoop.io.LongWritable;
import org.apache.hadoop.io.Text;
import org.apache.hadoop.mapreduce.Mapper;
import org.apache.hadoop.mapreduce.lib.input.FileSplit;
public class TFIDFMapper extends Mapper<LongWritable, Text, Text, Text> {
public void map(LongWritable key, Text data, Context con){
	try{
		String wc[] = data.toString().split("\t");
        String wd[] = wc[0].split("@");                 
        con.write(new Text(wd[0]), new Text(wd[1] + "=" + wc[1]));
    }catch(Exception e){
		e.printStackTrace();
    }
}
}