package tfidf;
import java.math.BigDecimal; 
import java.text.DecimalFormat;
import java.util.HashMap;
import java.util.Map;
import org.apache.hadoop.io.Text;
import org.apache.hadoop.mapreduce.Reducer;
public class TFIDFReducer extends Reducer<Text, Text, Text, Text> {
	DecimalFormat format = new DecimalFormat("###.########");
protected void reduce(Text key, Iterable<Text> data, Context con){
	try{
		int total_document = Integer.parseInt(con.getJobName());
		int data_appears = 0;
		Map<String, String> map = new HashMap<String, String>();
		for(Text val : data){
			String df[] = val.toString().split("=");
            data_appears++;
            map.put(df[0],df[1]);
        }
		for(String doc : map.keySet()){
			String wordfreq[] = map.get(doc).split("/");
			double tf = Double.parseDouble(wordfreq[0])/Double.parseDouble(wordfreq[1]);
			double idf = (double) total_document / (double) data_appears;
			double tfidf = tf*idf;
			con.write(new Text(key+"@"+doc),new Text("("+data_appears+"/"+total_document+","+wordfreq[0]+"/"+wordfreq[1]+","+format.format(tfidf)+")"));
        }
    }catch(Exception e){
		e.printStackTrace();
    }
}
}