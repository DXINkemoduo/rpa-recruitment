($sec,$min,$hour,$mday,$mon,$year,$wday,$yday,$isdst) = localtime();
if($hour<12){
  print "Good morning";
}elsif($hour<18){
  print "Good afternoon";
}else{
  print "Good evening";
}