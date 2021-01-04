t1 = (1, 2, 3, 4, 5, 6, 8,9, 10, 2,3,2,3)
t2 = ("abc", "def", "xyz")
t3 = ("John", "Milton", 59, "Bangalore", 560001)

print (t1[0])
print (t1[2:4])
print (t2[2])
print (t3[1:3])
print(t3[1:4])
print(t3[3:])
print(t1[0::2])
print(t1.index(3,9,14))

print(t1[2:5].count(3))