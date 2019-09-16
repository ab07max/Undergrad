package tfidf;
import org.apache.hadoop.conf.Configuration;
import org.apache.hadoop.conf.Configured;
import org.apache.hadoop.fs.FileStatus;
import org.apache.hadoop.fs.FileSystem;
import org.apache.hadoop.fs.Path;
import org.apache.hadoop.io.Text;
import org.apache.hadoop.mapreduce.Job;
import org.apache.hadoop.mapreduce.lib.input.FileInputFormat;
import org.apache.hadoop.mapreduce.lib.output.FileOutputFormat;
import org.apache.hadoop.util.Tool;
import org.apache.hadoop.util.ToolRunner;
public class TFIDF extends Configured implements Tool {
	static String path;
public String getInputPath(){
	return "output/s2/part-r-00000";
} 
public static void setPath(String pa){
	path = pa;
}
public int run(String args[]){
	int result = 0;
	try{
		Configuration configuration = getConf();
		Job job = new Job(configuration, "TF-IDF Calculation");
        job.setJarByClass(TFIDF.class);
        job.setMapperClass(TFIDFMapper.class);
        job.setReducerClass(TFIDFReducer.class);
        job.setOutputKeyClass(Text.class);
        job.setOutputValueClass(Text.class);
        FileInputFormat.addInputPath(job, new Path(getInputPath()));
        FileOutputFormat.setOutputPath(job, new Path("output/s3"));
        Path inputPath = new Path(path);
        FileSystem fs = inputPath.getFileSystem(configuration);
        FileStatus[] stat = fs.listStatus(inputPath);
		job.setJobName(String.valueOf(stat.length));
        result = job.waitForCompletion(true) ? 0 : 1;
    }catch(Exception e){
		e.printStackTrace();
    }
	return result;
}
public static void start(String args[]){
	try{
		ToolRunner.run(new Configuration(), new TFIDF(), args);
	}catch(Exception e){
		e.printStackTrace();
    }
}
public static void main(String a[]){
	TFIDF.setPath("s1");
	TFIDF.start(a);
}
}