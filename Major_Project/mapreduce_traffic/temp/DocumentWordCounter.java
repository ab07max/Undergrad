package tfidf;
import org.apache.hadoop.conf.Configuration;
import org.apache.hadoop.conf.Configured;
import org.apache.hadoop.fs.Path;
import org.apache.hadoop.io.Text;
import org.apache.hadoop.mapreduce.Job;
import org.apache.hadoop.mapreduce.lib.input.FileInputFormat;
import org.apache.hadoop.mapreduce.lib.output.FileOutputFormat;
import org.apache.hadoop.util.Tool;
import org.apache.hadoop.util.ToolRunner;
import java.io.File;
public class DocumentWordCounter extends Configured implements Tool {
public String getInputPath(){
	return "output/s1/part-r-00000";
} 
public int run(String[] args){
	int result = 0;
	try{
		Configuration configuration = getConf();
		Job job = new Job(configuration, "Document Word Count");
		job.setJarByClass(DocumentWordCounter.class);
        job.setMapperClass(DocumentMapper.class);
        job.setReducerClass(DocumentReducer.class);
        job.setOutputKeyClass(Text.class);
        job.setOutputValueClass(Text.class);
        FileInputFormat.addInputPath(job,new Path(getInputPath()));
        FileOutputFormat.setOutputPath(job,new Path("output/s2"));
        result = job.waitForCompletion(true) ? 0 : 1;
    }catch(Exception e){
		e.printStackTrace();
    }
	return result;
}
public static void start(String[] args){
	try{
		ToolRunner.run(new Configuration(), new DocumentWordCounter(), args);
	}catch(Exception e){
		e.printStackTrace();
    }
}
public static void main(String a[]){
	DocumentWordCounter.start(a);
}
}