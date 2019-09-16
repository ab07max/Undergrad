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
public class WordFrequencyMapper extends Mapper<LongWritable, Text, Text, IntWritable> {
public void map(LongWritable key, Text data, Context con){
	try{
		Pattern pattern = Pattern.compile("\\w+");
        Matcher matcher = pattern.matcher(data.toString());
		String file = ((FileSplit)con.getInputSplit()).getPath().getName();
		StringBuilder sb = new StringBuilder();
		while(matcher.find()){
			String s1 = matcher.group().toLowerCase();
            sb.append(s1);
            sb.append("@");
            sb.append(file);
            con.write(new Text(sb.toString()), new IntWritable(1));
			ViewResult.appendData("Text "+sb.toString());
			sb.delete(0,sb.length());
		}
	}catch(Exception e){
		e.printStackTrace();
    }
}
}