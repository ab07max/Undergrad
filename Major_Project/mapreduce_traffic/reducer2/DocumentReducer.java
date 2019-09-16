package mapreduce;
import java.util.HashMap;
import java.util.Map;
import org.apache.hadoop.io.Text;
import org.apache.hadoop.mapreduce.Reducer;
public class DocumentReducer extends Reducer<Text, Text, Text, Text> {
	protected void reduce(Text key, Iterable<Text> data, Context con){
		try{
			int document_count = 0;
			Map<String, Integer> map = new HashMap<String, Integer>();
			for (Text s1 : data){
				String[] wc = s1.toString().split("=");
				map.put(wc[0],(map.containsKey(wc[0]) ? 1 + map.get(wc[0]) : 1));
				document_count = document_count + Integer.parseInt(s1.toString().split("=")[1]);
			}
			for(String word : map.keySet()){
				Reducer2.sb.append(word+"@"+key.toString()+"\t"+map.get(word)+"/"+document_count+"\n");
				con.write(new Text(word+"@"+key.toString()),new Text(map.get(word)+"/"+document_count));
			}
		}catch(Exception e){
			e.printStackTrace();
		}
    }
}