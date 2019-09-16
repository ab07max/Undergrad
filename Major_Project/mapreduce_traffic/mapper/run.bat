set classpath=lib/jfreechart-1.0.13-swt.jar;lib/jfreechart-1.0.13-experimental.jar;lib/jfreechart-1.0.13.jar;lib/jcommon-1.0.16.jar;lib/commons.jar;lib/hadoop-0.20.1-core.jar;lib/org.apache.commons.httpclient.jar;lib/org-apache-commons-logging.jar;lib/mysql-connector-java-5.1.6-bin.jar;.;
javac -d . *.java
java mapreduce.Main
pause