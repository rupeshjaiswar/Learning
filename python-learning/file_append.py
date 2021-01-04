# open file for writing
fo = open("myfile.txt", "a")
# write a line to the file  
fo.write( "this is third line\n");  
# Close the file
fo.close()

fo = open('myfile.txt', 'r')
# read entire content of file at once
str = fo.read();
# Print the read data on monitor
print(str)
# Close the file
fo.close()