fo = open('myfile.txt', 'r')

# read entire content of file line by line and print
while True:
    str = fo.readline()
    if not str:
        break;
    # Print the read data on monitor
    print str

# Close the file
fo.close()