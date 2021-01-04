#Creating the Dictionary
friends = {
'tom' : '123',
'jerry' : '456'
}

print(friends)
#Accessing the Dictionary item
print(friends['tom'])

#Adding new item in the Dictionary
friends['bob'] = '789'
print(friends)

# Deleting the Dictionary items
del friends['bob']
print(friends)

#Modifying jerry contact number in the Dictionary
friends['jerry'] = '12345'
print(friends)