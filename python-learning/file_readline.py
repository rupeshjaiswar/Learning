fo = open('myfile.txt', 'r')

# read entire content of file at once
str = fo.readline()

# Print the read data on monitor
print str

# Close the file
fo.close()