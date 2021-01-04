friends = {
   'tom' : '111-222-333',
   'jerry' : '666-33-111',
    'rabbit' : '800-88-1212'
    }
for key in friends:
   print(key, ":", friends[key])

print(len(friends))

print('tom' in friends)
print('tom' not in friends)

d1 = {"mike":41, "bob":3}
d2 = {"bob":3, "mike":41}
print(d1 == d2)

print(d1 != d2)
print("rabbit" in friends)
print(friends.pop("tom"))
print(friends.get("jerry"))
print(friends)