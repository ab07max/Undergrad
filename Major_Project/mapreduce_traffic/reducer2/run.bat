set classpath=lib/commons.jar;lib/hadoop-0.20.1-core.jar;lib/org.apache.commons.httpclient.jar;lib/org-apache-commons-logging.jar;.;
javac -d . *.java
java mapreduce.Reducer2
pause