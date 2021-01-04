class Person:
# constructor or initializer
   def __init__(self, name):
# name is data field also commonly known as instance variables
      self.name = name 

# method which returns a string
   def whoami(self):
      return "You are " + self.name

p1 = Person('tom')
print p1.whoami()
