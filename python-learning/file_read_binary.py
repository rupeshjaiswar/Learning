import pickle
#open the file for reading in Binary Mode
fo = open('pick.dat', 'rb')
#Use load method to read the data
data = pickle.load(fo)
print data
data = pickle.load(fo)
print data
data = pickle.load(fo)
print data
#close the file
fo.close()