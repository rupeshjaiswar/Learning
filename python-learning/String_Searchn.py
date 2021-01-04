s = "welcome to python"
s1 = s.endswith("thon")
print "String \"welcome to python\" ends with substring \"thon\":", (s1)

s2 = s.startswith("good")
print "String \"welcome to python\" starts with substring \"good\":", (s2)

s3 =  s.find("come")
print "lowest index from where substring \"come\" starts in \"welcome to python\":",(s3)

s4 = s.find("become")
print "lowest index from where substring \"become\" starts in \"welcome to python\":", (s4)

s5 = s.rfind("o")
print "highest index from where substring \"o\" starts in \"welcome to python\":", (s5)

s6 = s.count("o")
print "Number of occurrences of substring \"o\" in \"welcome to python\":", (s6)