s1 = "welcome to python"
s2 = "welcometopython"
print (s1, " -  alphanumeric : ", s1.isalnum())
print (s2, " -  alphanumeric : ", s2.isalnum())
print (s1, " -  alphabets only : ", s1.isalnum())
print (s2, " -  alphabets only : ", s2.isalnum())
s3 ="12345678"
print (s1, " -  digits only : ", s1.isdigit())
print (s3, " -  digits only : ", s3.isdigit())
s4 = "WELCOME"
print (s2, " -  lowercase only : ", s2.islower())
print (s4, " -  uppercase only : ", s4.isupper())
s5 ="     \t"
print (s5, " -  spaces only : ", s5.isspace())
