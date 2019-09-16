package tfidf;
import org.apache.hadoop.conf.Configuration;
import org.apache.hadoop.conf.Configured;
import org.apache.hadoop.fs.Path;
import org.apache.hadoop.io.IntWritable;
import org.apache.hadoop.io.Text;
import org.apache.hadoop.mapreduce.Job;
import org.apache.hadoop.mapreduce.lib.input.FileInputFormat;
import org.apache.hadoop.mapreduce.lib.output.FileOutputFormat;
import org.apache.hadoop.util.Tool;
import org.apache.hadoop.util.ToolRunner;
public class WordFrequency extends Configured implements Tool {
	static String path;
	
public static void setInputPath(String pa){
	path = pa;
}
public static String getInputPath(){
	return path;
}
public int run(String ar[]){
	int result = 0;
	try{
		Configuration configuration = getConf();
        Job job = new Job(configuration,"Word Frequency Counter");
		job.setJarByClass(WordFrequency.class);
        job.setMapperClass(WordFrequencyMapper.class);
        job.setReducerClass(WordFrequencyReducer.class);
        job.setCombinerClass(WordFrequencyReducer.class);
        job.setOutputKeyClass(Text.class);
        job.setOutputValueClass(IntWritable.class);
        FileInputFormat.addInputPath(job,new Path(getInputPath()));
        FileOutputFormat.setOutputPath(job,new Path("output/s1"));
        result = job.waitForCompletion(true) ? 0 : 1;
	}catch(Exception e){
		e.printStackTrace();
    }
	return result;
}
public static void start(String ar[]){
	try{
		ToolRunner.run(new Configuration(), new WordFrequency(), ar);
	}catch(Exception e){
		e.printStackTrace();
    }
}
public static void main(String a[]){
	WordFrequency.setInputPath("s1");
	WordFrequency.start(a);
}
}