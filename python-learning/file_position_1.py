# Open a file
fo = open("myfile.txt", "r")
str = fo.read(13);
print "Read String is : ", str
# Check current position
position = fo.tell();
print "Current file position : ", position

# Reposition pointer at the  beginning once again
position = fo.seek(-12, 2);
str = fo.read(12);
print "Again read String is : ", str
# Close the file
fo.close()